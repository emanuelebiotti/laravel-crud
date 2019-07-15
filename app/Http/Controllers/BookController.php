<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
  public function libri() {
    $all_books = Book::all();
    return view('libri', compact('all_books'));
  }
}
