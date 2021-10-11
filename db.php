<?php
class db{
  private $username = 'root';
  private $password = 'toor';
  private $host     = 'localhost';
  private $database = 'gym';
  public $connection;

  public function __construct(){
    $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    if($this->connection->connect_error){
      die('koneksi database gagal');
    }else{
      return $this->connection;
    }
  }

  public function query($sql){
    return $this->connection->query($sql);
  }
}