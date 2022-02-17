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
		$Resim			= $_POST['Resim'];
		$DilAdi		    = $_POST['DilAdi'];
		$DilSlug        = $_POST['DilSlug'];
        $İsActive       = $_POST['durumu'];
		
		if ($DilAdi == "")
        {
			$Sonuc["hata"]='Lütfen Dil Adı Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
			
		$save = $db->prepare("INSERT INTO languages (icon_path,lname,slug,is_active) VALUES (?,?,?,?)");
		$save->execute(array($Resim,$DilAdi,$DilSlug,$İsActive));
		if ( $save )
		{									   
			$Sonuc["ok"] = 'Başarı ile Güncellenmiştir !' ;
		}
		else
		{									   
			$Sonuc["hata"] = 'Güncelleme İşlemi Başarısız !' ;
		}
	}
	if($islem=="Duzenle")
    {
		$ID				= $_POST['ID'];
		$Resim			= $_POST['Resim'];
		$DilAdi		    = $_POST['DilAdi'];
		$DilSlug        = $_POST['DilSlug'];
        $İsActive       = $_POST['durumu'];
		
		
	
		
		$save = $db->prepare("UPDATE languages SET icon_path=?,lname=?,slug=?, is_active=? WHERE ID=?");
		$save->execute(array($Resim,$DilAdi,$DilSlug,$İsActive,$ID));
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