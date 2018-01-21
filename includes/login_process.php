<?php
	session_start();
	require_once 'config.php';
	if(isset($_POST['btn-login']))
	{
		$nama_pengguna = trim($_POST['nama_pengguna']);
        $kata_kunci = trim($_POST['kata_kunci']);
		$kunci = md5($kata_kunci);		
        try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM pengguna WHERE nama_pengguna=:nama");
			$stmt->execute(array(":nama"=>$nama_pengguna));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['kata_kunci']==$kata_kunci){
				
				echo "ok"; // log in
				$_SESSION['user_session'] = $row['id_pengguna'];
			}
			else{
				
				echo "username or password does not exist."; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
?>