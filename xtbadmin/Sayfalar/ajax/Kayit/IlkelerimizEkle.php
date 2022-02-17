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
		$SayfaIlkeBaslik= $_POST['SayfaIlkeBaslik'];
		$SayfaIlkeAciklama= $_POST['SayfaIlkeAciklama'];
		$lang= $_POST['lang'];
		$IsActive = $_POST['IsActive'];
		if ($SayfaIlkeBaslik == "")
        {
			$Sonuc["hata"]='Lütfen İlke Açıklamasını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }						
			
		$save = $db->prepare("INSERT INTO pageilkelerimiz (SayfaIlkeBaslik, SayfaIlkeAciklama,lang,IsActive) VALUES (?,?,?,?)");
		$save->execute(array($SayfaIlkeBaslik,$SayfaIlkeAciklama,$lang,$IsActive));
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
		$SayfaIlkeBaslik= $_POST['SayfaIlkeBaslik'];
		$SayfaIlkeAciklama= $_POST['SayfaIlkeAciklama'];
		$lang= $_POST['lang'];
		$IsActive= $_POST['IsActive'];
		if ($SayfaIlkeBaslik == "")
        {
			$Sonuc["hata"]='Lütfen İlke Açıklamasını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE pageilkelerimiz SET SayfaIlkeBaslik=?,SayfaIlkeAciklama=?,IsActive=?,lang=? WHERE ID=?");
		$save->execute(array($SayfaIlkeBaslik,$SayfaIlkeAciklama,$IsActive,$lang,$ID));
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