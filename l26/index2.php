<?php 
// 4 tính chất của lập trình hướng đối tượng
// 1. Tính trừu tượng
// dựa vào đề bài của dự án. Xác định có các loại đối tượng gì 
// thì thực hiện tạo ra các class và các thuộc tính/hành động cần có của class đó

class DongVat{
	private $ten;
	var $tuoi;

	static function test(){
		$rs = new static();
		return $rs;
	}

	function an(){
		echo "toi dang an";
	}

	function ngu(){

	}

	
}


// 2. Tính kế thừa
// class B có thể kế thừa class A (bằng từ khoá extends)
// sau đó thực thể thuộc class B được phép sử dụng các thuộc tính/hành động được định nghĩa ở class A
class ConKhi extends DongVat{
	function setTen($value){
		$this->ten = $value;
	}

	function getTen(){
		return $this->ten;
	}
}
$x = new ConKhi();
// $x->an();
// var_dump($x);
// 3. Tính đa hình
// các lớp con được phép viết lại (overwrite) các hành động/thuộc tính của lớp cha. khi thực thể thuộc về lớp con thực thi 1 hành động, thì hành động được định nghĩa ở lớp con sẽ được ưu tiên
class ConMeo extends DongVat{
	function an(){
		echo "Con meo dang an";
	}

}

// $a = new ConMeo();
// $a->an();
// echo "<br>";
// $x->an();
// $x = ConKhi::test();
// var_dump($x);
// 4. Tính đóng gói
$x = new ConKhi();
$x->setTen('Duc');
// echo $x->getTen();
var_dump($x);



 ?>
