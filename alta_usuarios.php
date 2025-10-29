<?php
session_start();

// 1️⃣ Verificamos que haya sesión y que el rol sea admin
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
  header("Location: /appconsorcio/index.php");
  exit();
}

// 2️⃣ Incluimos la conexión a la base
include("db.php");

// 3️⃣ Variable para guardar mensajes de resultado
$mensaje = "";

// 4️⃣ Si se envió el formulario (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenemos los valores enviados
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $password = md5($_POST['password']); // ciframos la contraseña
  $rol = $_POST['rol'];

  // Verificamos si ya existe el email
  $sql_check = "SELECT * FROM usuarios WHERE email='$email'";
  $resultado = $conn->query($sql_check);

  if ($resultado->num_rows > 0) {
    // Ya existe ese correo
    $mensaje = "⚠️ El correo ingresado ya está registrado.";
  } else {
    // Si no existe, lo insertamos
    $sql_insert = "INSERT INTO usuarios (nombre, email, password, rol)
                   VALUES ('$nombre', '$email', '$password', '$rol')";

    if ($conn->query($sql_insert) === TRUE) {
      $mensaje = "✅ Usuario creado con éxito.";
    } else {
      $mensaje = "❌ Error al guardar: " . $conn->error;
    }
  }
}
?>


<?php include("navbar.php"); ?>



<main class="alta-usuarios-container">
  <h2>Alta de Usuarios</h2>
  <p>Desde aquí podés registrar nuevos propietarios o administradores.</p>

  <form method="POST">
    <label>Nombre completo:</label>
    <input type="text" name="nombre" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <label>Rol:</label>
    <select name="rol" required>
      <option value="usuario">Usuario (Propietario/Inquilino)</option>
      <option value="admin">Administrador</option>
    </select>

    <button type="submit">Guardar usuario</button>
  </form>

  <?php if (!empty($mensaje)): ?>
    <div class="mensaje <?= strpos($mensaje, '✅') !== false ? 'exito' : 'error' ?>">
      <?= $mensaje ?>
    </div>
  <?php endif; ?>
</main>
