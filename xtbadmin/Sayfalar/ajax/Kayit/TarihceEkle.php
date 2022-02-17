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
		$SayfaTarihYil= $_POST['SayfaTarihYil'];
		$SayfaTarihBaslik= $_POST['SayfaTarihBaslik'];
		$SayfaTarihAciklama= $_POST['SayfaTarihAciklama'];
		$lang= $_POST['lang'];
		if ($SayfaTarihYil == "")
        {
			$Sonuc["hata"]='Lütfen Tarih Yılını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
			
		$save = $db->prepare("INSERT INTO pagetarihce (SayfaTarihYil, SayfaTarihBaslik,SayfaTarihAciklama,lang) VALUES (?,?,?,?)");
		$save->execute(array($SayfaTarihYil,$SayfaTarihBaslik,$SayfaTarihAciklama,$lang));
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
		$SayfaTarihYil= $_POST['SayfaTarihYil'];
		$SayfaTarihBaslik= $_POST['SayfaTarihBaslik'];
		$SayfaTarihAciklama= $_POST['SayfaTarihAciklama'];
		$lang= $_POST['lang'];
		if ($SayfaTarihYil == "")
        {
			$Sonuc["hata"]='Lütfen Tarih Yılını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE pagetarihce SET SayfaTarihYil=?,SayfaTarihBaslik=?,SayfaTarihAciklama=?,lang=? WHERE ID=?");
		$save->execute(array($SayfaTarihYil,$SayfaTarihBaslik,$SayfaTarihAciklama,$lang,$ID));
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