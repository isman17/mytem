<?php  

	require_once '../db.php';
	$id = $_GET['id'];
	
	$qdel 	= "DELETE FROM tb_inventory WHERE id='$id'";
	$del  	= mysqli_query($db, $qdel);
	if ($del) {
		echo "<script language=javascript>
				var c = confirm('Anda Yakin ?');
				// if(c==true){
				// 	localtion.assign('signin.php');
				// }else{
				// 	windows.history.back();
				// }
			  </script>";
		header("refresh:0; url=index");
	}else{
		echo "<script language=javascript>alert('Ada Kesalahan');</script>";
		header("refresh:0; url=index");
	}

?>