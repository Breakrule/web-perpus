<?php require('config.php');?>
<?php require('check-login.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>-= Fake Library =-</title>
	<link rel="stylesheet" type="text/css" href="../src/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../src/css/style_.css">
	<script type="text/javascript" src="../src/js/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../src/js/bootstrap.js"></script>
</head>
<body class="bg-default" style="background-color:#fafafa">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#fff !important">
	<img src="../src/img/logook.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
    		<a href="?page=buku">Buku <span class="sr-only">(current)</span></a>		
    	</li>
    </ul>
	<ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
    		<a href="?page=user">User <span class="sr-only">(current)</span></a>		
    	</li>
    </ul>
	<ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
    		<a href="?page=anggota">Anggota <span class="sr-only">(current)</span></a>		
    	</li>
    </ul>
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
    		<a href="?page=transaksi">Data Peminjaman <span class="sr-only">(current)</span></a>		
    	</li>
    </ul>
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
    		<a href="?page=ulasan">Ulasan <span class="sr-only">(current)</span></a>		
    	</li>
    </ul>
      <a class="btn btn-outline-success my-2 my-sm-0" href="../index.php">Keluar</a>
</nav>
		<div>
<div>
	<table width="100%" border="0">
              <tr>
                <td class="ket"><?php 
			$page	= isset($_GET['page']) ? $_GET['page'] : "";
			
			if(strstr($page,"transaksi")) {
			$j=".:: Menu Transaksi ::.";
			} else if(strstr($page,"buku")) {
			$j=".:: Menu Data Buku ::.";
			} else if(strstr($page,"pengunjung")) {
			$j=".:: Menu Data Pengunjung ::.";
			} else if(strstr($page,"user")) {
			$j=".:: Menu Data User ::.";
			} else if(strstr($page,"laporan")) {
			$j=".:: Menu Laporan ::.";
			} else if(strstr($page,"anggota")) {
			$j=".:: Menu Anggota ::.";
			} else {
			$j=".:: Selamat Datang di Halaman Administrator ::.";
			} 
			echo $j;
		?></td>
              </tr>
            </table><hr />
              <table width="100%" border="0" class="konten">
                <tr>
                </tr>
              </table>
            <p><span class="tengah">
              <?php 
	//menu transaksi
	if($page=="transaksi") {

	include "../transaksi/lihat_transaksi.php";
	} else if($page=="input_transaksi") {
	include "../transaksi/$page.php";
	} else if($page=="act_input_transaksi") {
	include "../transaksi/$page.php";
	} else if($page=="act_kembali") {
	include "../transaksi/$page.php";
	} else if($page=="act_panjang") {
	include "../transaksi/$page.php";
	//======== akhir menu transaksi =========
	
	//menu buku
	} else if($page=="buku") {
	include "../buku/lihat_buku.php";
	} else if($page=="input_buku") {
	include "../buku/$page.php";
	} else if($page=="act_input_buku") {
	include "../buku/$page.php";
	} else if($page=="edit_buku") {
	include "../buku/$page.php";
	} else if($page=="act_edit_buku") {
	include "../buku/$page.php";
	} else if($page=="act_hapus_buku") {
	include "../buku/$page.php";
	} else if($page=="detil_buku") {
	include "../buku/$page.php";
	}
	//======== akhir menu buku ================

	//----menu laporan 
	else if($page=="lap") {
	include "../laporan/$page.php";
	} else if($page=="lap_peminjaman") {
	include "../laporan/$page.php";
	} else if($page=="lap_pengunjung") {
	include "../pengunjung/$page.php";
	} else if($page=="edit_laporan") {
	include "../laporan/$page.php";
	} else if($page=="act_edit_laporan") {
	include "../laporan/$page.php";
	} else if($page=="act_hapus_laporan") {
	include "../laporan/$page.php";
	
	//=============== akhir menu laporan =================
	
	// menu anggota
	} else if($page=="anggota") {
	include "../anggota/lihat_$page.php";
	} else if($page=="input_anggota") {
	include "../anggota/$page.php";
	} else if($page=="act_input_anggota") {
	include "../anggota/$page.php";
	} else if($page=="edit_anggota") {
	include "../anggota/$page.php";
	} else if($page=="act_edit_anggota") {
	include "../anggota/$page.php";
	} else if($page=="act_hapus_anggota") {
	include "../anggota/$page.php";
	//============== akhir menu anggota ==================
	
	//menu user
	} else if($page=="user") {
	include "../user/lihat_user.php";
	} else if($page=="input_user") {
	include "../user/$page.php";
	} else if($page=="act_input_user") {
	include "../user/$page.php";
	} else if($page=="edit_user") {
	include "../user/$page.php";
	} else if($page=="act_edit_user") {
	include "../user/$page.php";
	} else if($page=="act_hapus_user") {
	include "../user/$page.php";
	}
	//==========  akhir menu user  =================
	
	//log out	
	//log out	
	else if($page=="logout") {
	logout();
	} else {
	//echo $utama;
	}
	?>
</div>
	<div class="card-footer text-muted">
		<small> ©Kelompok7- DPW B - Informatika IT Telkom PWT</small>
	</div>
</body>
</html>