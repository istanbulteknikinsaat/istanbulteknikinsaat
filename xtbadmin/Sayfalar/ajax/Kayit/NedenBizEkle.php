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
		$Baslik= $_POST['Baslik'];
		$Icerik= $_POST['Icerik'];
			
		if ($Baslik == "")
        {
			$Sonuc["hata"]='Lütfen Başlık Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		$save = $db->prepare("INSERT INTO nedenbiz (Baslik,Icerik,IsActive) VALUES (?,?,?)");
		$save->execute(array($Baslik,$Icerik,1));
		if ( $save )
		{									   
			$Sonuc["ok"] = 'Başarı ile Eklendi !' ;
		}
		else
		{									   
			$Sonuc["hata"] = 'Ekleme İşlemi Başarısız !' ;
		}
	}
	if($islem=="Duzenle")
    {
		$ID		= $_POST['ID'];
		$Baslik = $_POST['Baslik'];
		$Icerik = $_POST['Icerik'];
			
		if ($Baslik == "")
        {
			$Sonuc["hata"]='Lütfen Başlık Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		$save = $db->prepare("UPDATE nedenbiz SET Baslik=?, Icerik=? WHERE IsActive=? AND ID=?");
		$save->execute(array($Baslik,$Icerik,1,$ID));
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