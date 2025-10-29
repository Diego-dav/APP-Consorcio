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

<section id="mejoras">
  <h2>Propuestas de mejora</h2>

  <div class="propuesta">
    <p><strong>Propuesta:</strong> Pintar el hall de entrada</p>
    <button class="votar" data-id="0" data-voto="si">👍 Sí</button>
    <button class="votar" data-id="0" data-voto="no">👎 No</button>
    <p class="contador">Votos: 👍 <span id="si-0">0</span> | 👎 <span id="no-0">0</span></p>
  </div>

  <div class="propuesta">
    <p><strong>Propuesta:</strong> Cambiar luminarias del pasillo</p>
    <button class="votar" data-id="1" data-voto="si">👍 Sí</button>
    <button class="votar" data-id="1" data-voto="no">👎 No</button>
    <p class="contador">Votos: 👍 <span id="si-1">0</span> | 👎 <span id="no-1">0</span></p>
  </div>

</section>

  </main>

  <script src="../js/menu.js"></script>
<script src="../js/mejoras.js"></script></body>
</html>
