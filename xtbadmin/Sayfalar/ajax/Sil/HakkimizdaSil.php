<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';

if($_POST){
	$islem		=($_POST['islem']);
	$Sonuc=[];
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	 
	if($islem=="sil")
{
	$ID = $_POST['ID'];
	$query = $db->prepare("DELETE FROM kurumsal_yazilar WHERE id=?");
	$delete = $query->execute(array($ID));
} else if($islem=="TopluSil")
        {
            $query = $db->prepare("DELETE FROM kurumsal_yazilar WHERE ID=?");
            $delete = $query->execute(array($ID));
        }

	if ( $delete )
		{						   
			$Sonuc["ok"] = 'Başarı ile Silinmiştir !' ;
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