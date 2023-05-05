<?php 
  class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "db_spp";

    public $conn;

    function connect() {
      // create db connection uses PDO
      $this->conn = null;
      try {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        $this->conn->exec("set names utf8");
      } catch(PDOException $exception) {
        echo "Connection error: " . $exception->getMessage();
      }

      return $this->conn;
    }
  }

  $database = new Database();
  $db = $database->connect();

  // Example of usage in view:
  // <?php
  //   require_once "../configs/db_connection.php";
  //   require_once "../classes/Supplier.php";
  //
  //   $supplier = new Supplier($db);
  //   $stmt = $supplier->readAll();
  
?>