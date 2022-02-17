<?php
include_once('mail_server.php');
include_once('ayar.php');


//echo $_POST['operation'];

    if(!isset($_POST['bname']) || !isset($_POST['bemail']) || !isset($_POST['bmesaj'])) {
            echo"<script>alert('Lütfen gerekli alaları doldurunuz')</script>";
    }
    else{
        //iconv_set_encoding("internal_encoding", "UTF-8");
        $to ="bilgi@istanbulteknik.com";
        $subject="Bize Yazın-Mesaj";
        $message="";
        
        $advesoyad=$_POST['bname'];
        $email=$_POST['bemail'];
        $telefon=$_POST['btelefon'];
        $firma=$_POST['bfirma'];
        $gorev=$_POST['bgorev'];
        $mesaj=$_POST['bmesaj'];

        $date=date("Y/m/d H:i:s");
        $message .= "<html>
        <body>
        <p><b>Adı Soyadı</b> ".$advesoyad."</p>
        <p><b>Firma Adı</b> ".$firma."</p>
        <p><b>Görevi</b> ".$gorev."</p>
        <p><b>Telefon</b> ".$telefon."</p>
        <p><b>E-Mail :</b> ".$email."</p>
        <p><b>Mesaj :</b> ".$mesaj."</p>

        </body>
        </html>";

        $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";
        $headers .= "Reply-To: Auto generated mail. Please not replay.\r\n";
        $messages = $message;
        $mailsend = new EmailSender($to, "", $messages, $subject);
        $company = $mailsend->sendnow();
        //print_r($company); ;
        if(isset($company)) {
            $contact=$db->query("INSERT INTO bizeyazin (advesoyad,firma,gorev,telefon,email,mesaj) VALUES('$advesoyad','$firma','$gorev','$telefon','$email','$mesaj')");
                echo "Mesajınız başarıyla teslim edildi";
        }
        else {
                echo "Başarısız";
        }
    }


?>