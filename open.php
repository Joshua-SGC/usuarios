<?php

    $conexion = new mysqli("localhost", "id20331472_joshua_sgc_2", "sisequeponeR1-", "id20331472_usuarios");

    if($conexion){

        echo "conexion exitosa";

    } else{

        echo "fallo la conexion";

    }

?>