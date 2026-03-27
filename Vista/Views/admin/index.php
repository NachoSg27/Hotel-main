<?php
// Iniciamos sesion para mantener al administrador autenticado entre recargas.
session_start();

// Credenciales de ejemplo para un entorno de practica (nivel principiante).
$usuarioDemo = "admin";
$claveDemo = "1234";

// Variable para mostrar errores simples en pantalla cuando el login falla.
$mensajeError = "";

// Si el usuario pulsa "Cerrar sesion", destruimos sesion y volvemos al mismo panel.
if (isset($_GET["cerrar"]) && $_GET["cerrar"] === "1") {
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
}

// Procesamos el formulario solo cuando se envia por metodo POST.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Guardamos datos enviados y quitamos espacios para validar mejor.
  $usuarioIngresado = trim($_POST["usuario"] ?? "");
  $claveIngresada = trim($_POST["clave"] ?? "");

  // Validacion basica de usuario y clave para habilitar el panel admin.
  if ($usuarioIngresado === $usuarioDemo && $claveIngresada === $claveDemo) {
    $_SESSION["admin_activo"] = true;
    $_SESSION["admin_nombre"] = $usuarioIngresado;
    header("Location: index.php");
    exit;
  } else {
    $mensajeError = "Usuario o clave incorrecta. Prueba con admin / 1234.";
  }
}

