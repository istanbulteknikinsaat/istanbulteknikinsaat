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
		$KategoriPid		= $_POST['PID'];
		$KategoriAdiTR		= $_POST['KategoriAdiTR'];
		$KategoriAdiEN		= $_POST['KategoriAdiEN'];
		$KategoriAdiDE		= $_POST['KategoriAdiDE'];
		$KategoriAdiFR		= $_POST['KategoriAdiFR'];
		$KategoriAdiSP		= $_POST['KategoriAdiSP'];
		$Aciklama			= $_POST['Aciklama'];
		$IsActive			= $_POST['IsActive'];
		if ($KategoriAdiTR == "")
        {
			$Sonuc["hata"]='Lütfen Kategori Adını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }
			
		$save = $db->prepare("INSERT INTO urunkategorileri (pid, kategoriAdi,KategoriAdiEN,KategoriAdiDE,KategoriAdiFR,KategoriAdiSP,Aciklama,IsActive) VALUES (?,?,?,?,?,?,?,?)");
		$save->execute(array($KategoriPid,$KategoriAdiTR,$KategoriAdiEN,$KategoriAdiDE,$KategoriAdiFR,$KategoriAdiSP,$Aciklama,1));
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
		$KategoriPid		= $_POST['PID'];
		$KategoriAdiTR		= $_POST['KategoriAdiTR'];
		$KategoriAdiEN		= $_POST['KategoriAdiEN'];
		$KategoriAdiDE		= $_POST['KategoriAdiDE'];
		$KategoriAdiFR		= $_POST['KategoriAdiFR'];
		$KategoriAdiSP		= $_POST['KategoriAdiSP'];
		$Aciklama= $_POST['Aciklama'];
		$IsActive		= $_POST['IsActive'];
		if ($Aciklama == "")
        {
			$Sonuc["hata"]='Lütfen Açıklama Alanını Boş Bırakmayın..!';
			echo json_encode($Sonuc);
			return;	
        }	
		
		$save = $db->prepare("UPDATE urunkategorileri SET pid=?,kategoriAdi=?,KategoriAdiEN=?,KategoriAdiDE=?,KategoriAdiFR=?,KategoriAdiSP=?,Aciklama=?, IsActive=? WHERE ID=?");
		$save->execute(array($KategoriPid,$KategoriAdiTR,$KategoriAdiEN,$KategoriAdiDE,$KategoriAdiFR,$KategoriAdiSP,$Aciklama,$IsActive,$ID));
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