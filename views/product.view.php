<?php if(!empty($gym_options)):?>
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
            <?php foreach($gym_options AS $key => $value):?>
              <option value="<?php echo $value['id'] ?>"><?php echo $value['title'] ?></option>
            <?php endforeach?>
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
  
  <?php if(!empty($data)):?>
    <h5>Data Product</h5>
    <table class="table table-hovered">
      <thead>
        <th>ID</th>
        <th>TITLE</th>
        <th>PRICE</th>
        <th>DESCRIPTION</th>
      </thead>
      <tbody>
        <?php foreach($data AS $key => $value):?>
          <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['title'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td><?php echo $value['description'] ?></td>
          </tr>
        <?php endforeach?>
      </tbody>
    </table>
  <?php endif?>
<?php else:?>
  <div class="alert alert-danger">
    Belum Ada data Gym, silahkan tambah data gym terlebih dahulu
  </div>
<?php endif?>