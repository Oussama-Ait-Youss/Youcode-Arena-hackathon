<?php
class Database {
    private static $instance = null;
    private $connection;

    // Database credentials
    private $host = "localhost";
    private $dbName = "youcodearena";
    private $username = "root";
    private $password = "";

    // Constructor (fixed)
    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Singleton getInstance
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Return PDO connection
    public function getConnection() {
        return $this->connection;
    }

    // Prevent cloning/wake-up
    private function __clone() {}
    public function __wakeup() {}
}
