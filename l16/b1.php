<?php 
// hoan thien ham sau:
// generateRandomArr($min, $max, $totalElement)
// trả về 1 mảng random có số lượng phần tử bằng $totalElement
// nằm trong khoảng từ $min đến $max
function generateRandomArr($min, $max, $totalElement){
	$result = [];
	for ($i=0; $i < $totalElement; $i++) { 
		$result[] = rand($min, $max);
	}

	return $result;
}

function dd($var){
	echo "<pre>";
	var_dump($var);
	die;
}

$arr = generateRandomArr(1, 100, 20);
// dd($arr);


// bài 2: không sử dụng hàm sort() hãy tạo hàm sắp xếp theo thứ tự từ nhỏ đến lớn
// customSort($arr, $desc = true) - $desc = true => từ nhỏ đến lớn, $desc = false => từ lớn đến nhỏ



 ?>