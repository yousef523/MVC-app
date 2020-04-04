<?php

    /*
    *PDO database class
    *connect to database
    *create prepared stmt
    *bind Values
    *return rows & results
    */


    class Database{

        private $host   = DB_HOST;
        private $user   = DB_USER;
        private $pass   = DB_PASS;
        private $dbname = DB_NAME;

        private $dbh ;
        private $error ;


        public function __construct()
        {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
            );

            try {
                $this->dbh = new PDO($dsn, $this->user , $this->pass , $options);
                // $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }

        }

    }