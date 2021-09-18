<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products  = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('product', compact('products'));
    }
}
