<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mainscreenController extends Controller
{
    public function index()
    {
        return view('Wudufuk/mainscreen');
    }
}
