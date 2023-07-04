<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function loginshow(Request $req){
        $data= $req->input('name'); 
        $req->session()->put('user' , '$data');
        echo session('name');


    }
}
