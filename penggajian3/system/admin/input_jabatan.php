<script type="text/javascript" src="js/calendarDateInput.js"></script>
<style type="text/css">
.style1 {	font-size: 24px;
	font-weight: bold;
}
</style>

<form method="post" action="">
<br />
<table width="521" border="0" align="center"  class="tbls">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Tambah Data Jabatan </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">Nama Jabatan</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="najab" size="50"></td>
  </tr>
  <tr>
    <td width="162">Golongan</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="gol" size="50" /></td>
  </tr>
  <tr>
    <td>Gaji Pokok</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="gapok" size="50"></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right"><input type="submit" name="simp" value="simpan"></div></td>
  </tr>
  </table>
</form>
<?php
if(isset($_POST[simp])){
$dt=date("Y-m-d");
include('koneksi.php');
if($_POST[tgll]>$dt){
	echo"<script>window.alert('Maaf Tanggal Jangan Lebih dari tanggal Sekarang')</script>";
}
else{
	$kl=mysql_query("insert into jabatan set 
					nama_jabatan='$_POST[najab]',
					golongan='$_POST[gol]',
					gaji_pokok='$_POST[gapok]'");
		if($kl){
	echo"<script>window.alert('Berhasil')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=jabatan' />";
		}
		else{}
	}
}
?>