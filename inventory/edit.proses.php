<?php  

	date_default_timezone_set("Asia/Jakarta");
	require_once '../db.php';
	if (isset($_REQUEST['update'])) {
		$id			= $_REQUEST['id'];
		$nama		= stripcslashes($_REQUEST['nama']);
		$nama		= mysqli_escape_string($db, $nama);
		$jenis		= stripcslashes($_REQUEST['jenis']);
		$jenis		= mysqli_escape_string($db, $jenis);
		$jumlah		= stripcslashes($_REQUEST['jumlah']);
		$jumlah		= mysqli_escape_string($db, $jumlah);
		$keterangan	= stripcslashes($_REQUEST['keterangan']);
		$keterangan	= mysqli_escape_string($db, $keterangan);
		$kondisi	= stripcslashes($_REQUEST['kondisi']);
		$kondisi	= mysqli_escape_string($db, $kondisi);
		$time		= date("Y-m-d H:i:s");

		$qedit		= "UPDATE tb_inventory SET nama='$nama', jenis='$jenis', jumlah='$jumlah', keterangan='$keterangan', kondisi='$kondisi', edited='$time' WHERE id='$id' ";
		$edit 		= mysqli_query($db, $qedit);
		if ($edit) {
			echo "<script language=javascript>alert('Your Asset Updated !');</script>";
			header("refresh:0; url=index.php");
		}else{
			echo "<script language=javascript>alert('Failed to Update Your Asset !');</script>";
			header("refresh:0; url=edit.php?id=".$id);
		}

	}


?>