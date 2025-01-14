<!--Cek Session login-->
<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
*/
require('../on-member/config.php');

$q="select * from buku";
$res=mysqli_query($conn,$q) or die("Can't Execute Query...");

if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {
	header('location:./../login.php');
	exit();
}
?>
    <?php require('../config.php');?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>FAKE LIBRARY MEMBER</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="icon" href="../image/find_user.png">
        <style>
            html,
            body {
                height: 100%;
            }

            body {
                background-image: url(../image/bg2.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-color: #999;
            }

            div,
            body {
                margin: 0;
                padding: 0;
                font-family: exo, sans-serif;
            }

            .wrapper {
                height: 100%;
                width: 100%;
            }

            .message {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                width: 100%;
                height: 45%;
                bottom: 0;
                display: block;
                position: absolute;
                background-color: rgba(0, 0, 0, 0.6);
                color: #fff;
                padding: 0.5em;
            }

            h1 {
                text-align: center;
                font-weight: bold;
                color: white;
            }

            table {
                padding: 5px;
                border: 10px solid gray
            }

            td,
            th {
                padding: 15px
            }

            tr {
                background-color: white;
                color: black;
            }

        </style>

    </head>

    <body>


        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="#">FAKE LIBRARY</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="#">List Buku</a></li>
                        <li><a href="peminjaman.php">Peminjaman</a></li>
                        <li><a href="abstrak_buku.php">Ulasan</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- menu login -->
                        <li><a href="../logout.php" data-toggle="modal" data-target="#"><b>Logout</b></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- body text-->
        <div class="container">
            <h1>KOLEKSI KAMI</h1>
        </div>
        <!-- Start list buku -->
        <div id="page">
            <!-- start content -->
            <div id="content">
                <div class="post">
                    <h1 class="title"></h1>
                    <div class="entry">

                        <table border='1' WIDTH='100%'>
                            <tr>
                                <TD style="color:darkgreen" WIDTH='8%'><b><u>ID BUKU</u></b></TD>
                                <TD style="color:darkgreen" WIDTH='30%'><b><u>JUDUL</u></b></TD>
                                <TD style="color:darkgreen" WIDTH='10%'><b><u>JUMLAH</u></b></TD>
                                <TD style="color:darkgreen" WIDTH='20%'><b><u>PENERBIT</u></b></TD>
                                <TD style="color:darkgreen" WIDTH='20%'><b><u>PENULIS</u></b></TD>
                                <TD style="color:darkgreen" WIDTH='50%'><b><u>DESKRIPSI</u></b></TD>
                                <TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>

                            </tr>
                            <?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['judul'].'
                                        <td>'.$row['jumlah'].'
										<td>'.$row['penerbit'].'
										<td>'.$row['penulis'].'
										<td>'.$row['deskripsi'];
				echo "<td><img src='../$row[path_gambar]' width='50'/>";                                        
									$count++;
                            if ($row["jumlah"]> 0){
                            echo "<li style='list-style: none;' ><input type='submit' onclick='pinjam(".$row["id_buku"].",".$_SESSION["user_login"].");' name='submit' value='Pinjam' ></li>";
                            }
							}
						?>

                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- end list buku -->
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/script_pinjam.js"></script>
    </body>

    </html>
