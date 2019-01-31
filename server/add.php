<?php require 'head.php'; ?>

	<div class="valign-wrapper row center">
		<div class="col s10 pull-s1 m4 pull-m4 pull-14 card hoverable center">
			<form action="add.proses.php" method="post">
				<div class="row top center">
					<h5>Add Your Asset !</h5>
					<div class="input-field top col s12">
						<input type="text" name="ilo" id="ilo" autofocus>
						<label for="ilo">ILO</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="ip" id="ip">
						<label for="ip">IP Address</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="mac" id="mac">
						<label for="mac">MAC Address</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="host" id="host">
						<label for="host">Hostname</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="app" id="app">
						<label for="app">Application</label>
					</div>

					<div class="input-field med col s12">
						<input type="number" name="kvm" id="kvm">
						<label for="kvm">KVM</label>
					</div>

					<div class="input-field med col s6">
						<input type="number" name="rak" id="rak">
						<label for="rak">Rak</label>
					</div>

					<div class="input-field med col s6">
						<input type="number" name="norak" id="norak">
						<label for="norak">Nomer Rack</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="sn" id="sn">
						<label for="sn">Serial Number</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="type" id="type">
						<label for="type">Type</label>
					</div>

					<div class="input-field med col s12">
						<input type="number" name="ram" id="ram">
						<label for="ram">RAM (GB)</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="proci" id="proci">
						<label for="proci">PROCI</label>
					</div>

					<div class="input-field med col s12">
						<input type="number" name="hdd" id="hdd">
						<label for="hdd">HDD (GB)</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="nic" id="nic">
						<label for="nic">NIC</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="os" id="os">
						<label for="os">OS</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="domain" id="domain">
						<label for="domain">Domain</label>
					</div>

					<div class="input-field med col s12">
						<input type="text" name="av" id="av">
						<label for="av">AV</label>
					</div>

					<div class="input-field med col s6">
						<input type="reset" value="Reset" class="btn green lighten-4 waves-effect waves-light">
					</div>

					<div class="input-field med col s6">
						<input type="submit" name="add" value="Add" class="btn blue lighten-4 waves-effect ">
					</div>

				</div>
			</form>
		</div>
	</div>

<?php require '../foot.php'; ?>