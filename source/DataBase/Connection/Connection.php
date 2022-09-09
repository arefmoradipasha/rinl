<?php
namespace source\DataBase\Connection;

use PDO;
use PDOException;

class Connection {
    private static $instance = null;

    private function __construct()
    {
    }

    private function connection()
    {
        $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];
        try {
            return new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME,DBUSER,DBPASSWORD, $option);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            return false;
        }
    }

    public static function getInstance(){
        if (self::$instance == null){
            $conn = new Connection();
            self::$instance = $conn->connection();
        }
        return self::$instance;
    }

}
