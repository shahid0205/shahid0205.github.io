<<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan UPI YPTK Padang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>Form Input Data Buku - Andalusia Library And Knowledge Center</h2></center>
	<div class="login">
		<form action="proses.php" method="POST" onSubmit="validasi()">
			<div>
				<label>Kode Buku:</label>
				<Input type="text" name="kode_buku" id="kode_buku">
			</div>
			<div>
				<label>Judul Buku:</label>
				<Input type="text" name="judul_buku" id="judul_buku">
			</div>
			<div>
				<label>Tahun:</label>
				<Input type="text" name="tahun" id="tahun">
			</div>
			<div>
				<label>Pengarang:</label>
				<Input type="text" name="pengarang" id="pengarang">
			</div>
			<div>
				<label>Penerbit:</label>
				<Input type="text" name="penerbit" id="penerbit">
			</div>
			<div>
				<label>Deskripsi:</label>
				<textarea onkeyup="document.getElementById('counter').innerText = this.value.length" cols="40" rows="5" name="deskripsi" id="deskripsi" ></textarea>
				<p>Panjang: <span id="counter">0</span> karakter</p>
			</div>
			<div>
				<Input type="submit" value="simpan" name="proses" class="tombol">
			</div>
		</form>
	</div>
	<center><button class="tombol1"><a href="tampil.php">Lihat Data Buku</a></button></center>
</body>
</html>