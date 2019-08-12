<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preguntasController extends Controller
{
    public function list() {
        dd("Esto es un echo de la funcion listar en el controlador de Preguntas, esta funcion deberia retornar la lista de los preguntas y respuestas leyendo desde la tabla faq de la base de datos.");
    }
}
