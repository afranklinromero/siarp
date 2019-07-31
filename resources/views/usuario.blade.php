@extends('layout')
@section('content')
<div class="container">
    <form class="navbar pull-right" role="search">
            {{ $person->links() }}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>

    <button type="submit" class="btn btn-default">Buscar </button>
    </form>
        
    
    <table class="table table-striped">
    
   
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CI</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Fecha_Creado</th>
        <th scope="col">Opciones</th>
      </tr>
    
    @foreach($person as $person)
    
      <tr>
        <td scope="row">{{$person->id}}</th>
        <td>{{$person->ci}}</td>
        <td>{{$person->nombres}}</td>
        <td>{{$person->apellidos}}</td>
        <td>{{$person->created_at}}</td>
        <td><a href="" class="btn btn-success"> Editar</a>
            <a href="" class="btn btn-danger"> Eliminar</a>
        </td>

      </tr>
     
      @endforeach
  </table>
 

</div>
        
   


@stop
    
