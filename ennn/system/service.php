<?php
error_reporting(E_ALL);
header('Content-type: application/json');
date_default_timezone_set('Europe/Istanbul');
require 'PHPMailerAutoload.php';


if(isset($_POST['email']) && isset($_POST['operation'])) { 
	    $operation = secureCheck($_POST['operation']);
   
         if($operation == 'mailgonder') {

	         	    if(isset($_POST['email']) && isset($_POST['mesaj'])) { 

					        $advesoyad =  secureCheck($_POST['advesoyad']); 
					        $firma =  secureCheck($_POST['firma']); 
					        $gorev = secureCheck($_POST['gorev']); 
					        $telefon = secureCheck($_POST['telefon']); 
					        $email = secureCheck($_POST['email']); 
					        $konu = secureCheck($_POST['konu']); 
					        $mesaj = secureCheck($_POST['mesaj']); 
					  
		                    if (mailGonder($advesoyad,$firma,$gorev,$telefon,$email,$konu,$mesaj)) {
		                        $dizi = array('jStatus' => true, 'jMessage' => 'mail ok.' );
		                    }else{
		                        $dizi = array('jStatus' => false, 'jMessage' => 'mail error.');
		                    }
		                    echo json_encode($dizi);  
	                 } 
         }else if($operation == 'bayibasvurusu') {
         	        if(isset($_POST['email']) && isset($_POST['firmaadi'])) { 
				            $firmaadi =  secureCheck($_POST['firmaadi']); 
				            $yetkilikisiadivegorevi =  secureCheck($_POST['yetkilikisiadivegorevi']); 
					        $firmaadresi =  secureCheck($_POST['firmaadresi']); 
					        $telefon = secureCheck($_POST['telefon']); 
					        $fax = secureCheck($_POST['fax']); 
					        $ceptelefonu = secureCheck($_POST['ceptelefonu']); 
					        $email = secureCheck($_POST['email']); 
					        $firmawebsiteadresi = secureCheck($_POST['firmawebsiteadresi']); 
					        $vergidairesino = secureCheck($_POST['vergidairesino']); 
					        $ticsicno = secureCheck($_POST['ticsicno']); 
					        $oncekiyilcirosu = secureCheck($_POST['oncekiyilcirosu']); 
					        $toplampersonalsayisi = secureCheck($_POST['toplampersonalsayisi']); 
					        $aktifolaraksatisyapilaniller = secureCheck($_POST['aktifolaraksatisyapilaniller']); 
					        $bayiliginiyapmaktaoldugunuzdigermarkalar = secureCheck($_POST['bayiliginiyapmaktaoldugunuzdigermarkalar']); 

	                    if (bayiBasvurusu($firmaadi, $yetkilikisiadivegorevi, $firmaadresi, $telefon, $fax, $ceptelefonu, $email, $firmawebsiteadresi, $vergidairesino, $ticsicno, $oncekiyilcirosu, $toplampersonalsayisi, $aktifolaraksatisyapilaniller, $bayiliginiyapmaktaoldugunuzdigermarkalar)) {
	                        $dizi = array('jStatus' => true, 'jMessage' => 'question ok.' );
	                    }else{
	                        $dizi = array('jStatus' => false, 'jMessage' => 'question error.');
	                    }
	                    echo json_encode($dizi); 
         	        }
              }else if($operation == 'musteri') {
         	        if(isset($_POST['email'])) { 

				            $firmaadi =  secureCheck($_POST['firmaadi']); 
				            $yetkilikisiadivegorevi =  secureCheck($_POST['yetkilikisiadivegorevi']); 
					        $memnuniyetsikayetkonusu = secureCheck($_POST['memnuniyetsikayetkonusu']); 
					        $memnuniyetveyasikayet = secureCheck($_POST['memnuniyetveyasikayet']); 
					        $email = secureCheck($_POST['email']); 
					        $telefon = secureCheck($_POST['telefon']); 




	                    if (musteri($firmaadi, $yetkilikisiadivegorevi, $memnuniyetsikayetkonusu, $memnuniyetveyasikayet, $email, $telefon)) {
	                        $dizi = array('jStatus' => true, 'jMessage' => 'question ok.' );
	                    }else{
	                        $dizi = array('jStatus' => false, 'jMessage' => 'question error.');
	                    }
	                    echo json_encode($dizi); 
         	        }
         }



}


