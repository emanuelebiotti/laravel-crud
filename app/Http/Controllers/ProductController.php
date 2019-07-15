<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function prodotti() {
      $tutti_i_products = Product::where('id', '1')->get();
      return view('tutti', compact('tutti_i_products'));
    }

}
