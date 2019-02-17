<?php  
	
	date_default_timezone_set("Asia/Jakarta");
	require_once '../db.php';
	require 'head.php';
	
	if (isset($_REQUEST['add'])) {
		$ilo	= stripcslashes(trim($_REQUEST['ilo']));
		$ilo	= mysqli_escape_string($db, $ilo);
		$ip		= stripcslashes(trim($_REQUEST['ip']));
		$ip		= mysqli_escape_string($db, $ip);
		$mac	= stripcslashes(trim($_REQUEST['mac']));
		$mac	= mysqli_escape_string($db, $mac);
		$host	= stripcslashes(trim($_REQUEST['host']));
		$host	= mysqli_escape_string($db, $host);
		$app	= stripcslashes(trim($_REQUEST['app']));
		$app	= mysqli_escape_string($db, $app);
		$kvm	= stripcslashes(trim($_REQUEST['kvm']));
		$kvm	= mysqli_escape_string($db, $kvm);
		$rak	= stripcslashes(trim($_REQUEST['rak']));
		$rak	= mysqli_escape_string($db, $rak);
		$norak	= stripcslashes(trim($_REQUEST['norak']));
		$norak	= mysqli_escape_string($db, $norak);
		$sn 	= stripcslashes(trim($_REQUEST['sn']));
		$sn 	= mysqli_escape_string($db, $sn);
		$type	= stripcslashes(trim($_REQUEST['type']));
		$type	= mysqli_escape_string($db, $type);
		$ram	= stripcslashes(trim($_REQUEST['ram']));
		$ram	= mysqli_escape_string($db, $ram);
		$proci	= stripcslashes(trim($_REQUEST['proci']));
		$proci	= mysqli_escape_string($db, $proci);
		$hdd	= stripcslashes(trim($_REQUEST['hdd']));
		$hdd	= mysqli_escape_string($db, $hdd);
		$nic	= stripcslashes(trim($_REQUEST['nic']));
		$nic	= mysqli_escape_string($db, $nic);
		$os		= stripcslashes(trim($_REQUEST['os']));
		$os		= mysqli_escape_string($db, $os);
		$domain	= stripcslashes(trim($_REQUEST['domain']));
		$domain	= mysqli_escape_string($db, $domain);
		$av		= stripcslashes(trim($_REQUEST['av']));
		$av		= mysqli_escape_string($db, $av);
		$time	= date("Y-m-d H:i:s");

		$cserv	= "SELECT ip,mac FROM tb_server WHERE ip='$ip' OR mac='$mac' ";
		$qadd	= "INSERT INTO tb_server (ilo,ip,mac,host,app,kvm,rak,norak,sn,type,ram,proci,hdd,nic,os,domain,av,created) VALUES ('$ilo', '$ip', '$mac', '$host', '$app', '$kvm', '$rak', '$norak', '$sn', '$type', '$ram', '$proci', '$hdd', '$nic', '$os', '$domain', '$av', '$time') ";
		$cek	= mysqli_query($db, $cserv);
		$qcek 	= mysqli_fetch_array($cek, MYSQLI_ASSOC);
		if (mysqli_num_rows($cek)) {
			echo "<script language=javascript>alert('Maaf Item Server Sudah Ada !<br>Anda Akan Dialihkan !')</script>;";
			header("refresh:3; url=add");
		}else{
			$result	= mysqli_query($db, $qadd);
			if ($result) {
				echo "<script language=javascript>alert('Your Asset Was Added !');</script>";
				header("Location:index");
			}else{
				echo "<script language=javascript>alert('Failed to Add Your Asset !');</script>";
				header("Location:index");
			}
		}
	}

?>