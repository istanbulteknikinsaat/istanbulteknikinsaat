<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';
require_once '../../../../system/fonksiyon.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$Kosul=$_POST["Like"];
	$Kosul="%".$Kosul."%"; 
 }else{
	$Kosul="%%"; 
	}

	$say=0;
	$deger=array();
	$sonuc = array();

	$sql = $db->prepare("select *  from pagetarihce 
						where 
							(SayfaTarihYil like '$Kosul'
                            or SayfaTarihBaslik like '$Kosul'
                            or SayfaTarihAciklama like '$Kosul'
							or lang like '$Kosul'  

							)
                             order by ID desc");
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;

						$SayfaTarihYil= $row['SayfaTarihYil'];
						$SayfaTarihBaslik= $row['SayfaTarihBaslik'];
                        $SayfaTarihAciklama= $row['SayfaTarihAciklama'];
                        $lang=$row['lang'];
						$ID=$row['ID'];
						if($IsActive==1){$IsActive="Aktif";}else{$IsActive="Pasif";}
						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
							'.$ID.'
							</td>
                            <td>'.$say.'</td>
							<td>'.$SayfaTarihYil.'</td>
							<td>'.$SayfaTarihBaslik.'</td>
							<td>'.$SayfaTarihAciklama.'</td>
							<td>'.$lang.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>