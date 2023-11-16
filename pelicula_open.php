<?php
    $conexion = new mysqli("localhost","root","","universidad");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conecion";
    }

?>
http://localhost/examen_pedro_3/pedro.html