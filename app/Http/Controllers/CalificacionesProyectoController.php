<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class CalificacionesProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //Se va a realizar una consulta  promover el proyecto
      
        $CalificacionesProyectos= DB::table('revision')
            ->join('anteproyecto', 'revision.idAnteproyecto', '=', 'anteproyecto.idAnteProyecto')
            ->join('asesor', 'revision.claveAsesor', '=', 'asesor.claveAsesor')
            ->select('anteproyecto.idAnteProyecto','anteproyecto.tituloProyecto' ,'revision.calificacionAnteproyecto','asesor.nombreAsesor')
            ->where('anteproyecto.idAnteProyecto',$id)
            ->get();
            return  view('CalificacionesProyectos',compact('CalificacionesProyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
