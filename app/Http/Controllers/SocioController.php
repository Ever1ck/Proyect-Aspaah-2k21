<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;
use App\Models\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $socios = Socio::all();
        return view('socios.list', compact( 'socios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //    
        $personas = Persona::all();
        $departamentos = Departamento::all();
        return view('socios.create', compact('personas', 'departamentos'));
    }


    public function provinciasByDep($id){
    	return Provincia::where('departamento_id','=',$id)->get();
    }

    public function distritosByProv($id){
    	return Distrito::where('provincia_id','=',$id)->get();
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
        $request->validate([
            'personas_id' => 'required',
            'codigo' => 'required',
            'tipo' => 'required',
            'categoria' => 'required',
            'es_socio' => 'required',
            'comunidad' => 'required',
            'distrito_id' => 'required',
            'provincia_id' => 'required',
            'departamento_id' => 'required',
        ]);

        $socio = new Socio();
        $socio->personas_id = $request->get('personas_id');
        $socio->codigo = $request->get('codigo');
        $socio->tipo = $request->get('tipo');
        $socio->categoria = $request->get('categoria');
        $socio->es_socio = $request->get('es_socio');
        $socio->comunidad = $request->get('comunidad');
        $socio->distrito_id = $request->get('distrito_id');
        $socio->provincia_id = $request->get('provincia_id');
        $socio->departamento_id = $request->get('departamento_id');

        $socio->save();

        return redirect('/socios');
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
        $personas = Persona::all();
        $departamentos = Departamento::all();
        $provincias = Provincia::all();
        $distritos = Distrito::all();
        $provincias = Provincia::all();
        $socios=Socio::find($id);
        return view('socios.edit', compact('socios','personas', 'departamentos', 'provincias', 'distritos'));
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
        $request->validate([
            'personas_id' => 'required',
            'codigo' => 'required',
            'tipo' => 'required',
            'categoria' => 'required',
            'es_socio' => 'required',
            'comunidad' => 'required',
            'distrito_id' => 'required',
            'provincia_id' => 'required',
            'departamento_id' => 'required',
        ]);

        $socio = Socio::find($id);
        $socio->personas_id = $request->get('personas_id');
        $socio->codigo = $request->get('codigo');
        $socio->tipo = $request->get('tipo');
        $socio->categoria = $request->get('categoria');
        $socio->es_socio = $request->get('es_socio');
        $socio->comunidad = $request->get('comunidad');
        $socio->distrito_id = $request->get('distrito_id');
        $socio->provincia_id = $request->get('provincia_id');
        $socio->departamento_id = $request->get('departamento_id');

        $socio->save();

        return redirect('/socios');
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
