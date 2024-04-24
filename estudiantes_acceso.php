<!DOCTYPE html>
<html>
<head>
    <title>Acceso Estudiantes</title>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style-form.css" rel="stylesheet">
    
</head>
<body>
    <div class="login-container">
        <form action="login-estudiantes.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
</body>
</html>
