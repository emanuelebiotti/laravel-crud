@extends('layouts.base')

@section('content')
  <h1>Tutti i libri</h1>

  @foreach ($all_books as $book)
  {{ $book->titolo }} di {{ $book->autore}} <br>
  @endforeach

@endsection
