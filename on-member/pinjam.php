<?php
require ("config.php");
$id_pengguna = $_GET["user_login"];
$id_buku = $_GET["id_buku"];

$query = "update buku SET jumlah=jumlah-1 WHERE buku.id_buku=".$id_buku;
$hasil = $conn->query($query);

$query = "insert into peminjaman(id_buku,id_pengguna) VALUES(".$id_buku.",".$id_pengguna.")";
$hasil2 = $conn->query($query);
if ($hasil==1 && $hasil2==1){
	echo "<script type='text/javascript'>alert('recorded!');</script>";
	echo "<script type='text/javascript'>window.location.replace('index.php');</script>";
}else{
	echo "failed";
}
$conn->close();
?>
