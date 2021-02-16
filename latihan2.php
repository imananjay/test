<?php 
//array numerik
$siswa = [
	["Firmansyah", "1579", "XI", "RPL" ],
	["Silmi", "1580", "XI", "perawatan sosial"],
	["Rose", "1530", "XII", "Bekam"]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar siswa</title>
 </head>
 <body>
 	<h1>Daftar siswa</h1>

 	<?php foreach($siswa as $s) : ?>
 		<ul>
 			<li>Nama : <?= $s[0]; ?></li>
 			<li>Nis : <?= $s[1]; ?></li>
 			<li>Kelas : <?= $s[2]; ?></li>
 			<li>Jurusan : <?= $s[3]; ?></li>
 		</ul>
 	<?php endforeach; ?>
 </body>
 </html>