<?php
    class Conectar{
        protected $dbh;
        protected function Conexion(){
            try{
                //conexion local
                //$conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=paginawebphp","root","");
                //return $conectar;

                //pruebas de conexion a un servidor en ala nube GODADDY
                //$conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=paginawebphp","webtemplate","@andercode");

                //heroku
                $conectar = $this -> dbh = new PDO("mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_4898f3d5f89721f","b915116952ed03","635ee4a7");
                return $conectar;

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