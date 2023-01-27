@extends('includes.panel.cargaDatos')

@section('contentForm')
<div>
  <div class="titulos">
    <h2>
      <center>Formulario de ingreso para capacitaciones</center>
    </h2>
  </div>
  <div>
    @include('includes.panel.formmaster')
  </div>

  <div>
    <!--seleccion de capacitacion-->
    <div class="justify-content-center col-md-3 p-1 border-2">
      <select class="form-select" aria-label="select-capacitaciones">
        <option selected="">Seleccione capacitación a ingresar</option>
        <option value="1">ODI</option>
        <option value="2">Uso y manejo de extintor</option>
        <option value="3">Difusión plan de emergencia</option>
        <option value="4">Manejo manual de carga</option>
        <option value="5">Trastornos musculos esqueleticos</option>
        <option value="6">Primeros auxilios</option>
        <option value="7">Manejo de sustancias peligrosas</option>
        <option value="8">Almacenamiento de sustancias peligrosas</option>
        <option value="9">Prevención a la exposición de radiación UV</option>
        <option value="10">Uso correcto de EPP</option>
        <option value="11">Control de riesgos en altura</option>
        <option value="12">Cuidado de las manos</option>
        <option value="13">Orientación en prevención de riesgos</option>
        <option value="14">PREXOR</option>
        <option value="15">Actitudes preventivas</option>
        <option value="16">Uso de herramientas eléctricas y motrices</option>
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