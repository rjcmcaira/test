<?php
    class Conectar{
        protected $dbh;
        protected function Conexion(){
            try{
                $conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=paginawebphp","root","");
                return $conectar;
                //pruebas de conexion a un servidor en ala nube
                //$conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=paginawebphp","webtemplate","@andercode");
                //puesta de produccion en la nube

            }catch(Exception $e){
                print "Error :".$e->getMessage();
                die();
            }
        }

        public function set_names(){
            return $this -> dbh -> query("SET NAMES 'utf8'");

        }
    }
?>