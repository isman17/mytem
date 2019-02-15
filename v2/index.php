<?php 
	require 'head.php'; 
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: signin");
	}else{
		if ($_SESSION['level']== 'Super') {
			echo "<div class='mdl-layout'><center>
					<span>Welcome ". $_SESSION['nama']."</span>
					<br>
					<span>This Is Your World !</span></center>
				  </div>";
		}elseif ($_SESSION['level']== 'User'){
			echo "<div class='mdl-layout'><center>
					<span>Welcome ". $_SESSION['nama']."</span>
					<br>
					<span>Anda Rakyat Biasa !</span></center>
				  </div>";
		}
	}
?>

</body>
<?php require 'foot.php'; ?>
