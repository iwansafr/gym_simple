<?php 
namespace controllers;
class product{
  var $gym;
  var $product;
  public function __construct(){
    require_once('models/product.php');
    require_once('models/gym.php');
    $this->gym     = new \models\gym();
    $this->product = new \models\product();
    if(!empty($_POST))
    {
      $this->product->title       = $_POST['title'];
      $this->product->gym_id      = $_POST['gym_id'];
      $this->product->description = $_POST['description'];
      $this->product->price       = $_POST['price'];
    
      if($this->product->save())
      {
        ?>
        <div class="alert alert-success">
          Data Berhasil disimpan <?php echo $this->product->id ?>
        </div>
        <?php
      }
    }
  }
  public function index()
  {
    $gym_options = $this->gym->getData();
    $data        = $this->product->getData();
    include('views/product.view.php');
  }
  public function list()
  {
    $gym_options = $this->gym->getData();
    $data        = $this->product->getData();
    include('views/product_list.view.php');
  }
}

$product = new product();
$product->$task();