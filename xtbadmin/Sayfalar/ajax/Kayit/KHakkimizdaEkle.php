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
		$SayfaBaslikAlt		= $_POST['SayfaBaslikAlt'];
		$SayfaAciklama		= $_POST['SayfaAciklama'];
		$SayfaAciklamaAlt		= $_POST['SayfaAciklamaAlt'];
		$SayfaResimBayi		= $_POST['SayfaResimBayi'];
		$SayfaResimDeneyim		= $_POST['SayfaResimDeneyim'];
		$SayfaResimSermaye		= $_POST['SayfaResimSermaye'];
		$SayfaResimİhracat		= $_POST['SayfaResimİhracat'];
		$SayfaResimKıta		= $_POST['SayfaResimKıta'];
		$lang		= $_POST['lang'];	
		
		$save = $db->prepare("INSERT INTO pagehakkimizda (SayfaBaslik,SayfaBaslikAlt,SayfaAdi,SayfaAciklama,SayfaAciklamaAlt,SayfaResimBayi,SayfaResimDeneyim,SayfaResimSermaye,SayfaResimİhracat,SayfaResimKıta,lang,IsActive) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
		$save->execute(array($SayfaBaslik,$SayfaBaslikAlt,$SayfaAdi,$SayfaAciklama,$SayfaAciklamaAlt,$SayfaResimBayi,$SayfaResimDeneyim,$SayfaResimSermaye,$SayfaResimİhracat,$SayfaResimKıta,$lang,$IsActive));
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
				
		
			$save = $db->query("UPDATE pagehakkimizda SET SayfaBaslik='$SayfaBaslik',SayfaBaslikAlt='$SayfaBaslikAlt',SayfaAdi='$SayfaAdi',SayfaAciklama='$SayfaAciklama',SayfaAciklamaAlt='$SayfaAciklamaAlt',SayfaResimBayi='$SayfaResimBayi',SayfaResimDeneyim='$SayfaResimDeneyim',SayfaResimSermaye='$SayfaResimSermaye',SayfaResimİhracat='$SayfaResimİhracat',SayfaResimKıta='$SayfaResimKıta',lang='$lang',IsActive='$IsActive'
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