<?php
    class DbCon {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "rehoboth";

        public function connect() {
            // Connexion à la BDD en utilisant PDO
            try {
                //Tentative de connexion
                $cnn = new PDO('mysql:host=' . $this->servername . '; dbname=' . $this->dbname, $this->username,$this->password);

                //Affecte les atttibuts à la connexion
                $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $cnn;
            } catch (PDOException $err){
                //Si erreur de connexion
                echo 'Database Error' . $err->getMessage();
            }
        }
    }
?>