<?php 
	require_once '../db.php'; 
	require 'head.php'; 

	$id 	= $_GET['id'];
	$qcek 	= "SELECT * FROM tb_ticket where id='$id'";
	$cek	= mysqli_query($db, $qcek);
	while ($row = mysqli_fetch_assoc($cek)) {
		
?>
	
	<div class="valign-wrapper row center"><div></div>
		<div class="col s10 pull-s10 m4 pull-m4 card hoverable">
			<form action="edit.proses.php" method="post">
				<h5>Troubleshooting !</h5>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-field col s12 top">
			    	<select name="divisi" disabled>
						<option value="IT" <?php if ($row['divisi']=='IT'){echo 'selected';}?> >IT</option><option value="Desain Grafis" <?php if ($row['divisi']=='Desain Grafis'){echo 'selected';}?> >Desain Grafis</option>
				    	<option value="Game" <?php if ($row['divisi']=='Game'){echo 'selected';}?> >Game</option>
				    	<option value="Umum" <?php if ($row['divisi']=='Umum'){echo 'selected';}?> >Umum</option>
				    </select>
				    <label>Divisi</label>
			  	</div>

				<div class="input-field col s12 med">
					<i class="material-icons prefix">assignment_ind</i>
					<input type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>" disabled>
					<label for="nama">Nama</label>
				</div>

				<div class="input-field col s12 med">
					<i class="material-icons prefix">call</i>
					<input type="number" name="no_hp" id="no_hp" value="<?php echo $row['no_hp'] ?>" disabled>
					<label for="no_hp">Nomer HP</label>
				</div>

				<div class="input-field col s12 med">
					<i class="material-icons prefix">mood_bad</i>
					<textarea name="masalah" id="masalah" class="materialize-textarea responsive" required><?php echo $row['masalah'] ?></textarea>
					<label for="masalah">Masalah</label>
				</div>

				<div class="input-field col s12 med">
					<i class="material-icons prefix">mood</i>
					<textarea name="solusi" id="solusi" class="materialize-textarea responsive" required><?php echo $row['solusi'] ?></textarea>
					<label for="solusi">Solusi</label>
				</div>

				<div class="input-field col s12 med">
					<i class="material-icons prefix">details</i>
					<textarea name="keterangan" id="keterangan" class="materialize-textarea"><?php echo $row['keterangan'] ?></textarea>
					<label for="keterangan">Keterangan</label>
				</div>

				<div class="input-field col s12 med">
					<select name="status" required>
						<option value="New">New</option>
						<option value="Pending">Pending</option>
						<option value="Resolved">Resolved</option>
					</select>
					<label for="status">Status</label>
				</div>
				
				<div class="input-field col s12 med">
					<input type="submit" name="update" class="btn grey lighten-2 waves-effect waves-teal" value="Update">
				</div>
			</form>
		</div>
	</div>

<?php 
	
	}
	require 'foot.php'; 

?>