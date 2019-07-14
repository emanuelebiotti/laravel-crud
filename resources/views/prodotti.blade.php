@forelse($products as $product)
  id: {{ $product->id }}
  nome: {{ $product->name }}
  descrizione: {{ $product->description}}
  prezzo: {{ $product->price}}
  <br>
  @empty
  <p>non ci sono prodotti</p>
@endforelse
