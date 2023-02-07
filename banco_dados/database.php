<?php
    require '../lib/vendor/autoload.php';

    $path = dirname(__FILE__, 2);
    $dotenv = Dotenv\Dotenv::createImmutable($path);
    $dotenv->load();
    class database{
        public static function conn(){
            $host = $_ENV['host'];
            $user = $_ENV['user'];
            $pass = $_ENV['pass'];
            $database = $_ENV['database'];

            $db = new mysqli($host, $user, $pass, $database);
            return $db;
        }
    }
?>