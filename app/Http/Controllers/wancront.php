<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wancront extends Controller
{
    public function index() {
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function signin() {
        return view('signin', [
            "title" => "Masuk"
        ]);
    }

    public function about() {
        return view('about', [
            "title" => "About"
        ]);
    }
}
