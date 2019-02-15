<?php  
	date_default_timezone_set("Asia/Jakarta");
	require 'head.php';
	require_once 'db.php';
	if ($_REQUEST['signup']) {
		$nama	= stripcslashes(htmlentities($_REQUEST['nama']));
		$nama	= mysqli_escape_string($db, $nama);
		// $pass1	= stripcslashes(htmlentities($_REQUEST['pass1']));
		// $pass2	= stripcslashes(htmlentities($_REQUEST['pass2']));
		$pass	= stripcslashes(htmlentities($_REQUEST['pass']));
		$pass	= mysqli_escape_string($db, $pass);
		$jk 	= stripcslashes(htmlentities($_REQUEST['jk']));
		$jk 	= mysqli_escape_string($db, $jk);
		$email	= stripcslashes(htmlentities($_REQUEST['email']));
		$email	= mysqli_escape_string($db, $email);
		$level	= 'User';
		$time 	= date("Y-m-d H:i:s");
		
		$cfil	= "SELECT nama, email FROM tb_user WHERE nama='$nama' OR email='$email' ";
		$insert	= "INSERT INTO tb_user (nama, pass, jk, email, level, created) VALUES ('$nama', '".md5($pass)."', '$jk', '$email', '$level','$time') ";
		$cek	= mysqli_query($db, $cfil);
		$rcek	= mysqli_fetch_array($cek, MYSQLI_ASSOC);
		if (mysqli_num_rows($cek)) {
			echo "<script language=javascript>alert('Maaf Nama / Email Sudah Digunakan');</script>";
			header("refresh:0 ; url=signup");
		}else{
			$result	= mysqli_query($db, $insert);
			if ($result) {
				echo "<script language=javascript>alert('Registrasi Berhasil');</script>";
				header("refresh:0 ; url=signin");
			}else{
				echo "<script language=javascript>alert('Registrasi Gagal');</script>";
				header("refresh:0 ; url=signup");
			}
		}
	}

	require 'foot.php';
?>