@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Listado General</h3></div>
                <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Campo1</th>
                        <th>Campo2</th>
                        <th>Comentarios</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($listaDB as $listaDB1) 
                        <td>{{$listaDB1->id_maestro}}</td>
                        <td>{{$listaDB1->campo1}}</td>
                        <td>{{$listaDB1->campo2}}</td>                        
                        <td>{{$listaDB1->comentarios}}</td>
                        <td><a href="{{ asset('views_prac/formactualiza') }}/{{$listaDB1->id_maestro}}"><i class="fa fa-dashboard fa-fw"></i> Actualizar</a></td>
                      </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</inicio-component>
@endsection