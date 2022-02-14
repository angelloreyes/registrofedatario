<?php
    require_once("../config/conexion.php");
    require_once("../models/Registro.php");
    $registro = new Registro();
    switch($_GET["op"]){
        case "guardaryeditar":
            if(empty($_POST["r_id"])){       
                $registro->insert_registro($_POST["r_ini"],$_POST["tipo_id"],$_POST["r_fecha"],$_POST["r_iden"],$_POST["r_foli"],
                $_POST["r_iden_trami"],$_POST["r_organo"],$_POST["r_nom_soli"],$_POST["r_dni"],$_POST["r_fech_eclu"]);  
            }
            else {
                $registro->update_registro($_POST["r_id"],$_POST["r_ini"],$_POST["tipo_id"],$_POST["r_fecha"],$_POST["r_iden"],$_POST["r_foli"],
                $_POST["r_iden_trami"],$_POST["r_organo"],$_POST["r_nom_soli"],$_POST["r_dni"],$_POST["r_fech_eclu"]);
            }
           
        break;
        case "listar":
            $datos=$registro->listar_registro();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $fecha = date("Y",strtotime($row["r_fecha"]));
                $correla=sprintf("%'.05d", $row["r_id"]);
                $sub_array[] = $correla."-".$fecha."-".$row["r_ini"];
                $sub_array[] = $row["tipo_nom"];
                $sub_array[] = $row["r_fecha"];
                $sub_array[] = $row["r_iden"];
                $sub_array[] = $row["r_foli"];
                $sub_array[] = $row["r_iden_trami"];
                $sub_array[] = $row["r_organo"];
                $sub_array[] = $row["r_nom_soli"];
                $sub_array[] = $row["r_dni"];
                $sub_array[] = $row["r_fech_eclu"];
                $sub_array[] ='<button type="button" onClick="editar('.$row["r_id"].');"  id="'.$row["r_id"].'" 
                class="btn btn-outline-primary btn-icon" ><div><i class="fa fa-edit"></i></div></button>';
                $data[]= $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
                echo json_encode($results);
        break;
        case "mostrar";
        $datos=$registro->listar_r_id($_POST["r_id"]);  
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $output["r_id"] = $row["r_id"];
                $output["r_ini"] = $row["r_ini"];
                $output["tipo_id"] = $row["tipo_id"];
                $output["r_ini"] = $row["r_ini"];
                $output["r_iden"] = $row["r_iden"];
                $output["r_fecha"] = $row["r_fecha"];
                $output["r_foli"] = $row["r_foli"];
                $output["r_iden_trami"] =  $row["r_iden_trami"];
                $output["r_organo"] = $row["r_organo"];
                $output["r_nom_soli"] = $row["r_nom_soli"];
                $output["r_dni"] = $row["r_dni"];
                $output["r_fech_eclu"] = $row["r_fech_eclu"];
    
            }
            echo json_encode($output);
        }   
    break;


    }



?>