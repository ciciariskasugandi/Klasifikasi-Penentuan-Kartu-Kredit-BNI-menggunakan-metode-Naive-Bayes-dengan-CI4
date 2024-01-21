<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        //view product/index.php

        //mengambil data dari database
        $product=new ProductModel();
        $data['products']=$product->findAll();
        return view('product/index',$data);
    }
    public function create(){
        helper('form');
        return view('product/create');
    }
    public function store(){
        //proses simpan data
        $rule=[
            'product_name'=>'required|min_length[3]|max_length[255]',
            'product_stock'=>'required|integer',
            'product_description'=>'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if(!$this->validate($rule)){
            session()->setFlashdata('error','Data tidak valid');
            return redirect()->route('admin/product');
        }

        //jika data valid di simpan ke database
        $data=$this->request->getPost();
        $product=new ProductModel();
        $product->insert($data);
        //redirect ke halaman admin/product
        session()->setFlashdata('success','Produk berhasil ditambahkan');
        return redirect()->route('admin/product');
    }

    public function edit($id){
        helper('form');
        $product=new ProductModel();
        $data['product']=$product->find($id);
        return view('product/edit',$data);
    }
    public function update(){
        $rule=[
            'product_name'=>'required|min_length[3]|max_length[255]',
            'product_stock'=>'required|integer',
            'product_description'=>'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if(!$this->validate($rule)){
            session()->setFlashdata('error','Data tidak valid');
            return redirect()->route('admin/product');
        }

        //jika data valid di simpan ke database
        $data=$this->request->getPost();
        $product=new ProductModel();
        $product->update($this->request->getPost('product_id'),$data);
        //redirect ke halaman admin/product
        session()->setFlashdata('success','Produk berhasil diedit');
        return redirect()->route('admin/product');
    }
    public function delete($id){
        $product = new ProductModel();
        $product->delete($id);
        session()->setFlashdata('success','Data Berhasil Dihapus');
        return redirect()->to(base_url('/admin/product'));
    }
    public function find($id){}

}
