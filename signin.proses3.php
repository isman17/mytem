<?php

	require ('db.php');
	session_start();
	if (isset($_POST['signin'])) {
		$nama	= stripcslashes($_REQUEST['nama']);
		// $nama	= "1";
		$nama	= mysqli_real_escape_string($db, $nama);
		// $pass 	= "1";
		$pass	= stripcslashes($_REQUEST['pass']);
		$pass	= mysqli_real_escape_string($db, $pass);
		$query 	= "SELECT * FROM 'tb_user' WHERE nama='$nama' AND pass='$pass' ";

		$result	= mysqli_query($db, $query);
		$rows 	= mysqli_num_rows($result);

		if ($rows < 0) {
			echo "Username / Password Salah!";
		}else{
			$_SESSION['nama'] = $nama;
			header("Location:index.php");
			echo "Welcome ".$nama;
		}
	}

?>
