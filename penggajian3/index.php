<?php session_start();
include"koneksi.php";
	$uu=mysql_query("select * from user where nip='$_SESSION[nip]'");
		$aha=mysql_fetch_array($uu);
if(!session_is_registered("nip")){
?>
<script language="javascript" src="js/time.js"></script>
<script language="javascript" src="js/jquery-1.5.1.min.js"></script>
<script language="javascript" src="js/jquery.ui.core.js"></script>
<script language="javascript" src="js/jquery.ui.datapicter.js"></script>
<script language="javascript" src="js/jquery.ui.widget.js"></script>
<script language="javascript">
	$(function(){
		$("#tanggal").datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en"><head>
    <!--
    Created by Artisteer v2.1.0.16090
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Powered Cips</title>

    <script type="text/javascript" src="js/script.js"></script>
<link href="login/login-box.css" rel="stylesheet" type="text/css" />
<style>
#all{
	background: -webkit-gradient(linear, left top, left bottom, from(#a2c4d5), to(#ffffff)); /* CSS gradient */
	background: -moz-linear-gradient(top, #a2c4d5, #ffffff) no-repeat; /* CSS gradient */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a2c4d5', endColorstr='#ffffff'); /* CSS gradient ie7 */ 
	-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a2c4d5', endColorstr='#ffffff'); /* CSS gradient ie8 */
}
/* Time */
#dates {
	position:absolute;
	width:350px;
	margin-top:0px;
	azimuth:left;
	left:583px;
}
#the-day{
	position:absolute;
	color:#FFF;
	padding:7px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
}
#the-time{
	position:absolute;
	color:#FFF;
	left:140px;
	width:50px;
	padding:7px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
}

</style>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<body id="all">
<div class="PageBackgroundSimpleGradient">
    </div>
    <div class="PageBackgroundGlare">
        <div class="PageBackgroundGlareImage"></div>
    </div>
    <div class="Main">
        <div class="Sheet">
            <div class="Sheet-tl"></div>
            <div class="Sheet-tr"></div>
            <div class="Sheet-bl"></div>
            <div class="Sheet-br"></div>
            <div class="Sheet-tc"></div>
            <div class="Sheet-bc"></div>
            <div class="Sheet-cl"></div>
            <div class="Sheet-cr"></div>
            <div class="Sheet-cc"></div>
            <div class="Sheet-body">
              <div class="Header">
                    <div class="Header-png"></div>
                    <div class="Header-jpeg"></div>
              </div>
                <div class="nav">
                	<div class="l"></div>
                	<div class="r"></div>
                    <div id="dates"><div id="the-day">Hari, 00 Bulan 0000</div><div id="the-time">00:00:00</div></div></div>
        <div align="center" id="content"><div id="welcome"><marquee>Selamat Datang -----</marquee></div>
<!--                	<ul class="artmenu">
                		<li><a href="#" class="{ActiveItem}"><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
                		<li><a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                			<ul>
                				<li><a href="#">Photos</a></li>
                				<li><a href="#">Press</a></li>
                			</ul>
                		</li>
                		<li><a href="#"><span class="l"></span><span class="r"></span><span class="t">Services</span></a></li>
                		<li><a href="#"><span class="l"></span><span class="r"></span><span class="t">Solutions</span></a>
                			<ul>
                				<li><a href="#">Consulting</a>
                					<ul>
                						<li><a href="#">Lorem ipsum</a> </li>
                						<li><a href="#">Dolor sit amet</a> </li>
                						<li><a href="#">Consectetuer</a> </li>
                					</ul>
                				</li>
                				<li><a href="#">Training</a></li>
                				<li><a href="#">Analysis</a></li>
                			</ul>
                		</li>
                		<li><a href="#"><span class="l"></span><span class="r"></span><span class="t">Contact</span></a></li>
                	</ul>
-->                </div>
                <div class="contentLayout">
                    <div class="content">
                        <div class="Post">
                         <div style="padding: 10px 0 0 0px;" align="center">
<div id="login-box">

<H2>Login</H2>
<!--Lorem Ipsum is simply dummy text of the printing and typesetting industry.
<br />
--><br />
<form method="post" action="logs.php?act=submit">
<div id="login-box-name" style="margin-top:20px;">NIP:</div><div id="login-box-field" style="margin-top:20px;">
<input name="nip" class="form-login" title="Masukan Nip" size="30" maxlength="2048" value="Masukan NIP" onBlur="if(this.value=='') this.value='Masukan NIP';" onFocus="if(this.value=='Masukan NIP') this.value='';"  /></div>
<div id="login-box-name">Password:</div><div id="login-box-field">
<input name="password" type="password" class="form-login" title="Masukan Password" size="30" maxlength="2048" value="000" onBlur="if(this.value=='') this.value='000';" onFocus="if(this.value=='000') this.value='';" /></div>
<br />
<span class="login-box-options">
<input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span>
<br />
<br />
<input type="image" src="login/images/login-btn.png" width="103" height="42" style="margin-left:90px;" />
</div></form>

</div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div><div class="Footer">
                    <div class="Footer-inner">
                        <a href="#" class="rss-tag-icon" title="RSS"></a>
                        <div class="Footer-text">
                            <p><a href="#">Contact Us</a> | <a href="#">Terms of Use</a> | <a href="#">Trademarks</a>
                                | <a href="#">Privacy Statement</a><br />
                                Copyright &copy; 2011 ---. All Rights Cips.</p>
                        </div>
                    </div>
                    <div class="Footer-background"></div>
                </div>
            </div>
        </div>
        <div class="cleared"></div>
      
    </div>
</body>
</html>
<?php
}
else{
if($aha[hak_akses]=="admin"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=uadmin.php\">";
	}
	else if($aha[hak_akses]=="HRD"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=uhrd.php\">";
	}
	else if($aha[hak_akses]=="mandor"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=umandor.php\">";
	}
	else if($aha[hak_akses]=="keuangan"){
		$_SESSION['nip']=$data['nip'];
		echo "<meta http-equiv=\"refresh\" content=\"0; url=ukeuangan.php\">";
	}
}
?>