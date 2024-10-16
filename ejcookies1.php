
    <?php
        $nombre = "Eusebio";
        if (isset($_COOKIE['user'])&& !empty($_COOKIE['user'])){
            echo "Hola ".$_COOKIE['user']."!";
        }else{
            setcookie('user', $nombre, time()+1000);
            echo "Se creo la cookie.";
        }

    ?>

