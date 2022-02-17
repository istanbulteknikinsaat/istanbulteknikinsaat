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

	$sql = $db->prepare("select *  from iletisimform
						where (
                            advesoyad like :Kosul
                            or firma like :Kosul
							or gorev like :Kosul
							or telefon like :Kosul
							or email like :Kosul
                            )
							and aksiyon = 'mailgonder'
							order by ID desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$AdSoyad= $row['advesoyad'];
                        $Firma= $row['firma'];
                        $Gorev=$row['gorev'];
						$Telefon=$row['telefon'];
						$Email=$row['email'];
						$Konu=$row['konu'];
						$Mesaj=$row['mesaj'];
						$create_date=date('d-m-Y H:i',strtotime($row['create_date']));
						$ID=$row['ID'];

						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">'.$ID.'</td>
                            <td>'.$say.'</td>
							<td>'.$Konu.'</td>
							<td>'.$AdSoyad.'</td>
							<td>'.$Telefon.'</td>
							<td>'.$Email.'</td>
							<td>'.$Firma.'</td>
							<td>'.$Gorev.'</td>
							<td>'.$Mesaj.'</td>
							<td>'.$create_date.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>