<?php
    class BaseDonne
    {
        private $host = 'localhost';
        private $dbname = 'dsi2x_gy_2019';
        private $user = 'root';
        private $pwd ='';

        public $pdo = null;

        public function connectDB()

            {   
                try {
                $this->pdo = new PDO (
                    'mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pwd);
                    } catch (PDOException $e){
                        echo $e->getMessage();


                    }
                    return $this->pdo;

            }


    }
    ?>