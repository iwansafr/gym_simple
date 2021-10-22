<?php if (!empty($data)) : ?>
  <h5>Data Product</h5>
  <table class="table table-hovered">
    <thead>
      <th>ID</th>
      <th>TITLE</th>
      <th>PRICE</th>
      <th>DESCRIPTION</th>
    </thead>
    <tbody>
      <?php foreach ($data as $key => $value) : ?>
        <tr>
          <td><?php echo $value['id'] ?></td>
          <td><?php echo $value['title'] ?></td>
          <td><?php echo $value['price'] ?></td>
          <td><?php echo $value['description'] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php endif ?>