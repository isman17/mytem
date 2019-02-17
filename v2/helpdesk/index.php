<?php 
	require 'head.php'; 
	require_once '../db.php';
	session_start();
	if (!isset($_SESSION['nama'])) {
		header("Location:../signin");
	}

	$qtampil	= "SELECT * FROM tb_ticket";
	$tampil		= mysqli_query($db, $qtampil);
	$result		= mysqli_num_rows($tampil);
?>

<div class="mdl-grid center-items">
<div class="mdl-layout-spacer"></div>
	<table class="mdl-data-table mdl-data-table--selectable mdl-js-data-table mdl-shadow--8dp tablei">
		<thead>
			<tr>
				<th class="mdl-data-table__cell--non-numeric">NO</th>
				<th class="mdl-data-table__cell--non-numeric">DIVISI</th>
				<th class="mdl-data-table__cell--non-numeric">NAMA</th>
				<th class="mdl-data-table__cell--non-numeric">NOMER HP</th>
				<th class="mdl-data-table__cell--non-numeric">MASALAH</th>
				<th class="mdl-data-table__cell--non-numeric">SOLUSI</th>
				<th class="mdl-data-table__cell--non-numeric">KETERANGAN</th>
				<th class="mdl-data-table__cell--non-numeric">STATUS</th>
				<th class="fix-col">ACTION</th>
			</tr>
		</thead>

<?php 
	if ($result > 0) {
		while ($row = mysqli_fetch_assoc($tampil)) {
			echo "<tr>
					<td style='text-align:center !important;'>". $row['id'] ."</td>
					<td>". $row['divisi'] ."</td>
					<td>". $row['nama'] ."</td>
					<td>". $row['no_hp'] ."</td>
					<td>". $row['masalah'] ."</td>
					<td>". $row['solusi'] ."</td>
					<td>". $row['keterangan'] ."</td>
					<td style='text-align:center !important;'>". $row['status'] ."</td>
					<td class='fix-col'>
						<a href='edit?id=". $row['id'] ."' style='color:green;'><i class='material-icons'>edit</i>
						<a href='delete?id=". $row['id'] ." 'style='color:red;'><i class='material-icons'>delete</i>	
					</td>
				  </tr>
				 ";
		}
	}else{
		echo "<tr><td colspan='9' style='text-align:center !important;'>Tidak Ada Data</td></tr>";
	}
?>
	</table>
<div class="mdl-layout-spacer"></div></div>

<button class="mdl-button mdl-button--fab mdl-button--colored mdl-js-button mdl-color--white mdl-shadow--8dp" id="add-fab">
	<a href="add"><i class="material-icons">add</i></a>
</button>

<?php
	require '../foot.php'; 
?>