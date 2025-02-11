<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home()
    {
        return view('products.home');
    }
    public function eletro(){
        return view('products.eletro');
    }
}
