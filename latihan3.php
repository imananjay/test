<?php 
//array associative
$siswa = [
	[
		"nama" => "Firmanayah",
		"nis" => "1579",
		"kelas" => "XI",
		"jurusan" => "RPL",
		"gambar" => "allmight.jpg"
	],
	[
		"nama" => "Silmi",
		"nis" => "1580",
		"kelas" => "XI",
		"jurusan" => "PS",
		"gambar" => "todo.jpg"
	]


]

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>array</title>
 </head>
 <body>
 	<h1>Daftar siswa</h1>

 	<?php foreach ($siswa as $s) : ?>
 		<ul>
 			<li>
 				<img src=img/<?= $s["gambar"];  ?>>
 			</li>
 			<li>Nama : <?= $s["nama"];  ?></li>
 			<li>Nis : <?= $s["nis"];  ?></li>
 			<li>Kelas : <?= $s["kelas"];  ?></li>
 			<li>Jurusan : <?= $s["jurusan"];  ?></li>
 		</ul>
 	<?php endforeach; ?>




 </body>
 </html>