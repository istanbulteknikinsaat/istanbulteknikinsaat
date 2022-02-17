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
		$SliderAdi			= $_POST['SliderAdi'];
		$SliderPath		= $_POST['Resim'];
		$IsActive= $_POST['IsActive'];
		$lang= $_POST['lang'];

		if ($SliderPath == "")
        {
			$Sonuc["hata"]='Lütfen Resim Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
			
		$save = $db->prepare("INSERT INTO sliders (SliderAdi,SliderPath,IsActive,lang) VALUES (?,?,?,?)");
		$save->execute(array($SliderAdi,$SliderPath,$IsActive,$lang));
		if ( $save )
		{									   
			$Sonuc["ok"] = 'Başarı ile Eklendi !' ;
		}
		else
		{									   
			$Sonuc["hata"] = 'Kayıt İşlemi Başarısız !' ;
		}
	}
	if($islem=="Duzenle")
    {
		$ID				= $_POST['ID'];
		$SliderAdi			= $_POST['SliderAdi'];
		$SliderPath		= $_POST['Resim'];
		$IsActive= $_POST['IsActive'];
		$lang= $_POST['lang'];
		
		if ($SliderPath == "")
        {
			$Sonuc["hata"]='Lütfen Resim Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE sliders SET SliderAdi=?,SliderPath=?,IsActive=?, lang=? WHERE ID=?");
		$save->execute(array($SliderAdi,$SliderPath,$IsActive,$lang,$ID));
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