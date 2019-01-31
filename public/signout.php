<?php  
	require 'head.php';
	session_start();
	if (!isset($_SESSION['nama'])) {
		echo "<center>Anda Belum <a href='signin.php'>SignIn</a><br>Anda Akan Dialihkan</center>";
		header("refresh:3; url=signin.php");
	}else{
		session_unset();
		session_destroy();
		echo "<center>Anda Telah Keluar =+=+==+-+_=+_=-+</center>";
		header("refresh:1; url=index.php");
	}
	require 'foot.php';
?>