<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'conexion.php';        
        $codigo = $_POST["codigo"];
        $my_query = "DELETE FROM facultad WHERE codigo = $codigo";
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
