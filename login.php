<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="POST">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    
</body>

</html>