<form role="form" method="post" action="{{ isset($segmento) ? route('segmentos.update', $segmento->id) : route('segmentos.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($segmento) ? method_field('PUT') : '' }}
    <div class="card-body">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Segmento</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ isset($segmento->descripcion) ? $segmento->descripcion : '' }}" required>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>