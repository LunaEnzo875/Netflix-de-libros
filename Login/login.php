<?php
// Usuario y contraseña fijos
$usuario_correcto = "admin";
$contraseña_correcta = "1234";

// Obtener datos del formulario
$usuario = $_POST['usuario'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';

// Validar
if ($usuario === $usuario_correcto && $contraseña === $contraseña_correcta) {
    // Login correcto, redirigir a página de bienvenida
    header("Location: bienvenido.php");
    exit();
} else {
    // Login incorrecto, redirigir con error
    header("Location: login.html?error=1");
    exit();
}
