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
	$query = $db->prepare("Update hizmetler set IsActive=? WHERE ID=?");
	$delete = $query->execute(array(0,$ID));
} else if($islem=="TopluSil")
        {
            $query = $db->prepare("Update hizmetler set IsActive=? WHERE IsActive=?");
            $delete = $query->execute(array(0,1));
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