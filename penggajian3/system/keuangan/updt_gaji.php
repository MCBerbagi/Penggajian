<script>
function slcpgwTetap(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8,pg9,pg10,pg11,pg12){
  $('input[name=nip]').val(pg1);
  $('input[name=nama]').val(pg2);
  $('input[name=id_jabatan]').val(pg3);
  $('input[name=jabatan]').val(pg4);
  $('input[name=id_departemen]').val(pg5);
  $('input[name=departemen]').val(pg6);
  $('input[name=gaji_pokok]').val(pg7);
  $('input[name=hari_tua]').val(pg8);
  $('input[name=kecelakaan]').val(pg9);
  $('input[name=kesehatan]').val(pg10);
  $('input[name=kematian]').val(pg11);
   $('input[name=gaji]').val(pg12);

  tb_remove(); // hilangkan dialog thickbox
}
function slcpgwburuh(pg1,pg2,pg3,pg4,pg5,pg6,pg7,pg8,pg9,pg10,pg11,pg12){
  $('input[name=nip]').val(pg1);
  $('input[name=nama]').val(pg2);
  $('input[name=id_jabatan]').val(pg3);
  $('input[name=jabatan]').val(pg4);
  $('input[name=id_departemen]').val(pg5);
  $('input[name=departemen]').val(pg6);
  $('input[name=gaji_pokok]').val(pg7);
  $('input[name=lembur]').val(pg8);
  $('input[name=upah]').val(pg8);



  tb_remove(); // hilangkan dialog thickbox
}
 function slcproduk(a1,a2,a3,a4){
	 $('input[name=id_jenis]').val(a1);
	 $('input[name=jenis]').val(a2);
	 $('input[name=harga]').val(a3);
	 $('input[name=jumlah]').val(a4);
  tb_remove(); // hilangkan dialog thickbox
 }
</script>
<link rel="stylesheet" type="text/css" media="all" href="inc/calendar.css" title="green">
<script type="text/javascript" src="inc/calendar.js"></script>
<script type="text/javascript">
<!--

//Java Script Perhitungan Tunjangan
<?php
include"koneksi.php";

if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") {
?>
function startSum(){
	  interval = setInterval("Sum()",1);
	}
	function Sum(){
		var BulananTot = 0;		
		for (j = 0; j < document.formbulanan.TxtBulan.length; j++) {
			BulananTot -= document.formbulanan.TxtBulan[j].value;
		}	
				
		document.formbulanan.TxtTotal.value =    (BulananTot * -1) ;  
		
	}
	function stopSum(){
	  clearInterval(interval);
	}
	
<?php } else{ ?>
	function startSum(){
	  interval = setInterval("Sum()",1);
	}
	function Sum(){
		var BulananTot = 0;		
		for (j = 0; j < document.formbulanan.TxtBulan.length; j++) {
			BulananTot -= document.formbulanan.TxtBulan[j].value;
		}	
		var x = document.formbulanan.harga.value;
		var xx = document.formbulanan.hargsa.value;
		
		var xxx = x * xx;
		document.formbulanan.totpro.value = xxx;
		
		document.formbulanan.TxtTotal.value =    (BulananTot * -1) ;  
		document.formbulanan.TxtTotals.value =    (BulananTot * -1) ;  
		
	}
	function stopSum(){
	  clearInterval(interval);
	}
	<?php } ?>//-->
</script>
<script src="js/ValidationScripts.js" type="text/javascript"></script>
<style>
input{border:1px #999 solid; width:200px;}
.btn{width:100px;}
</style>
<body>
<?php
if($_GET[io]=="Kontrak"){
	$tbl="pegawai_kontrak";
}
else if($_GET[io]=="Tetap"){
	$tbl="pegawai_tetap";
}
else{
	$tbl="data_buruh";
}
	$query=mysql_query("select * from daftar_gaji where id_gaji='$_GET[id]'");
		$gj=mysql_fetch_array($query);
	$query2=mysql_query("select * from $tbl where nip='$gj[nip]'");
		$nm=mysql_fetch_array($query2);
	$query3=mysql_query("select * from jabatan where id_jabatan='$gj[id_jabatan]'");
		$jbt=mysql_fetch_array($query3);
	$query4=mysql_query("select * from departemen where id_departemen='$gj[id_departemen]'");
		$dpt=mysql_fetch_array($query4);
?>
<form name="formbulanan" method="post" action="">
<table width="766" class="tbls">
  <tr>
    <td colspan="3"><div align="center">
      <h2>Data_Gaji</h2>
    </div></td>
  </tr>
  <tr>
    <td width="242">Status Pegawai</td>
    <td width="17"><strong>:</strong></td>
    <td width="491">
	<?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak"){echo "Pegawai $_GET[io]";}else{echo"Buruh";} ?>
	</td>
  </tr>
  <tr>
    <td width="242">Tanggal Gaji</td>
    <td width="17"><strong>:</strong></td>
    <td><input name="tanggal" type="text" id="tanggal" value="<?php echo date("Y-m-")."25"?>" size="20" readonly/>
      <!--<input name="tanggal" type="button" id="tanggal"  /> <a href="#" onClick="return showCalendar('tanggal','y-mm-d');"> <img src="images/calendarIcon.png" width="17" height="17" border="0" ></a>-->     </td>
  </tr>
  <tr>
    <td>Nip</td>
    <td><strong>:</strong></td>
    <td>
    <?php if($_GET[io]=="Tetap"){ ?>
    <a href="popup/pgw-tetap.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <?php } elseif($_GET[io]=="Kontrak"){  ?>
     <a href="popup/pgw-kontrak.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <?php } elseif($_GET[io]=="Buruh"){  ?>
     <a href="popup/pgw-buruh.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    <?php } else{ ?> 
	<a href="popup/eror.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
	<?php } ?>
      <input type="text" name="nip" value="<?php echo $nm[nip] ?>"/>
    </a></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="nama" readonly  value="<?php echo $nm[nama] ?>" /></td>
  </tr>
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
  <!--<tr>
    <td>Id_Jabatan</td>
    <td>:</td>
    <td><a href="popup/jabatan1.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
    </a> </td>
  </tr>
  -->
  <tr>
    <td>Jabatan</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="jabatan" id="jabatan" readonly  value="<?php echo $jbt[nama_jabatan] ?>" />
	<input type="hidden" name="id_jabatan"  value="<?php echo $jbt[id_jabatan] ?>" /></td>
  </tr>
  <?php } ?>
