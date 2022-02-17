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
							and aksiyon = 'musteri'
							order by ID desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$AdSoyad= $row['yetkilikisiadivegorevi'];
                        $Firma= $row['firma'];
						$Telefon=$row['telefon'];
						$Email=$row['email'];
						$MemnuniyetKonu=$row['memnuniyetsikayetkonusu'];
						$Mesaj=$row['mesaj'];
						$create_date=date('d-m-Y H:i',strtotime($row['create_date']));
						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
                            <td>'.$say.'</td>
							<td>'.$Firma.'</td>
							<td>'.$AdSoyad.'</td>
							<td>'.$Email.'</td>
							<td>'.$Telefon.'</td>
							<td>'.$MemnuniyetKonu.'</td>
							<td>'.$Mesaj.'</td>
							<td>'.$create_date.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>