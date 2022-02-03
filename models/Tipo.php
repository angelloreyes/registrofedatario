<?php
    class Tipo extends Conectar{

        public function get_tipo(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_tipo_registro WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>
