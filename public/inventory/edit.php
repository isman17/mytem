<?php 
	require_once '../db.php'; 
	require 'head.php'; 

	$id 	= $_GET['id'];
	$qcek 	= "SELECT * FROM tb_inventory where id='$id'";
	$cek	= mysqli_query($db, $qcek);
	while ($row = mysqli_fetch_assoc($cek)) {
		
?>
	
	<div class="valign-wrapper row center"><div></div>
		<div class="col s10 pull-s10 m4 pull-m4 card hoverable">
			<form action="edit.proses.php" method="post">
				<h5>Update Your Asset !</h5>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-field col s12">
					<label for="nama">Nama Aset</label>
					<input type="text" name="nama" id="nama" autofocus value="<?php echo $row['nama'] ?>">
				</div>
				
				<div class="input-field col s12">
					<label for="type">Type Aset</label>
					<input type="text" name="jenis" id="type" value="<?php echo $row['jenis'] ?>">
				</div>

				<div class="input-field col s12">
					<label for="jumlah">Jumlah Aset</label>
					<input type="number" name="jumlah" id="jumlah" value="<?php echo $row['jumlah'] ?>">
				</div>

				<div class="input-field col s12">
					<label for="keterangan">Keterangan Aset</label>
					<textarea name="keterangan" id="keterangan" class="materialize-textarea"><?php echo $row['keterangan'] ?></textarea>
				</div>

				<div class="input-field col s12">
					<select name="kondisi">
						<option value="Baru" <?php if ($row['kondisi']=='Baru'){echo 'selected';}?> >Baru</option>
						<option value="Bekas" <?php if ($row['kondisi']=='Bekas'){echo 'selected';}?> >Bekas</option>
						<option value="Normal" <?php if ($row['kondisi']=='Normal'){echo 'selected';}?> >Normal</option>
						<option value="Prihatin" <?php if ($row['kondisi']=='Prihatin'){echo 'selected';}?> >Prihatin</option>
						<option value="Rusak" <?php if ($row['kondisi']=='Rusak'){echo 'selected';}?> >Rusak</option>
					</select>
					<label for="kondisi">Kondisi</label>
				</div>

				<div class="input-field">
					<input type="submit" name="update" value="Update" class="btn waves-effect waves-red purple lighten-4">
				</div>
			</form>
		</div>
	</div>

<?php 
	
	}
	require 'foot.php'; 

?>