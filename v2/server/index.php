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

<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<table class="mdl-data-table mdl-data-table--selectable mdl-js-data-table mdl-shadow--8dp tablei">
		<thead>
			<tr>
				<th class="mdl-data-table__cell--non-numeric">NO</th>
				<th class="mdl-data-table__cell--non-numeric">ILO</th>
				<th class="mdl-data-table__cell--non-numeric">IP</th>
				<th class="mdl-data-table__cell--non-numeric">MAC</th>
				<th class="mdl-data-table__cell--non-numeric">HOSTNAME</th>
				<th class="mdl-data-table__cell--non-numeric">APP</th>
				<th class="mdl-data-table__cell--non-numeric">KVM</th>
				<th class="mdl-data-table__cell--non-numeric">Rak</th>
				<th class="mdl-data-table__cell--non-numeric">No Rak</th>
				<th class="mdl-data-table__cell--non-numeric">SN</th>
				<th class="mdl-data-table__cell--non-numeric">TYPE</th>
				<th class="mdl-data-table__cell--non-numeric">RAM</th>
				<th class="mdl-data-table__cell--non-numeric">PROCI</th>
				<th class="mdl-data-table__cell--non-numeric">HDD</th>
				<th class="mdl-data-table__cell--non-numeric">NIC</th>
				<th class="mdl-data-table__cell--non-numeric">OS</th>
				<th class="mdl-data-table__cell--non-numeric">DOMAIN</th>
				<th class="mdl-data-table__cell--non-numeric">AV</th>
				<th class="fixed">ACTION</th>
			</tr>
		</thead>
	
<?php 

	if ($result > 0) {
		while ($row = mysqli_fetch_assoc($cek)) {
			echo "<tr>
					<td style='text-align:center !important;'>". $row['id'] ."</td>
					<td>". $row['ilo'] ."</td>
					<td>". $row['ip'] ."</td>
					<td>". $row['mac'] ."</td>
					<td>". $row['host'] ."</td>
					<td>". $row['app'] ."</td>
					<td style='text-align:center !important;'>". $row['kvm'] ."</td>
					<td style='text-align:center !important;'>". $row['rak'] ."</td>
					<td style='text-align:center !important;'>". $row['norak'] ."</td>
					<td>". $row['sn'] ."</td>
					<td>". $row['type'] ."</td>
					<td style='text-align:center !important;'>". $row['ram'] ."</td>
					<td>". $row['proci'] ."</td>
					<td style='text-align:center !important;'>". $row['hdd'] ."</td>
					<td>". $row['nic'] ."</td>
					<td>". $row['os'] ."</td>
					<td>". $row['domain'] ."</td>
					<td>". $row['av'] ."</td>
					<td>
						<form method='post'>
							<a href='edit?id=". $row['id'] ."' style='color:green;'><i class='material-icons'>edit</i></a>
							<a href='delete?id=". $row['id'] ."' style='color:red;'><i class='material-icons'>delete</i></a>
						</form>
					</td>
				  </tr>
				 ";
		}
	}else{
		echo "<tr><td colspan='19' style='text-align:center !important;'>NO DATA</td></tr>";
	}

?>

	</table>
	<div class="mdl-layout-spacer"></div></div>

<button class="mdl-button mdl-button--fab mdl-button--colored mdl-js-button mdl-color--white mdl-shadow--8dp" id="add-fab3">
	<a href="add"><i class="material-icons">add</i></a>
</button>


<?php require '../foot.php'?>