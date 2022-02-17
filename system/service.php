<?php
include_once('mail_server.php');
include_once('ayar.php');
//include_once('baglan.php');
//echo $_POST['operation'];
if($_POST['operation'] =='mailgonder'){
    if(!isset($_POST['advesoyad']) || empty($_POST['firma']) || !isset($_POST['gorev']) || !isset($_POST['telefon']) || !isset($_POST['email']) || !isset($_POST['konu']) || !isset($_POST['mesaj'])) {
            echo"<script>alert('Lütfen zorunlu alanları doldurunuz.');</script>";
    }
    else{
        //iconv_set_encoding("internal_encoding", "UTF-8");
        $to ="ilkerak@istanbulteknik.com";
        $subject= $_POST['konu'] . " - İletişim Formu";
        $message="";

        $aksiyon =$_POST['operation'];
        $advesoyad=$_POST['advesoyad'];
        $firma=$_POST['firma'];
        $gorev=$_POST['gorev'];
        $telefon=$_POST['telefon'];
        $email=$_POST['email'];
        $mesaj=$_POST['mesaj'];

        $date=date("Y/m/d H:i:s");
        $message .= "<html>
        <body>
        <p><b>Adı Soyadı: </b> ".$advesoyad."</p>
        <p><b>Firma Adı:</b> ".$firma."</p>
        <p><b>Görevi :</b> ".$gorev."</p>
        <p><b>Telefon :</b> ".$telefon."</p>
        <p><b>Mail :</b> ".$email."</p>
        <p><b>Mesaj :</b> ".$mesaj."</p>
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
            $contact=$db->query("INSERT INTO iletisimform (advesoyad,firma,gorev,telefon,email,mesaj,konu,aksiyon) VALUES('$advesoyad','$firma','$gorev','$telefon','$email','$mesaj','$subject','$aksiyon')");
            echo "Mesajınız başarıyla teslim edildi";
        }
        else {
            echo "Lütfen tekrar deneyiniz";
        }
    }
}
else if($_POST['operation'] =='bayibasvurusu'){
    if(!isset($_POST['firmaadi']) || empty($_POST['yetkilikisiadivegorevi']) || !isset($_POST['firmaadresi']) || !isset($_POST['ceptelefonu']) || !isset($_POST['email']) || !isset($_POST['firmawebsiteadresi']) || !isset($_POST['vergidairesino']) || !isset($_POST['ticsicno']) || !isset($_POST['oncekiyilcirosu']) || !isset($_POST['toplampersonalsayisi']) || !isset($_POST['aktifolaraksatisyapilaniller']) || !isset($_POST['bayiliginiyapmaktaoldugunuzdigermarkalar'])) {
        echo"<script>alert('Lütfen zorunlu alanları doldurunuz.');</script>";
    }
    else{
        //iconv_set_encoding("internal_encoding", "UTF-8");
        $to ="ilkerak@istanbulteknik.com";
        $subject= $_POST['firmaadi'] . " - Bayi Başvurusu ";
        $message="";

        $aksiyon =$_POST['operation'];
        $firmaadi = $_POST['firmaadi'];
        $yetkilikisiadivegorevi = $_POST['yetkilikisiadivegorevi'];
        $firmaadresi = $_POST['firmaadresi'];
        $fax = $_POST['fax'];
        $telefon = $_POST['telefon'];
        $ceptelefonu = $_POST['ceptelefonu'];
        $email = $_POST['email'];
        $firmawebsiteadresi = $_POST['firmawebsiteadresi'];
        $vergidairesino = $_POST['vergidairesino'];
        $ticsicno = $_POST['ticsicno'];
        $oncekiyilcirosu = $_POST['oncekiyilcirosu'];
        $toplampersonalsayisi = $_POST['toplampersonalsayisi'];
        $aktifolaraksatisyapilaniller = $_POST['aktifolaraksatisyapilaniller'];
        $bayiliginiyapmaktaoldugunuzdigermarkalar = $_POST['bayiliginiyapmaktaoldugunuzdigermarkalar'];

        $date=date("Y/m/d H:i:s");
        $message .= "<html>
        <body>
        <p><b>Firma Adı:</b> ".$firmaadi."</p>
        <p><b>Yetkili Kişi Adı ve Görevi:</b> ".$yetkilikisiadivegorevi."</p>
        <p><b>Firma Adresi :</b> ".$firmaadresi."</p>
        <p><b>Fax :</b> ".$fax."</p>
        <p><b>Telefon :</b> ".$telefon."</p>
        <p><b>Cep Telefonu :</b> ".$ceptelefonu."</p>
        <p><b>Email :</b> ".$email."</p>
        <p><b>Firma Web Site Adresi :</b> ".$firmawebsiteadresi."</p>
        <p><b>Vergi Dairesi No :</b> ".$vergidairesino."</p>
        <p><b>Ticaret Sicil No :</b> ".$ticsicno."</p>
        <p><b>Önceki Yıl Cirosu :</b> ".$oncekiyilcirosu."</p>
        <p><b>Toplam Personel Sayisi :</b> ".$toplampersonalsayisi."</p>
        <p><b>Aktif Olarak Satış Ypaılan İller :</b> ".$aktifolaraksatisyapilaniller."</p>
        <p><b>Bayilik Yapmış Olduğu Diğer Markalar :</b> ".$bayiliginiyapmaktaoldugunuzdigermarkalar."</p>

        </body>
        </html>";

        $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";
        $headers .= "Reply-To: Auto generated mail. Please not replay.\r\n";
        $messages = $message;
        $mailsend = new EmailSender($to, "", $messages, $subject);
        $company = $mailsend->sendnow();
        if(isset($company)) {
            $contact=$db->query("INSERT INTO iletisimform (firma,yetkilikisiadivegorevi,firmaadresi,telefon,fax,ceptelefonu,email,firmawebsiteadresi,vergidairesino,ticsicno,oncekiyilcirosu,toplampersonalsayisi,aktifolaraksatisyapilaniller,bayiliginiyapmaktaoldugunuzdigermarkalar,konu,aksiyon) VALUES('$firmaadi','$yetkilikisiadivegorevi','$firmaadresi','$telefon','$fax','$ceptelefonu','$email','$firmawebsiteadresi','$vergidairesino','$ticsicno','$oncekiyilcirosu','$toplampersonalsayisi','$aktifolaraksatisyapilaniller','$bayiliginiyapmaktaoldugunuzdigermarkalar','$subject','$aksiyon')");
                echo"<script>alert('Bayilik Formu Mesajınız başarıyla teslim edildi.');</script>";
        }
        else {
                echo "<script>alert('Lütfen tekrar deneyiniz.');</script>";
        }
    }
}
else if($_POST['operation'] =='musteri'){
    if(!isset($_POST['firmaadi']) || empty($_POST['yetkilikisiadivegorevi']) || !isset($_POST['memnuniyetsikayetkonusu']) || !isset($_POST['memnuniyetveyasikayet']) || !isset($_POST['email']) || !isset($_POST['telefon'])) {
        echo"<script>alert('Lütfen zorunlu alanları doldurunuz.');</script>";
    }
    else{
        //iconv_set_encoding("internal_encoding", "UTF-8");
        $to ="ilkerak@istanbulteknik.com";
        $subject= $_POST['firmaadi'] . " - Memnuniyet Şikayet Formu";
        $message="";

        $aksiyon =$_POST['operation'];
        $firmaadi = $_POST['firmaadi'];
        $yetkilikisiadivegorevi = $_POST['yetkilikisiadivegorevi'];
        $memnuniyetsikayetkonusu = $_POST['memnuniyetsikayetkonusu'];
        $memnuniyetveyasikayet = $_POST['memnuniyetveyasikayet'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];

        $date=date("Y/m/d H:i:s");
        $message .= "<html>
        <body>
        <p><b>Firma Adı</b> ".$firmaadi."</p>
        <p><b>Yetkili Kişi Adı ve Görevi:</b> ".$yetkilikisiadivegorevi."</p>
        <p><b>Mail :</b> ".$email."</p>
        <p><b>Telefon :</b> ".$telefon."</p>
        <p><b>Memnuniyet/Şikayet Konusu :</b> ".$memnuniyetsikayetkonusu."</p>
        <p><b>Memnuniyet/Şikayeti :</b> ".$memnuniyetveyasikayet."</p>
      
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
            $contact=$db->query("INSERT INTO iletisimform (firma,yetkilikisiadivegorevi,email,telefon,memnuniyetsikayetkonusu,mesaj,konu,aksiyon) VALUES('$firmaadi','$yetkilikisiadivegorevi','$email','$telefon','$memnuniyetsikayetkonusu','$memnuniyetveyasikayet','$subject','$aksiyon')");
                echo"<script>alert('Memnuniyet Formu Mesajınız başarıyla teslim edildi.');</script>";
        }
        else {
             echo "<script>alert('Lütfen tekrar deneyiniz.');</script>";
        }
    }
}
        

?>