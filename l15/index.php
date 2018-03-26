

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$soA = $_POST['soA'];
	$soB = $_POST['soB'];
	$soC = $_POST['soC'];
	echo $soA+$soB+$soC;
}else{
	?>
<div>
	<form action="" method="post">
		<input type="number" name="soA" value="" placeholder="">
		<input type="number" name="soB" value="" placeholder="">
		<input type="number" name="soC" value="" placeholder="">
		<button type="submit">Save</button>
	</form>
</div>

	<?php
}

 ?>