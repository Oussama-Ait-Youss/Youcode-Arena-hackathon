<?php 

class Database {
    // Hold the class instance.
    private static $instance = null;
    private $connection;

    // Database credentials
    private $host = "localhost";
    private $dbName = "youcodearena";
    private $username = "root";
    private $password = "";

    // The constructor is private to prevent initiation with outer code
    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbName};charset=utf8",
                $this->username,
                $this->password
            );
           
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // The object is created from within the class itself only if it doesn't exist
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Get the PDO connection
    public function getConnection() {
        return $this->connection;
    }

    // Prevent cloning of the instance 
    private function __clone() {}

    // Prevent unserializing of the instance
    public function __wakeup() {}
}

Database::getInstance()->getConnection(); 