// Bandera para saber si se muestra login o dashboard.
$adminActivo = isset($_SESSION["admin_activo"]) && $_SESSION["admin_activo"] === true;
?>
<!doctype html>
<html lang="es">
<head>
  <!-- Meta charset para caracteres especiales. -->
  <meta charset="UTF-8">
  <!-- Meta viewport para correcta adaptacion movil. -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Titulo de la pestana para identificar el panel. -->
  <title>Hotel Terra | Panel Administrador</title>

  <!-- Bootstrap para componentes visuales rapidos y faciles de explicar. -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons para iconografia simple del panel. -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Hoja de estilos del proyecto para mantener identidad visual. -->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body class="bg-light">
  <!-- Barra superior del panel para volver al sitio publico y cerrar sesion. -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
    <div class="container">
      <!-- Enlace: vuelve al inicio general para no perder navegacion del sitio publico. -->
      <a class="navbar-brand brand-title" href="../../../index.php">HOTEL TERRA - ADMIN</a>
      <div class="ms-auto d-flex gap-2">
        <!-- Enlace: permite regresar al inicio publico del hotel. -->
        <a class="btn btn-outline-primary btn-sm" href="../inicio/index.php">Ver sitio</a>
        <?php if ($adminActivo): ?>
          <!-- Enlace: abre el dashboard visual (AdminLTE) para mostrar una vista administrativa mas completa. -->
          <a class="btn btn-outline-secondary btn-sm" href="../dashboard/index.php">Dashboard visual</a>
        <?php endif; ?>
        <?php if ($adminActivo): ?>
          <!-- Enlace: cierra sesion admin para proteger el panel cuando termina la gestion. -->
          <a class="btn btn-danger btn-sm" href="index.php?cerrar=1">Cerrar sesion</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <main class="py-5">
    <div class="container">
      <?php if (!$adminActivo): ?>
        <!-- Formulario de acceso admin: paso simple para entrar al panel de control. -->
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <article class="hotel-card">
              <h1 class="h4 mb-3">Acceso de administrador</h1>
              <p class="text-secondary mb-3">Este login es de practica para mostrar como entrar a un panel.</p>

              <?php if ($mensajeError !== ""): ?>
                <!-- Alerta de error para guiar al usuario cuando falla el login. -->
                <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($mensajeError, ENT_QUOTES, "UTF-8"); ?></div>
              <?php endif; ?>

              <!-- Formulario POST: envia usuario y clave al mismo archivo para validacion. -->
              <form action="index.php" method="post" class="row g-3">
                <div class="col-12">
                  <label for="usuario" class="form-label">Usuario</label>
                  <input id="usuario" name="usuario" type="text" class="form-control" placeholder="admin" required>
                </div>
                <div class="col-12">
                  <label for="clave" class="form-label">Clave</label>
                  <input id="clave" name="clave" type="password" class="form-control" placeholder="1234" required>
                </div>
                <div class="col-12 d-grid">
                  <button type="submit" class="btn btn-primary">Ingresar al panel</button>
                </div>
              </form>

              <!-- Nota educativa para que el novato explique credenciales demo. -->
              <p class="small text-secondary mt-3 mb-0">Demo: usuario <strong>admin</strong> y clave <strong>1234</strong>.</p>
            </article>
          </div>
        </div>
      <?php else: ?>
        <!-- Dashboard principal: muestra resumen rapido del estado del hotel. -->
        <section class="mb-4">
          <h1 class="h3 mb-1">Panel de control</h1>
          <p class="text-secondary mb-0">Bienvenido, <?php echo htmlspecialchars($_SESSION["admin_nombre"], ENT_QUOTES, "UTF-8"); ?>. Aqui puedes revisar informacion operativa.</p>
        </section>

        <!-- Tarjetas de resumen: facil de explicar en una exposicion inicial. -->
        <section class="row g-4 mb-4">
          <div class="col-md-3">
            <article class="hotel-card h-100">
              <p class="text-secondary mb-1">Reservas pendientes</p>
              <h2 class="h4 mb-0"><i class="bi bi-journal-check text-primary"></i> 8</h2>
            </article>
          </div>
          <div class="col-md-3">
            <article class="hotel-card h-100">
              <p class="text-secondary mb-1">Habitaciones ocupadas</p>
              <h2 class="h4 mb-0"><i class="bi bi-door-open text-primary"></i> 32</h2>
            </article>
          </div>
          <div class="col-md-3">
            <article class="hotel-card h-100">
              <p class="text-secondary mb-1">Solicitudes nuevas</p>
              <h2 class="h4 mb-0"><i class="bi bi-envelope text-primary"></i> 5</h2>
            </article>
          </div>
          <div class="col-md-3">
            <article class="hotel-card h-100">
              <p class="text-secondary mb-1">Ingresos del dia</p>
              <h2 class="h4 mb-0"><i class="bi bi-currency-dollar text-primary"></i> 1,250</h2>
            </article>
          </div>
        </section>

        <!-- Tabla de reservas: ejemplo visual de gestion de datos en el panel. -->
        <section class="hotel-card mb-4">
          <h2 class="h5 mb-3">Reservas recientes</h2>
          <div class="table-responsive">
            <table class="table table-striped align-middle mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Habitacion</th>
                  <th>Entrada</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>R-101</td>
                  <td>Laura Mora</td>
                  <td>Suite</td>
                  <td>2026-03-30</td>
                  <td><span class="badge text-bg-warning">Pendiente</span></td>
                </tr>
                <tr>
                  <td>R-102</td>
                  <td>Carlos Diaz</td>
                  <td>Familiar</td>
                  <td>2026-03-29</td>
                  <td><span class="badge text-bg-success">Confirmada</span></td>
                </tr>
                <tr>
                  <td>R-103</td>
                  <td>Andrea Ruiz</td>
                  <td>Estandar</td>
                  <td>2026-03-28</td>
                  <td><span class="badge text-bg-info">En proceso</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Accesos rapidos: navega a secciones publicas para revisar contenido del sitio. -->
        <section class="row g-3">
          <div class="col-md-3"><!-- Enlace: abre Inicio publico para verificar portada y navegacion principal. --><a class="btn btn-outline-primary w-100" href="../inicio/index.php">Inicio publico</a></div>
          <div class="col-md-3"><!-- Enlace: abre Servicios para validar contenido disponible al cliente. --><a class="btn btn-outline-primary w-100" href="../servicios/index.php">Servicios</a></div>
          <div class="col-md-3"><!-- Enlace: abre Habitaciones para revisar catalogo y precios visibles. --><a class="btn btn-outline-primary w-100" href="../habitaciones/index.php">Habitaciones</a></div>
          <div class="col-md-3"><!-- Enlace: abre Reservas para probar formulario publico. --><a class="btn btn-outline-primary w-100" href="../reservas/index.php">Reservas</a></div>
        </section>

        <!-- Acceso directo al dashboard visual para presentar una version mas completa del panel. -->
        <section class="mt-4">
          <!-- Enlace: abre el dashboard AdminLTE incorporado al proyecto sin requerir reportes reales. -->
          <a class="btn btn-dark" href="../dashboard/index.php"><i class="bi bi-speedometer2"></i> Ir al dashboard visual</a>
        </section>
      <?php endif; ?>
    </div>
  </main>

  <!-- Script de Bootstrap para interacciones basicas de componentes. -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
