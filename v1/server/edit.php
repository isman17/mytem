<?php  

	require_once '../db.php';
	require 'head.php'; 
	
	$id		= $_GET['id'];
	$qcek	= "SELECT * FROM tb_server WHERE id='$id' ";
	$cek	= mysqli_query($db, $qcek);
	while ($row = mysqli_fetch_assoc($cek)) {
?>

	<div class="valign-wrapper row center">
		<div class="col s10 pull-s1 m4 pull-m4 pull-14 card hoverable center">
			<form action="edit.proses" method="post">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<div class="row top center">
					<h5>Add Your Asset !</h5>
					<div class="input-field top col s12">
						<input type="text" name="ilo" class="autocomplete" id="ilo" autofocus value="<?php echo $row['ilo']?>">
						<label for="ilo">ILO</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="ip" id="ip" value="<?php echo$row['ip']?>">
						<label for="ip">IP Address</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="mac" id="mac" value="<?php echo $row['mac'];?>">
						<label for="mac">MAC Address</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="host" id="host" value="<?php echo $row['host'];?>">
						<label for="host">Hostname</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="app" id="app" value="<?php echo $row['app'];?>">
						<label for="app">Application</label>
					</div>

					<div class="input-field med col s4">
						<input type="text" name="kvm" id="kvm" value="<?php echo $row['kvm'];?>">
						<label for="kvm">KVM</label>
					</div>

					<div class="input-field med col s4">
						<input type="text" name="rak" id="rak" value="<?php echo $row['rak'];?>">
						<label for="rak">Rak</label>
					</div>

					<div class="input-field med col s4">
						<input type="text" name="norak" id="norak" value="<?php echo $row['norak'];?>">
						<label for="norak">Nomer Rack</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="sn" id="sn" value="<?php echo $row['sn'];?>">
						<label for="sn">Serial Number</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="type" id="type" value="<?php echo $row['type'];?>">
						<label for="type">Type</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="ram" id="ram" value="<?php echo $row['ram'];?>">
						<label for="ram">RAM</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="proci" id="proci" value="<?php echo $row['proci'];?>">
						<label for="proci">PROCI</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="hdd" id="hdd" value="<?php echo $row['hdd'];?>">
						<label for="hdd">HDD</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="nic" id="nic" value="<?php echo $row['nic'];?>">
						<label for="nic">NIC</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="os" id="os" value="<?php echo $row['os'];?>">
						<label for="os">OS</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="domain" id="domain" value="<?php echo $row['domain'];?>">
						<label for="domain">Domain</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="av" id="av" value="<?php echo $row['av'];?>">
						<label for="av">AV</label>
					</div>

					<div class="input-field med col s6">
						<input type="submit" name="update" value="Update" class="btn blue lighten-4 waves-effect ">
					</div>

				</div>
			</form>
		</div>
	</div>

<?php
	}
	require '../foot.php'; 
?>