<?php
require 'db.php';
$id = $_GET['id']; 
echo $id;
$sql = 'DELETE FROM donhang WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: /Project_demo/list_don_hang.php");
}