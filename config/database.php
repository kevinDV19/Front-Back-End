<?php
    class Database {
        private $hostname = "localhost";
        private $database = "tienda_online";
        private $username = "root";
        private $password = "1234";
        private $charset = "utf8";

        /*private $hostname = "sql101.epizy.com";
        private $database = "epiz_32952632_tienda_online";
        private $username = "epiz_32952632";
        private $password = "IM4K2OYX8wk";
        private $charset = "utf8";*/

        function conectar()
        {
            try{
                $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];

                $pdo = new PDO($conexion, $this->username, $this->password, $options);

                return $pdo;
            } catch(PDOException $e){
                echo 'Error conexion: ' . $e->getMessage();
                exit;
            }
        }
    }

?>