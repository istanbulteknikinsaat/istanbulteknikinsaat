<?php require_once '../../db.php';
include_once('../../../system/mail_server.php');
$id = $_POST["id"];
$username = $_POST["username"];
$email  =$_POST ["mail"];
$companyname =$_POST["companyname"];
$gorevname =$_POST["gorevname"];
$telephone =$_POST["telephone"];
$action = $_POST["action"];

if($email !== "" && $username !== ""  && $telephone !== "" && $action !== ""){
    $ekle = $db->query("INSERT INTO urunpdf (kullaniciAdi, eposta, firmaAdi,gorev, telefon, aksiyon) VALUES ('$username','$email','$companyname','$gorev','$telephone','$action')");
    $sec = $db->query("SELECT UrunTipiAdi FROM urunuygulamalari WHERE ID=$id");
    $row = $sec->fetch();
    $urunadi = $row["UrunTipiAdi"];

    if( $action == "pdfindirme"){$subject="Pdf İndirme";$icerik="adlı ürünün Broşürünü talep ediyorum.";}
    else if ($action == "tdsindirme"){$subject="Tds İndirme";$icerik="adlı ürünün Teknik Dökümanını talep ediyorum.";}
    else{$subject="Geri Arama";$icerik="Uygulaması için destek istiyorum.";}
    $to ="bilgi@istanbulteknik.com";
    $subject="istanbulteknik.com '$subject' Talebi";
    $message="";


    $date=date("Y/m/d H:i:s");
    $message .= "<html>
    <body>
    <p><b>Adı Soyadı :</b> ".$username."</p>
    <p><b>Mail :</b> ".$email."</p>
    <p><b>Telefon :</b> ".$telephone."</p>
    <p><b>Firma Adı :</b> ".$companyname."</p>
    <p><b>Görev :</b> ".$gorevname."</p>
    <p><b>Talep Türü :</b> ".$urunadi." $icerik.</p>
    </body>
    </html>";

    $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";
    $headers .= "Reply-To: Auto generated mail. Please not replay.\r\n";
    $messages = $message;
    $mailsend = new EmailSender($to, "", $messages, $subject);
    $company = $mailsend->sendnow();
    //print_r($company); ;
    if(isset($company)) {
        date_default_timezone_set('Etc/GMT-3');//Türkiye saatine göre ayarlandı.
        $zaman = date('Y-m-d H:i:s',time());
        //$mysqli = new mysqli("localhost","root","","istanbulteknik");
        //$contact=$mysqli->query("INSERT INTO satistalepform (satisid,kabul,stok,tarih,notlar) VALUES('$satisid','$kabul','$stok','$tarih','$notlar')");
            
    }
    
} else {
    echo '<script language="javascript">';
    echo 'alert("Bir şeyler ters gitti.");';
    echo 'window.location.replace(document.referrer);';
    echo '</script>';
}


        
  
?>