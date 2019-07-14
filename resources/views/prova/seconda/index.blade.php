@extends('layouts.base')

@section('content')


<div class="container">
  <strong>Ciao {{ $classe }}</strong>
</div>

<ul>
  @foreach ($nomi as $nome)
  <li> {{ $nome }}</li>
  @endforeach
</ul>

@endsection
