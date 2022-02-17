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
		$kullaniciAdi= $_POST['kullaniciAdi'];
		$eposta= $_POST['eposta'];
		$telefon= $_POST['telefon'];
		$urunadi= $_POST['urunadi'];
		$ulkedurumu= $_POST['ulkedurumu'];
		$sehir= $_POST['sehir'];
		$firmaAdi= $_POST['firmaAdi'];
		$gorev= $_POST['gorev'];
		$aksiyon= $_POST['aksiyon'];
		$create_date= $_POST['create_date'];
		if ($kullaniciAdi == "")
        {
			$Sonuc["hata"]='Lütfen Adı Soyadını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
			
		$save = $db->prepare("INSERT INTO urunpdf (kullaniciAdi, eposta,telefon,urunadi,ulkedurumu,sehir,firmaAdi,gorev,aksiyon,create_date) VALUES (?,?,?,?,?,?,?,?)");
		$save->execute(array($kullaniciAdi,$eposta,$telefon,$urunadi,$ulkedurumu,$sehir,$firmaAdi,$gorev,$aksiyon,$create_date));
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
		$kullaniciAdi= $_POST['kullaniciAdi'];
		$eposta= $_POST['eposta'];
		$telefon= $_POST['telefon'];
		$urunadi= $_POST['urunadi'];
		$ulkedurumu= $_POST['ulkedurumu'];
		$sehir= $_POST['sehir'];
		$firmaAdi= $_POST['firmaAdi'];
		$gorev= $_POST['gorev'];
		$aksiyon= $_POST['aksiyon'];
		$create_date= $_POST['create_date'];
		if ($kullaniciAdi == "")
        {
			$Sonuc["hata"]='Lütfen Adı Soyadı Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		$save = $db->prepare("UPDATE urunpdf SET kullaniciAdi=?,eposta=?,telefon=?,urunadi=?,ulkedurumu=?,sehir=?,firmaAdi=?, gorev=? ,aksiyon=?,create_date=?WHERE ID=?");
		$save->execute(array($kullaniciAdi,$eposta,$telefon,$urunadi,$ulkedurumu,$sehir,$firmaAdi,$gorev,$aksiyon,$create_date,$ID));
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