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
		$UygulamaAdi		= $_POST['UygulamaAdi'];
		$UygulamaResmi		= $_POST['Resim'];
		$UygulamaAciklama		= $_POST['UygulamaAciklama'];
	
		if ($UygulamaAdi == "" )
        {
			$Sonuc["hata"]='Lütfen Uygulama  Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	

        if ($UygulamaAciklama == "" )
        {
			$Sonuc["hata"]='Lütfen Uygulama Açıklama Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		/*if ($UrunResmi == "")
        {
			$Sonuc["hata"]='Lütfen Resim Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	*/
			
		$save = $db->prepare("INSERT INTO urunuygulamalari (UrunTipiAdi,UrunTipiAciklama) VALUES (?,?)");
		$save->execute(array($UygulamaAdi,$UygulamaAciklama));
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
		$ID				= $_POST['ID'];
		$UygulamaAdi		= $_POST['UygulamaAdi'];
		//$UrunResmi		= $_POST['UrunResmi'];
		$UygulamaAciklama		= $_POST['UygulamaAciklama'];
		
		if ($UygulamaAdi == "" )
        {
			$Sonuc["hata"]='Lütfen Sektör Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		/*if ($UrunResmi == "")
        {
			$Sonuc["hata"]='Lütfen Resim Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }*/

        if ($UygulamaAciklama == "" )
        {
			$Sonuc["hata"]='Lütfen Sektör Açıklama Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE urunuygulamalari SET UrunTipiAdi=?,UrunTipiAciklama=? WHERE ID=?");
		$save->execute(array($UygulamaAdi,$UygulamaAciklama,$ID));
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