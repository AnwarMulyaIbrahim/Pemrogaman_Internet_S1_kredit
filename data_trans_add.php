<?php 
include'database.php';
$db = new database();
$data_motor = $db->data_motor();
$data_cus = $db->data_cus();



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>data motor</title>
</head>
<body>
<form method="POST" action="data_trans_proses.php?aksi=input">
	<h1>Form Input Data Transaksi</h1>
	<label>Tanggal:</label><br>
	<input type="date" name="tgl_trans" placeholder="Masukan Tanggal Transaksi...."><p></p>
	<label>No Transaksi:</label><br>
	<input type="text" name="no_trans" placeholder="Masukan Nomor Transaksi...."><p></p>
	<label>Nama Motor:</label><br>
	<select name="id_motor" onchange="changeValue(this.value)">
		<option>~Pilih Motor~</option>
		<?php
		$jsArray = "var prdName = new Array();\n";
		foreach ($data_motor as $row){
		echo"<option value='$row[id_motor]'>'$row[nm_motor]'</option>";
		$jsArray .= "prdName['".$row['id_motor']."'] = {
			harga:'".addslashes($row['harga'])."'};\n";
		}
		?>
	</select><p></p>
	<label>Harga:</label><br>
	<input type="text" name="harga" id="harga"><p></p>
	<label>Nama Customer:</label><br>
	<select name="id_cus">
		<option>~Pilih Nama~</option>
		<?php
		$jsArray1 = "var prdName1 = Array();/n";
		foreach ($data_cus as $row){
		echo"<option value='$row[id]'>'.$row[nama].'</option>";
		}
		?>
	</select><p></p>
	<label>Jumlah Keredit:</label><br>
	<input type="text" name="jml_kredit" placeholder="Masukan Jumlah kredit...."><p></p>
	<label>Lama Kredit:</label><br>
	<input type="text" name="lama_kredit" placeholder="Masukan Lama kredit...."><p></p>
	<input type="submit" name="submit" value="Crate Data">

</form>
</body>
<script>
	<?php echo "$jsArray"; ?>
	function changeValue(x){
		document.getElementById('harga').value = prdName[x].harga;
	}
</script>
</html>