<script type="text/javascript" src="js/calendarDateInput.js"></script>
<style type="text/css">
.style1 {	font-size: 24px;
	font-weight: bold;
}
</style>
<?php
include"koneksi.php";
	$ii=mysql_query("select * from jabatan where id_jabatan='$_GET[id]'");
		$kk=mysql_fetch_array($ii);
?>
<form method="post" action="">
<br />
<table width="521" border="0" align="center"  class="tbls">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Ubah Data Jabatan </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">Nama Jabatan</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="najab" size="50" value="<?php echo $kk[nama_jabatan]; ?>"></td>
  </tr>
  <tr>
    <td width="162">Golongan</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="gol" size="50" value="<?php echo $kk[golongan]; ?>"/></td>
  </tr>
  <tr>
    <td>Gaji Pokok</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="gapok" size="50" value="<?php echo $kk[gaji_pokok]; ?>"></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right"><input type="submit" name="simp" value="simpan"></div></td>
  </tr>
  </table>
</form>
<?php include"koneksi.php";
if(isset($_POST[simp])){
	$KK=mysql_query("update jabatan set
						nama_jabatan='$_POST[najab]',
						golongan='$_POST[gol]',
						gaji_pokok='$_POST[gapok]'
						where id_jabatan='$_GET[id]'");
}