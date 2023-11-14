<?php
require 'db.php';
$sql = 'SELECT * FROM donhang';
$statement = $connection->prepare($sql);
$statement->execute();
$list_don_hang = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header_admin.php'; ?>
<h1> Danh sách đơn hàng </h1>
<div class="">
  <table id ="list_tables">
    <tr>
      <th>Mã SP</th>
      <th>Số lượng</th>
      <th>Thông tin người mua</th>
      <th>Action</th>
    </tr>
    <?php foreach($list_don_hang as $don_hang): ?>
    <tr>
      <td><?= $don_hang->ma_san_pham; ?></td>
      <td><?= $don_hang->so_luong_san_pham; ?></td>
      <td><?= $don_hang->thong_tin_nguoi_mua; ?></td>
      <td>
      <a onclick="return confirm('Bạn có thực sự muốn xóa đơn hàng này?')" href="delete_don_hang.php?id=<?= $don_hang->id ?>" class='btn btn-danger'>Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
<?php require 'footer.php'; ?>
