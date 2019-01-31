<?php 
	require '../db.php'; 
	require 'head.php';
	session_start();
	if (!isset($_SESSION['nama'])) {
		header("Location:../index.php");
	}

	$qcek	= "SELECT * FROM tb_server";
	$cek	= mysqli_query($db, $qcek);
	$result = mysqli_num_rows($cek);
?>

<div class="row">
	
</div>

<table class="card z-depth-2 responsive-table bordered stripped highlight centered">
	<thead>
		<tr>
			<th>NO</th>
			<th>ILO</th>
			<th>IP</th>
			<th>MAC</th>
			<th>HOSTNAME</th>
			<th>APP</th>
			<th>KVM</th>
			<th>Rak</th>
			<th>No Rak</th>
			<th>SN</th>
			<th>TYPE</th>
			<th>RAM</th>
			<th>PROCI</th>
			<th>HDD</th>
			<th>NIC</th>
			<th>OS</th>
			<th>DOMAIN</th>
			<th>AV</th>
			<th class="fixed">ACTION</th>
		</tr>
	</thead>
	<?php 

		if ($result > 0) {
			while ($row = mysqli_fetch_assoc($cek)) {
				echo "<tr>
						<td>". $row['id'] ."</td>
						<td>". $row['ilo'] ."</td>
						<td>". $row['ip'] ."</td>
						<td>". $row['mac'] ."</td>
						<td>". $row['host'] ."</td>
						<td>". $row['app'] ."</td>
						<td>". $row['kvm'] ."</td>
						<td>". $row['rak'] ."</td>
						<td>". $row['norak'] ."</td>
						<td>". $row['sn'] ."</td>
						<td>". $row['type'] ."</td>
						<td>". $row['ram'] ."</td>
						<td>". $row['proci'] ."</td>
						<td>". $row['hdd'] ."</td>
						<td>". $row['nic'] ."</td>
						<td>". $row['os'] ."</td>
						<td>". $row['domain'] ."</td>
						<td>". $row['av'] ."</td>
						<td>
							<form method='post'>
								<a href='edit.php?id=". $row['id'] ."' style='color:green;'><i class='material-icons'>edit</i></a>
								<a href='delete.php?id=". $row['id'] ."' style='color:red;'><i class='material-icons'>delete</i></a>
							</form>
						</td>
					  </tr>
					 ";
			}
		}else{
			echo "<tr><td colspan='19'>NO DATA</td></tr>";
		}

	?>
</table>

<?php require '../foot.php'?>