<form role="form" method="post" action="{{ isset($tipo_vendedor) ? route('tipo_vendedores.update', $tipo_vendedor->id) : route('tipo_vendedores.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($tipo_vendedor) ? method_field('PUT') : '' }}
    <div class="card-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Tipo de Vendedor</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ isset($tipo_vendedor->descripcion) ? $tipo_vendedor->descripcion : '' }}" required>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>