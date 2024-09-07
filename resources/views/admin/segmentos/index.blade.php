@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header bg-gradient-purple">
        <h3 class="card-title">Segmentos</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a class="btn btn-success" href="{{route('segmentos.create')}}" role="button">Nuevo Segmento <i class="far fa-plus-square"></i></a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Segmento</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($segmentos as $segmento)
                <tr>
                    <td><a href="/admin/segmentos/{{ $segmento->id }}/edit">{{ $segmento->id }} <i class="nav-icon fa fa-edit"></i></a></td>
                    <td>{{ $segmento->descripcion }}</td>
                    <td><a href="#" class="btnEliminar" data-id="{{ $segmento->id }}" data-name="{{ $segmento->descripcion }}"><i class="nav-icon fa fa-trash-alt text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $segmentos->links() }}
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="" id="formulario">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar segmento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Esta seguro de querer eliminar el segmento <span id="modal-descripcion" class="font-weight-bold"></span>
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
                $('#formulario').attr('action', '/admin/segmentos/'+$(this).data('id'));
                $("#hiddenValue").val($(this).data('id'));
                $("#modal-descripcion").text($(this).data('name'));
                $('#exampleModal').modal('show')
            })
        });
    }
</script>

@endsection