<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index(){
    $products = Product::all();
    $title="Chào mừng đến với sản phẩm !";
    return view('products.index',compact('products'));
}
}
