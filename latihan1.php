<!DOCTYPE html>
<html>
<head>
	<title>latihan array</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: green;
			text-align: center;
			line-height: 50px;
			margin: 4px;
			float: left;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>

<?php 
$angka = [[1,2,3],[4,5,6],[7,8]];
?>

<?php foreach( $angka as $a ) : ?>
	<?php foreach($a as $b) : ?>
		<div class="kotak"><?= $b; ?></div>
	<?php endforeach; ?>
	<div class="clear"></div>
<?php endforeach; ?>






</body>
</html>