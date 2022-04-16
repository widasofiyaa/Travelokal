<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function explore (){
        return view("explore");
    }
    public function index (){
        return view("index");
    }
}
