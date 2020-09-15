<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ATGcontroller extends Controller
{
    public function addhome(){
        return view('homepage');
    }
    public function addvillagehome(){
        return view('villagehome');
    }
}
