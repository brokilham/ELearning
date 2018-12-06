<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_materi;
use App\m_materi_file_pendukung;
use auth;
use DataTables;
use Exception;
use Carbon\Carbon;
use Storage;
class ControllerMasterMateri extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.master_materi.main');
    }

    public function getall_master_materi(){
        $m_materi = m_materi::where('created_by', Auth::user()->id)->where('status','active')->get();
        return DataTables::of($m_materi)->make(true);
    }

    public function create(Request $request){
        try
        {      
           
            //$path = $request->file('txt_file_1')->store('public/file');
            //$file = $request->file('txt_file_1');
            //$path = $file->storeAs('public/file', "tes".".".$file->getClientOriginalExtension());
           
            $m_materi = new m_materi;
            $m_materi->name        = $request->txt_nama;
            $m_materi->description = $request->txt_deskripsi;
            $m_materi->duration    = $request->txt_durasi;
            $m_materi->created_at  = Carbon::now('Asia/Jakarta')->toDateTimeString();
            $m_materi->updated_at  = Carbon::now('Asia/Jakarta')->toDateTimeString();
            $m_materi->created_by  = Auth::user()->id;
            $m_materi->updated_by  =  "";
            $m_materi->status      =  "active";
            $m_materi->save();

            
             

          
            $jum_file = $request->txt_jum_file_pendukung;
            for ($i = 1; $i <= $jum_file; $i++) {

                $m_materi_file_pendukung = new m_materi_file_pendukung;
                $file = $request->file('txt_file_'.$i);
                $name_file = $request->txt_nama;
                $name_file_custom = $name_file.$i.".".$file->getClientOriginalExtension();
                $path = $file->storeAs('public/file', $name_file_custom);
            
                $m_materi_file_pendukung->id_materi = $m_materi->id;
                $m_materi_file_pendukung->name = $name_file_custom;
                $m_materi_file_pendukung->created_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
                $m_materi_file_pendukung->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
                $m_materi_file_pendukung->created_by = Auth::user()->id;;
                $m_materi_file_pendukung->updated_by = "";
                $m_materi_file_pendukung->type_file = $file->getClientOriginalExtension();
                $m_materi_file_pendukung->save();
                
            
            }

            $result = ($m_materi == TRUE)? "S":"F";
            $message = $path;//"-";
        }
        catch(Exception $e){
            $result = "E";
            $message = $e->getMessage();
        }
            
        return response()->json(['code' => $result, 'message' =>$message] );
    }


    public function update(Request $request){
        return response()->json(['code' => $request, 'message' =>$request] );
    }

    public function delete(Request $request){
        try{
           
            $return =   m_materi::where('id', $request->id)->update(
                ['status' => 'non_active']);
            $result = ($return == 1)? "S":"F";
            $message = "-";
        }
        catch(Exception $e){
            $result = "E";
            $message = $e->getMessage();
        }
  
        return response()->json(['code' =>  $result, 'message' =>$message] );
    }

    public function detail_master_materi(Request $request){
        return view('backend.master_materi.detail')->with('datas',[$request->id_materi]);
    }

    public function download_file(Request $request){
        return Storage::download('file/file.jpg');
    }
}
