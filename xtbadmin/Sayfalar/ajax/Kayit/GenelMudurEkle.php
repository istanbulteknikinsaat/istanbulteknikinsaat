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
		$SayfaAdi		= $_POST['SayfaAdi'];
		$SayfaBaslik		= $_POST['SayfaBaslik'];
		$SayfaAciklama		= $_POST['SayfaAciklama'];
		$SayfaResim		= $_POST['SayfaResim'];
		$SayfaAlt		= $_POST['SayfaAlt'];
		$lang		= $_POST['lang'];	
		if ($SayfaBaslik == "")
        {
			$Sonuc["hata"]='Lütfen Sayfa Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }						
			
		$save = $db->prepare("INSERT INTO pagegenelmudur (SayfaBaslik, SayfaAdi,SayfaAciklama,SayfaResim,SayfaAlt,lang,IsActive) VALUES (?,?,?,?,?,?,?)");
		$save->execute(array($SayfaBaslik,$SayfaAdi,$SayfaAciklama,$SayfaResim,$SayfaAlt,$lang,$IsActive));
		if ( $save )
		{									   
			$Sonuc["ok"] = 'Başarı ile Eklenmiştir !' ;
		}
		else
		{									   
			$Sonuc["hata"] = 'Ekleme İşlemi Başarısız !' ;
		}
	}

	if($islem=="Duzenle")
    {
		$ID = $_POST['ID'];
		$SayfaAdi		= $_POST['SayfaAdi'];
		$SayfaBaslik		= $_POST['SayfaBaslik'];
		$SayfaAciklama		= $_POST['SayfaAciklama'];
		$SayfaResim		= $_POST['SayfaResim'];
		$SayfaAlt		= $_POST['SayfaAlt'];
		$lang		= $_POST['lang'];	
		
		$save = $db->query("UPDATE pagegenelmudur SET SayfaAdi='$SayfaAdi',SayfaBaslik='$SayfaBaslik',SayfaAlt='$SayfaAlt',SayfaAciklama='$SayfaAciklama',SayfaResim='$SayfaResim',SayfaAlt='$SayfaAlt',lang='$lang'
		 WHERE ID=$ID");
		 
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