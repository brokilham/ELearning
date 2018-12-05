<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_materi;
use auth;
use DataTables;
use Exception;
use Carbon\Carbon;
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
            $result = ($m_materi == TRUE)? "S":"F";
            $message = "-";
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
}
