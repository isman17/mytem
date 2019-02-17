<?php 
	
	require 'head.php';
	session_start();
	if (isset($_SESSION['nama'])) {
		header("Location:index");
	}

?>

<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-card mdl-shadow--8dp" style="border-radius: 5px; margin:5%;">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">SignIn Here !</div>
		<div class="mdl-card__supporting-text">

			<form action="signin.proses" method="post">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" id="nama" type="text" name="nama" autofocus>
					<label class="mdl-textfield__label" for="nama">UserName</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" id="pass" type="password" name="pass">
					<label class="mdl-textfield__label" for="pass">Password</label>
				</div>

				<div class="mdl-card__actions mdl-card--border" style="text-align: center;">
					<button class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect" type="submit" name="signin">SignIn</button>
				</div>
			</form>	

		</div>
	</div>
	<div class="mdl-layout-spacer"></div>
</div>

<?php require 'foot.php'; ?>
