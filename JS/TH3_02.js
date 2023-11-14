function changeCount(count,price){
    var countID = 'count';
	var elementCount = document.getElementById(countID);
	var countAdd =  parseInt(elementCount.innerHTML);
	if (countAdd==1 && count ==-1) return 0;
	countAdd = countAdd + count;
	elementCount.innerHTML = countAdd;
	

	var totalID = 'total';
	var elementTotal = document.getElementById(totalID);
	var totalAdd = countAdd*price;
	elementTotal.innerHTML = totalAdd;
}

function purchase(){
	var inFor =prompt("Mời bạn nhập số điện thoại, tên và địa chỉ, chúng tôi sẽ liên lạc để giao hàng cho bạn trong thời gian sớm nhất!");
	if (inFor!='') alert ('Bạn đã đặt hàng thành công, chúng tôi sẽ liên lạc đến bạn sớm nhất! Thông tin liên lạc của bạn là: '+ inFor);

}

		