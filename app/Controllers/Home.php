<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function info(){
    return "My Info...";
    }
    public function Cici (){
    return "Nama Depan Cici... ";
    }
    
}