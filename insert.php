<?php 
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nip		= $_POST['nip'];
	$namaptgs	= $_POST['nama_ptgs'];
	$resp		= $_POST['norspnd'];
	$namarspnd	= $_POST['nama_rspnd'];
	$trione		= $_POST['triwulanI'];
	$tritwo		= $_POST['triwulanII'];
	$tritri		= $_POST['triwulanIII'];
	$tripat		= $_POST['triwulanIV'];

	$query = "INSERT INTO survei (nip, nama_ptgs, norspnd, nama_rspnd, triwulanI, triwulanII, triwulanIII, triwulanIV) VALUES ('$nip', '$namaptgs', '$resp', '$namarspnd', '$trione','$tritwo','$tritri','$tripat')";
	$result = mysqli_query($konek, $query);
	echo($result) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambah data')) : json_encode(array('kode' =>2, 'pesan' => 'gagal menambah data'));
}
else {
	echo json_encode(array('kode' => 101, 'pesan' => 'request tidak benar'));
}
?>