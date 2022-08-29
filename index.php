<!-- code html -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pertemuan 2</title>
	<!-- code CSS -->
	<style type="text/css">
		body {
			background-image: url(pict/bg.jpg);
			text-align: center;
			font-family: monospace;
			font-size: 15pt;
		}
		img {
			width: 15%;
			height: 15%;
		}
	</style>
	<!-- code JavaScript -->
	<script type="text/javascript">
		window.alert('Selamat Datang di About Me')
	</script>
</head>
<body>
	<!-- code PHP -->
	<?php
		$nama = "Niswatul Sifa";
		$nim = 210411100145;
		$prodi = "Teknik Informatika";
		$kelas = "IF 3C Pengembangan Aplikasi Web"
	?>
	<h1><?php echo "About Me"; ?></h1>
	<img src="pict/Sifa.jpg" alt="Sifa" class="gambar"></p>
	<?php 
		echo "<p>Nama : $nama";
		echo "<p>NIM : $nim";
		echo "<p>Prodi : $prodi";
		echo "<p>Kelas : $kelas";
	?>
	<?php
		$x = "C";
		echo "<p>Apakah saya berada di kelas PAW C?";
		var_dump($x == "C");
	?>
</body>
</html>