<?php include("../navbar.php"); ?>

<!-- Estructura base para cada HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Consorcio</title>
  <link rel="stylesheet" href="/appconsorcio/css/style.css">
</head>
<body>
  
    <?php
      echo "<p>Tu rol actual es: <strong>$rol</strong></p>";
    ?>
  

  <main>
    
 <section id="edificio">
      <h2>Datos del Edificio</h2>
      <p>Dirección: Av. Siempre Viva 123</p>
      <p>Encargado: Juan Pérez</p>
    </section>


  </main>

  <script src="../js/menu.js"></script>
  <!-- Agregás aquí el JS específico de la página -->
</body>
</html>
