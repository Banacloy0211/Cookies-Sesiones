<?php 
    session_start();

    if (isset($_POST['recordar'])){
        $_SESSION['nombreUser'] = $_POST['nombre'];
        $_SESSION['passUser'] = $_POST['pass'];
        setcookie('user', $_SESSION['nombreUser'], time()+1000);
        echo "Se creo la cookie.";
    }
    // else{
    //     unset($_SESSION['nombreUser']);
    //     unset($_SESSION['passUser']);
    //     session_destroy();
    // }
    if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])){
        echo "Hola ".$_COOKIE['user']."!";
    }
    
?>