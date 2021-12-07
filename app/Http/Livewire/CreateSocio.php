<?php

namespace App\Http\Livewire;

use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use App\Models\Socio;
use App\Models\Persona;
use Livewire\Component;
use Livewire\Request;

class CreateSocio extends Component
{

    public $selectedDepartamentos = null, $selectedProvincias = null, $selectedDistritos = null;
    public $provincias = null, $distritos = null;

    public function render()
    {
        /*$departamentos = Departamento::all();
        $personas = Persona::all();*/

        return view('livewire.create-socio', [
            'departamentos' => Departamento::all(),
            'personas' => Persona::all()
        ]);
    }

    public function updatedselectedDepartamento($idDepa) {
        $this->provincias = Provincia::where('idDepa', $idDepa)->get();
    }
    public function updatedselectedProvincia($idProv) {
        $this->distritos = Distrito::where('idProv', $idProv)->get();
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
            'distrito' => 'required',
            'provincia' => 'required',
            'departamento' => 'required',
        ]);

        $socio = new Socio();
        $socio->personas_id = $request->get('personas_id');
        $socio->codigo = $request->get('codigo');
        $socio->tipo = $request->get('tipo');
        $socio->categoria = $request->get('categoria');
        $socio->es_socio = $request->get('es_socio');
        $socio->comunidad = $request->get('comunidad');
        $socio->distrito = $request->get('distrito');
        $socio->provincia = $request->get('provincia');
        $socio->departamento = $request->get('departamento');

        $socio->save();

        return redirect('/socios');
    }
}
