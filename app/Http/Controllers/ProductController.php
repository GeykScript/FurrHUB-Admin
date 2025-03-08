<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct()
    {
        return view('Product.view-product');
    }
}
