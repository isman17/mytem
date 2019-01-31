<?php  

	require_once 'db.php';
	session_start();

	if (isset($_REQUEST['signin'])) {
		$nama	= stripcslashes($_REQUEST['nama']);
		$nama	= mysqli_escape_string($db, $nama);
		$pass	= stripcslashes($_REQUEST['pass']);
		$pass	= mysqli_escape_string($db, $pass);

		$cek	= "SELECT * FROM tb_user WHERE nama='$nama' AND pass='". md5($pass) ."' ";
		$query	= mysqli_query($db, $cek);
		$result	= mysqli_num_rows($query);
		if ($result==1) {
			header("Location:index.php");
			$_SESSION['nama'] = $nama;
		}else{
			echo "<script language=javascript>alert('Username / Password Salah !')</script>";
			header("refresh:0;url=signin.php");
		}
	}

?>