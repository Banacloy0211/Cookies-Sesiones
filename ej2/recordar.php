



<?php
session_start();

// Si el usuario selecciona "Recordar"
if (isset($_REQUEST['recordar'])) {
    // Guardar el nombre de usuario y la contraseña en la sesión
    $_SESSION['nombreUser'] = $_POST['nombre'];
    $_SESSION['passUser'] = $_POST['pass'];
} else {
    // Si no se selecciona "Recordar", eliminar los datos de la sesión
    unset($_SESSION['nombreUser']);
    unset($_SESSION['passUser']);
}

// Mostrar mensaje de bienvenida
if (isset($_SESSION['nombreUser'])) {
    echo "Bienvenido, " . $_SESSION['nombreUser'];
} else {
    echo "Por favor, inicie sesión.";
}
// session_start();
// if (isset($_POST['recordar'])){
        // $_SESSION['nombreUser'] = $_POST['nombre'];
        // $_SESSION['passUser'] = $_POST['pass'];
    // }
    // else{
    //     unset($_SESSION['nombreUser']);
    //     unset($_SESSION['passUser']);
    //     session_destroy();
    // }
    // echo "Bienvenido " . $_SESSION['nombreUser'];
  /*
session_start();

// Verificar si se envió el formulario


    // Si se selecciona "Recordar", guardar en sesión
if (isset($_REQUEST['recordar'])) {
    $_SESSION['nombreUser'] = $_REQUEST['nombre']; // Guardar nombre en sesión
    $_SESSION['passUser'] = $_POST['pass']; // Opcional, solo para recordar, no recomendado
} 

print_r($_SESSION);
echo $_SESSION['nombreUser'];
   
 else {
    echo "Por favor, inicie sesión.";
}
*/
?>
