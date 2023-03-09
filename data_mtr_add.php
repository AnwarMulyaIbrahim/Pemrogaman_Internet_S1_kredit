<!DOCTYPE html>
<html>
<head>
	<title>data motor</title>
</head>
<body>
<form method="POST" action="data_mtr_proses.php?aksi=input">
	<h1>Form Input Data Motor</h1>
	<label>Kode Motor:</label><br>
	<input type="text" name="kd_motor" placeholder="Masukan Kode Motor...."><p></p>
	<label>Nama Motor:</label><br>
	<input type="text" name="nm_motor" placeholder="Masukan nama Motor...."><p></p>
	<label>merek Motor:</label><br>
	<input type="text" name="merk" placeholder="Masukan merk Motor...."><p></p>
	<label>harga Motor:</label><br>
	<input type="text" name="harga" placeholder="Masukan harga Motor...."><p></p>
	<label>stok Motor:</label><br>
	<input type="text" name="stok" placeholder="Masukan stok Motor...."><p></p>
	<label> Keterangan: </label><br>
	<textarea type="text" name="ket" placeholder="Masukan keterangan Motor...."></textarea> <p></p>
	<input type="submit" name="submit" value="Crate Data Motor">

</form>
</body>
</html>