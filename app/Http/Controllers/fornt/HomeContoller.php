<?php

namespace App\Http\Controllers\fornt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function index(){
        return view('forntend.index');
    }
    public function pricing(){
        return view('forntend.pricing');
    }
    public function contact(){
        return view('forntend.contact');
    }
}
