<div>
<div class="form-group col">
        <label class="form-label">Departamento</label>
        <select class="form-control" name="departamento" wire:change=''>
            <option value="" >Selecciona un departamento</option>
            @foreach ($departamentos as $departamento)
            <option value="{{$departamento->idDepa}}">{{$departamento->departamento}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col">
        <label class="form-label">Provincia</label>
        <select class="form-control"  name="provincia" wire:charge='listarProvincias($event.target.value)'> 
            
            <option value="" >Selecciona una provincia</option>
            @if ($provincias)
                @foreach ($provincias as $provincia)
                    <option value="{{$provincia->idProv}}">{{$provincia->provincia}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

    