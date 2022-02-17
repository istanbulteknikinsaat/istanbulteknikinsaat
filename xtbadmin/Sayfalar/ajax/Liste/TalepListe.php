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

	$sql = $db->prepare("select *  from urunpdf 
						where (
                            kullaniciAdi like :Kosul
                            or telefon like :Kosul
                            or eposta like :Kosul
							or firmaAdi like :Kosul
                            ) order by ID desc");
							
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;

						$kullaniciAdi= $row['kullaniciAdi'];
						$eposta= $row['eposta'];
						$telefon= $row['telefon'];
						$urunadi= $row['urunadi'];
						$ulkedurumu= $row['ulkedurumu'];
						$sehir= $row['sehir'];
						$firmaAdi= $row['firmaAdi'];
						$gorev= $row['gorev'];
						$aksiyon= $row['aksiyon'];
						$create_date= $row['create_date'];
						$ID=$row['ID'];
						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
							'.$ID.'
							</td>
                            <td>'.$say.'</td>
							<td>'.$kullaniciAdi.'</td>
							<td>'.$telefon.'</td>
							<td>'.$eposta.'</td>
                            <td>'.$urunadi.'</td>
                            <td>'.$firmaAdi.'</td>
							<td>'.$gorev.'</td>
							<td>'.$ulkedurumu.'</td>
							<td>'.$sehir.'</td>
							<td>'.$aksiyon.'</td>
							<td>'.$create_date.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>