function mailGonder($advesoyad,$firma,$gorev,$telefon,$email,$konu,$mesaj) {


    	 $random = randomRef(4);
		 $randomId = 'MSG: '.$random.']';

		// $headers = 'MIME-Version: 1.0' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		// $headers .= 'Content-Language: tr' . "\r\n";
		// $headers .= 'To: ??stanbul Teknik <mail@fatihsevinc.com>' . "\r\n";
		// $headers .= 'From: '.$advesoyad.'<'.$email.'>' . "\r\n";
		// // multiple recipients
		// $to  = 'mail@fatihsevinc.com' . ', '; // note the comma
	
		// $subject =  '['.$randomId.' - IstanbulTeknik.com Web Sitesinden mesaj var!!';

		// // message
		// $message = '
		// <html>
		// <head>
		//   <title>??stanbulTeknik.com Web Sitesinden mesaj var</title>
		// </head>
		// <body>
		//   <p><b>Mesaj?? G??nderen:</b> '.$advesoyad.'</p>
		//   <p><b>Firma:</b> '.$firma.'</p>
		//   <p><b>G??rev:</b> '.$gorev.'</p>
		//   <p><b>Telefon :</b> '.$telefon.'</p>
		//   <p><b>E-mail :</b> '.$email.'</p>
		//   <p><b>Konu :</b> '.$konu.'</p>
		//   <p><b>Mesaj :</b> '.$mesaj.'</p>
		//   <p>'.$mesaj.'</p>
		// </body>
		// </html>
		// ';
		// $result = mail($to, $subject, $message, $headers);
		// if(!$result) {   
		//    	$answer = false;  
		// } else {
		//     	$answer = true;
		// }
  //       return $answer;



	$mail = new PHPMailer;

	$mail->Debugoutput = 'html';
    $mail->SMTPDebug = 0;  
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'istanbulteknikci@gmail.com';
    $mail->Password = 'qwds@345P3sdf';
    $mail->setFrom($email, $advesoyad);
    //Set the subject line
    $mail->AddAddress($email, $advesoyad);
    $mail->addReplyTo($email, $advesoyad);  //Set an alternative reply-to address
    $mail->addBCC('info@istanbulteknik.com');
    $mail->CharSet = 'UTF-8';
    $mail->Subject = '['.$randomId.' - IstanbulTeknik.com Web Sitesinden mesaj var!';
    $content = '
		<html>
		<head>
		  <title>??stanbulTeknik.com Web Sitesinden mesaj var</title>
		</head>
		<body>
		  <p><b>Mesaj?? G??nderen:</b> '.$advesoyad.'</p>
		  <p><b>Firma:</b> '.$firma.'</p>
		  <p><b>G??rev:</b> '.$gorev.'</p>
		  <p><b>Telefon :</b> '.$telefon.'</p>
		  <p><b>E-mail :</b> '.$email.'</p>
		  <p><b>Konu :</b> '.$konu.'</p>
		  <p><b>Mesaj :</p>
		  <p>'.$mesaj.'</p>
		</body>
		</html>
		';


    $mail->MsgHTML($content);
    if($mail->Send()) {
        $answer = true;
    } else {
       $answer = false;
       var_dump($mail->ErrorInfo);
    }
    return $answer;
}

