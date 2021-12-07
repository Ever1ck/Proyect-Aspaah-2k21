<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;

class SelectAnidado extends Component
{
    public $provincias = "";


    
    public function render()
    {
        

        return view('livewire.select-anidado', [
            'departamentos' => Departamento::all(),
            'provincias' => Provincia::all()
        ]); 
    }

    public function listarProvincias($idDepa)
    {
        $this->provincias = Provincia::where('idDepa', $idDepa)->get();
    }

/*
    public $selectedDepartamento = null, $selectedProvincia = null, $selectedDistrito = null, $selectedComunidad = null;
    public $provincias = null, $distritos = null;

    public function render()
    {
        $departamentos = Departamento::all();

        return view('livewire.select-anidado', compact('departamentos'));
    }

    public function updatedsDepartamento($ID_DEPARTAMENTO) {
        $this->provincias = Provincia::where('idDepa', $ID_DEPARTAMENTO)->get();
    }
*/


}
