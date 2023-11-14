<?php
require 'db.php';
$sql = 'SELECT * FROM sanpham';
$statement = $connection->prepare($sql);
$statement->execute();
$list_san_pham = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header_admin.php'; ?>
<h1> Danh sách sản phẩm </h1>
<div class="">
  <table id ="list_tables">
    <tr>
      <th>Mã SP</th>
      <th>Tên sản phẩm</th>
      <th>Giá sản phẩm</th>
      <th>Ảnh</th>
      <th>Action</th>
    </tr>
    <?php foreach($list_san_pham as $san_pham): ?>
    <tr>
      <td><?= $san_pham->ma_san_pham; ?></td>
      <td><?= $san_pham->ten_san_pham; ?></td>
      <td><?= $san_pham->gia_san_pham; ?></td>
      <td><?= $san_pham->anh_san_pham; ?></td>
      <td>
      <a href="edit.php?id=<?= $san_pham->id ?>" class="btn btn-info">Edit</a>
      <a onclick="return confirm('Bạn có thực sự muốn xóa sản phẩm này?')" href="delete.php?id=<?= $san_pham->id ?>" class='btn btn-danger'>Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
  <ul>
    <li class="nav-item">
      <a class="nav-link" href="create.php">Thêm mới</a>
    </li>
  </ul>
</div>
<?php require 'footer.php'; ?>
