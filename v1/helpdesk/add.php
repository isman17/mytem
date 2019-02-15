<?php require_once '../db.php'; require 'head.php'; ?>
	
	<div class="valign-wrapper row center"><div></div>
		<div class="col s10 pull-s10 m4 pull-m4 card hoverable">
			<form action="add.proses" method="post">
				<h5>Add Your Trouble !</h5>

				<div class="input-field col s12 top">
			    	<select name="divisi" required>
			    		<option value="" selected>Choose One</option>
				    	<option value="IT">IT</option>
				    	<option value="Desain Grafis">Desain Grafis</option>
				    	<option value="Game">Game</option>
				    	<option value="Umum">Umum</option>
				    </select>
				    <label>Divisi</label>
			  	</div>

				<div class="input-field col s12 med">
					<i class="material-icons prefix">assignment_ind</i>
					<input type="text" name="nama" id="nama" required>
					<label for="nama">Nama</label>
				</div>

				<div class="input-field col s12 med">
					<i class="material-icons prefix">call</i>
					<input type="number" name="no_hp" id="no_hp" required>
					<label for="no_hp">Nomer HP</label>
				</div>

				<div class="input-field col s12 med section scrollspy">
					<i class="material-icons prefix">mood_bad</i>
					<textarea name="masalah" id="masalah" class="materialize-textarea responsive" required></textarea>
					<label for="masalah">Masalah</label>
				</div>

				<div class="input-field col s12 med section scrollspy">
					<i class="material-icons prefix">details</i>
					<textarea name="keterangan" id="keterangan" class="materialize-textarea responsive"></textarea>
					<label for="keterangan">Keterangan</label>
				</div>

				<div class="input-field col s12 med">
					<input type="submit" name="add" class="btn grey lighten-2 waves-effect waves-teal" value="Add">
				</div>
			</form>
		</div>
	</div>

<?php require 'foot.php'; ?>
