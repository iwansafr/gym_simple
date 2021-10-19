<?php
namespace models;
class gym{
  var $db;
  public function __construct()
  {
    global $db;
    $this->db = $db;
  }

  public function getData()
  {
    $data = $this->db->query('SELECT * FROM gym');
    $output = [];
    while($row = $data->fetch_assoc()){
      $output[] = $row;
    }
    return $output;
  }
}