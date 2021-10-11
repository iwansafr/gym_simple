<?php 
$db = new db();
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
$data = $db->query('SELECT * FROM product');
$gym = $db->query('SELECT * FROM gym');
?>
<?php if(!empty($gym->num_rows)):?>
  <div class="card card-default mt-3 mb-3">
    <form action="" method="post">
      <div class="card-header">Tambah Product</div>
      <div class="card-body">
        <div class="form-group">
          <label for="">Title</label>
          <input required type="text" name="title" class="form-control" placeholder="Title Product">
        </div>
        <div class="form-group">
          <label for="">Gym</label>
          <select name="gym_id" id="" class="form-control">
            <?php while($rows = $gym->fetch_assoc()):?>
              <option value="<?php echo $rows['id'] ?>"><?php echo $rows['title'] ?></option>
            <?php endwhile?>
          </select>
        </div>
        <div class="form-group">
          <label for="">Price</label>
          <input required type="number" name="price" class="form-control" placeholder="Price Product">
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <textarea required name="description" class="form-control" id="" cols="30" rows="5" placeholder="Description Product"></textarea>
        </div>
  
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
    </form>
  </div>
  
  <?php if(!empty($data->num_rows)):?>
    <h5>Data Product</h5>
    <table class="table table-hovered">
      <thead>
        <th>ID</th>
        <th>TITLE</th>
        <th>PRICE</th>
        <th>DESCRIPTION</th>
      </thead>
      <tbody>
        <?php while($row = $data->fetch_assoc()):?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['description'] ?></td>
          </tr>
        <?php endwhile?>
      </tbody>
    </table>
  <?php endif?>
<?php else:?>
  <div class="alert alert-danger">
    Belum Ada data Gym, silahkan tambah data gym terlebih dahulu
  </div>
<?php endif?>