<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sipariş Kabul Formu</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
   
   <body> 
<?php 
error_reporting(0);
if($_POST['satid']){

	require 'class/class.phpmailer.php';

	if ($_POST['satid']<>'' && $_POST['kabul']<>'' && $_POST['stok']<>'' && $_POST['teslimtarih']<>'') {
		
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = "istanbulteknikci@gmail.com";
	$mail->Password = "qwds@345P3sdf";	
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
	$mail->From = "info@istanbulteknik.com";
	$mail->Fromname = $_POST['satid'];
	$mail->AddAddress("ahmetsahin@istanbulteknik.com","deneme");
	$mail->AddReplyTo('replyto@email.com', 'Reply to name');
	$mail->Subject = $_POST['satid'] . "Sipariş Kabul Formu";
	$mail->Body = "<html>
		<head>
		  <title>İstanbulTeknik.com Web Sitesinden mesaj var</title>
		</head>
		<body>
		  <p><b>Mesajı Gönderen:</b> ".$_POST['satid']."</p>
		  <p><b>Firma:</b> ".$_POST['kabul']."</p>
		  <p><b>Görev:</b> ".$_POST['stok']."</p>
		  <p><b>Telefon :</b> ".$_POST['teslimtarih']."</p>
		</body>
		</html>";

	if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj başarıyla gönderildi.</b></font>';
	} else {
		 echo '<font color="#F62217"><b>Tüm alanların doldurulması zorunludur.</b></font>';
		}
	}
	else{
		 echo "<h2>Bu sayfaya doğrudan erişilemez.!!</h2>";

	}
?>

   </body>
</html>