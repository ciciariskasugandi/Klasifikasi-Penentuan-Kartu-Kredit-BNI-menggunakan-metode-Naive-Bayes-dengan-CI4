<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function __conststruct()
    {
        
        $this->login = new AuthModel();
    }
    public function index()
    {
    return view('login');
    }
    public function proses()
    {
    $username=$this->request->getPost('username');
    $password=$this->request->getPost('password');

    $cekdata=$this->Login->ceklogin($username, $password)->getRow();
    if($cekdata){
        $session_data= session()->set([
            'username'=>$cekdata->username,
            'nama'=>$cekdata->nama,
          
        ]);
        //jika berhasil maka akan diarahkn ke halamana utama/dashboard
        return redirect()->to('admin')->with('pesan', 'Berhasil Login');
    }else{
        return redirect()->to('login')->with('pesan', 'Gagal Login');

    }
    }
}