<!--  <tr>
    <td>Id_Departemen</td>
    <td>:</td>
    <td><a href="popup/departemen.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox"> </a> 
      </td>
  </tr>
-->  <tr>
    <td>Departemen</td>
    <td><strong>:</strong></td>
    <td><input type="text" name="departemen" id="departemen"  readonly value="<?php echo $dpt[nama_departemen] ?>"/>
	<input type="hidden" name="id_departemen" id="id_departemen" value="<?php echo $dpt[id_departemen] ?>"/></td>
  </tr>
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
   <tr>
    <td>Gaji pokok</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="gaji_pokok" id="TxtBulan" value="<?php echo $jbt[gaji_pokok] ?>" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly /></td>
  </tr>
  <?php } ?>
  <tr>
    <td>Lembur</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="lembur" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();" value="<?php echo $gj[uang_lembur] ?>" onKeyPress="return numbersOnly(event, false);" /></td>
  </tr>
  <tr>
    <td>Uang Makan</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="makan" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[uang_makan] ?>" onBlur="stopSum();"onkeypress="return numbersOnly(event, false);" /></td>
  </tr>
  <tr>
    <td>Transportasi</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="transportasi" id="TxtBulan"  onFocus="startSum();" value="<?php echo $gj[uang_transport] ?>" onBlur="stopSum();"onkeypress="return numbersOnly(event, false);"/></td>
  </tr>
  <!-- zz -->
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
  <tr>
    <td><strong>Tunjangan Istri</strong></td>
    <td><strong>Rp</strong></td>
    <td><input name="istri" type="text" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[tunj_istri] ?>" onBlur="stopSum();"onkeypress="return numbersOnly(event, false);"/></td>
  </tr>
  <tr>
    <td><strong>Tunjangan Anak</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="anak" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[tunj_anak] ?>" onBlur="stopSum();"onkeypress="return numbersOnly(event, false);"/></td>
  </tr>
  <tr>
    <td><strong>Tunjangan Hari Tua</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="hari_tua" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();"readonly value="<?php echo $gj[tunj_hari_tua] ?>" onKeyPress="return numbersOnly(event, false);"/></td>
  </tr>
  <tr>
    <td><strong>Tunjangan Kecelakaan</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="kecelakaan" value="<?php echo $gj[tunj_kecelakaan] ?>" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();"readonly onKeyPress="return numbersOnly(event, false);"/></td>
  </tr>
  <tr>
    <td><strong>Tunjangan Kesehatan</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="kesehatan" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[tunj_kesehatan] ?>" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly/></td>
  </tr>
  <tr>
    <td><strong>Tunjangan Kematian</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="kematian" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[tunj_kematian] ?>" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" readonly/></td>
  </tr>
  <?php } ?>
  <!-- zz -->
  <tr>
    <td>Tunjangan Hari Raya</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="hari_raya" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[tunj_hari_raya] ?>" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" /></td>
  </tr>
  <?php if($_GET[io]=="Buruh") { ?>
  <tr>
    <td>Jenis</td>
    <td><strong>:</strong></td>
    <td><a href="popup/produk.php?width=500&amp;height=400&amp;TB_iframe=true" class="thickbox">
	<input type="text" name="jenis" id="jenis" readonly="" value="<?php echo $gj[id_jenis] ?>"/></a>
	  <input type="hidden" name="id_jenis" value="<?php echo $gj[jenis] ?>" /></td>
  </tr>
  <tr>
    <td>Harga per unit</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="harga" id="harga"  onFocus="startSum();" value="<?php echo $gj[harga_per_unit] ?>" onBlur="stopSum()" onKeyPress="return numbersOnly(event, false);"  readonly=""/></td>
  </tr>
  <tr>
    <td>Jumlah Produksi</td>
    <td><strong>KG</strong></td>
    <td><input name="jumlah" type="text" id="hargsa" size="1"  onFocus="startSum();" onBlur="stopSum()" value="<?php echo $gj[jumlah_produksi] ?>" onKeyPress="return numbersOnly(event, false);"  /></td>
  </tr>
  <tr>
    <td><strong>Total Produksi </strong></td>
    <td><strong>Rp</strong></td>
    <td><input name="totpro" type="text" value="<?php echo $gj[total_produksi] ?>"  size="1" id="TxtBulan" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);"  readonly="" ></td>
  </tr>

  <?php } ?>
  <tr>
    <td>Bonus</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="bonus" id="TxtBulan" value="<?php echo $gj[bonus] ?>" onFocus="startSum();" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" /></td>
  </tr>
  <tr>
    <td>Potongan</td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="potongan" id="TxtBulan" onFocus="startSum();" value="<?php echo $gj[potongan] ?>" onBlur="stopSum();" onKeyPress="return numbersOnly(event, false);" /></td>
  </tr>
  <?php if($_GET[io]=="Tetap" or $_GET[io]=="Kontrak") { ?>
  <tr>
    <td><strong>Gaji Kotor</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="TxtTotal" id="gaji"/></td>
  </tr>
  <?php } else if($_GET[io]=="Buruh") { ?>
  <tr>
    <td><strong>Total Upah</strong></td>
    <td><strong>Rp</strong></td>
    <td><input type="text" name="TxtTotal" id="upah"/></td>
  </tr>
  <?php }?>
  <td colspan="3" align="right"><input class="button" name="smpgaji" type="submit" value="Simpan" />
    <input class="button" type="reset" value="Batal" /></td>
