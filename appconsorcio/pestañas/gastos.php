
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
    <section id="gastos">
      <h2>Gastos y Pagos</h2>
      <table>
        <thead>
          <tr><th>Concepto</th><th>Monto</th><th>Estado</th></tr>
        </thead>
        <tbody>
          <tr><td>Luz</td><td>$15.000</td><td>Pagado</td></tr>
          <tr><td>Agua</td><td>$10.000</td><td>Pendiente</td></tr>
        </tbody>
      </table>
    </section>

    <section id="form-gastos">
  <h2>Registrar nuevo gasto</h2>
  <form id="formNuevoGasto">
    <label for="concepto">Concepto:</label>
    <input type="text" id="concepto" required>

    <label for="monto">Monto ($):</label>
    <input type="number" id="monto" required>

    <label for="estado">Estado:</label>
    <select id="estado" required>
      <option value="Pagado">Pagado</option>
      <option value="Pendiente">Pendiente</option>
    </select>

    <button type="submit">Agregar gasto</button>
  </form>
</section>

  </main>

  <script src="../js/menu.js"></script>
<script src="../js/gastos.js"></script></body>
</html>
