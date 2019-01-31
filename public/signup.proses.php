<?php  
	date_default_timezone_set("Asia/Jakarta");
	require 'head.php';
	require_once 'db.php';
	if ($_REQUEST['signup']) {
		$nama	= stripcslashes($_REQUEST['nama']);
		$nama	= mysqli_escape_string($db, $nama);
		$pass	= stripcslashes($_REQUEST['pass']);
		$pass	= mysqli_escape_string($db, $pass);
		$jk 	= stripcslashes($_REQUEST['jk']);
		$jk 	= mysqli_escape_string($db, $jk);
		$email	= stripcslashes($_REQUEST['email']);
		$email	= mysqli_escape_string($db, $email);
		$time 	= date("Y-m-d H:i:s");
		$cfil	= "SELECT nama, email FROM tb_user WHERE nama='$nama' OR email='$email' ";
		$insert	= "INSERT INTO tb_user (nama, pass, jk, email, created) VALUES ('$nama', '".md5($pass)."', '$jk', '$email', '$time') ";
		$cek	= mysqli_query($db, $cfil);
		$rcek	= mysqli_fetch_array($cek, MYSQLI_ASSOC);
		if (mysqli_num_rows($cek)) {
			echo "<div class='col s6 m6 14 pull-14 card center hoverable'>
					Maaf Nama / Email Sudah Digunakan
				  </div>
				 ";
		}else{
			$result	= mysqli_query($db, $insert);
			if ($result) {
				echo "<script language=javascript>alert('Registrasi Berhasil');</script>";
				header("refresh:0; url=signin.php");
			}else{
				echo "<script language=javascript>Eror
					 ". mysqli_error($db).
					 "</script>";
				header("refresh:0; url=signup.php");
			}
		}
	}

	require 'foot.php';
?>