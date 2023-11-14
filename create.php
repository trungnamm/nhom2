<?php
require 'db.php';
$message = '';
if (isset ($_POST['ma_san_pham'])  && isset($_POST['ten_san_pham']) ) {
  $ma_san_pham = $_POST['ma_san_pham'];
  $ten_san_pham = $_POST['ten_san_pham'];
  $gia_san_pham = $_POST['gia_san_pham'];
  $anh_san_pham = $_POST['anh_san_pham'];
  $sql = 'INSERT INTO sanpham(ma_san_pham, ten_san_pham, gia_san_pham, anh_san_pham) VALUES(:ma_san_pham, :ten_san_pham, :gia_san_pham, :anh_san_pham)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':ma_san_pham'=>$ma_san_pham, ':ten_san_pham'=>$ten_san_pham, ':gia_san_pham'=>$gia_san_pham, ':anh_san_pham'=>$anh_san_pham])) {
     header("Location: /Project_demo/list_san_pham.php");
  }
}
 ?>
<?php require 'header_admin.php'; ?>
<div class="">
      <h2>Thêm một sản phẩm mới</h2>
      <form method="post">
        <div >
          <label for="ma_san_pham">Mã sản phẩm </label>
          <input type="text" name="ma_san_pham" id="ma_san_pham" >
        </div>
        <div>
          <label for="ten_san_pham">Tên sản phẩm</label>
          <input type="text" name="ten_san_pham" id="ten_san_pham" >
        </div>
        <div>
          <label for="gia_san_pham">Giá sản phẩm</label>
          <input type="text" name="gia_san_pham" id="gia_san_pham" >
        </div>
        <div>
          <label for="anh_san_pham">Ảnh sản phẩm</label>
          <input type="text" name="anh_san_pham" id="anh_san_pham" >
        </div>
        <div >
          <button type="submit" >Thêm mới</button>
        </div>
      </form>
</div>
<?php require 'footer.php'; ?>
