<script type="text/javascript" src="js/calendarDateInput.js"></script>
<style type="text/css">
.style1 {	font-size: 24px;
	font-weight: bold;
}
</style>

<form method="post" action="">
<br />
<?php
include"koneksi.php";
	$rr=mysql_query("select * from mandor where nip='$_GET[id]'");
		$dd=mysql_fetch_array($rr);
 ?>

<table width="521" border="0" align="center" id="rpt">
  <tr>
    <td colspan="3" align="center"><span class="style1">
    <div align="center">Ubah Data Mandor </div>
    </span></td>
  </tr>
  <tr>
    <td width="162">NIP</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td width="332"><input type="text" name="nip_hrd" size="50" value="<?php echo $dd[nip] ?>"></td>
  </tr>
  <tr>
    <td width="162">Password</td>
    <td width="13"><div align="center"><strong>:</strong></div></td>
    <td><input type="hidden" name="password" size="50"  value="<?php echo $dd[password] ?>" />
    <input type="password" name="password2" size="50"  value="<?php echo $dd[password] ?>" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="nama_hrd" size="50"  value="<?php echo $dd[nama] ?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><textarea name="alamat_hrd"><?php echo $dd[alamat_mandor] ?></textarea></td>
  </tr>
  <tr>
    <td>Telepon / Hp </td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="telp_hrd" size="15"   value="<?php echo $dd[telp_mandor] ?>"> / <input type="text" name="hp_hrd" size="20"   value="<?php echo $dd[hp_mandor] ?>">  </tr>
  <tr>
    <td>Email</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><input type="text" name="email_hrd" size="50"   value="<?php echo $dd[email_mandor] ?>"></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right"><input type="submit" name="simp" value="simpan"></div></td>
  </tr>
  </table>
</form>
<?php
if(isset($_POST[simp])){
$dt=date("Y-m-d");
if($_POST[tgll]>$dt){
	echo"<script>window.alert('Maaf Tanggal Jangan Lebih dari tanggal Sekarang')</script>";
}
else{
	if(empty($_POST[password])){
	$kl=mysql_query("update mandor set 
					nip='$_POST[nip_hrd]',
					nama_keuangan='$_POST[nama_hrd]',
					alamat_keuangan='$_POST[alamat_hrd]',
					telp_keuangan='$_POST[telp_hrd]',
					hp_keuangan='$_POST[hp_hrd]',
					email_keuangan='$_POST[email_hrd]' where 
						nip='$_GET[id]'");
	$ks=mysql_query("update user set 
					nip='$_POST[nip_hrd]'
					hak_akses='HRD' where nip='$_GET[id]'");
	}
	else{
	$kl=mysql_query("update mandor set 
					nip='$_POST[nip_hrd]',
					nama='$_POST[nama_hrd]',
					alamat_mandor='$_POST[alamat_hrd]',
					telp_mandor='$_POST[telp_hrd]',
					hp_mandor='$_POST[hp_hrd]',
					email_mandor='$_POST[email_hrd]' where 
						nip='$_GET[id]'");
	$ks=mysql_query("update user set 
					nip='$_POST[nip_hrd]',
					password='$_POST[password]',
					hak_akses='mandor' where nip='$_GET[id]'");
	}
	echo"<script>window.alert('Berhasil di Ubah')</script>";
	echo"<meta http-equiv='refresh' content='0;URL=?page=mandor' />";
	}
}
?>