<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveController extends Controller
{

    public function index(Request $request)
    {

        return view('index');
    }

    public function show(Request $request)
    {

    }



}
