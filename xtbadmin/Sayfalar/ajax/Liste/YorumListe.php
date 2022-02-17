<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';
require_once '../../../../system/fonksiyon.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	 $Kosul="";
	 
	if($_POST['Like']!=""){
		$KosulGelen=$_POST["Like"];
		$Kosul="%".$KosulGelen."%";
	}
	
	if($_POST['IsActive']==0){
		$IsActive=0;
	}
	if($_POST['IsActive']==1 && $_POST['Onaylandi']==0){
		$Onaylandi=0;
	}
	if($_POST['IsActive']==1 && $_POST['Onaylandi']==1){
		$Onaylandi=1;
	}
	/*
	if(KelimeKontrol(" Bekliyorbekliyor",$KosulGelen==true)){
		$Onaylandi=0;	
	} else{$Onaylandi="%%";}
	if(KelimeKontrol(" Onaylıonaylı",$KosulGelen==true)){
		$Onaylandi=1;	
	} else{$Onaylandi="%%";}
	if(KelimeKontrol(" Silindisilindi",$KosulGelen)==true){
		$IsActive=0;	
	} else { $IsActive=1; }
	*/
 }else{
	$Kosul="%%"; 
$IsActive="";	
$Onaylandi="";	
	}
	$say=0;
	$deger=array();
	$sonuc = array();
	if($Kosul){
	$sql = $db->prepare("select * from yorumlar where 
                             (
                            AdSoyad like :Kosul
                            or Email like :Kosul
                            or Yorum like :Kosul
                            ) 
                             order by ID desc");							
	$sql->bindParam(":Kosul",$Kosul,PDO::PARAM_STR);
	}else if($IsActive==1 && $Onaylandi==0){
		$sql = $db->prepare("select * from yorumlar where IsActive=1 and Onaylandi=0 order by ID desc");
	}else if($IsActive==1 && $Onaylandi==1){
		$sql = $db->prepare("select * from yorumlar where IsActive=1 and Onaylandi=1 order by ID desc");
	}else if($IsActive==0){
		$sql = $db->prepare("select * from yorumlar where IsActive=0 order by ID desc");
	}
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
						$say++;
						$AdSoyad= $row['AdSoyad'];
						$Email= $row['Email'];
						$Onaylandi= $row['Onaylandi'];
						$IsActive=$row['IsActive'];
						$Yorum= kisalt($row['Yorum'],130);
						$ID = $row['ID'];
						
						if($IsActive==1){
							if($Onaylandi==1){
								$sec='class="text-green"';
								$Durum='Onaylı';
							} else if( $Onaylandi==0){
								$sec='class="text-yellow"';
								$Durum='Bekliyor';
							}
						} else if( $IsActive==0){
							$sec='class="text-red"';
								$Durum='Silindi';
						}
					$deger[] ='
						<tr style="cursor:pointer" '.$sec.' ondblclick="SatirSet(this);">
							<td style="display: none;">
								'.$ID.'
							</td>
							<td>'.$AdSoyad.'</td>
							<td>'.$Email.'</td>
							<td>'.$Durum.'</td>
							<td>'.$Yorum.'</td>
						</tr>  ';
					}	
					
	$sonuc["say"] = 'Toplam '.$say.' Kayıt Bulunuyor' ;
	$sonuc["ok"]  = $deger;
	echo json_encode($sonuc); 
	

} ?>