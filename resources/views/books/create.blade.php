@extends('layouts.base')

@section('content')
<h1 class="">Inserisci un nuovo libro</h1>
<form method="post" action=" {{ route('books.store') }}">
  @csrf
  <div class="form-group">
    <label for="titolo">Titolo libro</label>
    <input type="text" class="form-control" name="titolo" placeholder="Inserisci il titolo del libro">
  </div>
  <div class="form-group">
    <label for="autore">Autore</label>
    <input type="text" class="form-control" name="autore" placeholder="Inserisci l'autore">
  </div>
  <div class="form-group">
    <label for="prezzo">Prezzo</label>
    <input type="text" class="form-control" name="prezzo" placeholder="Inserisci il prezzo">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

@section('titolo_pagina', 'funzione create')
