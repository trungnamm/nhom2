<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM sanpham WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: /Project_demo/list_san_pham.php");
}