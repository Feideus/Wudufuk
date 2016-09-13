<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\Input;

class welcomeController extends Controller
{
    public function index()
    {
        return view('Wudufuk/welcome');
    }

    public function connectionCheck()
    {
        $name = htmlentities($_POST["pseudo"]);
        $password = htmlentities($_POST["password"]);
        
        $data = ['pseudonyme' => $name, 'password' => $password];

        if(User::where($data)->exists())
            {
                return view('Wudufuk/mainscreen');
            }
        else
            {
                return view('errors/connectionError');
            }
    }
}
