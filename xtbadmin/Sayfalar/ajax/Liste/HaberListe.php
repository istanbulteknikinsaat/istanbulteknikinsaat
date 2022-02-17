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
	 
	$sql = $db->prepare("select *  from haberler 
						where 
                            (
                            HaberAdi like :Kosul
                            or HaberAciklama like :Kosul
                            ) order by ID desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$HaberAdi			= $row['HaberAdi'];
                        $HaberAciklama		= $row['HaberAciklama'];
                        $kategoriAdi        = $row['kategoriAdi'];
                        $HaberSlug			= $row['HaberSlug'];
                        $HaberİmagePath		= $row['HaberİmagePath'];
                        $IsActive= $row['IsActive'];
                        $lang= $row['lang'];
						$ID = $row['ID'];
						if($IsActive==1){$IsActive="Aktif";}else{$IsActive="Pasif";}
					$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
								'.$ID.'
							</td>
                            <td>'.$say.'</td>
							<td class="ResimSekil"><img src="../../images/haberler/'.$HaberİmagePath.'" height="50px" width="50px"></td>
							<td>'.$kategoriAdi.'</td>
                            <td>'.$HaberAdi.'</td>
							<td>'.$HaberAciklama.'</td>
                            <td>'.$HaberSlug.'</td>
                            <td>'.$lang.'</td>
                            <td>'.$IsActive.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>