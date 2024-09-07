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
        <h3 class="card-title">Destacados</h3>
    </div>
    <form role="form" method="post" action="{{ route('destacados.update', $destacados->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="card-body">

            <div class="row">
                <div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Destacado 1</label>
                        <select name="r1" id="marca" class="form-control">
                            @foreach($autos as $auto)
                            <option {{ ($destacados->r1 == $auto->id ) ? 'selected' : '' }} value="{{ $auto->id }}">{{ $auto->modelo->marca->descripcion }} {{ $auto->modelo->descripcion }} {{ $auto->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Destacado 2</label>
                        <select name="r2" id="marca" class="form-control">
                            @foreach($autos as $auto)
                            <option {{ ($destacados->r2 == $auto->id ) ? 'selected' : '' }} value="{{ $auto->id }}">{{ $auto->modelo->marca->descripcion }} {{ $auto->modelo->descripcion }} {{ $auto->descripcion }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Destacado 3</label>
                        <select name="r3" id="marca" class="form-control">
                            @foreach($autos as $auto)
                            <option {{ ($destacados->r3 == $auto->id ) ? 'selected' : '' }} value="{{ $auto->id }}">{{ $auto->modelo->marca->descripcion }} {{ $auto->modelo->descripcion }} {{ $auto->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Destacado 4</label>
                        <select name="r4" id="marca" class="form-control">
                            @foreach($autos as $auto)
                            <option {{ ($destacados->r4 == $auto->id ) ? 'selected' : '' }} value="{{ $auto->id }}">{{ $auto->modelo->marca->descripcion }} {{ $auto->modelo->descripcion }} {{ $auto->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Destacado 5</label>
                        <select name="r5" id="marca" class="form-control">
                            @foreach($autos as $auto)
                            <option {{ ($destacados->r5 == $auto->id ) ? 'selected' : '' }} value="{{ $auto->id }}">{{ $auto->modelo->marca->descripcion }} {{ $auto->modelo->descripcion }} {{ $auto->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Destacado 6</label>
                        <select name="r6" id="marca" class="form-control">
                            @foreach($autos as $auto)
                            <option {{ ($destacados->r6 == $auto->id ) ? 'selected' : '' }} value="{{ $auto->id }}">{{ $auto->modelo->marca->descripcion }} {{ $auto->modelo->descripcion }} {{ $auto->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                    <img class="card-img-top" src="/public/assets/img/autos/{{ $autos_destacados['r1']->id }}/{{ $autos_destacados['r1']->imagen_1 }}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                    <img class="card-img-top" src="/public/assets/img/autos/{{ $autos_destacados['r2']->id }}/{{ $autos_destacados['r2']->imagen_1 }}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                    <img class="card-img-top" src="/public/assets/img/autos/{{ $autos_destacados['r3']->id }}/{{ $autos_destacados['r3']->imagen_1 }}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                    <img class="card-img-top" src="/public/assets/img/autos/{{ $autos_destacados['r4']->id }}/{{ $autos_destacados['r4']->imagen_1 }}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                    <img class="card-img-top" src="/public/assets/img/autos/{{  $autos_destacados['r5']->id }}/{{ $autos_destacados['r5']->imagen_1 }}">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                    <img class="card-img-top" src="/public/assets/img/autos/{{$autos_destacados['r6']->id }}/{{ $autos_destacados['r6']->imagen_1 }}">
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </form>

</div>
@endsection