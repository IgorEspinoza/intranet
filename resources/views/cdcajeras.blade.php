@extends('includes.panel.cargaDatos')

@section('contentForm')
<div>
  <div class="titulos">
    <h2>
      <center>Formulario de ingreso para cajeras</center>
    </h2>
  </div>
  <div>
    @include('includes.panel.formmaster')
  </div>

    <!-- aqui va formmaster -->

    <!--seleccion de capacitacion-->
    <div class="justify-content-center col-md-3 p-1 border-2">
      <select class="form-select" aria-label="select-capacitaciones">
        <option selected="">Seleccione capacitación a ingresar</option>
        <option value="1">ODI</option><!--capacitacion obligatoria-->
        <option value="2">Uso y manejo de extintor</option><!--capacitacion obligatoria-->
        <option value="3">Difusión plan de emergencia</option><!--capacitacion obligatoria-->
        <option value="6">Atencion a publico</option>
        <option value="7">TMERT</option><!--trastornos musculoesqueleticos relacionados con el trabajo-->
      </select>
    </div>
    <!--document upload-->
    <div class="col-md-3 mb-3 p-2 border-2 ">
      <label for="formFile" class="form-label">Documento de la capacitación</label>
      <input class="form-control" type="file" id="formFile">
    </div>
  </div>
</div>
@endsection