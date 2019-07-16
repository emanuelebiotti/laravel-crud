<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function index()
    {
      $all_books = Book::all();
      return view('books.books', compact('all_books'));
    }

    public function create()
    {
        return view('books.create');
    }


    public function store(Request $request)
    {
        $dati = $request->all();
        $new_book = new Book();
        $new_book->titolo = $dati['titolo'];
        $new_book->autore = $dati['autore'];
        $new_book->prezzo = $dati['prezzo'];
        $new_book->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
