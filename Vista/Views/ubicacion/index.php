<!doctype html>
<html lang="es">
<head>
  <!-- Meta charset para que se vean bien tildes y enes (idea de MDN). -->
  <meta charset="UTF-8">
  <!-- Meta viewport para que la pagina se adapte a celular y compu (idea de MDN). -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Titulo de la pestana del navegador. -->
  <title>Hotel Terra | Ubicacion</title>

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
          <li class="nav-item"><a class="nav-link" href="../habitaciones/index.php">Habitaciones</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
          <li class="nav-item"><a class="nav-link" href="../reservas/index.php">Reservas</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
          <li class="nav-item"><a class="nav-link active" href="../ubicacion/index.php">Ubicacion</a></li>
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
      <p class="hero-kicker mb-2">Visitanos</p>
      <h1 class="display-6">Ubicacion</h1>
      <p class="text-secondary mb-0">Estamos en una zona estrategica con acceso rapido a puntos clave de la ciudad.</p>
    </div>
  </header>

  <!-- Contenido principal de la pagina. -->
  <main class="py-5">
    <section class="container">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-8" data-reveal>
          <div class="map-wrap ratio ratio-16x9 h-100">
            <iframe title="Ubicacion del Hotel Terra" src="https://www.google.com/maps?q=San+Jose+Costa+Rica&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-lg-4" data-reveal>
          <article class="contact-card h-100">
            <h2 class="h4 mb-3">Como llegar</h2>
            <p class="text-secondary">Nos ubicamos cerca de zonas comerciales, estaciones de transporte y rutas principales de acceso.</p>
            <ul class="list-unstyled mb-4">
              <li class="mb-2"><i class="bi bi-geo-alt-fill text-primary"></i> San Jose, Costa Rica</li>
              <li class="mb-2"><i class="bi bi-telephone-fill text-primary"></i> +506 2222-2222</li>
              <li><i class="bi bi-envelope-fill text-primary"></i> contacto@hotelterra.com</li>
            </ul>
            <!-- Enlace: Enlace externo: abre Google Maps en otra pestana para facilitar la ubicacion real del hotel. -->
            <a class="btn btn-primary" href="https://maps.google.com" target="_blank" rel="noopener noreferrer">Abrir en Google Maps</a>
          </article>
        </div>
      </div>

      <!-- Fila con tarjetas y bloques de informacion. -->
      <div class="row g-4 mt-1">
        <div class="col-md-4" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/hotel/fachada.jpg" alt="Fachada principal del hotel">
            <h3 class="h6 mb-1">Fachada principal</h3>
            <p class="mb-0 text-secondary">Entrada segura con acceso inmediato desde via principal.</p>
          </article>
        </div>
        <div class="col-md-4" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/hotel/lobby.jpg" alt="Lobby principal del hotel">
            <h3 class="h6 mb-1">Lobby y recepcion</h3>
            <p class="mb-0 text-secondary">Atencion permanente y orientacion para visitantes.</p>
          </article>
        </div>
        <div class="col-md-4" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/hotel/restaurante.jpg" alt="Area de restaurante del hotel">
            <h3 class="h6 mb-1">Entorno y servicios</h3>
            <p class="mb-0 text-secondary">Servicios integrados para una estancia completa.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

  <!-- Pie de pagina con informacion general. -->
  <footer class="site-footer mt-5">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-lg-4">
          <h3 class="mb-3">Hotel Terra</h3>
          <p class="mb-0">Ubicacion estrategica con facil acceso para turismo y negocios.</p>
        </div>
        <div class="col-lg-4">
          <h4 class="h5 mb-3">Navegacion</h4>
          <ul class="list-unstyled mb-0">
            <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
            <li class="mb-2"><a href="../inicio/index.php">Inicio</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Servicios para mostrar lo que ofrece el hotel. -->
            <li class="mb-2"><a href="../servicios/index.php">Servicios</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
            <li class="mb-2"><a href="../habitaciones/index.php">Habitaciones</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
            <li><a href="../reservas/index.php">Reservas</a></li>
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




