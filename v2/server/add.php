<?php require 'head.php'; ?>

<div class="mdl-grid center-items">
	<div class="mdl-layout-spacer"></div>
	<div class="mdl-card mdl-shadow--8dp">
		<div class="mdl-card__title mdl-color--primary mdl-color-text--white">Add Your Asset !</div>
		<div class="mdl-card__supporting-text">
			<form action="add.proses" method="post">

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="ilo" id="ilo" autofocus>
						<label class="mdl-textfield__label" for="ilo">ILO</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="ip" id="ip">
						<label class="mdl-textfield__label" for="ip">IP Address</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="mac" id="mac">
						<label class="mdl-textfield__label" for="mac">MAC Address</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="host" id="host">
						<label class="mdl-textfield__label" for="host">Hostname</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="app" id="app">
						<label class="mdl-textfield__label" for="app">Application</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="number" name="kvm" id="kvm">
						<label class="mdl-textfield__label" for="kvm">KVM</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="number" name="rak" id="rak">
						<label class="mdl-textfield__label" for="rak">Rak</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="number" name="norak" id="norak">
						<label class="mdl-textfield__label" for="norak">Nomer Rack</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="sn" id="sn">
						<label class="mdl-textfield__label" for="sn">Serial Number</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="type" id="type">
						<label class="mdl-textfield__label" for="type">Type</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="number" name="ram" id="ram">
						<label class="mdl-textfield__label" for="ram">RAM (GB)</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="proci" id="proci">
						<label class="mdl-textfield__label" for="proci">PROCI</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="number" name="hdd" id="hdd">
						<label class="mdl-textfield__label" for="hdd">HDD (GB)</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="nic" id="nic">
						<label class="mdl-textfield__label" for="nic">NIC</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="os" id="os">
						<label class="mdl-textfield__label" for="os">OS</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="domain" id="domain">
						<label class="mdl-textfield__label" for="domain">Domain</label>
					</div>

					<div class="mdl-textfield mdl-textfield--floating-label mdl-js-textfield">
						<input class="mdl-textfield__input" type="text" name="av" id="av">
						<label class="mdl-textfield__label" for="av">AV</label>
					</div>

					<div class="mdl-card__actions mdl-card--border" style="text-align: center;">
						<button class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect" type="reset">Reset</button>
					
						<button type="submit" name="add" class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect">Add</button>
					</div>

			</form>
		</div>
	</div>
	<div class="mdl-layout-spacer"></div>
</div>

<?php require '../foot.php'; ?>