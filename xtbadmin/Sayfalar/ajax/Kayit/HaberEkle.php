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
        
		$HaberAdi			= $_POST['HaberAdi'];
        $HaberAciklama		= $_POST['HaberAciklama'];
        $kategoriAdi        = $_POST['kategoriAdi'];
       // $HaberSlug			= $_POST['HaberSlug'];
		$HaberİmagePath		= $_POST['Resim'];
		$IsActive= $_POST['IsActive'];
		$lang= $_POST['lang'];

        $HaberSlug=seo2($HaberAdi);
		
        //echo $seourl;

		if ($HaberAdi == "")
        {
			$Sonuc["hata"]='Lütfen Haber Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
        if ($HaberİmagePath == "")
        {
			$Sonuc["hata"]='Lütfen Haber Görselini Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
        if ($HaberAciklama == "")
        {
			$Sonuc["hata"]='Lütfen Haber Açıklamasını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
			
		$save = $db->prepare("INSERT INTO haberler (kategoriAdi,HaberAdi,HaberAciklama,HaberSlug,HaberİmagePath,IsActive,lang) VALUES (?,?,?,?,?,?,?)");
		$save->execute(array($kategoriAdi,$HaberAdi,$HaberAciklama,$HaberSlug,$HaberİmagePath,$IsActive,$lang));
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
		$HaberAdi			= $_POST['HaberAdi'];
        $HaberAciklama		= $_POST['HaberAciklama'];
        $kategoriAdi        = $_POST['kategoriAdi'];
        //$HaberSlug			= $_POST['HaberSlug'];
		$HaberİmagePath		= $_POST['Resim'];
		$IsActive= $_POST['IsActive'];
		$lang= $_POST['lang'];
		$HaberSlug=seo2($HaberAdi);
        //echo $seourl;
        
		if ($HaberAdi == "")
        {
			$Sonuc["hata"]='Lütfen Haber Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
        if ($HaberİmagePath == "")
        {
			$Sonuc["hata"]='Lütfen Haber Görselini Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
        if ($HaberAciklama == "")
        {
			$Sonuc["hata"]='Lütfen Haber Açıklamasını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
		
		$save = $db->prepare("UPDATE haberler SET kategoriAdi=?,HaberAdi=?,HaberAciklama=?,HaberSlug=?,HaberİmagePath=?,IsActive=?,lang=? WHERE ID=?");
		$save->execute(array($kategoriAdi,$HaberAdi,$HaberAciklama,$HaberSlug,$HaberİmagePath,$IsActive,$lang,$ID));
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