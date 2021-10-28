<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class PageController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','DESC')->get();
        return view('index',compact('products'));
    }
    public function order(){
        return view('order');
    }
}
