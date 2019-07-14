<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodotto;

class ProductController extends Controller
{

  public function index() {
    $products = Prodotto::orderBy('price', 'desc')->get();
    $data = [
      'products'=>$products
    ];
    return view('prodotti', $data);
  }

}
