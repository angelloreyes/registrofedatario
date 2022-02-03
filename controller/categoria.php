<?php
    require_once("../config/conexion.php");
    require_once("../models/Tipo.php");
    $tipo = new Tipo();
    switch($_GET["op"]){
        case "combo":
            $datos= $tipo->get_tipo();

        break;

    }



?>