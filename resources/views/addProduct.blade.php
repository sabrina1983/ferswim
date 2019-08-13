@extends('layouts.master')
@section('content')
    <form class="" action="/addProduct" method="POST">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="">
        </div>
        <div>
            <label for="unit_price">Precio de venta</label>
            <input type="text" name="unit_price" value="">
        </div>
        <div>
            <label for="unit_cost">Precio de costo</label>
            <input type="text" name="unit_cost" value="">
        </div>
        <div>
            <label for="category_id">Categoria</label>
            <input type="text" name="category_id" value="">
        </div>
        <div>
            <label for="description">Descripcion</label>
            <input type="text" name="description" value="">
        </div>
        <div>
            <input type="submit" name="" value="Agregar producto">
        </div>
    </form>
@endsection