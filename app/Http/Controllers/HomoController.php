<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCOntroller extends Controller
{
    public function index() {
        return view('halaman-1');
    }
}