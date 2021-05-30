@extends('layouts.app')

@section('content')
<?php
//***************************GUARDAR EN LA BD***********************
$Campo1      = $_POST['Campo1'];
$Campo2      = $_POST['Campo2'];
$comentarios = $_POST['comentarios'];
           
DB::table('tabla_maestro')->insert(
        array('campo1'      => $Campo1,
              'campo2'      => $Campo2,
              'comentarios' => $comentarios,
              )
);
//***************************FIN DE GUARDAR*************************
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Resultado</h3></div>
                <div class="panel-body">
                <label>PÁGINA GUARDADA</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection