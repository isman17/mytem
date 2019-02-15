<?php  
	
	date_default_timezone_set('Asia/Jakarta');
	require 'head.php';
	require '../foot.php';
	require_once '../db.php';
	if (isset($_REQUEST['add'])) {
		$divisi		=	stripcslashes($_REQUEST['divisi']);
		$divisi		=	mysqli_escape_string($db, $divisi);
		$nama		=	stripcslashes($_REQUEST['nama']);
		$nama		=	mysqli_escape_string($db, $nama);
		$no_hp		=	stripcslashes($_REQUEST['no_hp']);
		$no_hp		=	mysqli_escape_string($db, $no_hp);
		$masalah	=	stripcslashes($_REQUEST['masalah']);
		$masalah	=	mysqli_escape_string($db, $masalah);
		$keterangan	=	stripcslashes($_REQUEST['keterangan']);
		$keterangan	=	mysqli_escape_string($db, $keterangan);
		if ($keterangan == '') {
			$keterangan = '-';
		}
		$solusi		= '-';
		$status		= 	'new';
		$time 		= 	date('Y-m-d H:i:s');

		$qadd		=	"INSERT INTO tb_ticket (divisi, nama, no_hp, masalah, solusi, keterangan, status, created) VALUES ('$divisi', '$nama', '$no_hp', '$masalah', '$solusi', '$keterangan', '$status', '$time') ";
		$add		= mysqli_query($db, $qadd);
		if ($add) {
			echo "<script language=javascript>alert('Your Trouble Was Added !');</script>";
			header("refresh:0 ; url=index");
		}else{
			echo "<script language=javascript>alert('Failed to Add Your Trouble !');</script>";
			header("refresh:0 ; url=add");
		}
	}

?>