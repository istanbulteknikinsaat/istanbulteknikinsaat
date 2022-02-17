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
	 
	$sql = $db->prepare("select id,lname,slug,is_active from languages  
						where 
                            (
                            lname like :Kosul
                            or slug like :Kosul
                            ) order by lname desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$DilAdi= $row['lname'];
						$DilSlug= $row['slug'];
                        $Durumu= $row['is_active'];

						$ID = $row['id'];
                        if($Durumu==1){
                            $Durumu="Aktif";
                        }
                        else{
                            $Durumu="Pasif";
                        }
						
					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
								'.$ID.'
							</td>
							<td>'.$DilAdi.'</td>
							<td>'.$DilSlug.'</td>
                            <td>'.$Durumu.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>