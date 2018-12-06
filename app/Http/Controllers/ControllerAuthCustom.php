<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\users;
use Illuminate\Support\Facades\Hash;

class ControllerAuthCustom extends Controller
{

    public function index(Request $request){
        return view('auth.register');
    }
    
    public function register(Request $request){
        try
        {      
            $user =  new users;
            $user->name      = $request->name;
            $user->email     = $request->email;
            $user->password  = Hash::make($request->password);
            $user->no_induk  = $request->no_induk;
            $user->hak_akses = $request->jenis_anggota;   
            $user->save();

            $result = ($user == TRUE)? "S":"F";
            $message = "-";
        }
        catch(Exception $e){
            $result = "E";
            $message = $e->getMessage();
        }
            
        return response()->json(['code' => $result, 'message' =>$message] );
    }
}
