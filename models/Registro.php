<?php
    class Registro extends Conectar{

        public function insert_registro($r_ini,$tipo_id,$r_fecha,$r_iden,$r_foli,$r_iden_trami,$r_organo,$r_nom_soli,$r_dni,$r_fech_eclu){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO tm_registro VALUES (NULL,?,?,?,?,?,?,?,?,?,?,'1')";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$r_ini);
            $sql->bindValue(2,$tipo_id);
            $sql->bindValue(3,$r_fecha);
            $sql->bindValue(4,$r_iden);
            $sql->bindValue(5,$r_foli);
            $sql->bindValue(6,$r_iden_trami);
            $sql->bindValue(7,$r_organo);
            $sql->bindValue(8,$r_nom_soli);
            $sql->bindValue(9,$r_dni);
            $sql->bindValue(10,$r_fech_eclu);
            $sql->execute();
        }
        public function update_registro($r_id,$r_ini,$tipo_id,$r_fecha,$r_iden,$r_foli,$r_iden_trami,$r_organo,$r_nom_soli,$r_dni,$r_fech_eclu){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE tm_registro SET r_ini=?,tipo_id=?,r_fecha=?,r_iden=?,
            r_foli=?,r_iden_trami=?,r_organo=?, r_nom_soli=?, r_dni=?, r_fech_eclu=? WHERE r_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$r_ini);
            $sql->bindValue(2,$tipo_id);
            $sql->bindValue(3,$r_fecha);
            $sql->bindValue(4,$r_iden);
            $sql->bindValue(5,$r_foli);
            $sql->bindValue(6,$r_iden_trami);
            $sql->bindValue(7,$r_organo);
            $sql->bindValue(8,$r_nom_soli);
            $sql->bindValue(9,$r_dni);
            $sql->bindValue(10,$r_fech_eclu);
            $sql->bindValue(11,$r_id);
            $sql->execute();
        }
        public function delete_registro($r_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE tm_registro set est=0 WHERE r_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$r_id);
            $sql->execute();
        }


        public function listar_registro(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT tm_registro.r_id,tm_registro.r_ini,tm_registro.tipo_id,tm_registro.r_fecha,
            tm_registro.r_iden,tm_registro.r_foli,tm_registro.r_iden_trami,tm_registro.r_organo,tm_registro.r_nom_soli,
            tm_registro.r_dni,tm_registro.r_fech_eclu,tm_tipo_registro.tipo_nom FROM tm_registro
             INNER JOIN tm_tipo_registro on tm_registro.tipo_id=tm_tipo_registro.tipo_id  WHERE tm_registro.est=1;";
              $sql=$conectar->prepare($sql);
              $sql->execute();
              return $resultado=$sql->fetchAll();
        }
        public function listar_r_id($r_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql=" SELECT tm_registro.r_id,tm_registro.r_ini,tm_registro.tipo_id,tm_registro.r_fecha,
            tm_registro.r_iden,tm_registro.r_foli,tm_registro.r_iden_trami,tm_registro.r_organo,tm_registro.r_nom_soli,
            tm_registro.r_dni,tm_registro.r_fech_eclu,tm_tipo_registro.tipo_nom FROM tm_registro
             INNER JOIN tm_tipo_registro on tm_registro.tipo_id=tm_tipo_registro.tipo_id  WHERE tm_registro.r_id=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $r_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>
