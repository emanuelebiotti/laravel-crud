<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

  public function index() {
    $products = Product::where('price', '>', 1)->orderBy('price', 'desc')->get();
    $data = [
      'products'=>$products
    ];
    return view('prodotti', $data);
  }

  public function insert() {
    $new_product = new Product;
    $new_product->name = 'nastro adesivo';
    $new_product->price = 3.00;
    $new_product->save();
  }

}
