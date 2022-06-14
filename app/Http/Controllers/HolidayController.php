<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $packs = config('db.holiday');


        return view('holiday', compact('packs'));
    }
    
}
