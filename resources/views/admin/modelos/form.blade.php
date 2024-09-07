<form role="form" method="post" action="{{ isset($modelo) ? route('modelos.update', $modelo->id) : route('modelos.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($modelo) ? method_field('PUT') : '' }}
    <div class="card-body">
        
        <div class="row">
        <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Modelo</label>
                    <select name="id_marca" id="marca" class="form-control">
                        @foreach($marcas as $marca)
                        <option {{ (isset($modelo->id_marca) && $modelo->id_marca == $marca->id ) ? 'selected' : '' }} value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ isset($modelo->descripcion) ? $modelo->descripcion : '' }}" required>
                </div>
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>