<?php require 'head.php'; ?>

<div class="valign-wrapper row">
	<div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
		<form action="signup.proses" method="post">
			<div class="top row center">
				<h5>SignUp Here !</h5>
				<div class="input-field top col s12">
					<i class="material-icons prefix">assignment_ind</i>
					<label for="nama">Username</label>
					<input id="nama" class="autocomplete" type="text" name="nama" autofocus>
				</div>

				<div class="row med col s12">
					<label>
						<input class="with-gap" type="radio" name="jk" checked value="lk"/>
						<span>Laki-Laki</span>
					</label>
					<label>
						<input class="with-gap" type="radio" name="jk" value="pr">
						<span>Perempuan</span>
					</label>
				</div>

				<div class="input-field med col s12">
					<i class="material-icons prefix">email</i>
					<input id="email" class="validate autocomplete" type="email" name="email">
					<label for="email">example@example.com</label>
					<span class="helper-text" data-error="Format Salah !"></span>
				</div>

				<div class="input-field med col s12">
					<i class="material-icons prefix">visibility_off</i>
					<label for="pass">Password</label>
					<input id="pass" class="autocomplete" type="password" name="pass">
				</div>

				<div class="input-field med col s6">
					<input type="reset" value="Reset" class="btn waves-effect waves-light green darken-1">
				</div>

				<div class="input-field med col s6">
					<input class="waves-effect waves-light btn blue darken-1" type="submit" name="signup" value="SignUp">
				</div>

			</div>
		</form>
	</div>
</div>

<?php require 'foot.php'; ?>
