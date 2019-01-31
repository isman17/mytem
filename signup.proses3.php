<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['signup'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['nama']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($db,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($db,$email);
	$password = stripslashes($_REQUEST['pass']);
	$password = mysqli_real_escape_string($db,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `tb_user` ('nama', 'pass', 'email', 'date')
				VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        mysqli_query($db,$query);
    //     if($result){
    //         echo "<div class='form'>
				// <h3>You are registered successfully.</h3>
				// <br/>Click here to <a href='login.php'>Login</a></div>
				// ";
    //     }else{
    //     	echo "";
    //     }
    }