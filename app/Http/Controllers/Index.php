<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function __construct()
    {

    }

    public function index(){

       $name = 'Владимир';

        return view('welcome')->with(compact('name'));
    }
}
