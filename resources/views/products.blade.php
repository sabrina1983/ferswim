@extends('layouts/master')
@section('content')
<h3>Listado de productos</h3>
    <ul>
        @forelse ($products as $product)
        <li>
            {{$product->name}}
        </li>
        <li>
            {{$product->unit_price}}
        </li>
        @empty
        <p>No hay preguntas para mostrar</p>    
        @endforelse
    </ul>
    {{$products->links()}};
@endsection