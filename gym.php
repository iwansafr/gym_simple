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
?>
<div class="card card-default mt-3 mb-3">
  <form action="" method="post">
    <div class="card-header">Tambah Gym</div>
    <div class="card-body">
      <div class="form-group">
        <label for="">Title</label>
        <input required type="text" name="title" class="form-control" placeholder="Title Gym">
      </div>
      <div class="form-group">
        <label for="">Phone</label>
        <input required type="number" name="phone" class="form-control" placeholder="Phone Gym">
      </div>
      <div class="form-group">
        <label for="">Address</label>
        <textarea required name="address" class="form-control" id="" cols="30" rows="5" placeholder="Address gym"></textarea>
      </div>

    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </form>
</div>

<?php if(!empty($data->num_rows)):?>
  <h5>Data Gym</h5>
  <table class="table table-hovered">
    <thead>
      <th>ID</th>
      <th>TITLE</th>
      <th>PHONE</th>
      <th>ADDRESS</th>
    </thead>
    <tbody>
      <?php while($row = $data->fetch_assoc()):?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['title'] ?></td>
          <td><?php echo $row['phone'] ?></td>
          <td><?php echo $row['address'] ?></td>
        </tr>
      <?php endwhile?>
    </tbody>
  </table>
<?php endif?>