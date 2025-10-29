<?php
session_start();
session_destroy(); // elimina todas las variables de sesión
header("Location: /appconsorcio/index.php");
exit();
?>
    