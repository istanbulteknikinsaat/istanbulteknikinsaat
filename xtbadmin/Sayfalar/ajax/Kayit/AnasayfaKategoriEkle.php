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
		$KategoriAdi		= $_POST['KategoriAdi'];
		$SayfaResim		= $_POST['SayfaResim'];
		$lang		= $_POST['lang'];	
		$IsActive		= $_POST['IsActive'];	

		$save = $db->prepare("INSERT INTO anasayfakategori (KategoriAdi,SayfaResim,lang,IsActive) VALUES (?,?,?,?)");
		$save->execute(array($KategoriAdi,$SayfaResim,$lang,$IsActive));
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
			$KategoriAdi		= $_POST['KategoriAdi'];
			$SayfaResim		= $_POST['SayfaResim'];
			$lang		= $_POST['lang'];	
			$IsActive		= $_POST['IsActive'];
			
			$save = $db->query("UPDATE anasayfakategori SET KategoriAdi='$KategoriAdi',SayfaResim='$SayfaResim',lang='$lang',IsActive='$IsActive'
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