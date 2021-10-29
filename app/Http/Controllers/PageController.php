<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Auth;

class PageController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','DESC')->get();
        return view('index',compact('products'));
    }
    public function order(){
        $items = Order::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('order',compact('items'));
    }
}
