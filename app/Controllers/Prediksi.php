<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PrediksiModel;

class Prediksi extends BaseController
{
    public function index()
    {
        //view prediksi/index.php

        //mengambil data dari database
        $prediksi=new PrediksiModel();
        $data['prediksis']=$prediksi->findAll();
        return view('prediksi/index',$data);
    }
    public function create(){
        helper('form');
        return view('prediksi/create');
    }
    public function store(){
        //proses simpan data
        $rule=[
            'prediksi_nama'=>'required|min_length[3]|max_length[255]',
            'prediksi_jenis_kelamin'=>'required|min_length[3]|max_length[255]',
            'prediksi_status_rumah'=>'required|min_length[3]|max_length[255]',
            'prediksi_status'=>'required|min_length[3]|max_length[255]',
            'prediksi_jumlah_tanggungan'=>'required|integer',
            'prediksi_profesi'=>'required|min_length[3]|max_length[255]',
            'prediksi_penghasilan_pertahun'=>'required|min_length[3]|max_length[255]',
            'prediksi_kartu_kredit'=>'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if(!$this->validate($rule)){
            session()->setFlashdata('error','Data tidak valid');
            return redirect()->route('admin/prediksi');
        }

        //jika data valid di simpan ke database
        $data=$this->request->getPost();
        $prediksi=new PrediksiModel();
        $prediksi->insert($data);
        //redirect ke halaman admin/prediksi
        session()->setFlashdata('success','Data berhasil ditambahkan');
        return redirect()->route('admin/prediksi');
    }

    public function edit($id){
        helper('form');
        $prediksi=new PrediksiModel();
        $data['prediksi']=$prediksi->find($id);
        return view('prediksi/edit',$data);
    }
    public function update(){
        $rule=[
            'prediksi_nama'=>'required|min_length[3]|max_length[255]',
            'prediksi_jenis_kelamin'=>'required|min_length[3]|max_length[255]',
            'prediksi_status_rumah'=>'required|min_length[3]|max_length[255]',
            'prediksi_status'=>'required|min_length[3]|max_length[255]',
            'prediksi_jumlah_tanggungan'=>'required|integer',
            'prediksi_profesi'=>'required|min_length[3]|max_length[255]',
            'prediksi_penghasilan_pertahun'=>'required|min_length[3]|max_length[255]',
            'prediksi_kartu_kredit'=>'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if(!$this->validate($rule)){
            session()->setFlashdata('error','Data tidak valid');
            return redirect()->route('admin/prediksi');
        }

        //jika data valid di simpan ke database
        $data=$this->request->getPost();
        $prediksi=new prediksiModel();
        $prediksi->update($this->request->getPost('prediksi_id'),$data);
        //redirect ke halaman admin/prediksi
        session()->setFlashdata('success','Data berhasil diedit');
        return redirect()->route('admin/prediksi');
    }
    public function delete($id){
        $prediksi = new PrediksiModel();
        $prediksi->delete($id);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('/admin/prediksi'));
    }
    public function find($id){}

}
