<?php
require 'db.php';
if(isset($_POST['id_san_pham'])) {
    $id_san_pham = $_POST['id_san_pham'];
    $so_luong_san_pham = $_POST['so_luong_san_pham'.$id_san_pham];
    $thong_tin_nguoi_mua = $_POST['thong_tin_nguoi_mua'.$id_san_pham];
    $sql = 'INSERT INTO donhang(ma_san_pham, so_luong_san_pham, thong_tin_nguoi_mua) VALUES(:ma_san_pham, :so_luong_san_pham, :thong_tin_nguoi_mua)';
    $statement = $connection->prepare($sql);
     if ($statement->execute([':ma_san_pham'=>$id_san_pham, ':so_luong_san_pham'=>$so_luong_san_pham,  ':thong_tin_nguoi_mua'=>$thong_tin_nguoi_mua])) {
      header("Location: /Project_demo/list_san_pham_guest.php");
  }
}
?>


