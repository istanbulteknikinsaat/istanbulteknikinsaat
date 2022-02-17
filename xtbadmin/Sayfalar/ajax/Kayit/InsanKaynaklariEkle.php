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
		$SayfaBaslik			= $_POST['SayfaBaslik'];
		$SayfaAdi				= $_POST['SayfaAdi'];
		$SayfaAciklama			= $_POST['SayfaAciklama'];
		$SayfaResim1			= $_POST['SayfaResimBayi'];
		$SayfaResim2			= $_POST['SayfaResimDeneyim'];
		$SayfaResim3			= $_POST['SayfaResimSermaye'];
		$lang					= $_POST['lang'];	
		$IsActive				= $_POST['IsActive'];
		if ($SayfaBaslik == "")
        {
			$Sonuc["hata"]='Lütfen Sayfa Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }						
			
		$save = $db->prepare("INSERT INTO pageinsankaynaklari (SayfaBaslik, SayfaAdi,SayfaAciklama,SayfaResim1,SayfaResim2,SayfaResim3,lang,IsActive) VALUES (?,?,?,?,?,?,?,?)");
		$save->execute(array($SayfaBaslik,$SayfaAdi,$SayfaAciklama,$SayfaResim1,$SayfaResim2,$SayfaResim3,$lang,$IsActive));
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
		$SayfaBaslik			= $_POST['SayfaBaslik'];
		$SayfaAdi				= $_POST['SayfaAdi'];
		$SayfaAciklama			= $_POST['SayfaAciklama'];
		$SayfaResim1			= $_POST['SayfaResimBayi'];
		$SayfaResim2			= $_POST['SayfaResimDeneyim'];
		$SayfaResim3			= $_POST['SayfaResimSermaye'];
		$lang					= $_POST['lang'];	
		$IsActive				= $_POST['IsActive'];
	
		$save = $db->query("UPDATE pageinsankaynaklari SET SayfaBaslik='$SayfaBaslik',SayfaAdi='$SayfaAdi',SayfaAciklama='$SayfaAciklama',SayfaResim1='$SayfaResim1',SayfaResim2='$SayfaResim2',SayfaResim3='$SayfaResim3',lang='$lang',IsActive='$IsActive'
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