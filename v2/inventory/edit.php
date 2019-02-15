<?php 
	require_once '../db.php'; 
	require 'head.php'; 

	$id 	= $_GET['id'];
	$qcek 	= "SELECT * FROM tb_inventory where id='$id'";
	$cek	= mysqli_query($db, $qcek);
	while ($row = mysqli_fetch_assoc($cek)) {
		
?>
	
<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-card mdl-shadow--8dp">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">Update Your Asset !</div>
		<div class="mdl-card__supporting-text">
			<form action="edit.proses" method="post">

				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="nama">Nama Aset</label>
					<input class="mdl-textfield__input" type="text" name="nama" id="nama" autofocus value="<?php echo $row['nama'] ?>">
				</div>
				
				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="type">Type Aset</label>
					<input class="mdl-textfield__input" type="text" name="jenis" id="type" value="<?php echo $row['jenis'] ?>">
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="jumlah">Jumlah Aset</label>
					<input class="mdl-textfield__input" type="number" name="jumlah" id="jumlah" value="<?php echo $row['jumlah'] ?>">
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<label class="mdl-textfield__label" for="keterangan">Keterangan Aset</label>
					<textarea class="mdl-textfield__input" name="keterangan" id="keterangan"><?php echo $row['keterangan'] ?></textarea>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<select class="mdl-textfield__input" name="kondisi">
						<option value="Baru" <?php if ($row['kondisi']=='Baru'){echo 'selected';}?> >Baru</option>
						<option value="Bekas" <?php if ($row['kondisi']=='Bekas'){echo 'selected';}?> >Bekas</option>
						<option value="Normal" <?php if ($row['kondisi']=='Normal'){echo 'selected';}?> >Normal</option>
						<option value="Prihatin" <?php if ($row['kondisi']=='Prihatin'){echo 'selected';}?> >Prihatin</option>
						<option value="Rusak" <?php if ($row['kondisi']=='Rusak'){echo 'selected';}?> >Rusak</option>
					</select>
					<label class="mdl-textfield__label" for="kondisi">Kondisi</label>
				</div>

				<div class="mdl-card__actions mdl-card--border">
					<button type="submit" name="update" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">Update</button>
				</div>
			</form>
		</div>
	</div><div class="mdl-layout-spacer"></div>
</div>

<?php 
	
	}
	require '../foot.php'; 

?>