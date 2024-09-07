<form role="form" method="post" action="{{ isset($marca) ? route('marcas.update', $marca->id) : route('marcas.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($marca) ? method_field('PUT') : '' }}
    <div class="card-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Marca</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ isset($marca->descripcion) ? $marca->descripcion : '' }}" required>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>