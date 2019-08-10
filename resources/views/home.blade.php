@extends('layouts.master')
@section('content')
<!---<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->
<div class="main">
<section>
  <article>
    <p>Articulos Destacados</p>
  </article>
<section class="articulos">
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 1</p>
    <p class="precio">$$$</p>
  </article>
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 2</p>
    <p class="precio">$$$</p>
  </article>
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 3</p>
    <p class="precio">$$$</p>
  </article>
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 4</p>
    <p class="precio">$$$</p>
  </article>
</section>
</section>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
M.AutoInit();
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.parallax');
  var instances = M.Parallax.init(elems, options);
});
</script>
<!--<script>$(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 30){
            $('.fixed-top').css('background', 'transparent');
            } else{
            $('.fixed-top').css('background', 'rgba(250, 229, 211, 0.9)');
            }
    });</script>-->
  </body>
</html>
@endsection