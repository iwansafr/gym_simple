<?php 
if(!empty($_POST))
{
  $title   = $_POST['title'];
  $phone   = $_POST['phone'];
  $address = $_POST['address'];

  if($db->query("INSERT INTO gym (`title`, `phone`, `address`) VALUES('$title',$phone,'$address')"))
  {
    ?>
    <div class="alert alert-success">
      Data Berhasil disimpan
    </div>
    <?php
  }
}
$data = $db->query('SELECT * FROM gym');
include('views/gym.view.php');