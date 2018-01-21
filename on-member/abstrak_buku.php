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
                        <li><a class="active" href="index.php">List Buku</a></li>
                        <li><a href="peminjaman.php">Peminjaman</a></li>
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
        <?php 
require ("config.php");
$id_buku = $_GET["id_buku"];
$ibook = $_GET["id_buku"];
$jumlah;
$query = "SELECT * FROM buku WHERE id_buku=".$id_buku;

$result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    echo "  <img class='imgl borderedbox inspace-5' src='".$row["path_gambar"]."' alt=''>
      <strong id='id_buku'>ID       :".$row["id_buku"]."</strong><p>
      <strong>Judul    :</strong>".$row["judul"]."<p>
      <strong>Penulis  :</strong>".$row["penulis"]."</p><p>
      <strong>Penerbit :</strong>".$row["penerbit"]."</p><p>
      <strong>Jumlah   :</strong>".$row["jumlah"]."</p><p>
      <strong>Deskripsi:</strong></p><p>".$row["deskripsi"]."</p>";
$jumlah = $row["jumlah"];
} 
}
$conn->close();
      ?>

        <div id="comments">
            <h2>Comments</h2>
            <ul>
                <?php 
          require ("config.php");
             $query = "SELECT ulasan.id_ulasan, ulasan.id_buku,ulasan.id_pengguna, ulasan.tanggal, ulasan.isi, pengguna.nama_pengguna FROM ulasan  INNER JOIN pengguna on ulasan.id_pengguna = pengguna.id_pengguna and ulasan.id_buku=".$id_buku;
            
                        $result = $conn->query($query);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {

echo "<li>
            <article>
              <header>
                <address>
                By <a href='#'>".$row["nama_pengguna"]."</a>
                </address>
                <time datetime=''>".$row["tanggal"]."</time>
              </header>
              <div class='comcont'>
                <p>".$row["isi"]."</p>
              </div>
            </article>
          </li>";

}}
            $conn->close();
          ?>


            </ul>
            <?php
          
          if (isLogin()){
            echo "<input type='hidden' name='id_pengguna' id='id_pengguna' value='".$_SESSION["id_pengguna"]."'>";
            echo "<input type='hidden' name='id_pengguna' id='id_bukubaru' value='".$ibook."'>";
             
          }
         ?>
                <h2>Write A Comment</h2>
                <div class="block clear">
                    <label for="comment">Your Comment</label>
                    <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" name="submit" onclick="sendUlasan();" value="Submit Form"> &nbsp;
                    <input type="reset" name="reset" value="Reset Form">
                </div>
        </div>
        <script src="../js/jquery-3.2.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/script_pinjam.js"></script>
    </body>

    </html>
