<?php 

// kiểu dữ liệu của biến
// chuỗi
$str = "chuỗi ký tự";
// ký tự
$char = '';
// số
$number = 500;

echo "số của chúng ta là \$number = $number <br>";
echo 'số của chúng ta là "$number" <br>';

// null
$a = null;

// boolean
$f = false;
$t = true;

// mảng
$traditionArr = [1,2,'x', false, [3,4,'y', true]];
$traditionArr[4][] = 'php1710';
// var_dump($traditionArr);die;


$phpArr = [
	"1" =>  'nguyen duy quang',
	'age' => 2
];
$phpArr[] = 'trang';
var_dump($phpArr);




 ?>