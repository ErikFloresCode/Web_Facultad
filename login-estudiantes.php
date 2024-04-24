<?php
    include("BaseDatos.php");
    $bd = new BaseDatos();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        $sql = "SELECT * FROM estudiantes WHERE usuario = '$usuario' AND contrasena = '$contrasena';";
        $rows = $bd->consulta($sql);

        if (count($rows) > 0) {
            header("Location: docentes.php");
            exit;
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }
?>
