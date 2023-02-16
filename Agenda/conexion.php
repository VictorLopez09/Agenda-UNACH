<?php
class conexion_db{

        public function creaconexion(){

            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "bdagenda";
            try{
                $conexion = new mysqli($server, $user, $pass, $db);
                $var = "Se logro la conexion";
                echo "<script> alert('".$var."'); </script>";

            }
            catch (exception $e) {
                $var = "No se pudo conectar";
                echo "<script> alert('".$var."'); </script>";
            }
        }

    }


?>