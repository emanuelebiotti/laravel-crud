@foreach($products as $product)
  nome: {{ $product->name }}
  descrizione: {{ $product->description}}
  prezzo: {{ $product->price}}
  <br>
@endforeach
