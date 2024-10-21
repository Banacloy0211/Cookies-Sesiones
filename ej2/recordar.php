<?php 
    //Comprobar si el form se envia.
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $nombre = $_GET['nombre'];
        $password = $_GET['pass'];
        session_start();

        if (isset($_GET['recordar'])){
            //Si el usuario marca la opción "Recordar", crear la cookie
            $_SESSION['nombre_usuario'] = $nombre;
            setcookie('user', $nombre , time()+3600, "/");  
        }
        else{
            //Borrar la cookie si no marca la opción "Recordar"
            unset($_SESSION['nombre_usuario']);
            setcookie('user', $nombre, time()-3600, "/");
        }
    }
    
    //Cromprobar que la cookie existe
    if (isset($_COOKIE['user'])){
        echo "Hola bienvenido " . $_SESSION['nombre_usuario'];
        echo "Hola bienvenido " . $_COOKIE['user'];
    }else{
        echo "Inicia sesion primero.";
    }
        
?>
