@extends('app')

@section('home')
    <h3 class="mb-2">Consultar Reportes</h3>
    <br><br><br>
<div class="card card-secondary">
                    <div class="card-body table-responsive">
                        @yield('contenido')
                    </div>
                </div>
    </div>
@endsection
