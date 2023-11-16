<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_peliculas.css">
    <title>PELICULA</title>
</head>

<body>
    <center>
        <!--  --> <tr><h1>PELICULAS</h1></tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Ano</th>
                    <th>Autor</th>
                    <th>Actores</th>
                    <th>Imagen</th>

                </tr>
            </thead>
            <!---------------------------------titulo------------------------------->
            <tbody>
                <?php
                include ("pelicula_open.php");//base de datos
                $consulta = "SELECT * FROM peliculas";//tabla
                $resultado = $conexion->query($consulta);
                while($row = $resultado ->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['titu']; ?></td>
                    <td><?php echo $row['ano']; ?></td>
                    <td><?php echo $row['autor']; ?></td>
                    <td><?php echo $row['actor']; ?></td>
                 <td> <img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"> </td>
                </tr>   

                <?php
                }
                ?>

            </tbody>


        </table>
    </center>
    
</body>
</html>
<!--catalogo-->