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

	$sql = $db->prepare("select *  from pagekalitepolitikasi 
						where (
                            SayfaAdi like :Kosul
                            or SayfaBaslik like :Kosul
							or SayfaAciklama like :Kosul
                            ) order by ID desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;

						$SayfaAdi= $row['SayfaAdi'];
                        $SayfaBaslik= $row['SayfaBaslik'];
                        $lang=$row['lang'];
						$IsActive=$row['IsActive'];
						$ID=$row['ID'];
						if($IsActive==1){$IsActive="Aktif";}else{$IsActive="Pasif";}
						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
							'.$ID.'
							</td>
                            <td>'.$say.'</td>
							<td>'.$SayfaAdi.'</td>
							<td>'.$SayfaBaslik.'</td>
							<td>'.$IsActive.'</td>
							<td>'.$lang.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>