<?php  

	require ('db.php');
	session_start();
	if (isset($_POST['signin'])) {
		$nama	= stripcslashes($_REQUEST['nama']);
		$nama	= mysqli_real_escape_string($db, $nama);
		$pass	= stripcslashes($_REQUEST['pass']);
		$pass	= mysqli_real_escape_string($db, $pass);
		$signin 	= "SELECT * FROM 'tb_user' WHERE nama='$nama' AND pass='".md5($pass)."' ";
		$query	= mysqli_query($db,$signin);
		$rows 	= mysqli_num_rows($query);
		if ($rows==0) {
			echo "<h3>Username / Password Salah!</h3><br><a href='signin.php>SignIn</h3>'";
		}else{
			$_SESSION['nama'] = $nama;
			header("Location:index.php");
			echo "Welcome ".$nama;
		}
	}

?>