<?php
    class Database{
        // DB Params
        private $host = "i0rgccmrx3at3wv3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        private $db_name = "xie5f21y231r8u9o";
        private $username = "lj7mjlq2t2qvzdzh";
        private $password = "ascwyhqzhb0nn7gx";
        private $conn;


        // DB connect
        public function connect(){
            $this->conn = null;

            try{
                $this->conn = new PDO('mysql:host =' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo 'Connection Error: ' . $e->getMessage();
            }
            return $this->conn;

        }
    }
?>
