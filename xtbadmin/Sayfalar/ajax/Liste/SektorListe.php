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
	 
	$sql = $db->prepare("SELECT * FROM sektorler ORDER BY ID DESC");
	//$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$ID = $row['id'];
						$SektorAdi= $row['SektorAdi'];
						$SektorAdiEN= $row['SektorAdiEN'];
						$SektorAdiDE= $row['SektorAdiDE'];
						$SektorAciklama= $row['SektorAciklama'];
						$SektorAciklamaEN= $row['SektorAciklamaEN'];
						$SektorAciklamaDE= $row['SektorAciklamaDE'];
						$SektorResim= $row['SektorResim'];
						$lang= $row['lang'];
						$sql2 = $db->prepare("SELECT uygulamaID FROM sektoruygulama WHERE sektorID= $ID"); 	
						$sql2->execute();
						while($row2=$sql2->fetch(PDO::FETCH_ASSOC)) {
							$iliskiliUygulamaID = $row2["uygulamaID"];
							$sql3 = $db->prepare("SELECT UrunTipiAdi FROM urunuygulamalari WHERE ID = $iliskiliUygulamaID");
							$sql3->execute();
							while($row3=$sql3->fetch(PDO::FETCH_ASSOC)){
								$uygulamaAdi = $row3['UrunTipiAdi'];
							}
							$sql4 = $db->prepare("SELECT UrunAdi FROM urunler WHERE sektorID = $ID");	
							$sql4->execute();
							while($row4=$sql4->fetch(PDO::FETCH_ASSOC)) {
								$urunAdi = $row4['UrunAdi'];
							}
						}
						if(isset($urunAdi)){$urunAdi=$urunAdi;}else{$urunAdi="";}
						if(isset($uygulamaAdi)){$uygulamaAdi=$uygulamaAdi;}else{$uygulamaAdi="";}

					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td>'.$ID.'</td>
							<td>'.$SektorAdi.'</td>
							<td>'.$SektorAdiEN.'</td>
							<td>'.$SektorAdiDE.'</td>
							<td><p>'.$SektorAciklama.'</p></td>
							<td><p>'.$SektorAciklamaEN.'</p></td>
							<td><p>'.$SektorAciklamaDE.'</p></td>
							<td>'.$SektorResim.'</td>
							<td>'.$uygulamaAdi.'</td>
							<td>'.$urunAdi.'</td>
							<td>'.$lang.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>