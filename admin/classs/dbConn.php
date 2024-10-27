<?php

class dbConn
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = ''; // Assuming no password for XAMPP MySQL
    private $dbName = 'nichol_pcbuild';

    public $conn;

    function __construct()
    {
        try {
            $this->connect();
        } catch (Exception $e) {
            echo 'Database Connection Error';
            exit();
        }
    }

    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);

        if ($this->conn->connect_error) {
            throw new Exception('Database Connection Error: ' . $this->conn->connect_error);
        }

        // echo "Connected successfully";
    }

    public function closeConnection()
    {
        if ($this->conn) {
            $this->conn->close();
            // echo "Connection closed";
        }
    }

    public function getConnection() {
        return $this -> conn;
    }
}

?>
