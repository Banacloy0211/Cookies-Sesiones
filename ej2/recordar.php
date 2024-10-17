<?php 
    $nombre = $_POST['nombre'];
    
    if (isset($_POST['recordar'])){
        setcookie('user', $nombre , time()+1000);  
        echo "Se te recordara la proxima vez"; 
       
    }

    
    
    if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])){
        echo "Hola ".$_COOKIE['user']."!";
    }
    // else{
    //     unset($_SESSION['nombreUser']);
    //     unset($_SESSION['passUser']);
    //     session_destroy();
    // }   
    




    /* Código de mierda de chatgpt */ 

     // Comprobar si ya existe la cookie en una nueva sesión ANTES de cualquier salida
    // if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])) {
    // echo "Bienvenido de nuevo, " . htmlspecialchars($_COOKIE['user']) . "!";
    // } else {
        // Comprobar si se ha enviado el formulario
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $nombre = $_POST['nombre'];
            
           // Si la opción "Recordar" está seleccionada, crear la cookie
    //         if (isset($_POST['recordar'])) {
    //             setcookie('user', $nombre, time() + 3600 * 24 * 30); // La cookie dura 30 días
    //             echo "Hola $nombre, te recordaremos en tu próxima sesión.";
    //         } 
    //     } else {
    //         echo "Inicia la sesión.";
    //     }
    // }
?>
