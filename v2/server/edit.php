<?php  

	require_once '../db.php';
	require 'head.php'; 
	
	$id		= $_GET['id'];
	$qcek	= "SELECT * FROM tb_server WHERE id='$id' ";
	$cek	= mysqli_query($db, $qcek);
	while ($row = mysqli_fetch_assoc($cek)) {
?>

<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-card mdl-shadow--8dp">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">Update Your Asset !</div>
		<div class="mdl-card__supporting-text">
			<form action="edit.proses" method="post">

				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			
				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="ilo" class="autocomplete" id="ilo" autofocus value="<?php echo $row['ilo']?>">
					<label class="mdl-textfield__label" for="ilo">ILO</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="ip" id="ip" value="<?php echo$row['ip']?>">
					<label class="mdl-textfield__label" for="ip">IP Address</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="mac" id="mac" value="<?php echo $row['mac'];?>">
					<label class="mdl-textfield__label" for="mac">MAC Address</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="host" id="host" value="<?php echo $row['host'];?>">
					<label class="mdl-textfield__label" for="host">Hostname</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="app" id="app" value="<?php echo $row['app'];?>">
					<label class="mdl-textfield__label" for="app">Application</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="kvm" id="kvm" value="<?php echo $row['kvm'];?>">
					<label class="mdl-textfield__label" for="kvm">KVM</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="rak" id="rak" value="<?php echo $row['rak'];?>">
					<label class="mdl-textfield__label" for="rak">Rak</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="norak" id="norak" value="<?php echo $row['norak'];?>">
					<label class="mdl-textfield__label" for="norak">Nomer Rack</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="sn" id="sn" value="<?php echo $row['sn'];?>">
					<label class="mdl-textfield__label" for="sn">Serial Number</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="type" id="type" value="<?php echo $row['type'];?>">
					<label class="mdl-textfield__label" for="type">Type</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="ram" id="ram" value="<?php echo $row['ram'];?>">
					<label class="mdl-textfield__label" for="ram">RAM</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="proci" id="proci" value="<?php echo $row['proci'];?>">
					<label class="mdl-textfield__label" for="proci">PROCI</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="hdd" id="hdd" value="<?php echo $row['hdd'];?>">
					<label class="mdl-textfield__label" for="hdd">HDD</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="nic" id="nic" value="<?php echo $row['nic'];?>">
					<label class="mdl-textfield__label" for="nic">NIC</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="os" id="os" value="<?php echo $row['os'];?>">
					<label class="mdl-textfield__label" for="os">OS</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="domain" id="domain" value="<?php echo $row['domain'];?>">
					<label class="mdl-textfield__label" for="domain">Domain</label>
				</div>

				<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" name="av" id="av" value="<?php echo $row['av'];?>">
					<label class="mdl-textfield__label" for="av">AV</label>
				</div>

				<div class="mdl-card__actions mdl-card--border">
					<button type="submit" name="update" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">Update</button>
				</div>

			</form>
		</div>
	</div>
	<div class="mdl-layout-spacer"></div>
</div>

<?php
	}
	require '../foot.php'; 
?>