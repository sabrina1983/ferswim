<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqController extends Controller
{
    public function list() {
        dd("Esto es un echo de la funcion listar en el controlador de faq (para que el administrador pueda editar la lista), esta funcion deberia retornar la lista de las preguntas y respuestas leyendo desde la tabla faq de la base de datos.");
    }
}
