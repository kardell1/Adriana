<?php
session_start(); // Iniciar sesión al principio

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión

// Consulta para verificar las credenciales
$consulta = "SELECT * FROM usuarios WHERE user = '$user' AND password = '$password'";
$resultado = mysqli_query($conn, $consulta);

if ($filas = mysqli_fetch_array($resultado)) {
    // Si el usuario es administrador o cliente, redirigir a su respectiva página
    if ($filas['role_id'] == 1) {
        header("Location: admin.php");
    } elseif ($filas['role_id'] == 2) {
        header("Location: cliente.php");
    }
} else {
    // Si las credenciales no son correctas
    include("ECA");
    echo "<h1 class='bad'>ERROR EN LA AUTENTIFICACIÓN</h1>";
}

// Liberar resultados y cerrar conexión
mysqli_free_result($resultado);
mysqli_close($conexion);
?>