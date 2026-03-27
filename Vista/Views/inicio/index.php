<!doctype html>
<html lang="es">
<head>
  <!-- Meta charset para que se vean bien tildes y enes (idea de MDN). -->
  <meta charset="UTF-8">
  <!-- Meta viewport para que la pagina se adapte a celular y compu (idea de MDN). -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Titulo de la pestana del navegador. -->
  <title>Hotel Terra | Inicio</title>

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
          <li class="nav-item"><a class="nav-link active" href="../inicio/index.php">Inicio</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Servicios para mostrar lo que ofrece el hotel. -->
          <li class="nav-item"><a class="nav-link" href="../servicios/index.php">Servicios</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
          <li class="nav-item"><a class="nav-link" href="../habitaciones/index.php">Habitaciones</a></li>
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
  <header class="hero-main" style="--hero-image: url('../../assets/img/portada/hero-principal.png');">
    <div class="container hero-content py-5">
      <div class="row">
        <div class="col-lg-8" data-reveal>
          <p class="hero-kicker mb-2">Hotel urbano premium</p>
          <h1 class="display-5 fw-semibold">Tu descanso comienza aqui</h1>
          <p class="lead mb-4">Hospitalidad que deja huella, habitaciones que inspiran y una ubicacion estrategica para tu viaje de negocio o placer.</p>
          <div class="d-flex flex-wrap gap-2">
            <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
            <a href="../reservas/index.php" class="btn btn-primary">Reservar ahora</a>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
            <a href="../habitaciones/index.php" class="btn btn-outline-light">Explorar habitaciones</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Seccion de contenido de esta pagina. -->
  <section class="py-4">
    <div class="container">
      <div class="row g-3">
        <div class="col-md-6 col-xl-3" data-reveal>
          <article class="info-card">
            <h2 class="h5 mb-1">Check-in</h2>
            <p class="mb-0 fw-semibold text-secondary">3:00 PM</p>
          </article>
        </div>
        <div class="col-md-6 col-xl-3" data-reveal>
          <article class="info-card">
            <h2 class="h5 mb-1">Check-out</h2>
            <p class="mb-0 fw-semibold text-secondary">12:00 PM</p>
          </article>
        </div>
        <div class="col-md-6 col-xl-3" data-reveal>
          <article class="info-card">
            <h2 class="h5 mb-1">Telefono</h2>
            <p class="mb-0 fw-semibold text-secondary">+506 2222-2222</p>
          </article>
        </div>
        <div class="col-md-6 col-xl-3" data-reveal>
          <article class="info-card">
            <h2 class="h5 mb-1">Correo</h2>
            <p class="mb-0 fw-semibold text-secondary">contacto@hotelterra.com</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion de contenido de esta pagina. -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-4" data-reveal>
        <h2>Habitaciones destacadas</h2>
        <p class="text-secondary mb-0">Opciones para parejas, familias y viajes ejecutivos.</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/habitaciones/estandar/estandar-1.jpg" alt="Habitacion estandar Hotel Terra">
            <h3 class="h5">Estandar</h3>
            <p class="text-secondary mb-2">Comodidad funcional para estancias practicas y relajadas.</p>
            <p class="fw-bold text-primary mb-3">Desde $70 por noche</p>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
            <a class="btn btn-primary btn-sm" href="../reservas/index.php">Reservar</a>
          </article>
        </div>
        <div class="col-lg-4 col-md-6" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/habitaciones/familiar/familiar-1.png" alt="Habitacion familiar Hotel Terra">
            <h3 class="h5">Familiar</h3>
            <p class="text-secondary mb-2">Espacio amplio con distribucion ideal para grupos familiares.</p>
            <p class="fw-bold text-primary mb-3">Desde $110 por noche</p>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
            <a class="btn btn-primary btn-sm" href="../reservas/index.php">Reservar</a>
          </article>
        </div>
        <div class="col-lg-4 col-md-6" data-reveal>
          <article class="hotel-card h-100">
            <img class="card-media mb-3" src="../../assets/img/habitaciones/suite/suite-1.png" alt="Suite Hotel Terra">
            <h3 class="h5">Suite</h3>
            <p class="text-secondary mb-2">Ambiente premium con acabados sofisticados y mayor privacidad.</p>
            <p class="fw-bold text-primary mb-3">Desde $160 por noche</p>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
            <a class="btn btn-primary btn-sm" href="../reservas/index.php">Reservar</a>
          </article>
        </div>
      </div>
      <div class="text-center mt-4" data-reveal>
        <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
        <a href="../habitaciones/index.php" class="btn btn-outline-primary">Ver todas las habitaciones</a>
      </div>
    </div>
  </section>

  <!-- Seccion de contenido de esta pagina. -->
  <section class="section-soft py-5">
    <div class="container">
      <div class="text-center mb-4" data-reveal>
        <h2>Servicios destacados</h2>
        <p class="text-secondary mb-0">Una experiencia integral para tus dias de descanso.</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6" data-reveal>
          <article class="service-card h-100">
            <img class="card-media mb-3" src="../../assets/img/servicios/servicio-restaurante.jpg" alt="Servicio de restaurante">
            <h3 class="h6"><i class="bi bi-cup-hot-fill text-primary"></i> Restaurante</h3>
            <p class="mb-0 text-secondary">Menu variado para desayuno, almuerzo y cena.</p>
          </article>
        </div>
        <div class="col-lg-3 col-md-6" data-reveal>
          <article class="service-card h-100">
            <img class="card-media mb-3" src="../../assets/img/servicios/servicio-spa.jpg" alt="Servicio de spa">
            <h3 class="h6"><i class="bi bi-flower1 text-primary"></i> Spa</h3>
            <p class="mb-0 text-secondary">Tratamientos de relajacion para cuerpo y mente.</p>
          </article>
        </div>
        <div class="col-lg-3 col-md-6" data-reveal>
          <article class="service-card h-100">
            <img class="card-media mb-3" src="../../assets/img/servicios/servicio-piscina.jpg" alt="Servicio de piscina">
            <h3 class="h6"><i class="bi bi-water text-primary"></i> Piscina</h3>
            <p class="mb-0 text-secondary">Zona refrescante con ambiente seguro y familiar.</p>
          </article>
        </div>
        <div class="col-lg-3 col-md-6" data-reveal>
          <article class="service-card h-100">
            <img class="card-media mb-3" src="../../assets/img/servicios/servicio-transporte.jpg" alt="Servicio de transporte">
            <h3 class="h6"><i class="bi bi-bus-front-fill text-primary"></i> Transporte</h3>
            <p class="mb-0 text-secondary">Traslados coordinados para mayor comodidad.</p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion de contenido de esta pagina. -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-4" data-reveal>
        <h2>Opiniones de huespedes</h2>
        <p class="text-secondary mb-0">Experiencias reales de viajeros que eligieron Hotel Terra.</p>
      </div>
      <div class="row g-4">
        <div class="col-lg-4" data-reveal>
          <article class="hotel-card h-100">
            <p class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
            <p class="mb-2">"Excelente ubicacion y trato impecable durante toda la estadia."</p>
            <strong>Laura M.</strong>
          </article>
        </div>
        <div class="col-lg-4" data-reveal>
          <article class="hotel-card h-100">
            <p class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
            <p class="mb-2">"Habitaciones muy limpias y desayuno con excelente variedad."</p>
            <strong>Carlos R.</strong>
          </article>
        </div>
        <div class="col-lg-4" data-reveal>
          <article class="hotel-card h-100">
            <p class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
            <p class="mb-2">"El proceso de reserva fue rapido y muy claro."</p>
            <strong>Andrea P.</strong>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Seccion de contenido de esta pagina. -->
  <section class="section-soft py-5">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6" data-reveal>
          <h2>Ubicacion estrategica en San Jose</h2>
          <p class="text-secondary">Nos ubicamos en un punto centrico con acceso rapido a zonas comerciales y turisticas de la ciudad.</p>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
          <a class="btn btn-primary" href="../ubicacion/index.php">Como llegar</a>
        </div>
        <div class="col-lg-6" data-reveal>
          <div class="map-wrap ratio ratio-16x9">
            <iframe title="Mapa de Hotel Terra" src="https://www.google.com/maps?q=San+Jose+Costa+Rica&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pie de pagina con informacion general. -->
  <footer class="site-footer mt-5">
    <div class="container py-5">
      <div class="row g-4">
        <div class="col-lg-4">
          <h3 class="mb-3">Hotel Terra</h3>
          <p class="mb-0">Hotel Terra ofrece una experiencia moderna de navegacion, reserva y atencion personalizada.</p>
        </div>
        <div class="col-lg-4">
          <h4 class="h5 mb-3">Enlaces rapidos</h4>
          <ul class="list-unstyled mb-0">
            <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
            <li class="mb-2"><a href="../inicio/index.php">Inicio</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Servicios para mostrar lo que ofrece el hotel. -->
            <li class="mb-2"><a href="../servicios/index.php">Servicios</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
            <li class="mb-2"><a href="../habitaciones/index.php">Habitaciones</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
            <li class="mb-2"><a href="../reservas/index.php">Reservas</a></li>
            <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
            <li><a href="../ubicacion/index.php">Ubicacion</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4 class="h5 mb-3">Contactanos</h4>
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




