<?php

namespace laraland\Http\Controllers;

use Illuminate\Http\Request;
use laraland\Http\Requests;
use laraland\Models\Product;

class ProductController extends Controller{

  public function index(){
    $products = Product::paginate(10);
    return view('product.index', ['products' => $products]);
  }

}