function musteri($firmaadi, $yetkilikisiadivegorevi, $memnuniyetsikayetkonusu, $memnuniyetveyasikayet, $email, $telefon) {

		 $random = randomRef(4);
		 $randomId = '[MU: '.$random.']';

		// $headers = 'MIME-Version: 1.0' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		// $headers .= 'Content-Language: tr' . "\r\n";
		// $headers .= 'To: ??stanbul Teknik <mail@fatihsevinc.com>' . "\r\n";
		// $headers .= 'From: '.$yetkilikisiadivegorevi.'<'.$email.'>' . "\r\n";
		// // multiple recipients
		// $to  = 'mail@fatihsevinc.com' . ', '; // note the comma
		// $subject =  '['.$randomId.' - IstanbulTeknik.com web sitenizden bir bayi ba??vurusu yap??ld??.!';
		// // message
		// $message = '
		// <html>
		// <head>
		//   <title>IstanbulTeknik.com web sitenizden bir bayi ba??vurusu yap??ld??.</title>
		// </head>
		// <body>
			 // <p><b>Firma Ad??:</b> '.$firmaadi.'</p>
			 // <p><b>Yetkilikisiadivegorevi:</b> '.$yetkilikisiadivegorevi.'</p>
			 // <p><b>Email:</b> '.$email.'</p>
			 // <p><b>Telefon:</b> '.$telefon.'</p>
			 // <p><b>Memnuniyet/??ikayet Konusu:</b> '.$memnuniyetsikayetkonusu.'</p>
			 // <p><b>Memnuniyetiniz/??ikayetiniz:</b> '.$memnuniyetveyasikayet.'</p>
		// </body>
		// </html>
		// ';
		// $result = mail($to, $subject, $message, $headers);
		// if(!$result) {   
		//    	$answer = false;  
		// } else {
		//     	$answer = true;
		// }
  //       return $answer;
   

	$mail = new PHPMailer;

	$mail->Debugoutput = 'html';
    $mail->SMTPDebug = 0;  
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'istanbulteknikci@gmail.com';
    $mail->Password = 'qwds@345P3sdf';
    $mail->setFrom($email, $firmaadi);
    //Set the subject line

    $mail->AddAddress($email, $firmaadi);
    $mail->addReplyTo($email, $firmaadi);  //Set an alternative reply-to address
    $mail->addBCC('info@istanbulteknik.com');
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Memnuniyet/??ikayet '.$randomId.' - IstanbulTeknik.com web sitenizden bir memnuniyet/??ikayet mesaj?? g??nderildi.';
    $content = '
		<html>
		<head>
		  <title>Memnuniyet/??ikayet '.$randomId.' - IstanbulTeknik.com web sitenizden bir memnuniyet/??ikayet mesaj?? g??nderildi.</title>
		</head>
		<body>
			 <p><b>Firma Ad??:</b> '.$firmaadi.'</p>
			 <p><b>Yetkilikisiadivegorevi:</b> '.$yetkilikisiadivegorevi.'</p>
			 <p><b>Email:</b> '.$email.'</p>
			 <p><b>Telefon:</b> '.$telefon.'</p>
			 <p><b>Memnuniyet/??ikayet Konusu:</b> '.$memnuniyetsikayetkonusu.'</p>
			 <p><b>Memnuniyetiniz/??ikayetiniz:</b> '.$memnuniyetveyasikayet.'</p>

		</body>
		</html>
		';


    $mail->MsgHTML($content);
    if($mail->Send()) {
        $answer = true;
    } else {
       $answer = false;
       var_dump($mail->ErrorInfo);
    }
    return $answer;



       
}


