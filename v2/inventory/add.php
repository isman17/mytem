<?php require_once '../db.php'; require 'head.php'; ?>
	
<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-card mdl-shadow--8dp">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">Add Your Asset !</div>
		<div class="mdl-card__supporting-text">
			<form action="add.proses" method="post">
				
				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="nama">Nama Aset</label>
					<input class="mdl-textfield__input" type="text" name="nama" id="nama" autofocus required>
				</div>
				
				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="type">Type Aset</label>
					<input class="mdl-textfield__input" type="text" name="jenis" id="type" required>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="jumlah">Jumlah Aset</label>
					<input class="mdl-textfield__input" type="number" name="jumlah" id="jumlah" required>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="keterangan">Keterangan Aset</label>
					<textarea class="mdl-textfield__input" name="keterangan" id="keterangan"></textarea>
				</div>

				<div class="mdl-textfield mdl-js-textfield">
					<select class="mdl-textfield__input" name="kondisi" required>
						<option value="" selected>Pilih Kondisi</option>
						<option value="Baru">Baru</option>
						<option value="Bekas">Bekas</option>
						<option value="Normal">Normal</option>
						<option value="Prihatin">Prihatin</option>
						<option value="Rusak">Rusak</option>
					</select>
				</div>

				<div class="mdl-card__actions mdl-card--border" style="text-align: center;">
					<button type="submit" name="add" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">Add</button>
				</div>
			</form>
		</div>
	</div><div class="mdl-layout-spacer">
</div>

<?php require '../foot.php'; ?>
