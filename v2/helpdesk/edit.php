<?php 
	require_once '../db.php'; 
	require 'head.php'; 

	$id 	= $_GET['id'];
	$qcek 	= "SELECT * FROM tb_ticket where id='$id'";
	$cek	= mysqli_query($db, $qcek);
	while ($row = mysqli_fetch_assoc($cek)) {
		
?>
<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-card mdl-shadow--8dp">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">Troubleshooting !</div>
		<div class="mdl-card__supporting-text">
			<form action="edit.proses" method="post">

				<input type="hidden" name="id" value="<?php echo $id; ?>">

				<div class="mdl-textfield mdl-js-textfield">
			    	<select class="mdl-textfield__input" name="divisi" disabled>
						<option value="IT" <?php if ($row['divisi']=='IT'){echo 'selected';}?> >IT</option><option value="Desain Grafis" <?php if ($row['divisi']=='Desain Grafis'){echo 'selected';}?> >Desain Grafis</option>
				    	<option value="Game" <?php if ($row['divisi']=='Game'){echo 'selected';}?> >Game</option>
				    	<option value="Umum" <?php if ($row['divisi']=='Umum'){echo 'selected';}?> >Umum</option>
				    </select>
				    
			  	</div>

				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>" disabled>
					<label class="mdl-textfield__label" for="nama">Nama</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="number" name="no_hp" id="no_hp" value="<?php echo $row['no_hp'] ?>" disabled>
					<label class="mdl-textfield__label" for="no_hp">Nomer HP</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<textarea class="mdl-textfield__input" name="masalah" id="masalah" class="mdl-textfield__input" required><?php echo $row['masalah'] ?></textarea>
					<label class="mdl-textfield__label" for="masalah">Masalah</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<textarea class="mdl-textfield__input" name="solusi" id="solusi" class="mdl-textfield__input" required>
						<?php echo $row['solusi'] ?>
					</textarea>
					<label class="mdl-textfield__label" for="solusi">Solusi</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<textarea class="mdl-textfield__input" name="keterangan" id="keterangan" class="mdl-textfield__input"><?php echo $row['keterangan'] ?></textarea>
					<label class="mdl-textfield__label" for="keterangan">Keterangan</label>
				</div>

				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<select class="mdl-textfield__input" name="status" required>
						<option value="New">New</option>
						<option value="Pending">Pending</option>
						<option value="Resolved">Resolved</option>
					</select>
					<label class="mdl-textfield__label" for="status">Status</label>
				</div>
				
				<div class="mdl-card__actions mdl-card--border">
					<button type="submit" name="update" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">Update</button>
				</div>
			</form>
		</div>
	</div><div class="mdl-layout-spacer"></div></div>
<?php 
	
	}
	require '../foot.php'; 

?>