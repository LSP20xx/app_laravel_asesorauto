<form role="form" method="post" action="{{ isset($auto) ? route('autos.update', $auto->id) : route('autos.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ isset($auto) ? method_field('PUT') : '' }}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Marca</label>
                    <select name="id_marca" id="marca" class="form-control">
                        @foreach($marcas as $marca)
                        <option {{ (isset($auto->modelo->id_marca) && $auto->modelo->id_marca == $marca->id ) ? 'selected' : '' }} value="{{ $marca->id }}">{{ $marca->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Modelo</label>
                    <select name="id_modelo" id="modelo" class="form-control">
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ isset($auto->descripcion) ? $auto->descripcion : '' }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Tipo de Combustible</label>
                    <select name="id_tipo_combustible" id="id_tipo_combustible" class="form-control">
                        @foreach($combustibles as $combustible)
                        <option {{ (isset($auto->id_tipo_combustible) && $auto->id_tipo_combustible == $combustible->id ) ? 'selected' : '' }} value="{{ $combustible->id }}">{{ $combustible->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Tipo de Vendedor</label>
                    <select name="id_tipo_vendedor" id="id_tipo_vendedor" class="form-control">
                        @foreach($vendedores as $vendedor)
                        <option {{ (isset($auto->id_tipo_vendedor) && $auto->id_tipo_vendedor == $vendedor->id ) ? 'selected' : '' }} value="{{ $vendedor->id }}">{{ $vendedor->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Estado</label>
                    <select name="es_usado" id="es_usado" class="form-control">
                        <option {{ (isset($auto->es_usado) && $auto->es_usado == 0) ? 'selected' : '' }} value="0">Nuevo</option>
                        <option {{ (isset($auto->es_usado) && $auto->es_usado == 1 ) ? 'selected' : '' }} value="1">Usado</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Segmento</label>
                    <select name="id_segmento" id="id_segmento" class="form-control">
                        @foreach($segmentos as $segmento)
                        <option {{ (isset($tiene_segmento->id_segmento) && $tiene_segmento->id_segmento == $segmento->id ) ? 'selected' : '' }} value="{{ $segmento->id }}">{{ $segmento->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Kilometraje</label>
                    <input type="text" class="form-control" name="kilometraje" value="{{ isset($auto->kilometraje) ? $auto->kilometraje : '' }}">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Moneda</label>
                    <select name="moneda" id="moneda" class="form-control">
                        <option {{ (isset($auto->moneda) && $auto->moneda == '$') ? 'selected' : '' }} value="$">Pesos</option>
                        <option {{ (isset($auto->moneda) && $auto->moneda == 'u$s') ? 'selected' : '' }} value="u$s">Dolares</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" class="form-control" name="precio" value="{{ isset($auto->precio) ? $auto->precio : '' }}">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Año</label>
                    <input type="number" class="form-control" name="anio" value="{{ isset($auto->anio) ? $auto->anio : '' }}" maxlength="4">
                </div>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <label>Color</label>
                    <input type="text" class="form-control" name="color" value="{{ isset($auto->color) ? $auto->color : '' }}">
                </div>
            </div>
            <div class="col-sm-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="vendido" {{ (isset($auto->descripcion) && $auto->vendido == 1) ? 'checked' : '' }} >
                    <label class="form-check-label"><b>Vendido</b></label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <h5><b>Fotos</b></h5>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Foto 1</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen_1">
                        <label class="custom-file-label" for="exampleInputFile">Archivo</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Foto 2</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen_2">
                        <label class="custom-file-label" for="exampleInputFile">Archivo</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Foto 3</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen_3">
                        <label class="custom-file-label" for="exampleInputFile">Archivo</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Foto 4</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen_4">
                        <label class="custom-file-label" for="exampleInputFile">Archivo</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Foto 5</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen_5">
                        <label class="custom-file-label" for="exampleInputFile">Archivo</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Foto 6</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen_6">
                        <label class="custom-file-label" for="exampleInputFile">Archivo</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                @php
                if( isset($auto->imagen_1) && ($auto->imagen_1 != null || $auto->imagen_1 != '')){
                echo '<img class="card-img-top" src="/public/assets/img/autos/'.$auto->id.'/'.$auto->imagen_1.'">';
                }
                @endphp
            </div>
            <div class="col-sm-2">
                @php
                if(isset($auto->imagen_2) && ($auto->imagen_2 != null || $auto->imagen_2 != '')){
                echo '<img class="card-img-top" src="/public/assets/img/autos/'.$auto->id.'/'.$auto->imagen_2.'">';
                }
                @endphp
            </div>
            <div class="col-sm-2">
                @php
                if(isset($auto->imagen_3) && ($auto->imagen_3!= null || $auto->imagen_3 != '')){
                echo '<img class="card-img-top" src="/public/assets/img/autos/'.$auto->id.'/'.$auto->imagen_3.'">';
                }
                @endphp
            </div>
            <div class="col-sm-2">
                @php
                if(isset($auto->imagen_4) && ($auto->imagen_4!= null || $auto->imagen_4 != '')){
                echo '<img class="card-img-top" src="/public/assets/img/autos/'.$auto->id.'/'.$auto->imagen_4.'">';
                }
                @endphp
            </div>
            <div class="col-sm-2">
                @php
                if(isset($auto->imagen_5) && ($auto->imagen_5!= null || $auto->imagen_5 != '')){
                echo '<img class="card-img-top" src="/public/assets/img/autos/'.$auto->id.'/'.$auto->imagen_5.'">';
                }
                @endphp
            </div>
            <div class="col-sm-2">
                @php
                if(isset($auto->imagen_6) && ($auto->imagen_6!= null || $auto->imagen_6 != '')){
                echo '<img class="card-img-top" src="/public/assets/img/autos/'.$auto->id.'/'.$auto->imagen_6.'">';
                }
                @endphp
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <h5><b>Equipamiento</b></h5>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
            @php
            $contador = 0;
            @endphp
            @foreach($equipamientos as $equipo)
            @if(($contador % 6) == 0)
        </div>
        <div class="row">
            @endif
            <div class="col-sm-2">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="equipamiento[{{ $equipo->id }}]" {{ (isset($tiene_equipamiento) && in_array($equipo->id, $tiene_equipamiento)) ? 'checked' : '' }}>
                        <label class="form-check-label {{ (isset($tiene_equipamiento) && in_array($equipo->id, $tiene_equipamiento)) ? 'font-weight-bold' : '' }}">{{ $equipo->descripcion }}</label>
                    </div>
                </div>
            </div>
            @if(($contador % 6) == 0)
            @php
            $contador = 0;
            @endphp
            @endif
            @php
            $contador = $contador + 1;
            @endphp
            @endforeach
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

<script type="text/javascript">
    window.onload = function() {

        $.ajax({
            url: "{{ route('get_by_marca') }}?marca_id=" + $("#marca").val() + "&todos=no",
            method: 'GET',
            success: function(data) {
                $('#modelo').html(data.html);
                @php
                    if(isset($auto->modelo->id_marca)){
                        echo '$("#modelo").val("'.$auto->id_modelo.'");';
                    }
                @endphp
            }
        });

        

        $("#marca").change(function() {
            $.ajax({
                url: "{{ route('get_by_marca') }}?marca_id=" + $(this).val() + "&todos=no",
                method: 'GET',
                success: function(data) {
                    $('#modelo').html(data.html);
                }
            });
        });
    };
</script>