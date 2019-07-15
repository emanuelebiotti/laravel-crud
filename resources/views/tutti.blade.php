@extends('layouts.base')

@section('content')
  <h1>Tutti i prodotti</h1>

  @foreach ($tutti_i_products as $product)
  {{ $product->name }}
  @endforeach

@endsection
