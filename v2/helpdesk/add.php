<?php require_once '../db.php'; require 'head.php'; ?>
	
<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-card mdl-shadow--8dp">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">Add Your Trouble !</div>
		<div class="mdl-card__supporting-text">
		<form action="add.proses" method="post">

			<div class="mdl-textfield mdl-js-textfield mdl-js-textfield--floating-label">
		    	<select class="mdl-textfield__input" id="div" name="divisi" required>
		    		<option value="" selected>Choose One</option>
			    	<option value="IT">IT</option>
			    	<option value="Desain Grafis">Desain Grafis</option>
			    	<option value="Game">Game</option>
			    	<option value="Umum">Umum</option>
			    </select>
				<label class="mdl-textfield__label" for="div"></label>
		  	</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input type="text" name="nama" class="mdl-textfield__input" id="nama" required>
				<label for="nama" class="mdl-textfield__label">Nama</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input type="number" name="no_hp" class="mdl-textfield__input" id="no_hp" required>
				<label for="no_hp" class="mdl-textfield__label">Nomer HP</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea name="masalah" id="masalah" class="mdl-textfield__input" required></textarea>
				<label for="masalah" class="mdl-textfield__label">Masalah</label>
			</div>

			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea name="keterangan" id="keterangan" class="mdl-textfield__input"></textarea>
				<label for="keterangan" class="mdl-textfield__label">Keterangan</label>
			</div>

			<div class="mdl-card__actions mdl-card--border">
				<button type="submit" name="add" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">Add</button>
			</div>
		</form>
</div></div><div class="mdl-layout-spacer"></div></div>

<?php require '../foot.php'; ?>
