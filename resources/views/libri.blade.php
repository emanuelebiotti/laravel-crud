@extends('layouts.base')

@section('content')
  <h1>Tutti i libri</h1>



  <table class="table">
    <thead>
      <tr>
        <th scope="col">Libro</th>
        <th scope="col">Autore</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_books as $book)
      <tr>
        <td>{{ $book->titolo }}</td>
        <td>{{ $book->autore}}</td>
      </tr>
        @endforeach
    </tbody>
  </table>



@endsection
