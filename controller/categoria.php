<?php
    require_once("../config/conexion.php");
    require_once("../models/Tipo.php");
    $tipo = new Tipo();
    switch($_GET["op"]){
        case "combo":
            $datos= $tipo->get_tipo();
            if(is_array($datos)==true and count($datos)>0){
                //$html = "<option></option>";
                foreach($datos as $row){
                    $html.="<option value='".$row['tipo_id']."'>".$row['tipo_nom']."</option>"; 
                }
                echo $html;
            }
        break;

    }



?>