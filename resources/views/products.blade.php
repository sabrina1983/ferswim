@extends('layouts/master')
@section('content')
<div class="productList">
<h3 class="display-4">Listado de productos</h3>
    <ul class="list-group">
        @forelse ($products as $product)
        <li class="list-group-item">
            {{$product->name}}
        </li>
        <li class="list-group-item">
            {{$product->unit_price}}
        </li>
        @empty
        <p>No hay preguntas para mostrar</p>    
        @endforelse
    </ul>
</div>
    {{$products->links()}};
@endsection