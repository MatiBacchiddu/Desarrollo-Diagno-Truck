@extends('layouts.app')


@section('content')

<h1 class="text-center">Todas las noticias</h1>

@if(count($noticias) <= 0)
    <h2 class="text-center mt-4">No hay noticias</h2>

@else

<table class="table contenedor-consultas">
    <thead>
      <tr>
        <th scope="col">Titulo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>

    @foreach($noticias as $noticia)
      <tr>
        <td>{{$noticia->titulo}}</td>
        <td>{{$noticia->descripcion}}</td>
        <td>{{$noticia->imagen}}</td>
        <td>
            <form action="{{route('noticia.destroy', ['noticia' => $noticia->id])}}" method="POST">
                @csrf
                @method('DELETE')
            <input type="submit" class="btn btn-danger d-block w-100 mb-2" value="Eliminar &times;">
            </form>
        </td>
      </tr>
    @endforeach

    </tbody>
  </table>

@endif

@endsection
