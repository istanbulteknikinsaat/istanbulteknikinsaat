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

	$sql = $db->prepare("select *  from bizeyazin 
						where (
                            advesoyad like :Kosul
                            or firma like :Kosul
                            or email like :Kosul
							or telefon like :Kosul
							or gorev like :Kosul
							or mesaj like :Kosul
                            ) order by ID desc");
							
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;

						$adisoyadi= $row['advesoyad'];
						$email= $row['email'];
						$telefon= $row['telefon'];
						$firma= $row['firma'];
						$gorev= $row['gorev'];
						$mesaj = $row['mesaj'];
						$tarih = date('d-m-Y H:i',strtotime($row['create_date']));
						$ID=$row['ID'];
						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
							'.$ID.'
							</td>
                            <td>'.$say.'</td>
							<td>'.$adisoyadi.'</td>
							<td>'.$telefon.'</td>
							<td>'.$email.'</td>
                            <td>'.$firma.'</td>
							<td>'.$gorev.'</td>
							<td>'.$mesaj.'</td>
							<td>'.$tarih.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>