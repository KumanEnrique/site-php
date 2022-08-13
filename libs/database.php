<?php namespace Libs;
class Database
{
    private const DB_SERVERNAME = "localhost";
    private const DB_NAME = "site-miov1";
    private const DB_USERNAME = "root";
    private const DB_PASSWORD = "";
    protected $conn;
    public function __construct()
    {
        try {
            $this->conn = new \PDO(sprintf('mysql:host=%s;dbname=%s', self::DB_SERVERNAME, self::DB_NAME), self::DB_USERNAME, self::DB_PASSWORD);
            // set the PDO error mode to exception
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully<br>";
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
