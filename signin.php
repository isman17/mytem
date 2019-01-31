<?php 
	
	require 'head.php'; 
	session_start();
	if (isset($_SESSION['nama'])) {
		header("Location:index.php");
	}

?>

<div class="valign-wrapper row">
	<div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
		<form action="signin.proses.php" method="post">
			<div class="row top center">
				<h5>SignIn Here !</h5>
				<div class="input-field top col s12">
					<i class="material-icons prefix">assignment_ind</i>
					<input class="autocomplete" id="nama" type="text" name="nama" autofocus>
					<label for="nama">Username</label>
				</div>

				<div class="input-field med col s12">
					<i class="material-icons prefix">visibility_off</i>
					<input class="autocomplete" id="pass" type="password" name="pass">
					<label for="pass">Password</label>
				</div>
				
				<div class="input-field med col s12">
					<input class="waves-effect waves-light btn blue darken-1" type="submit" name="signin" value="SignIn">
				</div>
			</div>

		</form>
	</div>
</div>

<?php require 'foot.php'; ?>
