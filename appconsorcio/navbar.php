<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Simulamos un usuario logueado (solo mientras probás)
// $_SESSION['rol'] = 'admin';

$rol = $_SESSION['rol'] ?? null;


?>

<!-- A partir de acá es HTML con algo de PHP mezclado -->
<head>
 <link rel="stylesheet" href="/appconsorcio/css/style.css">
</head>
<nav class="menu">
  <div class="logo">Consorcio</div>
  <button class="menu-toggle" id="menu-toggle">&#9776;</button>
  <div id="menu">
    <a href="/appconsorcio/index.php">Inicio</a>

    <?php if ($rol === 'admin'): ?>
      <!-- Opciones solo para administradores -->
      <a href="/appconsorcio/pestañas/propietarios.php">Propietarios</a>
      <a href="/appconsorcio/pestañas/gastos.php">Gastos</a>
      <a href="/appconsorcio/pestañas/mejoras.php">Mejoras</a>
      <a href="/appconsorcio/pestañas/mensajes.php">Mensajes</a>
      <a href="/appconsorcio/alta_usuarios.php">Alta de Usuarios</a>

      <a href="/appconsorcio/logout.php">Cerrar sesión</a>

    <?php else: ?>
      <!-- Opciones solo para propietarios/inquilinos -->
      <a href="/appconsorcio/pestañas/gastos.php">Gastos</a>
      <a href="/appconsorcio/pestañas/mejoras.php">Mejoras</a>
      <a href="/appconsorcio/pestañas/contacto.php">Contacto</a>

      <a href="/appconsorcio/logout.php">Cerrar sesión</a>

    <?php endif; ?>
  </div>
</nav>

<script src="/appconsorcio/js/menu.js"></script>