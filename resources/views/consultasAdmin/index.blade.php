@extends('layouts.app')


@section('content')

<h1 class="text-center">Todas las consultas</h1>

@if(count($consultas) <= 0)
    <h2 class="text-center mt-4">No hay consultas</h2>

@else

<table class="table contenedor-consultas">
    <thead>
      <tr>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Empresa</th>
        <th scope="col">Consulta</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>

        @foreach($consultas as $consulta)
        <tr>
          <td>{{$consulta->email}}</td>
          <td>{{$consulta->tel}}</td>
          <td>{{$consulta->empresa}}</td>
          <td>{{$consulta->consulta}}</td>
          <td>
              <form action="{{route('consulta.destroy', ['consulta' => $consulta->id])}}" method="POST">
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
