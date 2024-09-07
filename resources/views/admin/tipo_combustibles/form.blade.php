<form role="form" method="post" action="{{ isset($tipo_combustible) ? route('tipo_combustibles.update', $tipo_combustible->id) : route('tipo_combustibles.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($tipo_combustible) ? method_field('PUT') : '' }}
    <div class="card-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Tipo de Combustible</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ isset($tipo_combustible->descripcion) ? $tipo_combustible->descripcion : '' }}" required>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>