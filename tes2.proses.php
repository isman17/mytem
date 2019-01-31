<?php  

	require('db.php');
	session_start();
	if (isset($_POST['signin'])){
		$username = stripslashes($_REQUEST['nama']);
		$username = mysqli_real_escape_string($db,$username);
		$password = stripslashes($_REQUEST['pass']);
		$password = mysqli_real_escape_string($db,$password);
	    $query 	  = "SELECT * FROM `tb_user` WHERE nama='$username' and pass='".md5($password)."' ";
		$result   = mysqli_query($db,$query);
		$rows 	  = mysqli_num_rows($result);
	    if($rows==0){
			echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='signin.php'>Login</a></div>
				";    
	    }else{
	    	$_SESSION['nama'] = $username;
		   	echo "Welcome ".$username;
		}
	}

?>