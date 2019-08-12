<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list() {
        dd ("Esto es un echo de la funcion listar en el controlador de Products, esta funcion deberia retornar la lista de los productos leyendo desde la tabla productos de la base de datos.");
    }
}
