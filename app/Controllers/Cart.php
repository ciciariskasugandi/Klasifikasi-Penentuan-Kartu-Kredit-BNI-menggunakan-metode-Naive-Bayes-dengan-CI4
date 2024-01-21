<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cart extends BaseController
{
    public function index()
    {
    

        return view('cart/index');
    
    
    }

    //method comment
    public function product($cart_id,$product_id){
        return "Product on $product_id, on Cart $cart_id";
    }
}

 

