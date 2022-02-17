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
	 
	$sql = $db->prepare("select * from urunkategorileri order by ID desc");
	//$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$ID = $row['id'];
						$pid= $row['pid'];
						$KategoriAdiTR= $row['kategoriAdi'];
						$KategoriAdiEN= $row['KategoriAdiEN'];
						$KategoriAdiDE= $row['KategoriAdiDE'];
						$KategoriAdiFR= $row['KategoriAdiFR'];
						$KategoriAdiSP= $row['KategoriAdiSP'];
						$IsActive= $row['IsActive'];
						// $Aciklama= kisalt($row['Aciklama'],130);
						$Aciklama= $row['Aciklama'];
						
					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td>'.$ID.'</td>
							<td>'.$pid.'</td>
							<td>'.$KategoriAdiTR.'</td>
							<td>'.$KategoriAdiEN.'</td>
							<td>'.$KategoriAdiDE.'</td>
							<td>'.$KategoriAdiFR.'</td>
							<td>'.$KategoriAdiSP.'</td>
							<td><p>'.$Aciklama.'</p></td>
							<td>'.$IsActive.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>