@extends('layouts.app')


@section('content')

<h1 class="text-center">Crea una nueva Noticia</h1>

<!-- Call to Action -->
<section class="contenedor-contacto content-section text-white" id="contacto">
    <div class="contenedor container text-center">
      <form
      action="{{route('noticia.store')}}"
      enctype="multipart/form-data"
      method="POST">

      @csrf

        <div class="form-group">
          <label for="titulo">Titulo Noticia</label>
          <input type="titulo" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción de la Noticia</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="imagen">Subir Imagen</label>
            <input type="file" name="imagen" class="form-control">
        </div>

        <button type="submit" class="btn btn-outline-dark boton-enviar mt-3">Enviar</button>
      </form>
    </div>
  </section>

@endsection
