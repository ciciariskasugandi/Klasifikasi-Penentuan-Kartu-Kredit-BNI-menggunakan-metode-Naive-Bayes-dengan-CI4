<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Post extends BaseController
{
    public function index()
    {
        //tampilkan file index
        $data["Biodata"]="STMIK Royal";

        //Menampilkan lebih dari 1 data
        $data=[
            'nama'=>'Cici',
            'nim'=>'21220478',
            'alamat'=>'Kisaran',
            'hp'=>'082251497152',
            'email'=>'cici@gmail.com',
        ];

        return view('post/index');
    }
    
    //method post dengan 1 parameter lokal
    public function post($id,$title){
        return "ID Postingan Adalah $id, $title";
    }

    //method 
    public function product($cart_id,$product_id){
        return "Product on $product_id, on Cart $cart_id";
    }
}
