<?php 
	require 'head.php'; 
	require_once '../db.php';
	session_start();
	if (!isset($_SESSION['nama'])) {
		header("Location:../signin");
	}

	$qtampil	= "SELECT * FROM tb_inventory";
	$tampil		= mysqli_query($db, $qtampil);
	$result		= mysqli_num_rows($tampil);
?>

<div class="mdl-grid center-items">
<div class="mdl-layout-spacer"></div>
	<table class="mdl-data-table mdl-data-table--selectable mdl-js-data-table mdl-shadow--8dp tablei">
		<thead>
			<tr>
				<th class="mdl-data-table__cell--non-numeric">NO</th>
				<th class="mdl-data-table__cell--non-numeric">NAMA</th>
				<th class="mdl-data-table__cell--non-numeric">JENIS</th>
				<th class="mdl-data-table__cell--non-numeric">JUMLAH</th>
				<th class="mdl-data-table__cell--non-numeric">KETERANGAN</th>
				<th class="mdl-data-table__cell--non-numeric">KONDISI</th>
				<th class="fixed">ACTION</th>
			</tr>
		</thead>

<?php 
	if ($result > 0) {
		while ($row = mysqli_fetch_assoc($tampil)) {
			echo "<tr>
					<td style='text-align:center !important;'>". $row['id'] ."</td>
					<td>". $row['nama'] ."</td>
					<td>". $row['jenis'] ."</td>
					<td style='text-align:center !important;'>". $row['jumlah'] ."</td>
					<td>". $row['keterangan'] ."</td>
					<td>". $row['kondisi'] ."</td>
					<td>
						<form method='post'>
							<a href='edit?id=". $row['id'] ."' style='color:green;'><i class='material-icons'>edit</i>
							<a href='delete?id=". $row['id'] ."' style='color:red;'><i class='material-icons'>delete</i>
						</form>
					</td>
				  </tr>
				 ";
		}
	}else{
		echo "<tr><td colspan='7' style='text-align:center !important;'>Tidak Ada Data</td></tr>";
	}
?>

	</table>
<div class="mdl-layout-spacer"></div></div>

<button class="mdl-button mdl-button--fab mdl-button--colored mdl-js-button mdl-color--white mdl-shadow--8dp" id="add-fab2">
	<a href="add"><i class="material-icons">add</i></a>
</button>

<?php require '../foot.php'; ?>