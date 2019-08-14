@extends('layouts/master')
@section('content')
<div class="container">
    <div class="">
      <h1>Preguntas frecuentes</h1>
    </div>
    <div class="">
      <p><a href="addQuestion"><i class="fas fa-plus-circle">Agregar pregunta</i></a></p>
  </div>
      <div class="">
        <table class="table table-borderless table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pregunta</th>
              <th scope="col">Mostrar</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($preguntas as $key => $value):?>
                <tr>

                  <th scope="row"><?= $value["id"] ?></th>
                  <td><?=$value["question"];?></td>
                  <td><a href="detallePregunta.php?id=<?=$value['id'];?>">
                        <i class="fas fa-eye"></i>
                      </a>
                  </td>
                  <td><a href="modificarPregunta.php?id=<?=$value['id'];?>">
                        <i class="fas fa-edit"></i>
                      </a>
                  </td>
                  <td><a href="eliminarPregunta.php?id=<?=$value['id'];?>">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                  </td>

                </tr>
              <?php endforeach;?>
          </tbody>
      </div>
  </div>
  @endsection