<?php  

	require_once 'db.php';
	session_start();

	if (isset($_REQUEST['signin'])) {
		$nama	= stripcslashes(htmlentities($_REQUEST['nama']));
		$nama	= mysqli_escape_string($db, $nama);
		$pass	= stripcslashes(htmlentities($_REQUEST['pass']));
		$pass	= mysqli_escape_string($db, $pass);
		$cek	= "SELECT * FROM tb_user WHERE nama='$nama' AND pass='". md5($pass) ."'";
		$query	= mysqli_query($db, $cek);
		$result	= mysqli_num_rows($query);
		$row 	= mysqli_fetch_assoc($query);
		if ($result==1) {
			header("Location:index");
			$_SESSION['nama'] = $nama;
			$_SESSION['level'] = $row['level'];
		}else{
			echo "<script language=javascript>alert('Username / Password Salah !')</script>";
			header("refresh:0;url=signin");
		}
	}

?>