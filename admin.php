<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administración del Consorcio</title>
  <link rel="stylesheet" href="/appconsorcio/css/style.css">
</head>
<body>
  
  <?php
      echo "<p>Tu rol actual es: <strong>$rol</strong></p>";
    ?>

  <main>
    <section id="propietarios">
      <h2>Gestión de Propietarios</h2>
      <!-- Tabla + Formulario para agregar propietarios -->
    </section>

    <section id="gastos">
      <h2>Gestión de Gastos</h2>
      <!-- Tabla + Formulario para registrar gastos -->
    </section>

    <section id="mejoras">
      <h2>Propuestas de Mejora</h2>
      <!-- Lista de propuestas + opción de agregar nuevas -->
    </section>

    <section id="contacto">
      <h2>Mensajes recibidos</h2>
      <!-- Lista de mensajes/reclamos -->
    </section>
  </main>

  <script src="js/menu.js"></script>
  <script src="js/propietarios.js"></script>
  <script src="js/gastos.js"></script>
  <script src="js/mejoras.js"></script>
</body>
</html>
