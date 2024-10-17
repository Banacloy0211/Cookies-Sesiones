<?php 
    //Comprobar si el form se envia.
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $password = $_POST['pass'];
        
        if (isset($_POST['recordar'])){
            //Si el usuario marca la opción "Recordar", crear la cookie
            setcookie('user', $nombre , time()+3600*24, "/");  
        }
        else{
            //Borrar la cookie si no marca la opción "Recordar"
            setcookie('user', $nombre, time()-3600*24, "/");
        }
    }
    
    //Cromprobar que la cookie existe
    if (isset($_COOKIE['user']) && !empty($_COOKIE['user'])){
        echo "Hola bienvenido " . $_COOKIE['user'];
    }
        
?>
