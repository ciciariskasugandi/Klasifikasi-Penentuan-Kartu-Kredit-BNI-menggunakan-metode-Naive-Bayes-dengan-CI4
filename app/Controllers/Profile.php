<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model;
class Profile extends BaseController
{
    public function index()
    {
        return view('profile/index');
    }
    
}