function bayiBasvurusu($firmaadi, $yetkilikisiadivegorevi, $firmaadresi, $telefon, $fax, $ceptelefonu, $email, $firmawebsiteadresi, $vergidairesino, $ticsicno, $oncekiyilcirosu, $toplampersonalsayisi, $aktifolaraksatisyapilaniller, $bayiliginiyapmaktaoldugunuzdigermarkalar) {

		 $random = randomRef(4);
		 $randomId = 'REF: '.$random.']';

		// $headers = 'MIME-Version: 1.0' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		// $headers .= 'Content-Language: tr' . "\r\n";
		// $headers .= 'To: ??stanbul Teknik <mail@fatihsevinc.com>' . "\r\n";
		// $headers .= 'From: '.$yetkilikisiadivegorevi.'<'.$email.'>' . "\r\n";
		// // multiple recipients
		// $to  = 'mail@fatihsevinc.com' . ', '; // note the comma
		// $subject =  '['.$randomId.' - IstanbulTeknik.com web sitenizden bir bayi ba??vurusu yap??ld??.!';
		// // message
		// $message = '
		// <html>
		// <head>
		//   <title>IstanbulTeknik.com web sitenizden bir bayi ba??vurusu yap??ld??.</title>
		// </head>
		// <body>
		// 	 <p><b>Firma Ad??:</b> '.$firmaadi.'</p>
		// 	 <p><b>yetkilikisiadivegorevi:</b> '.$yetkilikisiadivegorevi.'</p>
		// 	 <p><b>firmaadresi:</b> '.$firmaadresi.'</p>
		// 	 <p><b>telefon:</b> '.$telefon.'</p>
		//  	 <p><b>fax:</b> '.$fax.'</p>
		// 	 <p><b>ceptelefonu:</b> '.$ceptelefonu.'</p>
		// 	 <p><b>email:</b> '.$email.'</p>
		// 	 <p><b>firmawebsiteadresi:</b> '.$firmawebsiteadresi.'</p>
		// 	 <p><b>vergidairesino:</b> '.$vergidairesino.'</p>
		// 	 <p><b>ticsicno:</b> '.$ticsicno.'</p>
		// 	 <p><b>oncekiyilcirosu:</b> '.$oncekiyilcirosu.'</p>
		// 	 <p><b>toplampersonalsayisi:</b> '.$toplampersonalsayisi.'</p>
		// 	 <p><b>aktifolaraksatisyapilaniller:</b> '.$aktifolaraksatisyapilaniller.'</p>
		// 	 <p><b>bayiliginiyapmaktaoldugunuzdigermarkalar:</b> '.$bayiliginiyapmaktaoldugunuzdigermarkalar.'</p>
		// </body>
		// </html>
		// ';
		// $result = mail($to, $subject, $message, $headers);
		// if(!$result) {   
		//    	$answer = false;  
		// } else {
		//     	$answer = true;
		// }
  //       return $answer;
   

	$mail = new PHPMailer;

	$mail->Debugoutput = 'html';
    $mail->SMTPDebug = 0;  
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'istanbulteknikci@gmail.com';
    $mail->Password = 'qwds@345P3sdf';
    $mail->setFrom($email, $firmaadi);
    //Set the subject line

    $mail->AddAddress($email, $firmaadi);
    $mail->addReplyTo($email, $firmaadi);  //Set an alternative reply-to address
   $mail->addBCC('info@istanbulteknik.com');
    $mail->CharSet = 'UTF-8';
    $mail->Subject = '[BAYIBASVURUSU'.$randomId.' - IstanbulTeknik.com web sitenizden bir bayi ba??vurusu yap??ld??!';
    $content = '
		<html>
		<head>
		  <title>IstanbulTeknik.com web sitenizden bir bayi ba??vurusu yap??ld??.</title>
		</head>
		<body>
			 <p><b>Firma Ad??:</b> '.$firmaadi.'</p>
			 <p><b>Yetkili Ki??i Adi ve G??revi:</b> '.$yetkilikisiadivegorevi.'</p>
			 <p><b>Firma Adresi:</b> '.$firmaadresi.'</p>
			 <p><b>Telefon:</b> '.$telefon.'</p>
		 	 <p><b>Fax:</b> '.$fax.'</p>
			 <p><b>Cep Telefonu:</b> '.$ceptelefonu.'</p>
			 <p><b>Email:</b> '.$email.'</p>
			 <p><b>Firma Website Adresi:</b> '.$firmawebsiteadresi.'</p>
			 <p><b>Vergi Dairesi No:</b> '.$vergidairesino.'</p>
			 <p><b>Tic.Sic.No:</b> '.$ticsicno.'</p>
			 <p><b>??nceki Y??l Cirosu:</b> '.$oncekiyilcirosu.'</p>
			 <p><b>Toplam Personal Say??s??:</b> '.$toplampersonalsayisi.'</p>
			 <p><b>Aktif Olarak Sat???? Yapilan ??ller:</b> '.$aktifolaraksatisyapilaniller.'</p>
			 <p><b>Bayiligini Yapmakta Oldu??unuz Di??er Markalar:</b> '.$bayiliginiyapmaktaoldugunuzdigermarkalar.'</p>
		</body>
		</html>
		';


     $mail->MsgHTML($content);
    if($mail->Send()) {
        $answer = true;
    } else {
       $answer = false;
       var_dump($mail->ErrorInfo);
    }
    return $answer;


       
}


function secureCheck($inValue) {
    // $inValue = trim($inValue); // sa????ndaki solundaki bo??luk i??in
  // $inValue = strip_tags($inValue); // Html taglar?? temizlemek i??in
  // $inValue = htmlentities($inValue, ENT_QUOTES, 'UTF-8'); 
   // $inValue = htmlspecialchars($inValue); // /Html etiketlerini zarars??z hale getirir

    //$inValue = addslashes($inValue);  // T??rnaklar i??in
   // $inValue = mysql_real_escape_string($inValue);  // mysql injection check
    return $inValue;
}
function randomRef($length) {
    $str ='';
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";  
    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ ) {
        $str .= $chars[ rand( 0, $size - 1 ) ];
    }
    return $str;
}




 ?>