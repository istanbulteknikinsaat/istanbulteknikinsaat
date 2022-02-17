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
		$SektorAdi		= $_POST['SektorAdi'];
		$SektorAdiEN		= $_POST['SektorAdiEN'];
		$SektorAdiDE		= $_POST['SektorAdiDE'];
		$SektorResmi		= $_POST['Resim'];
		$SektorAciklama		= $_POST['SektorAciklama'];
		$SektorAciklamaEN		= $_POST['SektorAciklamaEN'];
		$SektorAciklamaDE		= $_POST['SektorAciklamaDE'];


	
		if ($SektorAdi == "" )
        {
			$Sonuc["hata"]='Lütfen Sektör Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	

        if ($SektorAciklama == "" )
        {
			$Sonuc["hata"]='Lütfen Sektör Açıklama Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		/*if ($UrunResmi == "")
        {
			$Sonuc["hata"]='Lütfen Resim Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	*/
			
		$save = $db->prepare("INSERT INTO sektorler (SektorAdi,SektorAdiEN,SektorAdiDE,SektorAciklama,SektorAciklamaDE,SektorAciklamaEN,SektorResim) VALUES (?,?,?,?,?,?,?)");
		$save->execute(array($SektorAdi,$SektorAdiEN,$SektorAdiDE,$SektorAciklama,$SektorAciklamaEN,$SektorAciklamaDE,$SektorResmi));
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
		$SektorAdi		= $_POST['SektorAdi'];
		$SektorAdiEN		= $_POST['SektorAdiEN'];
		$SektorAdiDE		= $_POST['SektorAdiDE'];
		$SektorResmi		= $_POST['Resim'];
		$SektorAciklama		= $_POST['SektorAciklama'];
		$SektorAciklamaEN		= $_POST['SektorAciklamaEN'];
		$SektorAciklamaDE		= $_POST['SektorAciklamaDE'];

		
		if ($SektorAdi == "" )
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

        if ($SektorAciklama == "" )
        {
			$Sonuc["hata"]='Lütfen Sektör Açıklama Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE sektorler SET SektorAdi=?,SektorAdiEN=?,SektorAdiDE=?,SektorAciklama=?,SektorAciklamaDE=?,SektorAciklamaDE=?,SektorResim=? WHERE id=?");
		$save->execute(array($SektorAdi,$SektorAdiEN,$SektorAdiDE,$SektorAciklama,$SektorAciklamaEN,$SektorAciklamaDE,$SektorResmi,$ID));
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