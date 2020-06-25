<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveController extends Controller
{

    public function index(Request $request)
    {
        $live_schedule = $items_data;


        return view('index', compact('live_schedule'));
    }

    public function show(Request $request)
    {

    }



}
