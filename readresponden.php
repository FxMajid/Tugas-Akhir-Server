<?php 
require_once 'koneksi.php';

$query = "SELECT *FROM responden ORDER BY norspnd";

$jadi = mysqli_query($konek,$query);

$array = array();

while ($row  = mysqli_fetch_assoc($jadi))
{
	$array[] = $row; 
}


echo ($jadi) ? 
json_encode(array("kode" => 1, "jadi"=>$array)) :
json_encode(array("kode" => 0, "pesan"=>"data tidak ditemukan"));
?>