<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function cart()
    {
        return view('cart');
    }
    
    public function product()
    {
        return view('product');
    }
}
