@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Actualizar Registros</h3></div>
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
                      <div class="form-group">
                      <form action="" name="formactualiza">
                      <tr>
                        <td><input class="form-control" type="text" name="id_update" id="id_update" value="{{$id}}" ></td>
                        <td><input class="form-control" type="text" name="campo1_update" id="campo1_update" value="{{$campo1}}" ></td>
                        <td><input class="form-control" type="text" name="campo2_update" id="campo2_update" value="{{$campo2}}" ></td>              
                        <td><input class="form-control" type="text" name="comentarios_update" id="comentarios_update" value="{{$comentarios}}" ></td>
                        <td><input type="button" value="Actualizar Jquery" class="btn btn-primary" onclick="actualiza();"/></td>
                      </tr>
                      </form>
                      </div>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{!! asset('js/javascript.js') !!}"></script>
@endsection