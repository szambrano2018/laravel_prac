<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class practicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //********************************EJECUTAR EL QUERY PARA BUSCAR LA INFORMACION EN LA BD*****************
        $listaDB = DB::table('tabla_maestro')
                   ->select('id_maestro','campo1', 'campo2', 'comentarios')
                   ->get();
        //********************************MOSTRAR LA VISTA CON LA INFORMACION DE LA BD**************************
        return view('views_prac/test',compact('listaDB'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('views_prac/insertar');
    }
    
    public function guardar()
    {
        return view('views_prac/guardar_registro');
    }
 
    public function guardarjquery(Request $request)
    {
         $campo1      = $request->input('data.0');
         $campo2      = $request->input('data.1');
         $comentarios = $request->input('data.2');

           DB::table('tabla_maestro')->insert(
                    array('campo1'      => $campo1,
                          'campo2'      => $campo2,
                          'comentarios' => $comentarios,
                    )
            ); 
    }

    public function formactualiza ($id)
    {
        //*******************************************BUSCAR EL REGISTRO EN LA BD***************************
        $registrotmp = DB::table('tabla_maestro')
                     ->select('id_maestro','campo1', 'campo2', 'comentarios')
                     ->where('id_maestro', '=', $id)
                     ->get();
        foreach ($registrotmp as $registrotmp1) {
                 $campo1      = $registrotmp1->campo1;
                 $campo2      = $registrotmp1->campo2;
                 $comentarios = $registrotmp1->comentarios;
        }
        //******************************************LLAMAR A LA VISTA CON EL REGISTRO A MODIFICAR**********
        return view('views_prac/form_update',compact('id','campo1','campo2','comentarios'));
    }

    public function actualizaractualjquery(Request $request)
    {
         $id          = $request->input('data.0');
         $campo1      = $request->input('data.1');
         $campo2      = $request->input('data.2');
         $comentarios = $request->input('data.3');

         DB::table('tabla_maestro')
                  ->where('id_maestro', $id)
                  ->update(array('campo1'      => $campo1,
                                 'campo2'      => $campo2,
                                 'comentarios' => $comentarios,
                  )
         );
    }

//**************************************************FIN DEL COMNTROLADOR************************************
}
