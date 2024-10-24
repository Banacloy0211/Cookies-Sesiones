<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones de Alumnos</title>
</head>
<body>
    <h1>Calificacion Alumnos</h1>
    <form action="calific.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" required>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" required>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" id="nota3" required>    
        <button type="submit" class="btn btn-primary" value="añadir" name="añadir">Añadir</button>
    </form>
    <h1>Lista alumnos</h1>
    <?php
        echo "<table border=2px>";
        echo "<tr><th>Nombre</th><th>Primera</th><th>Segunda</th><th>Tercera</th><th>Media</th></tr>";
        if(isset($_SESSION['listaAlumn']) && count($_SESSION['listaAlumn'])>0){
            
            foreach ($_SESSION['listaAlumn'] as $alumno){
                echo "<tr>";
                echo "<td>{$alumno['nombre']}</td>";
                echo "<td>{$alumno['nota1']}</td>";
                echo "<td>{$alumno['nota2']}</td>";
                echo "<td>{$alumno['nota3']}</td>";
                echo "<td>{$alumno['media']}</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<a href='calific.php?borrar=true'>Borrar Lista</a>";
        }
    
    ?>
</body>
</html>