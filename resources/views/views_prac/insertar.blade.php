@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Ingresar Registro</h3></div>
                <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Campo1</th>
                        <th>Campo2</th>
                        <th>Comentarios</th>
                        <th>Acción</th>
                        <th>Acción Jquery</th>
                      </tr>
                    </thead>
                    <tbody>
                      <div class="form-group">
                      <form action="../views_prac/guardar" method="post" id="formguarda" name="formguarda">
                      <tr>
                        @csrf
                        <td><input class="form-control" type="text" name="Campo1" id="Campo1" ></td>
                        <td><input class="form-control" type="text" name="Campo2" id="Campo2" ></td>                        
                        <td><input class="form-control" type="text" name="comentarios" id="comentarios" ></td>
                        <td><button type="submit" class="btn btn-default">Insertar</button></td>
                        <td><input type="button" value="Insertar Jquery" class="btn btn-primary" onclick="guardar();"/></td>
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