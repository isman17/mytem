<?php  
	date_default_timezone_set('Asia/Jakarta');
	require_once 'db.php';
	if ($_REQUEST['signup']) {
		$nama	= stripslashes($_REQUEST['nama']);
		$nama	= mysqli_real_escape_string($db, $nama);
		$pass	= stripslashes($_REQUEST['pass']);
		$pass	= mysqli_real_escape_string($db, $pass);
		// $jk 	= stripcslashes($_REQUEST['jk']);
		// $jk 	= mysqli_escape_string($db, $jk);
		$email	= stripslashes($_REQUEST['email']);
		$email	= mysqli_real_escape_string($db, $email);
		$time	= date("Y-m-d H:i:s");
		$cfil	= "SELECT nama,email FROM tb_user WHERE nama='$nama' OR email='$email' ";
		$cek	= mysqli_query($db, $cfil);
		$rcek	= mysqli_fetch_array($cek, MYSQLI_ASSOC);
		if (mysqli_num_rows($cek)) {
			echo "Maaf Nama / Email Sudah Digunakan !";
		}else{
			$insert	= "INSERT INTO tb_user (`nama`, `pass`, `email`, `time`) VALUES ('$nama', '".md5($pass)."','$email','$time')";
			$result	= mysqli_query($insert, $db);
			if ($result) {
				echo "ada";
			}else{
				echo "kosong";
			}
			exit();
			if ($insert) {
				echo "<div class='modal modal-fixed-footer'>
						<h3>You Are Registered Succesfully</h3><br>
						<a href=signin.php class=btn>SignIn</a>
				  	  </div>
					";
				header("Location:signin.php");
			}else{
				echo "Eror";
			}
		}
	}

?>