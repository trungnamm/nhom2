<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM sanpham WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$san_pham = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['ma_san_pham'])  && isset($_POST['ten_san_pham']) ) {
  $ma_san_pham = $_POST['ma_san_pham'];
  $ten_san_pham = $_POST['ten_san_pham'];
  $gia_san_pham = $_POST['gia_san_pham'];
  $anh_san_pham = $_POST['anh_san_pham'];
  $sql = 'UPDATE sanpham SET ma_san_pham=:ma_san_pham, ten_san_pham=:ten_san_pham, gia_san_pham=:gia_san_pham, anh_san_pham=:anh_san_pham WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':ma_san_pham' => $ma_san_pham, ':ten_san_pham' => $ten_san_pham, ':gia_san_pham' => $gia_san_pham, ':anh_san_pham' => $anh_san_pham, ':id' => $id])) {
     header("Location: /Project_demo/list_san_pham.php");
  }
}
 ?>
<?php require 'header_admin.php'; ?>
<div class="container">
  <h2>Sửa thông tin sản phẩm</h2>
  <form method="post">
    <div>
      <label for="ma_san_pham">Mã sản phẩm</label>
      <input value="<?= $san_pham->ma_san_pham; ?>" type="text" name="ma_san_pham" id="ma_san_pham" >
    </div>
    <div>
      <label for="ten_san_pham">Tên sản phẩm</label>
      <input value="<?= $san_pham->ten_san_pham; ?>" type="text" name="ten_san_pham" id="ten_san_pham" >
    </div>
    <div>
      <label for="gia_san_pham">Giá sản phẩm</label>
      <input value="<?= $san_pham->gia_san_pham; ?>" type="text" name="gia_san_pham" id="gia_san_pham" >
    </div>
    <div>
      <label for="anh_san_pham">Ảnh sản phẩm</label>
      <input value="<?= $san_pham->anh_san_pham; ?>" type="text" name="anh_san_pham" id="anh_san_pham" >
    </div>
    <div>
      <button type="submit" >Cập nhật</button>
    </div>
  </form>
</div>
<?php require 'footer.php'; ?>
