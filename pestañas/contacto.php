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
<section id="contacto">
  <h2>Contacto / Reclamos</h2>
  <form id="formContacto">
    <label for="nombreContacto">Nombre completo:</label>
    <input type="text" id="nombreContacto" required>

    <label for="departamentoContacto">Departamento:</label>
    <input type="text" id="departamentoContacto" required>

    <label for="tipoMensaje">Tipo de mensaje:</label>
    <select id="tipoMensaje" required>
      <option value="Consulta">Consulta</option>
      <option value="Reclamo">Reclamo</option>
      <option value="Sugerencia">Sugerencia</option>
    </select>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" rows="4" required></textarea>

    <button type="submit">Enviar mensaje</button>
  </form>

  <div id="respuestaContacto" class="respuesta-oculta"></div>
</section>
  </main>

  <script src="../js/menu.js"></script>
<script src="../js/contacto.js"></script>
</body>
</html>
