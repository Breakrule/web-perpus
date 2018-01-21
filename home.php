<?php
session_start();

if(!isset($_SESSION['user_session']))
{
 header("Location: index.php");
}

include_once 'include/config.php';

$stmt = $db_con->prepare("SELECT * FROM pengguna WHERE id_pengguna=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAKE LIBRARY - MEMBER PAGE</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<!--<link href="style.css" rel="stylesheet" media="screen">-->
</head>

<body>
<div class="container">
    <div class='alert alert-success'>
  <button class='close' data-dismiss='alert'>&times;</button>
   <strong>Hello '<?php echo $row['nama_pengguna']; ?></strong>  Welcome to the members page.
    </div>
</div>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
