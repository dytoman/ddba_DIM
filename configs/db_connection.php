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

  // Example of usage: 
  // $database = new Database();
  // $db = $database->connect();

  // $db->query("SET SESSION sql_mode = ''");
?>