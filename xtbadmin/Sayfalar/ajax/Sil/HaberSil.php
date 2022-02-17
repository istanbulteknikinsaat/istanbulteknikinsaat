<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';

if($_POST){
	$islem		=$_POST['islem'];
	$Sonuc=[];
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	 
	if($islem=="Sil")
	{
		$ID = $_POST['ID'];
		$query = $db->prepare("DELETE FROM haberler WHERE ID=?");
		$Yanit = $query->execute(array($ID));
	}   else if($islem=="TopluSil")
	{
		$query = $db->prepare("DELETE FROM haberler");
		$Yanit = $query->execute(array(0));
	}

	if ( $Yanit )
		{						   
			$Sonuc["ok"] = 'Sil İşlemi Başarılı !' ;
		}
		else
		{					   
			$Sonuc["hata"] = 'Sil İşlemi Başarısız !' ;
		}

}

echo json_encode($Sonuc);
				
				
		
				
}
}
 ?>