<!--login-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilo_logearte.css">
    <title>INICIO DE SESION</title>
</head>
<body>
    <form action="iniciarsesion.php" method="post">
        <h1>INICIO SESION</h1>
        <hr>
        <?php
            if(isset($_GET['error'])){
        ?>

        <p id="error">
            <?php
            echo $_GET ['error']
            ?>
        </p>


        <?php
            }
        ?>

        <!--<br>-->
        <hr>
        <i class="fa-solid fa-user"></i>
        <label for="">Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre del usuario">

        <i class="fa-solid fa-unlock"></i>
        <label for="">Clave</label>
        <input type="text" name="Clave" placeholder="Clave">

        <button type="submit">Iniciar Sesion</button>
        <a href="registro.php">Crear cuenta</a>
    </form>
    

    
</body>
</html>