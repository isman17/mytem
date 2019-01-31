<?php 
	require 'head.php'; 
	require_once '../db.php';
	session_start();
	if (!isset($_SESSION['nama'])) {
		header("Location:../signin.php");
	}

	$qtampil	= "SELECT * FROM tb_inventory";
	$tampil		= mysqli_query($db, $qtampil);
	$result		= mysqli_num_rows($tampil);
?>

	<div class="row">
		<table class="card z-depth-2 responsive-table bordered stripped highlight centered">
			<thead>
				<tr>
					<th>NO</th>
					<th>NAMA</th>
					<th>JENIS</th>
					<th>JUMLAH</th>
					<th>KETERANGAN</th>
					<th>KONDISI</th>
					<th class="fixed">ACTION</th>
				</tr>
			</thead>

<?php 
	if ($result > 0) {
		while ($row = mysqli_fetch_assoc($tampil)) {
			echo "<tr>
					<td>". $row['id'] ."</td>
					<td>". $row['nama'] ."</td>
					<td>". $row['jenis'] ."</td>
					<td>". $row['jumlah'] ."</td>
					<td>". $row['keterangan'] ."</td>
					<td>". $row['kondisi'] ."</td>
					<td>
						<form method='post'>
							<a href='edit.php?id=". $row['id'] ."' style='color:green;'><i class='material-icons'>edit</i>
							<a href='delete.php?id=". $row['id'] ."' style='color:red;'><i class='material-icons'>delete</i>
						</form>
					</td>
				 ";
		}
	}else{
		echo "<tr><td colspan='7'>Tidak Ada Data</td></tr>";
	}
?>

		</table>
	</div>
<?php
	require 'foot.php'; 
?>