<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }


    public function about(){
        $data = 'Eko Hendratno';
        return view('about',compact('data'));
    }
}
