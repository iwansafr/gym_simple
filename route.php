<?php
$controller_dir = 'controllers'.DIRECTORY_SEPARATOR;
switch ($_GET['page']) {
  case 'gym':
    require_once($controller_dir.'gym.php');
    break;
  case 'product':
    require_once($controller_dir.'product.php');
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
