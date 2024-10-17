<?php
    
    $listaCarro = array(
        array("id"=>1, "nombre"=>"Zapatillas Nike", "precio"=>100),
        array("id"=>2, "nombre"=>"Zapatillas Adidas", "precio"=>96),
        array("id"=>3, "nombre"=>"Pala padel Vairo", "precio"=>150),
        array("id"=>4, "nombre"=>"Bolso Gucci", "precio"=>145),
    );

    session_start();
    //Si el usuario toca un articulo, compara el id y lo añade al carrito
    if (isset($_GET['id'])){
        $idArticulo = $_GET['id'];
        foreach ($listaCarro as $articulo){
            if ($articulo['id'] == $idArticulo){
                $_SESSION['Carrito'] []= $articulo;
                break;
            }
        }
    }
    $totalEuros = 0;
    //Sumamos los precios para sacar el total
    if (isset($_SESSION['Carrito'])){
        foreach ($_SESSION['Carrito'] as $precioArt){
            $totalEuros += $precioArt['precio'];
        }
    }
    //Borrar carrito

    if (isset($_GET['vaciar']) && $_GET['vaciar'] == 'true') {
        unset($_SESSION['Carrito']);  
        session_destroy();
        $totalEuros = 0;
    }
    
    include('carro.view.php')
?>