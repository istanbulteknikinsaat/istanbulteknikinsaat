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
		$SayfaAdi= $_POST['SayfaAdi'];
		$SayfaBaslik= $_POST['SayfaBaslik'];
		$SayfaAciklama= $_POST['SayfaAciklama'];
		$lang= $_POST['lang'];
		$IsActive = $_POST['IsActive'];
		if ($SayfaBaslik == "")
        {
			$Sonuc["hata"]='Lütfen Açıklama Bölümünü Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }						
			
		$save = $db->prepare("INSERT INTO pageyasaluyari (SayfaAdi,SayfaBaslik, SayfaAciklama,lang,IsActive) VALUES (?,?,?,?,?)");
		$save->execute(array($SayfaAdi,$SayfaBaslik,$SayfaAciklama,$lang,$IsActive));
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
		$SayfaAdi= $_POST['SayfaAdi'];
		$SayfaBaslik= $_POST['SayfaBaslik'];
		$SayfaAciklama= $_POST['SayfaAciklama'];
		$lang= $_POST['lang'];
		$IsActive= $_POST['IsActive'];
		if ($SayfaAdi == "")
        {
			$Sonuc["hata"]='Lütfen Başlık Bölümünü Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE pageyasaluyari SET SayfaAdi=?,SayfaBaslik=?,SayfaAciklama=?,IsActive=?,lang=? WHERE ID=?");
		$save->execute(array($SayfaAdi,$SayfaBaslik,$SayfaAciklama,$IsActive,$lang,$ID));
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