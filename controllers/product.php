<?php 
require_once('models/product.php');
require_once('models/gym.php');

if(!empty($_POST))
{
  $title       = $_POST['title'];
  $gym_id      = $_POST['gym_id'];
  $description = $_POST['description'];
  $price       = $_POST['price'];

  if($db->query("INSERT INTO product (`title`, `gym_id`,`description`, `price`) VALUES('$title',$gym_id,'$description',$price)"))
  {
    ?>
    <div class="alert alert-success">
      Data Berhasil disimpan
    </div>
    <?php
  }
}
$gym = new \models\gym();
$gym_options = $gym->getData();
$product = new \models\product();
$data = $product->getData();


include('views/product.view.php');