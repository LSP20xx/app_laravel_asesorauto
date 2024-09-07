@extends('layouts.admin')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
    <div class="card-header bg-gradient-purple">
        <h3 class="card-title">Nuevo Tipo de Vendedor</h3>
    </div>
    <!-- /.card-header -->
    <!-- form  -->
    @include('admin.tipo_vendedores.form')
    <!-- /form  -->

</div>
@endsection