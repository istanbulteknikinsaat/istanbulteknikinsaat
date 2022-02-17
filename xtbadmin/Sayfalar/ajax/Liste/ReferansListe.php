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

	$sql = $db->prepare("select *  from referanslar 
						where (
                            kategori like :Kosul
                            or projeadi like :Kosul
                            or ili like :Kosul
                            ) order by ID desc");
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);							
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;

						$KategoriAdi= $row['kategori'];
						$ProjeAdi= $row['projeadi'];
                        $İli= $row['ili'];
                        $Uygulama= $row['uygulama'];
						$Ürün =$row['urun'];
                        $Miktar =$row['miktar'];
                        $lang=$row['lang'];
                        $IsActive=$row['IsActive'];
						$ID=$row['id'];
						if($IsActive==1){$IsActive="Aktif";}else{$IsActive="Pasif";}
						$deger[] ='
						<tr style="cursor:pointer" ondblclick="SatirSet(this);">
							<td style="display: none;">
							'.$ID.'
							</td>
                            <td>'.$say.'</td>
							<td>'.$KategoriAdi.'</td>
							<td>'.$ProjeAdi.'</td>
							<td>'.$İli.'</td>
                            <td>'.$Uygulama.'</td>
                            <td>'.$Ürün.'</td>
							<td>'.$Miktar.'</td>
							<td>'.$lang.'</td>
							<td>'.$IsActive.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>