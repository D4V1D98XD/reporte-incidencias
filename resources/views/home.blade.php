@extends('app')

@section('contenido')

<br>
    <h3 class="mb-2">Consultar Reportes
    <button type="button" class="btn btn-danger" style="float: right; height: 55px; width: 130px;"><a href="{{url('/RegistrarIncidencia')}}"> Nuevo Reporte</a></button></h3>
    <br><br><br>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>area</th>
                    <th>fecha</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reportes as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>{{$r->nombre}}</td>
                        <td>{{$r->descripcion}}</td>
                        <td>{{$r->area}}</td>
                        <td>{{$r->fecha}}</td>
                        <td>
                            @if($r->estado==1)
                            <span class="badge badge-pill badge-secondary">Enviado</span>
                            @elseif($r->estado==2)
                            <span class="badge badge-pill badge-primary">En Proceso</span>
                            @elseif($r->estado==3)
                            <span class="badge badge-pill badge-success">Finalizado</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

                <!--<div class="card card-secondary">
                <div class="card-body table-responsive">
                    @yield('contenido')
                    </div>
                </div> -->


@endsection
