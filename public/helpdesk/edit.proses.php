<?php  

	date_default_timezone_set("Asia/Jakarta");
	require_once '../db.php';
	if (isset($_REQUEST['update'])) {
		$id			= $_REQUEST['id'];
		$masalah	= stripcslashes($_REQUEST['masalah']);
		$masalah	= mysqli_escape_string($db, $masalah);
		$solusi		= stripcslashes($_REQUEST['solusi']);
		$solusi		= mysqli_escape_string($db, $solusi);
		$keterangan	= stripcslashes($_REQUEST['keterangan']);
		$keterangan	= mysqli_escape_string($db, $keterangan);
		$status		= stripcslashes($_REQUEST['status']);
		$status		= mysqli_escape_string($db, $status);
		$time		= date("Y-m-d H:i:s");

		$qedit		= "UPDATE tb_ticket SET masalah='$masalah', solusi='$solusi', keterangan='$keterangan', status='$status', edited='$time' WHERE id='$id' ";
		$edit 		= mysqli_query($db, $qedit);
		if ($edit) {
			echo "<script language=javascript>alert('Your Trouble Updated !');</script>";
			header("refresh:0; url=index.php");
		}else{
			echo "<script language=javascript>alert('Failed to Update Your Trouble !');</script>";
			header("refresh:0; url=edit.php?id=".$id);
		}

	}


?>