<?php require_once '../db.php'; require 'head.php'; ?>
	
	<div class="valign-wrapper row center"><div></div>
		<div class="col s10 pull-s10 m4 pull-m4 card hoverable">
			<form action="add.proses" method="post">
				<h5>Add Your Asset !</h5>
				<div class="input-field col s12">
					<label for="nama">Nama Aset</label>
					<input type="text" name="nama" id="nama" autofocus required>
				</div>
				
				<div class="input-field col s12">
					<label for="type">Type Aset</label>
					<input type="text" name="jenis" id="type" required>
				</div>

				<div class="input-field col s12">
					<label for="jumlah">Jumlah Aset</label>
					<input type="number" name="jumlah" id="jumlah" required>
				</div>

				<div class="input-field col s12">
					<label for="keterangan">Keterangan Aset</label>
					<textarea name="keterangan" id="keterangan" class="materialize-textarea"></textarea>
				</div>

				<div class="input-field col s12">
					<select name="kondisi" required>
						<option value="" selected>Pilih Kondisi</option>
						<option value="Baru">Baru</option>
						<option value="Bekas">Bekas</option>
						<option value="Normal">Normal</option>
						<option value="Prihatin">Prihatin</option>
						<option value="Rusak">Rusak</option>
					</select>
					<label for="kondisi">Kondisi</label>
				</div>

				<div class="input-field">
					<input type="submit" name="add" value="Add" class="btn waves-effect waves-red purple lighten-4">
				</div>
			</form>
		</div>
	</div>

<?php require 'foot.php'; ?>
