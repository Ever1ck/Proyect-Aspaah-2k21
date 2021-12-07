
    <p> REGISTRO DE SOCIOS.</p>

    <form action="/socios" method="POST">
        @csrf
        <div class="container">
  <div class="row">
    <div class="mb-3 col">
    <label class="form-label">Nombre del Socio</label>
    <select aria-describedby="personas_id" id="personas_id" class="form-control" name="personas_id">
        <option value="" selected disabled>Selecciona una persona</option>
            @foreach ($personas as $persona)
                <option value="{{$persona->id}}">{{$persona->nombre}}</option>
            @endforeach
     </select>
      @error('personas_id')
     <div id="personas_id" class="form-text text-danger">*{{$message}}</div>
    @enderror
    </div>
    <div class="mb-3 col">
    <label class="form-label">Apellido Paterno</label>
    <input name="ape_paterno" id="ape_paterno" type="text" class="form-control" wire:model="ape_paterno">
    </div>
    <div class="mb-3 col">
    <label class="form-label">Apellido Materno</label>
    <input name="ape_materno" id="ape_materno" type="text" class="form-control" wire:model="ape_materno">
    </div>
  </div>
  <div class="row">
  <div class="form-group col-md-3">
    <label class="form-label">DNI</label>
    <input name="dni" id="dni" type="number" class="form-control" wire:model="dni">
    </div>
    <div class="form-group col-md-3">
    <label class="form-label">Fecha Nacimiento</label>
    <input name="fe_nacimiento" id="fe_nacimiento" type="date" class="form-control" wire:model="fe_nacimiento">
    </div>
    <div class="form-group col-md-3">
    <label class="form-label">Comunidad</label>
    <input name="comunidad" id="comunidad" type="text" class="form-control" wire:model="comunidad">
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-8">
    <div class="row">
    <div class="form-group col">
        <label class="form-label">Departamento</label>
        <select class="form-control"  wire:model="selectedDepartamento" id="departamento">
            <option value="" >Selecciona un departamento</option>
            @foreach ($departamentos as $departamento)
            <option value="{{$departamento->idDepa}}">{{$departamento->departamento}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col">
        <label class="form-label">Provincia</label>
        
        <select class="form-control"  wire:model="selectedProvincias" id="provincia">
            <option value="" >Selecciona una provincia</option>
            @if (!is_null($provincias))
            @foreach ($provincias as $provincia)
            <option value="{{$provincia->idProv}}">{{$provincia->provincia}}</option>
            @endforeach
            @endif
        </select>
        
    </div>
    <div class="form-group col">
        <label class="form-label">Distrito</label>
        <input name="distrito" id="distrito" type="number" class="form-control" wire:model="selectedDistrito">
    </div>
    <div class="d-none">
        <div class="mb-3">
            <label class="form-label">Estado</label>
            <input name="es_socio" id="es_persona" type="text" class="form-control" wire:model="es_persona" value="1">
        </div>
    </div>
    </div>
      <div class="row">
        <div class="mb-3 col">
            <label class="form-label">Familia</label>
            <input name="fa_parentesco" id="fa_parentesco" type="text" class="form-control" wire:model="fa_parentesco">
        </div>
        <div class="mb-3 col">
            <label class="form-label">Parentesco</label>
            <input name="parentesco" id="parentesco" type="text" class="form-control" wire:model="parentesco">
        </div>
    </div>
    
  </div>
  <div class="col-4"></div>
  
</div>
  </div>
  
<div class="float-end">
            <a href="/personas" class="me-2 btn btn-danger">Cerrar</a>
            <button  type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>