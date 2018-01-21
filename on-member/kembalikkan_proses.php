<?php
require_once ("config.php");
$id_buku = $_GET["id_buku"];
$id_peminjaman = $_GET["id_peminjaman"];

$query = "UPDATE buku SET jumlah=jumlah+1 WHERE id_buku=".$id_buku;
$hasil = $conn->query($query);

$query = "DELETE FROM peminjaman WHERE id_pinjam=".$id_peminjaman;
$hasil2 = $conn->query($query);

if ($hasil==1 && $hasil2==1){
	echo "<script type='text/javascript'>alert('berhasil mengembalikan buku');</script>";
	echo "<script type='text/javascript'>window.location.replace('peminjaman.php');</script>";
} 
$conn->close();
?>