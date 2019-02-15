<?php require 'head.php'; ?>

<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div></div>
	<div class="mdl-card mdl-shadow--6dp">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">SignUp Here !</div>
		<div class="mdl-card__supporting-text">

			<form action="signup.proses" method="post">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<label class="mdl-textfield__label" for="nama">UserName</label>
						<input id="nama" class="mdl-textfield__input" type="text" name="nama" autofocus>
					</div>

					<div class="mdl-actions">
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="lk">
							<input class="mdl-radio__button" id="lk" type="radio" name="jk" checked value="lk"/>
							<span class="mdl-radio__label">Laki-Laki</span>
						</label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pr">
							<input class="mdl-radio__button" id="pr" type="radio" name="jk" value="pr">
							<span class="mdl-radio__label">Perempuan</span>
						</label>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<label class="mdl-textfield__label" for="email">example@example.com</label>
						<input id="email" class="mdl-textfield__input" type="email" name="email">
						<span class="mdl-textfield__error">Format Salah !</span>
					</div>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<label class="mdl-textfield__label" for="pass">Password</label>
						<input id="pass" class="mdl-textfield__input" type="password" name="pass">
					</div>

					<!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<label class="mdl-textfield__label" for="pass">Confirm Password</label>
						<input id="pass" class="mdl-textfield__input" type="password" name="pass2">
					</div> -->

					<div class="mdl-card__actions mdl-card--border">
						<button type="reset" class="mdl-button mdl-js-button mdl-button--colored">Reset</button>
						<button type="submit" class="mdl-button mdl-js-button mdl-button--colored" name="signup">SignUp</button>
					</div>
			</form>

		</div>
	</div>
	<div class="mdl-layout-spacer"></div>
</div>

<?php require 'foot.php'; ?>
