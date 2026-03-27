<?php
// Variable para saber si el formulario ya fue enviado y asi mostrar un mensaje al usuario.
$reservaEnviada = false;
// Arreglo donde guardamos los datos recibidos del formulario.
$datosReserva = [];

// Este bloque se ejecuta solo cuando el usuario envia el formulario (metodo POST).
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $reservaEnviada = true;

  // Guardamos campos principales y usamos htmlspecialchars para evitar inyeccion de HTML.
  $datosReserva["nombre"] = htmlspecialchars($_POST["full_name"] ?? "", ENT_QUOTES, "UTF-8");
  $datosReserva["correo"] = htmlspecialchars($_POST["email"] ?? "", ENT_QUOTES, "UTF-8");
  $datosReserva["habitacion"] = htmlspecialchars($_POST["room_type"] ?? "", ENT_QUOTES, "UTF-8");
  $datosReserva["entrada"] = htmlspecialchars($_POST["checkin"] ?? "", ENT_QUOTES, "UTF-8");
  $datosReserva["salida"] = htmlspecialchars($_POST["checkout"] ?? "", ENT_QUOTES, "UTF-8");
  $datosReserva["mensaje"] = htmlspecialchars($_POST["notes"] ?? "", ENT_QUOTES, "UTF-8");
}
?>
<!doctype html>
<html lang="es">
<head>
  <!-- Meta charset para que se vean bien tildes y enes (idea de MDN). -->
  <meta charset="UTF-8">
  <!-- Meta viewport para que la pagina se adapte a celular y compu (idea de MDN). -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Titulo de la pestana del navegador. -->
  <title>Hotel Terra | Reservas</title>

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
          <li class="nav-item"><a class="nav-link active" href="../reservas/index.php">Reservas</a></li>
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
      <p class="hero-kicker mb-2">Atencion personalizada</p>
      <h1 class="display-6">Reserva o consulta</h1>
      <p class="text-secondary mb-0">Completa el formulario y nuestro equipo te respondera en breve.</p>
    </div>
  </header>

  <!-- Contenido principal de la pagina. -->
  <main class="py-5">
    <section class="container">
      <div class="row g-4">
        <div class="col-lg-7" data-reveal>
          <article class="form-card h-100">
            <h2 class="h4 mb-3">Formulario de solicitud</h2>
            <?php if ($reservaEnviada): ?>
              <div class="alert alert-success" role="alert">
                <h3 class="h6 mb-2">Solicitud enviada</h3>
                <p class="mb-1"><strong>Nombre:</strong> <?php echo $datosReserva["nombre"]; ?></p>
                <p class="mb-1"><strong>Correo:</strong> <?php echo $datosReserva["correo"]; ?></p>
                <p class="mb-1"><strong>Habitacion:</strong> <?php echo $datosReserva["habitacion"]; ?></p>
                <p class="mb-1"><strong>Fechas:</strong> <?php echo $datosReserva["entrada"]; ?> a <?php echo $datosReserva["salida"]; ?></p>
                <p class="mb-0"><strong>Mensaje:</strong> <?php echo $datosReserva["mensaje"]; ?></p>
              </div>
            <?php endif; ?>
            <form class="row g-3" action="index.php" method="post" novalidate>
              <div class="col-md-6">
                <label for="fullName" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Ingresa tu nombre completo" required>
              </div>
              <div class="col-md-6">
                <label for="emailAddress" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="emailAddress" name="email" placeholder="correo@ejemplo.com" required>
              </div>
              <div class="col-md-6">
                <label for="phoneNumber" class="form-label">Telefono</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phone" placeholder="+506 0000-0000" required>
              </div>
              <div class="col-md-3">
                <label for="checkinDate" class="form-label">Fecha de entrada</label>
                <input type="date" class="form-control" id="checkinDate" name="checkin" required>
              </div>
              <div class="col-md-3">
                <label for="checkoutDate" class="form-label">Fecha de salida</label>
                <input type="date" class="form-control" id="checkoutDate" name="checkout" required>
              </div>
              <div class="col-md-6">
                <label for="roomType" class="form-label">Tipo de habitacion</label>
                <select class="form-select" id="roomType" name="room_type" required>
                  <option value="" selected>Seleccionar</option>
                  <option value="estandar">Estandar</option>
                  <option value="familiar">Familiar</option>
                  <option value="suite">Suite</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="guestCount" class="form-label">Cantidad de huespedes</label>
                <input type="number" class="form-control" id="guestCount" name="guests" min="1" placeholder="1" required>
              </div>
              <div class="col-12">
                <label for="notes" class="form-label">Mensaje adicional</label>
                <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Comparte cualquier detalle importante para tu reserva."></textarea>
              </div>
              <div class="col-12 d-grid d-md-flex gap-2">
                <button type="submit" class="btn btn-primary">Enviar solicitud</button>
                <button type="reset" class="btn btn-outline-secondary">Limpiar formulario</button>
              </div>
            </form>
          </article>
        </div>

        <div class="col-lg-5" data-reveal>
          <article class="contact-card h-100">
            <h2 class="h4 mb-3">Contacto rapido</h2>
            <ul class="list-unstyled mb-4">
              <li class="mb-2"><i class="bi bi-telephone-fill text-primary"></i> +506 2222-2222</li>
              <li class="mb-2"><i class="bi bi-telephone-fill text-primary"></i> +506 8888-8888</li>
              <li class="mb-2"><i class="bi bi-envelope-fill text-primary"></i> contacto@hotelterra.com</li>
              <li><i class="bi bi-geo-alt-fill text-primary"></i> San Jose, Costa Rica</li>
            </ul>
            <h3 class="h5 mb-2">Horario de atencion</h3>
            <p class="text-secondary mb-4">Todos los dias de 7:00 AM a 10:00 PM.</p>
            <div class="ratio ratio-16x9 map-wrap">
              <iframe title="Mapa de referencia para Hotel Terra" src="https://www.google.com/maps?q=San+Jose+Costa+Rica&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
          <p class="mb-0">Canal oficial para gestionar solicitudes de reserva y consultas especiales.</p>
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
            <!-- Enlace: Enlace de navegacion: abre la seccion de Ubicacion para ver mapa y datos de llegada. -->
            <li><a href="../ubicacion/index.php">Ubicacion</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h4 class="h5 mb-3">Soporte</h4>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><i class="bi bi-clock-fill"></i> 7:00 AM - 10:00 PM</li>
            <li class="mb-2"><i class="bi bi-shield-check"></i> Confirmacion segura</li>
            <li><i class="bi bi-chat-left-text-fill"></i> Respuesta rapida</li>
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






