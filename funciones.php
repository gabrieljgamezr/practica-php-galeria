<?php

    function conexion($ddbb, $user, $password) {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=$ddbb", $user, $password);
            return $conexion;
        }catch(PDOException $e) {
            return false;
        }

    }

?>