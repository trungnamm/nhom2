<?php
require 'db.php';
$sql = 'SELECT * FROM sanpham';
$statement = $connection->prepare($sql);
$statement->execute();
$list_san_pham = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header_guest.php'; ?>
	<div class ="root">
	<?php foreach($list_san_pham as $san_pham): ?>
		<div class="div-bg" id="div-img-bg1">
			<form action="create_don_hang.php" method="POST">
			<span class="title"><?= $san_pham->ten_san_pham; ?></span>	
			<img src="Images/<?= $san_pham->anh_san_pham;?>" alt="" width="270px" height="200px" >
			<div class="shopping">Giá: <?= $san_pham->gia_san_pham; ?>đ/bông</div>
			<div class="shopping">
				<span>Số lượng:</span>
				<span id="count<?=$san_pham->ma_san_pham ?>">1</span>
				<b>
				<span onclick="changeCount(1,<?=$san_pham->gia_san_pham ?>,'<?=$san_pham->ma_san_pham ?>')">|thêm|</span>
				<span onclick="changeCount(-1,<?=$san_pham->gia_san_pham ?>,'<?=$san_pham->ma_san_pham ?>')"  >|bớt|</span>
				</b>
			</div> 
			<div class="shopping">
				<span>Thành tiền:</span>
				<span id="total<?=$san_pham->ma_san_pham ?>"><?= $san_pham->gia_san_pham; ?></span>
				<span>đ</span>
			</div >
			<button class="bt_mua_hang" type="submit" onclick="purchase('<?=$san_pham->ma_san_pham ?>')" > MUA HÀNG</button>
			<div> <span id= "nguoi_mua"></span></div>
			<input type="hidden" name="ten_san_pham" value="Hoa Hồng" >
			<input type="hidden" name="id_san_pham" value="<?=$san_pham->ma_san_pham ?>">
			<input type="hidden" name="gia_san_pham" value="<?=$san_pham->gia_san_pham ?>" id="gia_san_pham">
			<input type="hidden" name="so_luong_san_pham<?=$san_pham->ma_san_pham ?>" value="1" id="so_luong_san_pham<?=$san_pham->ma_san_pham ?>">
			<input type="hidden" name="tong_tien_san_pham<?=$san_pham->ma_san_pham ?>" value="9500" id="tong_tien_san_pham<?=$san_pham->ma_san_pham ?>">
			<input type="hidden" name="thong_tin_nguoi_mua<?=$san_pham->ma_san_pham ?>"  id="thong_tin_nguoi_mua<?=$san_pham->ma_san_pham ?>">
			</form>
		</div>
     <?php endforeach; ?>
	</div>
	</div>
</body>
</html>