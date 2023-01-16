
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>CD Personal Mantenimiento</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-1 border-1 bd-example">

    <div class="titulos">
        <h2> <center>Formulario de ingreso para capacitaciones</center> </h2>
        <h3> <center>Personal de Mantenimiento</center> </h3>
    </div>

<!--nombre y apellidos prevencionista-->
    <div class="row justify-content-center g-5 p-1 border-2">
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Ingrese nombre del prevencionista" aria-label="Nombre prevencionista">
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Apellido paterno del prevencionista" aria-label="Apellido paterno prevencionista">
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Apellido materno del prevencionista" aria-label="Apellido materno prevencionista">
      </div>
    </div>
<!--rut prevencionista-->
    <div class="row justify-content-center g-5 p-1 border-2">
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Ingrese Rut del prevencionista" aria-label="Rut prevencionista">
        </div>
    </div>
<!--nombre y apellidos capacitado-->
    <div class="row justify-content-center g-5 p-1 border-2">
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Ingrese nombre del capacitado" aria-label="Nombre capacitado">
         </div>
         <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Apellido paterno del capacitado" aria-label="Apellido paterno capacitado">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Apellido materno del prevencionista" aria-label="Apellido materno capacitado">
          </div>
    </div>
<!--rut y cargo del capacitado-->
    <div class="row justify-content-center g-5 p-1 border-2">
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Ingrese Rut del capacitado" aria-label="Rut capacitado">
        </div>
        <div class="col-md-3 ">
            <input type="text" class="form-control" placeholder="Cargo del capacitado" aria-label="Cargo capacitado">
        </div>
    </div>
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




  </body>
</html>
