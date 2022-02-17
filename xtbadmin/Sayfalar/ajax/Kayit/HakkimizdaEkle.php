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
		$Icerik		= $_POST['HakkindaIcerik'];
		$Dil		= $_POST['KurumsalDil'];
		$KurumsalSira		= $_POST['KurumsalSira'];
		if ($Icerik == "" )
        {
			$Sonuc["hata"]='Lütfen İçerik Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
			
		$save = $db->prepare("INSERT INTO kurumsal_yazilar (icerik,dil,siralama) VALUES (?,?,?)");
		$save->execute(array($Icerik,$Dil,$KurumsalSira));
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
		$ID    		= $_POST['ID'];
		$Icerik		= $_POST['HakkindaIcerik'];
		$Dil		= $_POST['KurumsalDil'];
		$KurumsalSira		= $_POST['KurumsalSira'];
		if ($ID == "" )
        {
			$Sonuc["hata"]='Bir sorun olustu...';
			echo json_encode($Sonuc);
			return;	
        }	
		 
		$save = $db->prepare("UPDATE kurumsal_yazilar SET icerik=?,dil=?,siralama=? WHERE id=?");
		$save->execute(array($Icerik,$Dil,$KurumsalSira,$ID));
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