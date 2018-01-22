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

function customSort($arr, $desc = true){
	for ($i=0; $i < count($arr); $i++) { 
		for ($j=$i+1; $j < count($arr); $j++) { 

			if(($desc && $arr[$j] < $arr[$i]) 
				|| (!$desc && $arr[$j] > $arr[$i])){
				$tmp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $tmp;
			} 
		}
	}
	return $arr;
}
var_dump($arr);
$arr = customSort($arr, false);

dd($arr);

// bài 2: không sử dụng hàm sort() hãy tạo hàm sắp xếp theo thứ tự từ nhỏ đến lớn
// customSort($arr, $desc = true) - $desc = true => từ nhỏ đến lớn, $desc = false => từ lớn đến nhỏ



 ?>