<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function index(){
        return view('petugas.home');
    }
}
