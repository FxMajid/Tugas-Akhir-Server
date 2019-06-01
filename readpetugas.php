<?php 
require_once 'koneksi.php';

$query = "SELECT *FROM petugas ORDER BY nip";

$hasil = mysqli_query($konek,$query);

$array = array();

while ($row  = mysqli_fetch_assoc($hasil))
{
	$array[] = $row; 
}


echo ($hasil) ? 
json_encode(array("kode" => 1, "hasil"=>$array)) :
json_encode(array("kode" => 0, "pesan"=>"data tidak ditemukan"));
?>