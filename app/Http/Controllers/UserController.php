<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $data = [
            'users' => ["Ayat", "Jorn", "Cihan", "Lars", "David"]
        ];


        return view("users.index", $data);
    }

    public function store()
    {
        
    }
}
