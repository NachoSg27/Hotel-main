<!doctype html>
<html lang="es">
<head>
  <!-- Meta charset para que se vean bien tildes y enes (idea de MDN). -->
  <meta charset="UTF-8">
  <!-- Meta viewport para que la pagina se adapte a celular y compu (idea de MDN). -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Titulo de la pestana del navegador. -->
  <title>Hotel Terra | Habitaciones</title>

  <!-- Preconexion a Google Fonts para mejorar carga (ejemplo de Google Fonts). -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Segunda preconexion de fuentes con crossorigin (ejemplo de Google Fonts). -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Fuentes del proyecto tomadas de Google Fonts. -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS de Bootstrap para usar grilla y componentes (docs oficiales). -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Iconos de Bootstrap Icons (docs oficiales). -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Hoja de estilos propia del proyecto. -->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
  <!-- Menu principal para moverse entre secciones. -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm sticky-top">
    <div class="container">
      <!-- Enlace: Enlace de navegacion: regresa al inicio general del proyecto para no perder el contexto. -->
      <a class="navbar-brand brand-title" href="../../../index.php">HOTEL TERRA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menu principal">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuPrincipal">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
          <li class="nav-item"><a class="nav-link" href="../inicio/index.php">Inicio</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Servicios para mostrar lo que ofrece el hotel. -->
          <li class="nav-item"><a class="nav-link" href="../servicios/index.php">Servicios</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
          <li class="nav-item"><a class="nav-link active" href="../habitaciones/index.php">Habitaciones</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
          <li class="nav-item"><a class="nav-link" href="../reservas/index.php">Reservas</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
          <li class="nav-item"><a class="nav-link" href="../ubicacion/index.php">Ubicacion</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
          <li class="nav-item ms-lg-2"><a class="btn btn-primary btn-sm px-3" href="../reservas/index.php">Reservar ahora</a></li>
          <!-- Enlace: Enlace de administracion: abre el panel de control para gestionar informacion del hotel. -->
          <li class="nav-item ms-lg-2"><a class="btn btn-outline-secondary btn-sm px-3" href="../admin/index.php">Panel admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bloque principal para presentar esta seccion. -->
  <header class="hero-inner py-5">
    <div class="container text-center" data-reveal>
      <p class="hero-kicker mb-2">Alojamiento</p>
      <h1 class="display-6">Habitaciones</h1>
      <p class="text-secondary mb-0">Elige la opcion que mejor se adapta a tu plan de viaje.</p>
    </div>
  </header>

  <!-- Contenido principal de la pagina. -->
  <main class="py-5">
    <section class="container">
      <!-- Zona de filtros para tipos de habitacion. -->
      <div class="hotel-card mb-4" data-reveal>
        <div class="d-flex flex-wrap gap-2 justify-content-center">
          <button class="btn btn-outline-primary active" type="button" data-filter="all">Todas</button>
          <button class="btn btn-outline-primary" type="button" data-filter="estandar">Estandar</button>
          <button class="btn btn-outline-primary" type="button" data-filter="familiar">Familiar</button>
          <button class="btn btn-outline-primary" type="button" data-filter="suite">Suite</button>
        </div>
      </div>

      <!-- Fila con tarjetas y bloques de informacion. -->
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-room-type="estandar" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/habitaciones/estandar/estandar-2.png" alt="Habitacion estandar del hotel">
            <h2 class="h5">Estandar</h2>
            <p class="text-secondary mb-2">Ideal para estancias cortas con ambiente funcional y confortable.</p>
            <p class="fw-bold text-primary mb-3">Desde $70 por noche</p>
            <ul class="chip-list mb-3">
              <li>2 huespedes</li>
              <li>24 m2</li>
              <li>Wi-Fi</li>
            </ul>
            <div class="d-flex flex-wrap gap-2">
              <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
              <a class="btn btn-primary btn-sm" href="../reservas/index.php">Reservar</a>
              <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#modalEstandar">Ver detalles</button>
            </div>
          </article>
        </div>

        <div class="col-lg-4 col-md-6" data-room-type="familiar" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/habitaciones/familiar/familiar-2.png" alt="Habitacion familiar del hotel">
            <h2 class="h5">Familiar</h2>
            <p class="text-secondary mb-2">Mayor capacidad para viajar en familia sin sacrificar comodidad.</p>
            <p class="fw-bold text-primary mb-3">Desde $110 por noche</p>
            <ul class="chip-list mb-3">
              <li>4 huespedes</li>
              <li>36 m2</li>
              <li>Desayuno</li>
            </ul>
            <div class="d-flex flex-wrap gap-2">
              <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
              <a class="btn btn-primary btn-sm" href="../reservas/index.php">Reservar</a>
              <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#modalFamiliar">Ver detalles</button>
            </div>
          </article>
        </div>

        <div class="col-lg-4 col-md-6" data-room-type="suite" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/habitaciones/suite/suite-2.png" alt="Suite premium del hotel">
            <h2 class="h5">Suite</h2>
            <p class="text-secondary mb-2">Experiencia premium con area de descanso amplia y acabados superiores.</p>
            <p class="fw-bold text-primary mb-3">Desde $160 por noche</p>
            <ul class="chip-list mb-3">
              <li>2-3 huespedes</li>
              <li>48 m2</li>
              <li>Jacuzzi</li>
            </ul>
            <div class="d-flex flex-wrap gap-2">
              <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
              <a class="btn btn-primary btn-sm" href="../reservas/index.php">Reservar</a>
              <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#modalSuite">Ver detalles</button>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

  <!-- Ventana modal para mostrar mas detalle. -->
  <div class="modal fade" id="modalEstandar" tabindex="-1" aria-labelledby="tituloModalEstandar" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 id="tituloModalEstandar" class="h5 mb-0">Habitacion Estandar</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar detalle de habitacion estandar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6"><img class="img-fluid rounded-3" src="../../assets/img/habitaciones/estandar/estandar-1.jpg" alt="Foto uno habitacion estandar"></div>
            <div class="col-md-6"><img class="img-fluid rounded-3" src="../../assets/img/habitaciones/estandar/estandar-3.png" alt="Foto dos habitacion estandar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ventana modal para mostrar mas detalle. -->
  <div class="modal fade" id="modalFamiliar" tabindex="-1" aria-labelledby="tituloModalFamiliar" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 id="tituloModalFamiliar" class="h5 mb-0">Habitacion Familiar</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar detalle de habitacion familiar"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6"><img class="img-fluid rounded-3" src="../../assets/img/habitaciones/familiar/familiar-1.png" alt="Foto uno habitacion familiar"></div>
            <div class="col-md-6"><img class="img-fluid rounded-3" src="../../assets/img/habitaciones/familiar/familiar-3.jpg" alt="Foto dos habitacion familiar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ventana modal para mostrar mas detalle. -->
  <div class="modal fade" id="modalSuite" tabindex="-1" aria-labelledby="tituloModalSuite" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 id="tituloModalSuite" class="h5 mb-0">Suite Premium</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar detalle de suite premium"></button>
        </div>
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-md-6"><img class="img-fluid rounded-3" src="../../assets/img/habitaciones/suite/suite-1.png" alt="Foto uno suite premium"></div>
            <div class="col-md-6"><img class="img-fluid rounded-3" src="../../assets/img/habitaciones/suite/suite-3.png" alt="Foto dos suite premium"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pie de pagina con informacion general. -->
  <footer class="site-footer mt-5">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-lg-4">
          <h3 class="mb-3">Hotel Terra</h3>
          <p class="mb-0">Habitaciones disenadas para descanso, confort y productividad.</p>
        </div>
        <div class="col-lg-4">
          <h4 class="h5 mb-3">Navegacion</h4>
          <ul class="list-unstyled mb-0">
            <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
            <li class="mb-2"><a href="../inicio/index.php">Inicio</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Servicios para mostrar lo que ofrece el hotel. -->
            <li class="mb-2"><a href="../servicios/index.php">Servicios</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
            <li class="mb-2"><a href="../reservas/index.php">Reservas</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
            <li><a href="../ubicacion/index.php">Ubicacion</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4 class="h5 mb-3">Contacto</h4>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><i class="bi bi-telephone-fill"></i> +506 2222-2222</li>
            <li class="mb-2"><i class="bi bi-envelope-fill"></i> contacto@hotelterra.com</li>
            <li><i class="bi bi-geo-alt-fill"></i> San Jose, Costa Rica</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-credit py-3 text-center">Hotel Terra - Todos los derechos reservados.</div>
  </footer>

  <!-- Script de Bootstrap para menu movil y componentes (docs oficiales). -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Script propio con animaciones y validaciones basicas. -->
  <script src="../../../Controlador/app.js"></script>
</body>
</html>




