<?php
class Connection extends PDO{
const HOSTNAME = "ec2-54-80-123-146.compute-1.amazonaws.com";
const USERNAME = "vxqjmloitqyedg";
const PASSWORD = "cc5d5e2c4a1f24773013eb23ef1c72eb08c763d690a862933f5cd37c97549f5e";
const SCHEMA = "dds6pu16hmov8s";
const PORT = 5432;

private $conn;

public function __construct() {
    $key = "strval";
    $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
    $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}

function getConnection(){
   $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
    return $this->conn;

}
}

