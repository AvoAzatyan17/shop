<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Auth;
use Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = new Order();
            $data->user_id   = Auth::user()->id;
            $data->total_sum = $request->total_sum;
            $data->products  = $request->arrayProduct;
            $data->save();
            return redirect()->back()->with('message', 'Your order is send.Thanks!');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function index()
    {
        return view('cart');
    }
}
