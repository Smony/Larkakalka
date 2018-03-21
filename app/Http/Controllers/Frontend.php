<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function __construct()
    {
       try {
            DB::connection()->getPdo();
        } catch (\Exception $e){
            return abort(404);
        }

    }

    public function index()
    {
        return view('frontend.index');
    }

}
