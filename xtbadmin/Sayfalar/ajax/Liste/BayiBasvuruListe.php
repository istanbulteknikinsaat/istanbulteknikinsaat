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
							and aksiyon = 'bayibasvurusu'
							order by ID desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$AdSoyad= $row['yetkilikisiadivegorevi'];
                        $Firma= $row['firma'];
                        $FirmaAdres=$row['firmaadresi'];
						$Telefon=$row['telefon'];
						$CTelefon=$row['ceptelefonu'];
						$Email=$row['email'];
						$Fax=$row['fax'];
						$WebAdres=$row['firmawebsiteadresi'];
						$VergiNo=$row['vergidairesino'];
						$TicNo=$row['ticsicno'];
						$OncekiCiro=$row['oncekiyilcirosu'];
						$ToplamPersonel=$row['toplampersonalsayisi'];
						$AktifSatis=$row['aktifolaraksatisyapilaniller'];
						$create_date=date('d-m-Y H:i',strtotime($row['create_date']));


						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
                            <td>'.$say.'</td>
							<td>'.$Firma.'</td>
							<td>'.$AdSoyad.'</td>
							<td>'.$FirmaAdres.'</td>
							<td>'.$Telefon.'</td>
							<td>'.$CTelefon.'</td>
							<td>'.$Email.'</td>
							<td>'.$Fax.'</td>
							<td>'.$WebAdres.'</td>
							<td>'.$VergiNo.'</td>
							<td>'.$TicNo.'</td>
							<td>'.$OncekiCiro.'</td>
							<td>'.$ToplamPersonel.'</td>
							<td>'.$AktifSatis.'</td>
							<td>'.$create_date.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>