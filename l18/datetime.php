<?php 
// $quangDate = strtotime('1996-02-10 22:10');
// // var_dump($quangDate);die;
// $now = date('M d, Y h:i:s', $quangDate);
// var_dump($now);


// $quangTime=date_create("1991-02-03");
$trangTime=date_create("1997-09-17");
// $diff=date_diff($trangTime,$quangTime);
// echo $diff->format("%R%a days");

$date = date('L', strtotime("1996-09-17"));
var_dump($date);

 ?>