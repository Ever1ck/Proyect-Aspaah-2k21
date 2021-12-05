@extends('adminlte::page')

@section('title', 'Persona')

@section('content_header')
    <h1>Persona</h1>
@stop

@section('content')

    <p> REGISTRO DE PERSONAS.</p>

    <form action="/personas" method="POST">
        @csrf
        <div class="container">
  <div class="row">
    <div class="mb-3 col">
    <label class="form-label">Nombre</label>
    <input name="nombre" id="nombre" type="text" class="form-control" wire:model="nombre">
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
    <input name="dni" id="dni" type="number" class="form-control" wire:model="dni">
    </div>
  </div>
  </div>
  <div class="row-2 col">
  <div class="form-group col-md-3">
    <label class="form-label">Comunidad</label>
    <input name="dni" id="dni" type="number" class="form-control" wire:model="dni">
    </div>
    <div class="form-group col-md-3">
    <label class="form-label">Comunidad</label>
    <input name="dni" id="dni" type="number" class="form-control" wire:model="dni">
    </div>
    <div class="form-group col-md-3">
    <label class="form-label">Comunidad</label>
    <input name="dni" id="dni" type="number" class="form-control" wire:model="dni">
    </div>
    <div class="mb-3 col invisible">
        <label class="form-label">Estado</label>
        <input name="es_persona" id="es_persona" type="text" class="form-control" wire:model="es_persona" value="1">
    </div>
  </div>
  <div class="row-2 col">
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
<div class="float-end">
            <a href="/personas" class="me-2 btn btn-danger">Cerrar</a>
            <button  type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop