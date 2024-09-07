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
        <h3 class="card-title">Editar Auto</h3>
    </div>
    <!-- /.card-header -->
    <!-- form  -->
    @include('admin.autos.form')
    <!-- /form  -->

</div>
@endsection