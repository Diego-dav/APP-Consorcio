<?php include("../navbar.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Consorcio</title>
  <link rel="stylesheet" href="../css/Style.css">
</head>
<body>
  <header>
    <div class="logo">Mi Consorcio</div>
    <button class="menu-toggle" id="menu-toggle">&#9776;</button>
    <?php
      echo "<p>Tu rol actual es: <strong>$rol</strong></p>";
    ?>
  </header>

  <main>

      <section id="propietarios">
      <h2>Lista de Propietarios</h2>
      <ul>
        <li>Depto 1A - Ana Gómez</li>
        <li>Depto 2B - Mario Ruiz</li>
        <li>Depto 3C - Laura Medina</li>
      </ul>
    </section>

    <section id="form-propietario">
  <h2>Agregar nuevo propietario</h2>
  <form id="formNuevoPropietario">
    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" required>

    <label for="departamento">Departamento:</label>
    <input type="text" id="departamento" required>

    <button type="submit">Guardar</button>
  </form>

  <div id="listaPropietarios">
    <!-- Se van a mostrar los nuevos propietarios acá -->
  </div>
</section>

  </main>

  <script src="../js/menu.js"></script>
  <script src="../js/propietarios.js"></script>
</body>
</html>
