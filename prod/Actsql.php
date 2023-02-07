<?php
    include '../banco_dados/database.php';
    class Actsql{
        public static function achar($table, $nome){
            $data = new database;
            $db = $data::conn();

            $nome = mysqli_real_escape_string($db, $nome);

            $sql = "SELECT * from site.$table WHERE nome='$nome'";
            $act = mysqli_query($db, $sql);
            $row = mysqli_num_rows($act);
            
            return $row;
        }

        public static function incluir($table, $nome, $senha, $id){
            $data = new database;
            $db = $data::conn();

            $nome = mysqli_real_escape_string($db, $nome);
            $senha = mysqli_real_escape_string($db, $senha);


            if(self::achar($table, $nome) == 0){
                $sql = "INSERT INTO site.$table(nome, senha, id) VALUES ('$nome', '$senha', '$id')";
                $act = mysqli_query($db, $sql);
                return $act;
            }else{
                return 0;
            }
        }

   }
?>