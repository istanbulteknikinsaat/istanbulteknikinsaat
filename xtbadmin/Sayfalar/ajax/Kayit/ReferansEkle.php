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
		$KategoriPid= $_POST['PID'];
		$ProjeAdi= $_POST['ProjeAdi'];
		$İli= $_POST['İli'];
		$Ürün= $_POST['Ürün'];
		$Uygulama= $_POST['Uygulama'];
		$Miktar= $_POST['Miktar'];
		$IsActive= $_POST['IsActive'];
		$lang= $_POST['lang'];
		if ($ProjeAdi == "")
        {
			$Sonuc["hata"]='Lütfen Kategori Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
			
		$save = $db->prepare("INSERT INTO referanslar (kategori, projeadi,ili,urun,uygulama,miktar,IsActive,lang) VALUES (?,?,?,?,?,?,?,?)");
		$save->execute(array($KategoriPid,$ProjeAdi,$İli,$Ürün,$Uygulama,$Miktar,$IsActive,$lang));
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
		$KategoriPid= $_POST['PID'];
		$ProjeAdi= $_POST['ProjeAdi'];
		$İli= $_POST['İli'];
		$Ürün= $_POST['Ürün'];
		$Uygulama= $_POST['Uygulama'];
		$Miktar= $_POST['Miktar'];
		$IsActive= $_POST['IsActive'];
		$lang= $_POST['lang'];
		if ($ProjeAdi == "")
        {
			$Sonuc["hata"]='Lütfen Proje Adı Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
		$save = $db->prepare("UPDATE referanslar SET kategori=?,projeadi=?,ili=?,urun=?,uygulama=?,miktar=?,IsActive=?, lang=? WHERE ID=?");
		$save->execute(array($KategoriPid,$ProjeAdi,$İli,$Ürün,$Uygulama,$Miktar,$IsActive,$lang,$ID));
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