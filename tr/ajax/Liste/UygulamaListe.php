<?php
require_once '../../db.php';

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ID = $_GET['ID'];
    $sql = $db->prepare("SELECT * FROM urunkategorileri WHERE id=$ID");						
    $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
    $sql->execute();
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
            
                        $KategoriCozResim = $row['KategoriCozResim'];
                        $KategoriResim = $row['KategoriResim'];
                        $AnaKategoriAdi = $row['kategoriAdi'];
                        $KisaAciklama= $row['Aciklama'];
                    $deger[] ='<div class="cozresim"><img style="width:100%" src="' . $KategoriCozResim .'" alt=""></div>';
                    $deger1[] = '<div class="image"><img src="'. $KategoriResim . '"></div><div class="text_align_center"><h2>' . $AnaKategoriAdi . '</h2></div>';
                    $deger2[] ='<div class="row">
                                    <div class="col-md-12">
                                        <div class="full"><div class="text_align_left catstyle">
                                        <p class="large">' . $KisaAciklama . '</p>
                                        <button class="btn main_bt" onclick="readmore()" id="readMore" style="display:none;margin-bottom: 30px;border-radius:unset;font-weight:unset;min-width:130px;height:30px;line-height:unset;">Devamını
                                            Oku</button>
                                    </div></div>
                                    </div>
                                </div>';
          }	
          if (!empty($deger) && !empty($deger1) && !empty($deger2)){
            $sonuc["ok"]  = $deger;
            $sonuc["ok1"]  = $deger1;
            $sonuc["ok2"] = $deger2;
            echo json_encode($sonuc); 
          } else {
            $sonuc["ok"]  = "<h3 style='text-align: center; width: 100%;'>Üzgünüz.. Bir seyler ters gitti.</h3>";
            echo json_encode($sonuc); 
          }
      
}
 ?>
