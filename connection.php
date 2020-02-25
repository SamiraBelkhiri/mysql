<?php
declare(strict_types=1);

class connection
{
    private $dbpass;
    private $db;
    private $dbhost;
    private $dbuser;
    private $charset;


    function openConnection()
    {
        $this->dbhost = "localhost";
        $this->dbuser = "samira";
        $this->dbpass = "password";
        $this->db = "becode";
        $this->charset = "utf8mb4";

        /*
                $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

                return $pdo;

        */
        try {
            $dsn = "mysql:host=" . $this->dbhost . ";db=" . $this->db . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\Exception $e) {
            echo "Connection failed:" . $e->getMessage();
        }

    }


}


?>