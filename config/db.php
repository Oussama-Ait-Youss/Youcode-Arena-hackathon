<?php 
class Database {
    private static $instance = null;
    private $connection;

    // Database credentials
    private $host = "172.16.10.160";
    private $port = 3306;
    private $dbName = "youcodearena";
    private $username = "Osama";
    private $password = "test1234";

    // Constructor
    private function construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->dbName};charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
           
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        
        return $this->connection;

    }

    private function clone() {}
    public function __wakeup() {}
}

$conn = Database::getInstance();
$conn->getConnection();
