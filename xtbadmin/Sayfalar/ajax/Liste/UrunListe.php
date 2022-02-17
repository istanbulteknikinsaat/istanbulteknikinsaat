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
	$sql = $db->prepare("SELECT * FROM urunler as u left join urunkategorileri as uk on u.UrunKatID=uk.ID ORDER BY u.ID DESC");
	//$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$ID = $row['ID'];
						//$Resim= $row['UrunResmi'];
						$UrunKatID= $row['kategoriAdi'];
						$UrunAdi= $row['UrunAdi'];
						// $UrunUygID= $row['UrunUygID'];
						$UrunKisaAciklama= $row['UrunKisaAciklama'];
						$UrunAciklama= kisalt($row['UrunAciklama'],130);
						$UrunVideoUrl= $row['UrunVideoUrl'];
						$UrunSatinAlmaUrl= $row['UrunSatinAlmaUrl'];
						$IsActive= $row['IsActive'];
						$lang= $row['lang'];
						if($IsActive==1){$IsActive="Aktif";}else{$IsActive="Pasif";}
					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display:none;">'.$ID.'</td>	 
							<td>'.$say.'</td>
							<td>'.$UrunKatID.'</td>
							<td>'.$UrunAdi.'</td>
							<td>'.$UrunKisaAciklama.'</td>
							<td>'.$UrunAciklama.'</td>
							<td>'.$UrunVideoUrl.'</td>
							<td>'.$UrunSatinAlmaUrl.'</td>
							<td>'.$IsActive.'</td>
							<td>'.$lang.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>