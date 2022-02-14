<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuario = new Usuario();
    switch($_GET["op"]){
        case "guardaryeditar":
            if(empty($_POST["usu_id"])){
			if(is_array($datos)==true and count($datos)==0){
                $usuario->insertar_usuario($_POST["usu_nom"],$_POST["usu_ape"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["rol_id"]);
			}
        }else{
            $usuario->update_usuario($_POST["usu_id"],$_POST["usu_nom"],$_POST["usu_ape"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["rol_id"]);
        }
        break;

    }



?>