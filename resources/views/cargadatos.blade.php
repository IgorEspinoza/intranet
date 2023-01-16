<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Home Carga Datos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <!--barra de navegacion con toggler-->
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand"  >NUEVA ANDIMAR VIP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" >
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Formulario para ingreso de capacitaciones - Seleccione Área</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cargadatos/cdpersonalmantenimiento">Personal de Mantenimiento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cargadatos/cdcajeras">Cajeras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cargadatos/cdaseadores">Aseadores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cargadatos/cdgerenciajefaturas">Gerencia y Jefaturas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cargadatos/cdconductoresauxiliares">Conductores y Auxiliares</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cargadatos/cdadministrativos">Administrativos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  <!--barra de busqueda por rut-->
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">Ingrese Rut a consultar</a>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Rut del capacitado" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">buscar</button>
        </form>
      </div>
    </nav>

  </body>
</html>
