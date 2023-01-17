<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>CD Aseadores</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-1 border-1 bd-example">

  <div class="titulos">
    <h2>
      <center>Formulario de ingreso para capacitaciones</center>
    </h2>
    <h3>
      <center>Aseadores</center>
    </h3>
  </div>

    <!-- aqui va formmaster -->

    <!--seleccion de capacitacion-->
  <div class="justify-content-center col-md-3 p-1 border-2">
    <select class="form-select" aria-label="select-capacitaciones">
      <option selected="">Seleccione capacitación a ingresar</option>
      <option value="1">ODI</option><!--capacitacion obligatoria-->
      <option value="2">Uso y manejo de extintor</option><!--capacitacion obligatoria-->
      <option value="3">Difusión plan de emergencia</option><!--capacitacion obligatoria-->
      <option value="4">Limpieza y desinfecion frente al COVID</option>
      <option value="5">Uso de sustancias peligrosas</option>
      <option value="6">Uso correcto de EPP</option>
    </select>
  </div>
  <!--document upload-->
  <div class="col-md-3 mb-3 p-2 border-2 ">
    <label for="formFile" class="form-label">Documento de la capacitación</label>
    <input class="form-control" type="file" id="formFile">
  </div>


</body>

</html>
