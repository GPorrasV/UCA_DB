<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $ubicacion = $_POST["ubicacion"];
        $my_query = "UPDATE facultad SET nombre = '$nombre', descripcion = '$descripcion', ubicacion = '$ubicacion' WHERE codigo = $codigo ";
        $result = $mysql->query($my_query);

        if($result == true){
            echo 'registry saved sucessful';
        } else { 
            echo 'error';
        }
    } else {
        echo 'unknown error';
    }

    

?>
