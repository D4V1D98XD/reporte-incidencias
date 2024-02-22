@extends('app')

@section('contenido')
    <h3>Registrar Nuevo Reporte </h3> <br><br>

      <form method="POST" action="{{url('/GuardarIncidencia')}}">
        @csrf
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="exampleFormControlInput1">Reporte</label>
        <input name="nombre" type="text" class="form-control" placeholder="Ingresa el titulo del reporte">
      </div>
      <div class="form-group">
      <label for="exampleFormControlSelect1">Area</label>
      <select name="area" class=" form-control" id="exampleFormControlSelect1">
        <option value="aula1">Aula 1</option>
        <option value="aula2">Aula 2</option>
        <option value="aula3">Aula 3</option>
        <option value="aula4">Aula 4</option>
        <option value="aula5">Aula 5</option>
        <option value="aula6">Aula 6</option>
        <option value="aula7">Aula 7</option>
        <option value="aula8">Aula 8</option>
        <option value="aula9">Aula 9</option>
        <option value="aula10">Aula 10</option>
        <option value="aula11">Aula 11</option>
        <option value="aula12">Aula 12</option>
        <option value="aula13">Aula 13</option>
        <option value="aula14">Aula 14</option>
        <option value="aula15">Aula 15</option>
        <option value="aula16">Aula 16</option>
        <option value="aula17">Aula 17</option>
        <option value="aula18">Aula 18</option>
        <option value="aula19">Aula 19</option>
        <option value="cc1">cc1</option>
        <option value="cc2">cc2</option>
        <option value="cc3">cc3</option>
        <option value="cc4">cc4</option>
        <option value="cc5">cc5</option>
        <option value="laboratorio">Laboratorio</option>
        <option value="laboratorio">Laboratorio Electronica</option>
        <option value="tallerconstruccion">Taller de Construccion</option>
        <option value="tallerdibujo">Taller de Dibujo</option>
        <option value="salamaestros">Sala de Maestros</option>
      </select>
    </div>
  </div>
  <!-- wasassaa -->
  <div class="form-row">
    <div class="form-group col-md-6">
          <label for="exampleFormControlTextarea1">Descripción</label>
          <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Foto</label>
        <input type="file" name="foto" class="form-control-file">
      </div>
    </div>
    <div class="form-group">
        <label for="">Fecha</label>
        <input type="date" name="fecha" class="">
    </div>
    <button type="submit" class="btn btn-danger"  style="float: right; height: 55px; width: 130px;">Enviar</button>
    
  </form>
      
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Nuevo Reporte</li>
@stop


