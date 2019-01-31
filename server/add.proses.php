<?php  
	
	date_default_timezone_set("Asia/Jakarta");
	require_once '../db.php';
	require 'head.php';
	
	if (isset($_REQUEST['add'])) {
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

		$cserv	= "SELECT ip,mac FROM tb_server WHERE ip='$ip' OR mac='$mac' ";
		$qadd	= "INSERT INTO tb_server (ilo,ip,mac,host,app,kvm,rak,norak,sn,type,ram,proci,hdd,nic,os,domain,av,created) VALUES ('$ilo', '$ip', '$mac', '$host', '$app', '$kvm', '$rak', '$norak', '$sn', '$type', '$ram', '$proci', '$hdd', '$nic', '$os', '$domain', '$av', '$time') ";
		$cek	= mysqli_query($db, $cserv);
		$qcek 	= mysqli_fetch_array($cek, MYSQLI_ASSOC);
		if (mysqli_num_rows($cek)) {
			echo "<div class='card hoverable center'>
					Maaf Item Server Sudah Ada !<br>Anda Akan Dialihkan
				  </div>
				 ";
			header("refresh:3; url=add.php");
		}else{
			$result	= mysqli_query($db, $qadd);
			if ($result) {
				echo "<script language=javascript>alert('Server Sudah Ditambah Anda Akan Dialihkan');</script>";
				header("Location:index.php");
			}
		}
	}

?>