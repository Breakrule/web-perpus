<?php session_start();
require('config.php');
?>

<!DOCTYPE html>

<html>
<head>
		<title>Tambah Koleksi Buku</title>
</head>
<body>
<!-- start header -->
<h1>TAMBAH BUKU</h1>
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title" >Tambah</h1>
			<div class="entry" >
				<form action='proses_tambah_buku.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Judul:</b><br>
						<input type='text' name='judul' size='40'>
						<br><br>
						
						<b>Kategori:</b><br>
						<select  name="kat">
								<?php
									
											$query="select * from kategori ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['kat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
												
													
												}
												
											}
											mysqli_close($link);
								?>
						</select>
						<br><br>
						
						<b>Deskripsi:</b><br>
						<textarea cols="40" rows="6" name='description' ></textarea>
						<br><br>
						
						<b>Penerbit:</b><br>
						<input type='text' name='publisher' size='40'>
						<br><br>
						
						<b>Penulis:</b><br>
						<input type='text' name='edition' size='40'>
						<br><br>
						
						<b>Jumlah:</b><br>
						<input type='text' name='pages' size='40'>
						<br><br>
						
						
						<b>Image:</b><br>
						<input type='file' name='img' size='35'>
						<br><br>
						
						
						<b>E-Book:</b><br>
						<input type='file' name='ebook'  size='35'>
						<br><br>
						
						<input  type='submit'  value='   OK   '  >
				</form>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
    </div>
</body>
</html>