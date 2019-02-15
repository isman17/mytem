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

	<div class="row">
		<table class="card z-depth-2 responsive-table bordered stripped highlight centered">
			<thead>
				<tr>
					<th>NO</th>
					<th>DIVISI</th>
					<th>NAMA</th>
					<th>NOMER HP</th>
					<th>MASALAH</th>
					<th>SOLUSI</th>
					<th>KETERANGAN</th>
					<th>STATUS</th>
					<th class="fixed">ACTION</th>
				</tr>
			</thead>

<?php 
	if ($result > 0) {
		while ($row = mysqli_fetch_assoc($tampil)) {
			echo "<tr>
					<td>". $row['id'] ."</td>
					<td>". $row['divisi'] ."</td>
					<td>". $row['nama'] ."</td>
					<td>". $row['no_hp'] ."</td>
					<td>". $row['masalah'] ."</td>
					<td>". $row['solusi'] ."</td>
					<td>". $row['keterangan'] ."</td>
					<td>". $row['status'] ."</td>
					<td>
						<form method='post'>
							<a href='edit?id=". $row['id'] ."' style='color:green;'><i class='material-icons'>edit</i>
							<a href='delete?id=". $row['id'] ."' style='color:red;'><i class='material-icons'>delete</i>
						</form>
					</td>
				 ";
		}
	}else{
		echo "<tr><td colspan='9'>Tidak Ada Data</td></tr>";
	}
?>

		</table>
	</div>
<?php
	require 'foot.php'; 
?>