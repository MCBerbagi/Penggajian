<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data buruh</title>
</head>
<body>
<h1 align="left">Data Human Data Resource </h1>
<hr />
<?php
include('koneksi.php');
?>
<table border="1" align="center">
<tr>
    <td width="27"><div align="center"><strong>NIP</strong></div></td>
    <td width="40"><div align="center"><strong>Nama</strong></div></td>
    <td width="48"><div align="center"><strong>Alamat</strong></div></td>
    <td width="113"><div align="center"><strong>No. Telepon </strong></div></td>
    <td width="127"><div align="center"><strong>No. Handphone </strong></div></td>
    <td width="51"><div align="center"><strong>Email</strong></div></td>
    <td width="109"><div align="center"><strong>Edit</strong></div></td>
</tr>
<?php include"koneksi.php"; 
 $sql=mysql_query("select * from hrd"); 
		 while($re=mysql_fetch_array($sql)){ ?>
			<tr align="left" valign="top">
				<td>
					<?php echo $re[nip] ?>				</td>
				<td>
					<?php echo $re[nama_hrd] ?>			</td>
				<td>	
					<?php echo $re[alamat_hrd] ?>		</td>
                <td>
					<?php echo $re[telp_hrd] ?>			</td>
                <td>
					<?php echo $re[hp_hrd] ?>			</td>
				<td>
					<?php echo $re[email_hrd] ?>			</td>
                <td align="center" bgcolor="#CCCCCC">
					<a href="?page=u-hrd&id=<?php echo $re[nip]; ?>">Update</a>	
					<a href="delete_hrd.php?id=<?php echo $re[nip]; ?>">Delete</a>				</td>															
			</tr>
		<?php }?>  
</table>
<br/>
<br/>
<br/>
<div align="right"><a href="?page=t_hrd" class="button">Tambah Data HRD</a></div>
	<p>&nbsp;</p>
<?php
@$foto=$_GET['foto'];
@$id=$_GET['id'];
if(isset($id)){
	$query = mysql_query("select * from hrd where nip = '$id'");
	$show = mysql_fetch_array($query);
	if($foto =='detail'){?>
<? }}?>
</body>
</html>