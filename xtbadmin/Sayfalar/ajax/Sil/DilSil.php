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
		$query = $db->prepare("Update languages set WHERE ID=?");
		$Yanit = $query->execute(array($ID));
	}else if($islem=="TopluSil")
	{
		$query = $db->prepare("Delete languages WHERE ID=?");
		$Yanit = $query->execute(array($ID));
	
	if ( $Yanit )
		{						   
			$Sonuc["ok"] = 'Silme İşlemi Başarılı !' ;
		}
		else
		{					   
			$Sonuc["hata"] = 'Silme İşlemi Başarısız !' ;
		}

}

echo json_encode($Sonuc);
				
				
		
				
}
}
 ?>