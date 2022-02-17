<?php
include_once('contact_server.php');
//include_once('baglan.php');
if(!isset($_POST['satid']) || empty($_POST['kabul']) || !isset($_POST['teslimtarih'])) {
    	echo"<script>alert('Lütfen zorunlu alanları doldurunuz.');</script>";
}
else{
	//iconv_set_encoding("internal_encoding", "UTF-8");
	$to ="ahmetsahin@istanbulteknik.com";
	$subject= $_POST['satid'] . " - Sipariş Kabul Formu";
	$message="";
	
	$satisid=$_POST['satid'];
	$tarih=$_POST['teslimtarih'];
	$stok=$_POST['stok'];
	$notlar=$_POST['notlar'];
	$kabul=$_POST['kabul'];

	$date=date("Y/m/d H:i:s");
	$message .= "<html>
	<body>
	<p>".$_POST['satid']." nolu satınalma talebi ayrıntıları aşağıdaki gibidir.</p>

	  <p><b>Kabul Durumu:</b> ".$_POST['kabul']."</p>
	  <p><b>Stok Durumu:</b> ".$_POST['stok']."</p>
	  <p><b>Teslim Tarihi :</b> ".$_POST['teslimtarih']."</p>
	  <p><b>Notlar :</b> ".$_POST['notlar']."</p>
	  <p><b>Onaylama Tarihi :</b> ".$date."</p>
	</body>
	</html>";
	
	$headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";
	$headers .= "Reply-To: Auto generated mail. Please not replay.\r\n";
	$messages = $message;
	$mailsend = new EmailSender($to, "", $messages, $subject);
	$company = $mailsend->sendnow();
	if(isset($company)) {
		date_default_timezone_set('Etc/GMT-3');//Türkiye saatine göre ayarlandı.
        $zaman = date('Y-m-d H:i:s',time());
		$mysqli = new mysqli("localhost","u6769472_istek","nf28Dm25A","u6769472_istanbulteknik");
		$contact=$mysqli->query("INSERT INTO satistalepform (satisid,kabul,stok,tarih,notlar) VALUES('$satisid','$kabul','$stok','$tarih','$notlar')");

        	echo"<script>alert('Mesajınız başarıyla teslim edildi.');</script>";
			echo "<script>window.location='/';</script>";
	}
	else {
        	echo "<script>alert('Lütfen tekrar deneyiniz.');</script>";
	}
}
?>