<!doctype html>
<html lang="es">
<head>
  <!-- Meta charset para que se vean bien tildes-->
  <meta charset="UTF-8">
  <!-- Meta viewport para que la pagina se adapte a celular y compu  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Titulo de la pestana del navegador. -->
  <title>Hotel Terra | Entrada Auxiliar</title>

  <!-- Preconexion a Google Fonts para mejorar carga-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- Segunda preconexion de fuentes con crossorigin -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Fuentes del proyecto tomadas de Google Fonts. -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS de Bootstrap para usar grilla y componentes -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Iconos de Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Hoja de estilos propia del proyecto. -->
  <link rel="stylesheet" href="../Vista/assets/css/style.css">
</head>
<body>
  <!-- Menu principal para moverse entre secciones. -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm sticky-top">
    <div class="container">
      <!-- Enlace: Enlace de navegacion: regresa al inicio general del proyecto para no perder el contexto. -->
      <a class="navbar-brand brand-title" href="../index.php">HOTEL TERRA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#auxMenu" aria-controls="auxMenu" aria-expanded="false" aria-label="Abrir menu auxiliar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="auxMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
          <li class="nav-item"><a class="nav-link active" href="../Vista/Views/inicio/index.php">Inicio</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Servicios para mostrar lo que ofrece el hotel. -->
          <li class="nav-item"><a class="nav-link" href="../Vista/Views/servicios/index.php">Servicios</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Habitaciones para comparar tipos y precios. -->
          <li class="nav-item"><a class="nav-link" href="../Vista/Views/habitaciones/index.php">Habitaciones</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Reservas para completar el formulario de solicitud. -->
          <li class="nav-item"><a class="nav-link" href="../Vista/Views/reservas/index.php">Reservas</a></li>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
          <li class="nav-item"><a class="nav-link" href="../Vista/Views/ubicacion/index.php">Ubicacion</a></li>
          <!-- Enlace: Enlace de administracion: abre el panel de control para gestionar informacion del hotel. -->
          <li class="nav-item"><a class="nav-link" href="../Vista/Views/admin/index.php">Panel admin</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bloque principal para presentar esta seccion. -->
  <header class="hero-main" style="--hero-image: url('../Vista/assets/img/portada/hero-secundaria.png');">
    <div class="container hero-content py-5" data-reveal>
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <p class="hero-kicker mb-2">Acceso complementario</p>
          <h1 class="display-5 fw-semibold">Acceso rapido a Hotel Terra</h1>
          <p class="lead mb-4">Desde esta pagina puedes ingresar de forma inmediata a todas las secciones del hotel con una experiencia visual consistente.</p>
          <!-- Enlace: Enlace de navegacion: abre la seccion de Inicio para regresar al punto principal de la experiencia. -->
          <a class="btn btn-primary" href="../Vista/Views/inicio/index.php">Ir al Inicio Oficial</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Contenido principal de la pagina. -->
  <main class="py-5">
    <section class="container">
      <div class="row g-4">
        <div class="col-md-6" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-folder2-open text-primary"></i> Ruta recomendada</h2>
            <p class="mb-0">Descubre nuestras habitaciones, servicios y opciones de reserva en un solo recorrido.</p>
          </article>
        </div>
        <div class="col-md-6" data-reveal>
          <article class="hotel-card h-100">
            <h2 class="h4 mb-2"><i class="bi bi-ui-checks-grid text-primary"></i> Experiencia de marca</h2>
            <p class="mb-0">Cada seccion mantiene el estilo y la calidez que representan a Hotel Terra.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

  <!-- Pie de pagina con informacion general. -->
  <footer class="site-footer mt-5">
    <div class="container py-4 text-center">
      <p class="mb-1"><strong>Hotel Terra</strong> | Entrada Auxiliar</p>
      <p class="mb-0">Te damos la bienvenida a una experiencia de descanso, confort y atencion personalizada.</p>
    </div>
    <div class="footer-credit py-3 text-center">Hotel Terra - Todos los derechos reservados.</div>
  </footer>

  <!-- Script de Bootstrap para menu movil y componentes -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Script propio con animaciones y validaciones basicas. -->
  <script src="../Controlador/app.js"></script>
</body>
</html>




