<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\users;
use App\m_materi_comment;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use auth;
use Exception;
class ControllerKomentar extends Controller
{

    public function post_komentar(Request $request){
      
        try{
            $m_materi_comment = new m_materi_comment;
            $m_materi_comment->id_target_comment = 0;
            $m_materi_comment->messagae = $request->txt_komentar;
            $m_materi_comment->created_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
            $m_materi_comment->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
            $m_materi_comment->created_by = Auth::user()->id;
            $m_materi_comment->updated_by = "";
            $m_materi_comment->id_materi  = $request->id_materi;
            $m_materi_comment->save();
            
            $result = ($m_materi_comment == TRUE)? "S":"F";
            $message = "-";
        }
        catch(Exception $e){
            $result = "E";
            $message = $e->getMessage();
        }
        return response()->json(['code' => $result, 'message' =>$message] );
    }

    public function get_all_komentar(Request $request){
        $m_materi_comment = m_materi_comment::where('id_materi', $request->id_materi)->with('User')->get();
        return response()->json($m_materi_comment);
    }
    
    

}
