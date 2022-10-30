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
          <label class="form-label">Email</label>
          <input type="email" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" disabled>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-outline is-valid my-3">
          <label class="form-label">Success</label>
          <input type="email" class="form-control">
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-outline is-invalid my-3">
          <label class="form-label">Error</label>
          <input type="email" class="form-control">
        </div>
      </div>
    </div>
  </form>
@endsection
