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
		$SayfaAciklama		= $_POST['SayfaAciklama'];
		$SayfaAlt		= $_POST['SayfaAlt'];
		$Sertifika1		= $_POST['SertifikaBir'];
		$Sertifika2		= $_POST['SertifikaIki'];
		$Sertifika3		= $_POST['SertifikaUc'];
		$Sertifika4		= $_POST['SertifikaDort'];
		$Sertifika5		= $_POST['SertifikaBes'];
		$Sertifika6		= $_POST['SertifikaAlti'];
		$Sertifika7		= $_POST['SertifikaYedi'];
		$lang		= $_POST['lang'];
		$IsActive		= $_POST['IsActive'];	
		if ($SayfaBaslik == "")
        {
			$Sonuc["hata"]='Lütfen Sayfa Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }						
			
		$save = $db->prepare("INSERT INTO pagekalitepolitikasi (SayfaBaslik, SayfaAdi,SayfaAciklama,SayfaAlt,Sertifikasi1,Sertifikasi2,Sertifikasi3,Sertifikasi4,Sertifikasi5,Sertifikasi6,Sertifikasi7,lang,IsActive) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$save->execute(array($SayfaBaslik,$SayfaAdi,$SayfaAciklama,$SayfaAlt,$Sertifika1,$Sertifika2,$Sertifika3,$Sertifika4,$Sertifika5,$Sertifika6,$Sertifika7,$lang,$IsActive));
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
		$SayfaAdi		= $_POST['SayfaAdi'];
		$SayfaBaslik		= $_POST['SayfaBaslik'];
		$SayfaAciklama		= $_POST['SayfaAciklama'];
		$SayfaAlt		= $_POST['SayfaAlt'];
		$Sertifika1		= $_POST['SertifikaBir'];
		$Sertifika2		= $_POST['SertifikaIki'];
		$Sertifika3		= $_POST['SertifikaUc'];
		$Sertifika4		= $_POST['SertifikaDort'];
		$Sertifika5		= $_POST['SertifikaBes'];
		$Sertifika6		= $_POST['SertifikaAlti'];
		$Sertifika7		= $_POST['SertifikaYedi'];
		$lang		= $_POST['lang'];
		$IsActive		= $_POST['IsActive'];	
		
		$save = $db->query("UPDATE pagekalitepolitikasi SET SayfaBaslik='$SayfaBaslik',SayfaAdi='$SayfaAdi',SayfaAciklama='$SayfaAciklama',SayfaAlt='$SayfaAlt',Sertifikasi1='$Sertifika1',Sertifikasi2='$Sertifika2',Sertifikasi3='$Sertifika3',Sertifikasi4='$Sertifika4',Sertifikasi5='$Sertifika5',Sertifikasi6='$Sertifika6',Sertifikasi7='$Sertifika7',lang='$lang',IsActive='$IsActive'
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