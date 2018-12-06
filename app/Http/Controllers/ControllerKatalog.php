<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_materi;
use auth;
class ControllerKatalog extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.katalog.main');
    }

    public function getall_materi(){
        $m_materi = m_materi::where('status','active')->get();
        return response()->json($m_materi);
    }

    public function detail_katalog(){  
        return view('backend.katalog.detail');
    }
}
