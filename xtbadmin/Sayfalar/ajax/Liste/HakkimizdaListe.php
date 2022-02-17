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
	 
	$sql = $db->prepare("select * from kurumsal_yazilar order by ID desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
                        $say++;
                        $ID = $row['id'];
                        $Icerik= kisalt($row['icerik'],130);
						$Dil= $row['dil'];
                        $Siralama = $row['siralama'];
                        $OlusturulmaTarihi = $row['olusturulma_tarihi'];	
					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td>
								'.$ID.'
							</td>
							<td>'.$Icerik.'</td>
                            <td>'.$Dil.'</td>
                            <td>'.$Siralama.'</td>
							<td>'.$OlusturulmaTarihi.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>