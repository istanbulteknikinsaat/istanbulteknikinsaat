<?php
require_once '../../db.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ID = $_GET['ID'];
    $name =$_GET['kategori'];
    // echo $ID;
    $sql = $db->prepare("SELECT * FROM sektoruygulama WHERE urunKategoriID = $ID");						
    // $sql->bindParam(':id',$ID, PDO::PARAM_INT);
    $sql->execute();
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
                        $UrunSektorID = $row['sektorID'];
                        $sql2 = $db->prepare("SELECT * FROM  sektorler WHERE id = $UrunSektorID ");						
                        // $sql2->bindParam(':id',$ID, PDO::PARAM_INT);
                        $sql2->execute();
                        $item = $sql2->fetch();
                        $SektorAdi = $item['SektorAdi'];
                        $SektorID = $item['id'];
                        $SektorResim = $item['SektorResim'];

                        if($name=='geosentetik'){$cizgirengi='5px solid #338c25';}
                        else if($name=='yalitim'){$cizgirengi='5px solid #009ca3';}
                        else if($name=='yesilcati'){$cizgirengi='5px solid #338b26';}
                        else if($name=='asfalt'){$cizgirengi='5px solid #435258';}
                        else if($name=='beton'){$cizgirengi='5px solid #758573';}
                        else if($name=='geoarme'){$cizgirengi='5px solid #a67041';}
                        if($SektorResim==null){$topboyut="top:0px;";}else{$topboyut="top:90px;";}

                        $deger[] ='<div class="col-lg-4 col-sm-6 col-md-12 col-xs-12 margin_bottom_30_all">
             <div class="product_list" style="min-height:unset;    border-bottom: '.$cizgirengi.'">
                  <div class="product_detail_btm" style="'.$topboyut.'">
                    <div class="center">
                      <h4><a href="/'.$lang.'/sektorlerdetay.php?id=' . $SektorID .'">' . $SektorAdi . '</a></h4>
                    </div>
                   </div>
</div>
                      </div>
              </div>';
          }	
          if (!empty($deger)){
            $sonuc["ok"]  = $deger;
            echo json_encode($sonuc); 
          } else {
            $sonuc["ok"]  = "<h3 style='text-align: center; width: 100%;'>Üzgünüz..</h3>";
            echo json_encode($sonuc); 
          }
      
}
 ?>
