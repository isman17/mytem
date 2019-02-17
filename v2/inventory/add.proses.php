<?php  
	
	date_default_timezone_set('Asia/Jakarta');
	require 'head.php';
	require '../foot.php';
	require_once '../db.php';
	if (isset($_REQUEST['add'])) {
		$nama		= stripcslashes(trim($_REQUEST['nama']));
		$nama		= mysqli_escape_string($db, $nama);
		$jenis		= stripcslashes(trim($_REQUEST['jenis']));
		$jenis		= mysqli_escape_string($db, $jenis);
		$jumlah		= stripcslashes(trim($_REQUEST['jumlah']));
		$jumlah		= mysqli_escape_string($db, $jumlah);
		$keterangan	= stripcslashes(trim($_REQUEST['keterangan']));
		$keterangan	= mysqli_escape_string($db, $keterangan);
		if ($keterangan == '') {
			$keterangan = '-';
		}
		$kondisi	= stripcslashes($_REQUEST['kondisi']);
		$kondisi	= mysqli_escape_string($db, $kondisi);
		$time 		= date('Y-m-d H:i:s');

		$qadd		=	"INSERT INTO tb_inventory (nama, jenis, jumlah, keterangan, kondisi, created) VALUES ('$nama', '$jenis', $jumlah, '$keterangan', '$kondisi', '$time') ";
		$add		= mysqli_query($db, $qadd);
		if ($add) {
			echo "<script language=javascript>alert('Your Asset Was Added !');</script>";
			header("refresh:0 ; url=index");
		}else{
			echo "<script language=javascript>alert('Failed to Add Your Asset !');</script>";
			header("refresh:0 ; url=add");
		}
	}

?>