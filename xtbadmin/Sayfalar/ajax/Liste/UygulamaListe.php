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
	//SELECT * FROM urunler u INNER JOIN urunkategorileri uk ON u.UrunKatID = uk.ID INNER JOIN urunuygulamalari uu on u.UrunUygID = uu.ID
	$sql = $db->prepare("SELECT * FROM urunuygulamalari uu ORDER BY ID DESC");
	//$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$ID = $row['ID'];
						//$Resim= $row['UrunResmi'];
						$UygulamaResim= $row['UrunKatID'];
						$UygulamaAdi= $row['UrunTipiAdi'];
						// $UrunUygID= $row['UrunUygID'];
						$UygulamaAciklama= $row['UrunTipiAciklama'];
						$lang= $row['lang'];

						
					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td>'.$ID.'</td>
                            <td>'.$UygulamaAdi.'</td>	 
                            <td><p>'.$UygulamaAciklama.'</p>/td>
							<td>'.$UygulamaResim.'</td>
							<td>'.$lang.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>