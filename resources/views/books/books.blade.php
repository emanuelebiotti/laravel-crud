@extends('layouts.base')

@section('content')

  <h1 class="">Tutti i libri</h1>
  <a href="{{ route('books.create')}}" class="btn btn-primary">Aggiungi nuovo</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Libro</th>
        <th scope="col">Autore</th>
        <th scope="col">Prezzo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_books as $book)
      <tr>
        <td>{{ $book->titolo }}</td>
        <td>
          @if ($book->autore)
          {{ $book->autore }}
          @else
          -
          @endif
        </td>
        <td>{{ $book->prezzo }}</td>
      </tr>
        @endforeach
    </tbody>
  </table>


@endsection
