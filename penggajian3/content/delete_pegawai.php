<?php
	include "koneksi.php";
	$sql= "DELETE FROM pegawai_tetap WHERE nip='$_GET[id]'";
	$hasil=mysql_query($sql);
	echo("<script language='JavaScript'> alert('Data berhasil dihapus.'); </script>");
	
	echo("<script>window.location=\"view_pegawai.php\";</script>");
?>