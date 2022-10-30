@extends('layouts.main')
@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Inicio</a></li>
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Tiendas</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Registro</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Registrar una tienda</h6>
</nav>
@endsection
@section('content')
<form>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Dirección</label>
          <input type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Descripción</label>
          <input type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Telefono</label>
            <input type="tel" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control">
          </div>
        </div>
    </div>
    <div class="row">
        <button type="button" class="btn btn-primary">Registrar</button>
        <a href="/tienda" class="btn btn-secondary">Volver</a>
    </div>

  </form>
@endsection
