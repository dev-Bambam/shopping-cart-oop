<?php
class Database
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function close()
    {
        $this->pdo = null;
    }
    public function insert($table, $data)
    {
        $sql = "INSERT INTO $table (" . implode(', ', array_keys($data)) . ") VALUES ('" . implode("', '", array_values($data)) . "')";
        $this->query($sql);
    }

    public function update($table, $data, $where)
    {
        $sql = "UPDATE $table SET " . implode(', ', array_map(function ($key, $value) {
            return "$key = '$value'";
        }, array_keys($data), array_values($data))) . " WHERE $where";
        $this->query($sql);
    }

    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        $this->query($sql);
    }
}