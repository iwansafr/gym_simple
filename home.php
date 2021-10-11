<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <?php require_once('navbar.php') ?>
    <?php if(!empty($_GET['page'])):?>
      <?php 
      switch($_GET['page'])
      {
        case 'gym':
            require_once('gym.php');
        break;
        case 'product':
            require_once('product.php');
        break;
        default:
          ?>
          <div class="text-center border-top mt-3">
            <div class="alert alert-danger">
              Page tidak dikenali
            </div>
          </div>
          <?php
        break;
      }
      ?>
    <?php endif?>
  </div>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>