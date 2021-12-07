@extends('adminlte::page')

@section('title', 'Persona')

@section('content_header')
    <h1>Persona</h1>
@stop

@section('content')

    <p> REGISTRO DE PERSONAS.</p>

    <form action="/socios/{{$socios->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
        <div class="row">
    <div class="mb-3 col">
    <label class="form-label">Nombre del Socio</label>
        <select aria-describedby="personas_id" class="form-control" name="personas_id" id="personas_id">
                    @if (!$socios->persona)
                        <option value="" selected disabled>Selecciona una Persona</option>
                        @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}">
                            {{ $persona->nombre }}</option>
                        @endforeach
                        @else
                        @foreach ($personas as $persona)
                        <option value="{{ $persona->id }}" @if($socios->persona->id === $persona->id)
                            selected='selected'
                            @endif>
                            {{ $persona->nombre }}</option>
                        @endforeach
                        @endif
                    </select>
      @error('personas_id')
     <div id="personas_id" class="form-text text-danger">*{{$message}}</div>
    @enderror
    </div>
    
  </div>
  <div class="row">
  <div class="form-group col-md-3">
    
    <label class="form-label">Comunidad</label>
    <input name="comunidad" id="comunidad" type="text" class="form-control" wire:model="comunidad" value="{{$socios->comunidad}}">
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-8">
    <div class="row">
    <div class="form-group col">


        <label class="form-label">Departamento</label>
        <select class="form-control" id="departamentos_id" name="departamento_id">
            @if (!$socios->departamentos)
                <option value="" selected disabled>Selecciona un departamento</option>
                    @foreach($departamentos as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
            @else
                    @foreach($departamentos as $item)
                <option value="{{ $item->id }}" @if($socios->departamento->id == $item->id)
                        selected='selected'
                        @endif>
                    {{ $item->name }}</option>
                @endforeach
            @endif
        </select>
            @error('departamento_id')
                <div id="departamento_id" class="form-text text-danger">*{{$message}}</div>
            @enderror
    </div>
    <div class="form-group col">
        <label class="form-label">Provincia</label>
        <select class="form-control" id="provincias_id" name="provincia_id">
            @if (!$socios->provincias)
                <option value="" selected disabled>Selecciona un provincia</option>
                    @foreach ($provincias as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}</option>
                    @endforeach
                        @else
                        @foreach ($provincias as $provincia)
                        <option value="{{ $item->id }}" @if($socios->provincia->id === $provincia->id)
                            selected='selected'
                            @endif>
                            {{ $item->name }}</option>
                        @endforeach
                        @endif
        </select>
            @error('provincia_id')
                <div id="provincia_id" class="form-text text-danger">*{{$message}}</div>
                @enderror
    </div>
    <div class="form-group col">
        <label class="form-label">Distrito</label>
        <select class="form-control" id="distritos_id" name="distrito_id">
            @if (!$socios->distritos)
                <option value="" selected disabled>Selecciona un distrito</option>
                    @foreach ($distritos as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}</option>
                    @endforeach
                        @else
                        @foreach ($distritos as $item)
                        <option value="{{ $item->id }}" @if($socios->distrito->id === $item->id)
                            selected='selected'
                            @endif>
                            {{ $item->name }}</option>
                        @endforeach
                        @endif
        </select>
            @error('distrito_id')
                <div id="distrito_id" class="form-text text-danger">*{{$message}}</div>
                @enderror
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
            <label class="form-label">Codigo</label>
            <input name="codigo" id="codigo" type="text" class="form-control" wire:model="codigo" value="{{$socios->codigo}}">
        </div>
        <div class="mb-3 col">
            <label class="form-label">Tipo</label>
            <input name="tipo" id="tipo" type="text" class="form-control" wire:model="tipo" value="{{$socios->tipo}}">
        </div>
        <div class="mb-3 col">
            <label class="form-label">Categoria</label>
            <input name="categoria" id="categoria" type="text" class="form-control" wire:model="categoria" value="{{$socios->categoria}}">
        </div>
    </div>
    
  </div>
  <div class="col-4"></div>
  
</div>
  </div>
  
<div class="float-end">
            <a href="/socios" class="me-2 btn btn-danger">Cerrar</a>
            <button  type="submit" class="btn btn-success">Actualizar</button>
        </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
  $(document).ready(function () {
      $('#departamentos_id').on('change', function (e) {
          var id_dep = $('#departamentos_id').val();
          console.log(id_dep);
          $.get('provinciasByDep/'+id_dep, function(data){
            console.log(data);
            $('#provincias_id').empty();
            $.each(data, function(fetch,obj){
              $('#provincias_id').append('<option value="'+ obj.id +'">'+ obj.name +'</option>');
            })
          });
      });

      $('#provincias_id').on('change', function (e) {
          var id_prov = $('#provincias_id').val();
          console.log(id_prov);
          $.get('distritosByProv/'+id_prov, function(data){
            console.log(data);
            $('#distritos_id').empty();
            $.each(data, function(fetch,obj){
              $('#distritos_id').append('<option value="'+ obj.id +'">'+ obj.name +'</option>');
            })
          });
      });

  });
</script>
@stop