<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zona de Propietarios</title>
  <link rel="stylesheet" href="/appconsorcio/css/style.css">
</head>
<body>
  
   <?php
      echo "<p>Tu rol actual es: <strong>$rol</strong></p>";
    ?>

  <main>
    <section id="gastos">
      <h2>Gastos del Consorcio</h2>
      <!-- Tabla de gastos SOLO lectura -->
    </section>

    <section id="mejoras">
      <h2>Propuestas de Mejora</h2>
      <!-- Lista de propuestas + botones de votación -->
    </section>

    <section id="contacto">
      <h2>Enviar Consulta o Reclamo</h2>
      <!-- Formulario de contacto -->
    </section>
  </main>

  <script src="js/menu.js"></script>
  <script src="js/mejoras.js"></script>
  <script src="js/contacto.js"></script>
</body>
</html>
