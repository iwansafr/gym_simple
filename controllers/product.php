<?php 
require_once('models/product.php');
require_once('models/gym.php');
$gym     = new \models\gym();
$product = new \models\product();

if(!empty($_POST))
{
  $product->title       = $_POST['title'];
  $product->gym_id      = $_POST['gym_id'];
  $product->description = $_POST['description'];
  $product->price       = $_POST['price'];

  if($product->save())
  {
    ?>
    <div class="alert alert-success">
      Data Berhasil disimpan <?php echo $product->id ?>
    </div>
    <?php
  }
}
$gym_options = $gym->getData();
$data        = $product->getData();


include('views/product.view.php');