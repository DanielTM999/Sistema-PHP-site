<?php
    include '../banco_dados/database.php';
    class Actsql{
        public static function achar($table, $nome){
            $data = new database;
            $db = $data::conn();

            $nome = mysqli_real_escape_string($db, $nome);

            $sql = "SELECT * from site.$table WHERE nome='$nome'";
            $act = mysqli_query($db, $sql);
            
            return $act;
        }

        public static function incluir($table, $nome, $senha, $id){
            $data = new database;
            $db = $data::conn();

            $nome = mysqli_real_escape_string($db, $nome);
            $senha = mysqli_real_escape_string($db, $senha);


            if(mysqli_num_rows(self::achar($table, $nome)) == 0){
                $sql = "INSERT INTO site.$table(nome, senha, id) VALUES ('$nome', '$senha', '$id')";
                $act = mysqli_query($db, $sql);
                return $act;
            }else{
                return 0;
            }
        }

        public static function auth($table, $nome, $senha){
            $data = new database;
            $db = $data::conn();

            $nome = mysqli_real_escape_string($db, $nome);
            $senha = mysqli_real_escape_string($db, $senha);

            if(mysqli_num_rows(self::achar($table, $nome)) == 1){
                $ress = mysqli_fetch_assoc(self::achar($table, $nome));
                $senhadb = $ress['senha'];
                if(password_verify($senha, $senhadb)){
                    return true;
                }else{
                    return false;
                }

            }else{
                return false;
            }
        }

   }
?>