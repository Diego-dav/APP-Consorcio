<?php
session_start();
if (isset($_SESSION['rol'])) {
  // Redirección automática si ya hay sesión abierta
  if ($_SESSION['rol'] == 'admin') {
    header("Location: pestañas/propietarios.php");
  } else {
    header("Location: pestañas/gastos.php");
  }
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ingreso al Consorcio</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main class="login-container">
    <div class="login-card">
      <h2>Acceso al Sistema</h2>
      <p class="login-sub">Administración del Consorcio</p>

      <form action="validar_login.php" method="POST">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="btn-login">Ingresar</button>
      </form>

      <?php if (isset($_GET['error'])): ?>
        <p class="error-msg">Usuario o contraseña incorrectos</p>
      <?php endif; ?>
    </div>
  </main>
</body>
</html>
