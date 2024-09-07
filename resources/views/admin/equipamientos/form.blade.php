<form role="form" method="post" action="{{ isset($equipamiento) ? route('equipamientos.update', $equipamiento->id) : route('equipamientos.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($equipamiento) ? method_field('PUT') : '' }}
    <div class="card-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Equipamiento</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ isset($equipamiento->descripcion) ? $equipamiento->descripcion : '' }}" required>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>