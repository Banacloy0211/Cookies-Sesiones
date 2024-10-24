<?php 
    //Comprobar si el form se envia.
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $password = $_POST['pass'];

        if (isset($_POST['recordar'])){
            //Si el usuario marca la opción "Recordar", crear la cookie
            setcookie('userEj2', $nombre , time()+3600);  
        }
        else{
            //Borrar la cookie si no marca la opción "Recordar"
            setcookie('userEj2', $nombre, time()-3600);
        }
    }
    print_r($_COOKIE);
    echo "Hola bienvenido " . $_COOKIE['userEj2'];
    //Cromprobar que la cookie existe
    // if (isset($_COOKIE['user'])){
        
    // }
        
?>
