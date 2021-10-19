<?php
namespace models;
class product{
  var $db;
  var $id;
  var $title;
  var $gym_id;
  var $description;
  var $price;
  public function __construct()
  {
    global $db;
    $this->db = $db;
  }

  public function getData()
  {
    $data = $this->db->query('SELECT * FROM product');
    $output = [];
    while($row = $data->fetch_assoc()){
      $output[] = $row;
    }
    return $output;
  }
  public function save()
  {
    if(empty($this->id))
    {
      if($this->db->query("INSERT INTO product (`title`, `gym_id`,`description`, `price`) VALUES('$this->title',$this->gym_id,'$this->description',$this->price)")){
        return true;
      }
    }
  }
}