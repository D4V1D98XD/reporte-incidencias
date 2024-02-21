@extends('app')

@section('home')

<br>
    <h3 class="mb-2">Consultar Reportes
    <button type="button" class="btn btn-danger" style="float: right; height: 55px; width: 130px;">Nuevo Reporte</button></h3>
    <br><br><br>
                <!--<div class="card card-secondary">
                <div class="card-body table-responsive wasamamaya">
                    @yield('contenido')
                    </div>
                </div> -->
                <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nose</th>
                    <th>ok</th>
                    <th>si</th>
                    <th>que</th>
                </tr>
            </thead>
        </table>
    </div>

@endsection
