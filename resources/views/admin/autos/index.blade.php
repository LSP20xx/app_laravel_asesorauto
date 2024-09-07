@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header bg-gradient-purple">
        <h3 class="card-title">Autos</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a class="btn btn-success" href="{{route('autos.create')}}" role="button">Nuevo Auto <i class="far fa-plus-square"></i></a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripcion</th>
                    <th>Año</th>
                    <th>Km</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($autos as $auto)
                <tr>
                    <td><a href="/admin/autos/{{ $auto->id }}/edit">{{ $auto->id }} <i class="nav-icon fa fa-edit"></i></a></td>
                    <td>{{ $auto->modelo->marca->descripcion }}</td>
                    <td>{{ $auto->modelo->descripcion }}</td>
                    <td>{{ $auto->descripcion }}</td>
                    <td>{{ $auto->anio }}</td>
                    <td>{{ $auto->kilometraje }}</td>
                    <td>{{ $auto->moneda }} {{ $auto->precio }}</td>
                    <td><a href="#" class="btnEliminar" data-id="{{ $auto->id }}" data-name="{{ $auto->modelo->marca->descripcion .' '. $auto->modelo->descripcion}}"><i class="nav-icon fa fa-trash-alt text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $autos->links() }}
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="" id="formulario">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar auto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Esta seguro de querer eliminar el <span id="modal-auto-descripcion" class="font-weight-bold"></span>
                {{ method_field('delete') }}
                @csrf
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    window.onload = function() {
        $(function() {
            $(".btnEliminar").click(function() {
                $('#formulario').attr('action', '/admin/autos/'+$(this).data('id'));
                $("#hiddenValue").val($(this).data('id'));
                $("#modal-auto-descripcion").text($(this).data('name'));
                $('#exampleModal').modal('show')
            })
        });
    }
</script>
@endsection