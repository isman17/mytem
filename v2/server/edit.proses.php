<?php  

	date_default_timezone_set("Asia/Jakarta");
	require 'head.php';
	require_once '../db.php';

	if (isset($_REQUEST['update'])) {
		$id 	= $_REQUEST['id'];
		$ilo	= stripcslashes($_REQUEST['ilo']);
		$ilo	= mysqli_escape_string($db, $ilo);
		$ip		= stripcslashes($_REQUEST['ip']);
		$ip		= mysqli_escape_string($db, $ip);
		$mac	= stripcslashes($_REQUEST['mac']);
		$mac	= mysqli_escape_string($db, $mac);
		$host	= stripcslashes($_REQUEST['host']);
		$host	= mysqli_escape_string($db, $host);
		$app	= stripcslashes($_REQUEST['app']);
		$app	= mysqli_escape_string($db, $app);
		$kvm	= stripcslashes($_REQUEST['kvm']);
		$kvm	= mysqli_escape_string($db, $kvm);
		$rak	= stripcslashes($_REQUEST['rak']);
		$rak	= mysqli_escape_string($db, $rak);
		$norak	= stripcslashes($_REQUEST['norak']);
		$norak	= mysqli_escape_string($db, $norak);
		$sn 	= stripcslashes($_REQUEST['sn']);
		$sn 	= mysqli_escape_string($db, $sn);
		$type	= stripcslashes($_REQUEST['type']);
		$type	= mysqli_escape_string($db, $type);
		$ram	= stripcslashes($_REQUEST['ram']);
		$ram	= mysqli_escape_string($db, $ram);
		$proci	= stripcslashes($_REQUEST['proci']);
		$proci	= mysqli_escape_string($db, $proci);
		$hdd	= stripcslashes($_REQUEST['hdd']);
		$hdd	= mysqli_escape_string($db, $hdd);
		$nic	= stripcslashes($_REQUEST['nic']);
		$nic	= mysqli_escape_string($db, $nic);
		$os		= stripcslashes($_REQUEST['os']);
		$os		= mysqli_escape_string($db, $os);
		$domain	= stripcslashes($_REQUEST['domain']);
		$domain	= mysqli_escape_string($db, $domain);
		$av		= stripcslashes($_REQUEST['av']);
		$av		= mysqli_escape_string($db, $av);
		$time	= date("Y-m-d H:i:s");

		$qedit	= "UPDATE tb_server SET ilo='$ilo',ip='$ip',mac='$mac',host='$host',app='$app',kvm=$kvm,rak=$rak,norak=$norak,sn='$sn',type='$type',ram=$ram,proci='$proci',hdd=$hdd,nic='$nic',os='$os',domain='$domain',av='$av',edited='$time' WHERE id='$id'";
		$edit	= mysqli_query($db, $qedit);
		if ($edit) {
			echo "<script language=javascript>alert('Asset Updated !');</script>";
			header("refresh:0; url=index.php");
		}else{
			echo "<script language=javascript>alert('Failed to Update Your Asset !');</script>";
			header("refresh:0; url=index.php");
		}
	}

?>