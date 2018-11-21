<?php
class ConnectDb {
    private static $instance = null;
    private $conn;
    
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "test";
     
    // The db connection is established in the private constructor.
    private function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            // TODO: Remove the print statement. Use Logger.
        }
    }
    
    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new ConnectDb();
      }
     
      return self::$instance;
    }
    
    public function getConnection()
    {
      return $this->conn;
    }
}

// $instance = ConnectDb::getInstance();
// $conn = $instance->getConnection();
// if($conn == null){
//     echo "null";
// }