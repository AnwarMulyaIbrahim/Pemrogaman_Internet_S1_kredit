<?php 
class database{

	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "kredit";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

	}
	function input_motor($kd_motor, $nm_motor, $merk, $harga, $stok, $ket){
		mysqli_query($this->koneksi, "insert into tbl_motor values ('','$kd_motor', '$nm_motor', '$merk', '$harga', '$stok', '$ket')");
	}

	function data_motor(){
		if(isset($_POST['kei'])){
			$kei = $_POST['kei'];
			$data_motor = mysqli_query($this->koneksi, "SELECT * from tbl_motor WHERE kd_motor LIKE '%$kei%'");
		while ($row = mysqli_fetch_array($data_motor)) {
			$hasil_motor[] = $row;
		}
		}else{
		$data_motor = mysqli_query($this->koneksi, "select * from tbl_motor");
		while ($row = mysqli_fetch_array($data_motor)) {
			$hasil_motor[] = $row;
		}
		}
		return $hasil_motor;
				
	}


	function tampil_data($id_motor){
		$query = mysqli_query($this->koneksi, "SELECT * from tbl_motor where id_motor ='$id_motor' ");
		return $query->fetch_array();
	}
	function update_motor($id_motor, $kd_motor, $nm_motor, $merk, $harga, $stok, $ket){
		$query = mysqli_query($this->koneksi, "UPDATE tbl_motor set kd_motor = '$kd_motor', nm_motor = '$nm_motor', merk = '$merk', harga = '$harga', stok = '$stok', ket = '$ket' where id_motor ='$id_motor' ");
	}
	function delet_data($id_motor){
		$query = mysqli_query($this->koneksi,"DELETE FROM tbl_motor where id_motor = $id_motor ");
	}
	function data_trans(){
		if(isset($_POST['key'])){
			$key= $_POST['key'];
			// $awal= $_POST['awal'];
			// $ahir= $_POST['ahir'];
			$data_trans = mysqli_query($this->koneksi, "SELECT tbl_trans. *, tbl_motor.*,tbl_costumer.* from tbl_trans join tbl_motor on tbl_trans.id_motor = tbl_motor.id_motor join tbl_costumer on tbl_trans.id_cus=tbl_costumer.id WHERE no_trans LIKE '%$key%'");
		while ($row = mysqli_fetch_array($data_trans)) {
			$hasil_trans[] = $row;
		}
		return $hasil_trans;
		}else{
		$data_trans = mysqli_query($this->koneksi, "SELECT tbl_trans. *, tbl_motor.*,tbl_costumer.* from tbl_trans join tbl_motor on tbl_trans. id_motor = tbl_motor. id_motor join tbl_costumer on tbl_trans. id_cus=tbl_costumer. id");
		while ($row = mysqli_fetch_array($data_trans)) {
			$hasil_trans[] = $row;
		}
		return $hasil_trans;
		}
	}
	function input_trans($tgl_trans, $no_trans, $id_motor, $id_cus, $jml_kredit, $lama_kredit, $bunga, $total, $angsuran){
		mysqli_query($this->koneksi, "INSERT into tbl_trans values ('','$tgl_trans', '$no_trans', '$id_motor', '$id_cus', '$jml_kredit', '$lama_kredit', '$bunga', '$total','$angsuran')");
	}
	function tampil_trans($id_trans){
		$query = mysqli_query($this->koneksi, "SELECT * from tbl_trans where id_trans ='$id_trans' ");
		return $query->fetch_array();
	}
	function update_trans($id_trans, $tgl_trans, $no_trans, $id_motor, $id_cus, $jml_kredit, $lama_kredit, $bunga, $total, $kredit_bulan){
		$query = mysqli_query($this->koneksi, "UPDATE tbl_trans set tgl_trans = '$tgl_trans', no_trans = '$no_trans', id_motor = '$id_motor', id_cus = '$id_cus', jml_kredit = '$jml_kredit', lama_kredit = '$lama_kredit', bunga = '$bunga', total = '$total', kredit_bulan = '$kredit_bulan' where id_trans ='$id_trans' ");
	}
	function delet_trans($id_trans){
		$query = mysqli_query($this->koneksi,"DELETE FROM tbl_trans where id_trans = $id_trans ");
	}
	function data_cus(){
		if(isset($_POST['kew'])){
			$kew = $_POST['kew'];
		$data_cos = mysqli_query($this->koneksi, "SELECT * from tbl_costumer WHERE nama LIKE '%$kew%' OR gender LIKE '%$kew%' ");
		while ($row = mysqli_fetch_array($data_cos)) {
			$hasil_cos[] = $row;
		}
		}else{
			$data_cos = mysqli_query($this->koneksi, "SELECT * from tbl_costumer");
		while ($row = mysqli_fetch_array($data_cos)) {
			$hasil_cos[] = $row;
		}
		}
		return $hasil_cos;
	}
	function input_cus($nama, $gender, $alamat){
		mysqli_query($this->koneksi, "INSERT into tbl_costumer values ('','$nama', '$gender', '$alamat')");
	}
	function tampil_cus($id){
		$query = mysqli_query($this->koneksi, "SELECT * from tbl_costumer where id ='$id' ");
		return $query->fetch_array();
	}
	function update_cus($id, $nama, $gender, $alamat){
		$query = mysqli_query($this->koneksi, "UPDATE tbl_costumer set nama = '$nama', gender = '$gender', alamat = '$alamat' where id ='$id' ");
	}
	function delet_cus($id){
		$query = mysqli_query($this->koneksi,"DELETE FROM tbl_costumer where id = $id");
	}

}


 ?>