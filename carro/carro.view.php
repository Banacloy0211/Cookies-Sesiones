   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro compra</title>
</head>
<body>
    <h1>Articulos</h1>
    <?php
    echo "<table border=1px>";
    echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Carrito</th>";
        echo "</tr>";

        foreach ($listaCarro as $articulo){
            echo "<tr>";
            echo "<td>" . $articulo['nombre'] . "</td>";
            echo "<td>" . $articulo['precio'] . "</td>";
            echo "<td><a href='carro.php?id=" . $articulo['id'] . "'>Añadir al carrito</a></td>";
            echo "</tr>";
        }
    echo "</table>";
    ?>
    <h2>Carrito Compra</h2>
    <?php 
        if (isset($_SESSION['Carrito']) && count($_SESSION['Carrito']) > 0){
            echo "<table border=1px>";
            echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Precio</th>";
                echo "</tr>";
                foreach ($_SESSION['Carrito'] as $item){
                    echo "<tr>";
                    echo "<td>" . $item['nombre'] . "</td>";
                    echo "<td>" . $item['precio'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            echo "<a href='carro.php?vaciar=true'>Volver</a>";
        }

        echo "<h3>Total:$totalEuros</h3>";

    ?>
    
</body>
</html>

