<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class productController extends Controller
{
    function index(){
        
        $product = product::all();
        return view('product',['products'=>$product]);
    }
}
