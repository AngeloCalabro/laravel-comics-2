<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function characters(){
        return view('characters');
    }
    public function movies(){
        return view('characters');
    }public function tv(){
        return view('characters');
    }
    public function games(){
        return view('characters');
    }
    public function collectibles(){
        return view('characters');
    }
    public function videos(){
        return view('characters');
    }
    public function fans(){
        return view('characters');
    }
    public function news(){
        return view('characters');
    }
    public function shop(){
        return view('characters');
    }
}