</table>
</form>
</body>
</html>
<?php
	if($_GET[io]=="Tetap" and isset($_POST[smpgaji])){
		
		$sql=mysql_query("update daftar_gaji set 
				tanggal='$_POST[tanggal]',
				nip='$_POST[nip]',
				id_jabatan='$_POST[id_jabatan]',
				id_departemen='$_POST[id_departemen]',
				uang_lembur='$_POST[lembur]',
				uang_makan='$_POST[makan]',
				uang_transport='$_POST[transportasi]',
				tunj_istri='$_POST[istri]',
				tunj_anak='$_POST[anak]',
				tunj_hari_tua='$_POST[hari_tua]',
				tunj_kecelakaan='$_POST[kecelakaan]',
				tunj_kesehatan='$_POST[kesehatan]',
				tunj_kematian='$_POST[kematian]',
				tunj_hari_raya='$_POST[hari_raya]',
				bonus='$_POST[bonus]',
				potongan='$_POST[potongan]',
				gaji_kotor='$_POST[TxtTotal]',
				status_pgw='$_GET[io]'
				where id_gaji='$_GET[id]'
				");
		if($sql){
			echo"<script>window.alert('Berhasil');</script>";
		}
		else{
			echo"<script>window.alert('Gagal');</script>";
			}
		}
	else if($_GET[io]=="Kontrak" and isset($_POST[smpgaji])){
		$sql=mysql_query("update daftar_gaji set 
				tanggal='$_POST[tanggal]',
				nip='$_POST[nip]',
				id_jabatan='$_POST[id_jabatan]',
				id_departemen='$_POST[id_departemen]',
				uang_lembur='$_POST[lembur]',
				uang_makan='$_POST[makan]',
				uang_transport='$_POST[transportasi]',
				tunj_istri='$_POST[istri]',
				tunj_anak='$_POST[anak]',
				tunj_hari_tua='$_POST[hari_tua]',
				tunj_kecelakaan='$_POST[kecelakaan]',
				tunj_kesehatan='$_POST[kesehatan]',
				tunj_kematian='$_POST[kematian]',
				tunj_hari_raya='$_POST[hari_raya]',
				bonus='$_POST[bonus]',
				potongan='$_POST[potongan]',
				gaji_kotor='$_POST[TxtTotal]',
				status_pgw='$_GET[io]'
				where id_gaji='$_GET[id]'
				");
		if($sql){
			echo"<script>window.alert('Berhasil');</script>";
		}
		else{
			echo"<script>window.alert('Gagal');</script>";
		}
	}
	else if($_GET[io]=="Buruh" and isset($_POST[smpgaji])){
		$sql=mysql_query("update daftar_gaji set 
				tanggal='$_POST[tanggal]',
				nip='$_POST[nip]',
				id_departemen='$_POST[id_departemen]',
				uang_lembur='$_POST[lembur]',
				uang_makan='$_POST[makan]',
				uang_transport='$_POST[transportasi]',
				tunj_hari_raya='$_POST[hari_raya]',
				bonus='$_POST[bonus]',
				potongan='$_POST[potongan]',
				total_upah='$_POST[TxtTotal]',
				status_pgw='$_GET[io]' where id_gaji='$_GET[id]'");
		if($sql){
			echo"<script>window.alert('Berhasil');</script>";
		}
		else{
			echo"<script>window.alert('Gagal');</script>";
		}
	}
?>