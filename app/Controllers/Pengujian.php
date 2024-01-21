<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pengujian extends BaseController
{
    public function pengujian()
    {
        return view('pengujian/index');
    }
}
