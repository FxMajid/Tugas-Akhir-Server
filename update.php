<?php 
 require_once 'koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$nomor	= $_POST['nosurvei'];
	$nip	= $_POST['nip'];
	$resp	= $_POST['norspnd'];
	$trione	= $_POST['triwulanI'];
	$tritwo	= $_POST['triwulanII'];
	$tritri	= $_POST['triwulanIII'];
	$tripat	= $_POST['triwulanIV'];

 	$query = "UPDATE  survei SET nip = '$nip', norspnd = '$resp', triwulanI = '$trione', triwulanII = '$tritwo', triwulanIII = '$tritri', triwulanIV = '$tripat' WHERE nosurvei='$nomor'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak diterima'));
 }

 ?>