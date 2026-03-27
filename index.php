<!doctype html>
<html lang="es">
<head>
  <!-- Meta charset para que se vean bien tildes y enes (idea de MDN). -->
  <meta charset="UTF-8">
  <!-- Meta viewport para que la pagina se adapte a celular y compu (idea de MDN). -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Titulo de la pestana del navegador. -->
  <title>Hotel Terra | Inicio</title>

  <!-- Preconexion a Google Fonts para mejorar carga -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Segunda preconexion de fuentes con crossorigin  -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Fuentes del proyecto tomadas de Google Fonts. -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS de Bootstrap para usar grilla y componentes  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Iconos de Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Hoja de estilos propia del proyecto. -->
  <link rel="stylesheet" href="Vista/assets/css/style.css">
</head>
<body>
  <!-- Menu principal para moverse entre secciones. -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm sticky-top">
    <div class="container">
      <!-- Menu principal para moverse entre secciones. -->
      <!-- Enlace: Enlace de navegacion: regresa al inicio general del proyecto para no perder el contexto. -->
      <a class="navbar-brand brand-title" href="index.php">HOTEL TERRA</a>
      <!-- Menu principal para moverse entre secciones. -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menu principal">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuPrincipal">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
          <li class="nav-item"><a class="nav-link active" href="Vista/Views/inicio/index.php">Inicio</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Servicios para mostrar lo que ofrece el hotel. -->
          <li class="nav-item"><a class="nav-link" href="Vista/Views/servicios/index.php">Servicios</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
          <li class="nav-item"><a class="nav-link" href="Vista/Views/habitaciones/index.php">Habitaciones</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
          <li class="nav-item"><a class="nav-link" href="Vista/Views/reservas/index.php">Reservas</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
          <li class="nav-item"><a class="nav-link" href="Vista/Views/ubicacion/index.php">Ubicacion</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
          <li class="nav-item ms-lg-2"><a class="btn btn-primary btn-sm px-3" href="Vista/Views/reservas/index.php">Reservar ahora</a></li>
          <!-- Enlace: Enlace de administracion: abre el panel de control para gestionar informacion del hotel. -->
          <li class="nav-item ms-lg-2"><a class="btn btn-outline-secondary btn-sm px-3" href="Vista/Views/admin/index.php">Panel admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Seccion con tarjetas de informacion. -->
  <!-- Ruta de imagen principal: se deja en carpeta /principal/hero para cambiar solo el archivo cuando tengas la version final. -->
  <header
    class="hero-main"
    style="--hero-image: url('Vista/assets/img/principal/hero/hero-principal.png');"
  >
    <div class="container hero-content py-5" data-reveal>
      <div class="row">
        <div class="col-lg-8">
          <p class="hero-kicker mb-2">Experiencia de hospitalidad</p>
          <h1 class="display-5 fw-semibold">Bienvenido a Hotel Terra</h1>
          <p class="lead mb-4">Explora nuestras habitaciones, servicios, reservas y ubicacion con una navegacion clara y una experiencia visual consistente.</p>
          <div class="d-flex flex-wrap gap-2">
            <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
            <a class="btn btn-primary" href="Vista/Views/inicio/index.php">Entrar al sitio</a>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
            <a class="btn btn-outline-light" href="Inicio/index.php">Ver entrada alternativa</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Contenido principal de la pagina. -->
  <main class="py-5">
    <!-- Seccion de galeria principal: aqui solo se reemplazan las imagenes en la carpeta sin tocar el HTML. -->
    <section class="container mb-5">
      <div class="text-center mb-4" data-reveal>
        <h2 class="h3 mb-2">Galeria principal</h2>
        <p class="mb-0 text-secondary">Estas rutas ya estan preparadas para que el novato solo cambie los archivos de imagen.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="Vista/assets/img/principal/galeria/galeria-principal-1.jpg" alt="Galeria principal 1">
            <p class="mb-0">Ambiente de entrada del hotel.</p>
          </article>
        </div>
        <div class="col-md-4" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="Vista/assets/img/principal/galeria/galeria-principal-2.jpg" alt="Galeria principal 2">
            <p class="mb-0">Lobby y recepcion para visitantes.</p>
          </article>
        </div>
        <div class="col-md-4" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="Vista/assets/img/principal/galeria/galeria-principal-3.jpg" alt="Galeria principal 3">
            <p class="mb-0">Espacios de restaurante y atencion.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="container mb-5">
      <div class="row g-4">
        <div class="col-lg-6" data-reveal>
          <article class="service-card h-100">
            <img class="card-media mb-3" src="Vista/assets/img/principal/promociones/promocion-spa.jpg" alt="Promocion spa">
            <h2 class="h5 mb-2">Promocion Spa</h2>
            <p class="mb-0 text-secondary">Oferta temporal para experiencias de relajacion.</p>
          </article>
        </div>
        <div class="col-lg-6" data-reveal>
          <article class="service-card h-100">
            <img class="card-media mb-3" src="Vista/assets/img/principal/promociones/promocion-restaurante.jpg" alt="Promocion restaurante">
            <h2 class="h5 mb-2">Promocion Restaurante</h2>
            <p class="mb-0 text-secondary">Paquetes especiales con menu incluido.</p>
          </article>
        </div>
      </div>
    </section>
    <section class="container mb-5">
      <div class="text-center mb-4" data-reveal>
        <h2 class="h3 mb-2">Testimonios</h2>
        <p class="mb-0 text-secondary">Fotos de referencia para opiniones de clientes.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6" data-reveal>
          <article class="hotel-card h-100 text-center">
            <img class="img-fluid rounded-circle mb-3" src="Vista/assets/img/principal/testimonios/testimonio-1.png" alt="Cliente testimonio 1" style="width: 120px; height: 120px; object-fit: cover;">
            <p class="mb-1">"Excelente ubicacion y atencion."</p>
            <small class="text-secondary">Cliente 1</small>
          </article>
        </div>
        <div class="col-md-6" data-reveal>
          <article class="hotel-card h-100 text-center">
            <img class="img-fluid rounded-circle mb-3" src="Vista/assets/img/principal/testimonios/testimonio-2.png" alt="Cliente testimonio 2" style="width: 120px; height: 120px; object-fit: cover;">
            <p class="mb-1">"Proceso de reserva rapido y claro."</p>
            <small class="text-secondary">Cliente 2</small>
          </article>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="row g-4">
        <div class="col-md-6 col-xl-4" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-house-heart-fill text-primary"></i> Inicio</h2>
            <p class="mb-3">Resumen visual del hotel, accesos rapidos y componentes de presentacion principales.</p>
            <a class="btn btn-outline-primary" href="Vista/Views/inicio/index.php">Abrir vista</a>
          </article>
        </div>
        <div class="col-md-6 col-xl-4" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-stars text-primary"></i> Servicios</h2>
            <p class="mb-3">Catalogo de experiencias con tarjetas descriptivas y jerarquia visual limpia.</p>
            <a class="btn btn-outline-primary" href="Vista/Views/servicios/index.php">Abrir vista</a>
          </article>
        </div>
        <div class="col-md-6 col-xl-4" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-door-open-fill text-primary"></i> Habitaciones</h2>
            <p class="mb-3">Tipos de habitacion, filtros por categoria y tarjetas con atributos clave.</p>
            <a class="btn btn-outline-primary" href="Vista/Views/habitaciones/index.php">Abrir vista</a>
          </article>
        </div>
        <div class="col-md-6 col-xl-4" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-journal-check text-primary"></i> Reservas</h2>
            <p class="mb-3">Formulario completo de solicitud con campos validados y fechas controladas.</p>
            <a class="btn btn-outline-primary" href="Vista/Views/reservas/index.php">Abrir vista</a>
          </article>
        </div>
        <div class="col-md-6 col-xl-4" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-geo-alt-fill text-primary"></i> Ubicacion</h2>
            <p class="mb-3">Mapa integrado con informacion de contacto y acceso rapido a Google Maps.</p>
            <a class="btn btn-outline-primary" href="Vista/Views/ubicacion/index.php">Abrir vista</a>
          </article>
        </div>
        <div class="col-md-6 col-xl-4" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-info-circle-fill text-primary"></i> Informacion del hotel</h2>
            <p class="mb-3">Consulta detalles de marca, canales de contacto y contenido general del sitio.</p>
            <a class="btn btn-outline-primary" href="README.md">Conocer mas</a>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer mt-5">
    <div class="container py-4 text-center text-lg-start">
      <p class="mb-1"><strong>Hotel Terra</strong> | Sitio Oficial</p>
      <p class="mb-0">Hospitalidad, confort y atencion personalizada para cada estancia.</p>
    </div>
    <div class="footer-credit py-3 text-center">Reserva hoy y vive la experiencia Hotel Terra.</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="Controlador/app.js"></script>
</body>
</html>




