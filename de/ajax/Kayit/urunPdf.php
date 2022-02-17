<?php require_once '../../db.php';
include_once('../../../system/mail_server.php');
$id = $_POST["id"];
$username = $_POST["username"];
$email  =$_POST ["mail"];
$companyname =$_POST["companyname"];
$gorevname =$_POST["gorevname"];
$ulkedurumu =$_POST["ulkedurumu"];
$sehirler =$_POST["sehirler"];
$telephone =$_POST["telephone"];
$action = $_POST["action"];
$urunkategori = $_POST["urunkategori"];


if($email !== "" && $username !== "" && $companyname !== "" && $telephone !== "" && $action !== ""){
    $ekle = $db->query("INSERT INTO urunpdf (kullaniciAdi, eposta, firmaAdi, telefon, aksiyon) VALUES ('$username','$email','$companyname','$telephone','$action')");
    $sec = $db->query("SELECT UrunPdf,UrunAdi FROM urunler WHERE ID=$id");
    $row = $sec->fetch();
    $dosya = $row["UrunPdf"];
    $sonuc["ok"]  = $dosya;
    echo json_encode($sonuc); 
    $urunadi = $row["UrunAdi"];


    if( $action == "pdfindirme"){$subject="Pdf İndirme";$icerik="adlı ürünün Broşürünü talep ediyorum.";}
    else if ($action == "tdsindirme"){$subject="Tds İndirme";$icerik="adlı ürünün Teknik Dökümanını talep ediyorum.";}
    else{$subject="Geri Arama";$icerik="adlı ürün için destek istiyorum.";}
    $to ="bilgi@istanbulteknik.com";
    $subject="istanbulteknik.com '$subject' Talebi";
    $message="";


    $date=date("Y/m/d H:i:s");
    $message .= "<html>
    <body>
    <p><b>Ülke Durumu :</b> ".$ulkedurumu."</p>
    <p><b>Şehir :</b> ".$sehirler."</p>
    <p><b>Adı Soyadı :</b> ".$username."</p>
    <p><b>Mail :</b> ".$email."</p>
    <p><b>Telefon :</b> ".$telephone."</p>
    <p><b>Firma Adı :</b> ".$companyname."</p>
    <p><b>Görev :</b> ".$gorevname."</p>
    <p><b>Talep Türü :</b> ".$urunkategori."-".$urunadi." $icerik.</p>
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