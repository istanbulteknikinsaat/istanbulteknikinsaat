<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';
require_once '../../../../system/fonksiyon.php';

if($_POST){
	$islem		=$_POST['islem'];
	$Sonuc=[];
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
	if($islem=="Kayit")
    {
		$Tel= $_POST['Tel'];
		$Mail= $_POST['Mail'];
		$Adres= $_POST['Adres'];
			
		if ($Tel == "")
        {
			$Sonuc["hata"]='Lütfen Telefon Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		if ($Adres == "")
        {
			$Sonuc["hata"]='Lütfen Adres Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		$save = $db->prepare("UPDATE firmabilgileri SET Tel=?,Mail=?,Adres=? LIMIT 1");
		$save->execute(array($Tel,$Mail,$Adres));
		if ( $save )
		{									   
			$Sonuc["ok"] = 'Başarı ile Güncellenmiştir !' ;
		}
		else
		{									   
			$Sonuc["hata"] = 'Güncelleme İşlemi Başarısız !' ;
		}
	}
}
	echo json_encode($Sonuc);
	}
}
 ?>