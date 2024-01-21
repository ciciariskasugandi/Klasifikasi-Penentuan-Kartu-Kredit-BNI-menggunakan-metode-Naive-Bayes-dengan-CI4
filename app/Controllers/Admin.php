<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function login()
    {
        //tampilkan halaman login
        return view('proses/login');
        
        
    }
    public function index()
    {
        //tampilkan halaman admin
        return view('admin/index');
        
        
    }

    public function training()
    {
        //tampilkan halaman training
        return view('admin/training/index');
    }
    public function testing()
    {
        //tampilkan halaman testing
        return view('admin/testing/index');
    } 
    public function prediksi()
    {
        //tampilkan halaman prediksi
        return view('admin/prediksi/index');
    } 
    public function pengujian()
    {
        //tampilkan halaman pengujian
        return view('admin/pengujian/index');
    }  
    public function profile()
    {
        //tampilkan halaman profile
        return view('admin/profile/index');
    } 
    
}
