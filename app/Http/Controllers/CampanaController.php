<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campana;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CampanaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('campanas/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campanas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campana = new Campana();
        $campana->admin_id = Auth::user()->id;
        $campana->team_id = Auth::user()->currentTeam->id;
        $campana->nombre = $request->get('txtNombre');
        $campana->target = $request->get('txtTarget');
        $campana->fecha_inicio = $request->get("txtFechaInicio");
        $campana->comentarios = $request->get("txtComentarios");
        $campana->moneda = $request->get("txtMoneda");
        $campana->presupuesto_inicial = $request->get("txtPresupuestoInicial");
        $campana->save();
        return Redirect::to('campanas');


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
