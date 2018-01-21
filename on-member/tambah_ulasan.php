<?php
require("config.php");
$id_buku     = $_POST["id_buku"];
$id_pengguna = $_POST["id_pengguna"];
$isi         = $_POST["isi"];
$query       = "INSERT INTO ulasan (id_buku,id_pengguna,tanggal, isi) VALUES(" . $id_buku . "," . $id_pengguna . ",'" . date("Y-m-d") . "','" . $isi . "')";
$hasil       = $conn->query($query);
if ($hasil != 0)
    echo "success";
else {
    echo "error";
}
$conn->close();
?>