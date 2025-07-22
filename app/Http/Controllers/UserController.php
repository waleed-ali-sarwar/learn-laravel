<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // index view page 
    public function index()
    {
        return "<h1>Welcome to Controller Video - 13 by Yahubaba</h1>";
    }
    public function welcome()
    {
        return view('user.index');
    }
    public function getUser(string $id)
    {
        return view('user.index', ['id' => $id]);
    }
    public function blog(){
        return view('user.blog');
    }
}
