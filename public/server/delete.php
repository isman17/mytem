<?php  

	require_once '../db.php';
	
	$id		= $_GET['id'];
	$qcek	= "SELECT * FROM tb_server";
	$cek	= mysqli_query($db, $qcek);
	$qdel	= "DELETE FROM tb_server WHERE id='$id' ";
	$del 	= mysqli_query($db, $qdel);

	if ($del) {
		echo "<script language=javascript>confirm('Anda Yakin ?');</script>";
		header("refresh:0; url=index.php");
	}else{
		echo "<script language=javascript>alert('Ada Kesalahan');</script>";
		header("refresh:0; url=index.php");
	}

?>