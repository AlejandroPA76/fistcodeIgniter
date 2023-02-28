<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $h = 'holaaa';
        return view('welcome_message',compact('h'));
    }
}
