<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = md5($_POST['password']); // ciframos igual que al guardar en la base

    // Consulta SQL
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }

    if ($result->num_rows == 1) {
        $usuario = $result->fetch_assoc();

        // Guardamos datos en sesión
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];

        // Redirigimos según el rol
        if ($usuario['rol'] == 'admin') {
            header("Location: pestañas/propietarios.php");
            exit();
        } else {
            header("Location: pestañas/gastos.php");
            exit();
        }

    } else {
        header("Location: index.php?error=1");
        exit();
    }

} else {
    header("Location: index.php");
    exit();
}
?>
