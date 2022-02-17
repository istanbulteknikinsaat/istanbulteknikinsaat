<?php
require_once '../../db.php';

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
$name =$_GET['kategori'];

function seo2($tr1) {
  $turkce = array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
  $duzgun = array("s", "S", "i", "u", "U", "o", "O", "c", "C", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
  $tr1 = str_replace($turkce, $duzgun, $tr1);
  $tr1 = trim($tr1);
  $tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i", "-", $tr1);
  $tr1 = strtolower($tr1);
  $tr1 = rtrim($tr1, "-");
  $tr1 = ltrim($tr1, "-");
  return $tr1;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ID = $_GET['ID'];
       // echo $ID;
       if($name == 'geosentetik'){
        
        $sql = $db->prepare("SELECT * FROM urunkategorileri WHERE IsActive=1 AND pid = $ID");						
        $sql->bindParam(':id',$ID, PDO::PARAM_INT);
        $sql->execute();
                 while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
              {
                $UrunID = $row['id'];
                $UrunTipiAdi = $kategoriname=$row['kategoriAdi'];
                $UrunTipiResim = $row['KategoriResim'];
                $urunAdisl=$kategoriname;
                $slugurunadi=seo2($urunAdisl);
                if($UrunTipiResim==null){$topboyut="top:30px;";}else{$topboyut="top:90px;";}
                $deger[] ='<style>.product_list:hover, .product_list:focus {
                  box-shadow: 0 0 25px -17px #000;
                  border-bottom: none !important;
              }
              .margin_bottom_30_all {
                margin-bottom: 10px !important;
            }</style>
                <div class="col-lg-4 col-sm-6 col-md-12 col-xs-12 margin_bottom_30_all">
                <div class="product_img"> <a href="/'.$lang.'/urunler.php?id='. $UrunID .'&slug='.$slugurunadi.'"><img class="img-responsive"
            src="/'.$lang.'/' . $UrunTipiResim . '" alt=""></a> </div>
        <div class="product_list"  style="min-height:unset; width: 360px; ">
          <div class="product_detail_btm" style="'.$topboyut.'width: 100%;height: 45px; background-color: #338c25 !important; ">
            <div class="center">
              <h4 style="margin: 13px 0 10px 0;"><a style="color: white !important; font-size: 20px !important;" href="/'.$lang.'/urunler.php?id=' . $UrunID .'&slug='.$slugurunadi.'">' . $UrunTipiAdi . '</a></h4>
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
           else if($name == 'asfalt' || $name == 'beton'){
            $sql =$db->prepare( "SELECT * FROM urunler WHERE IsActive=1 AND UrunKatID = $ID ");	
            				
            $sql->bindParam(':id',$ID, PDO::PARAM_INT);
            $sql->execute();
                     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
                  {
            if($name=='asfalt'){$cizgirengi='#435258';}
            else if($name=='beton'){$cizgirengi='#758573';}
            
                                $UrunID = $row['ID'];
                                $UrunTipiAdi = $row['UrunAdi'];
                                $UrunTipiResim = $row['UrunResmi'];
                                $urunAdisl=$row['UrunAdi'];
                                $slugurunadi=seo2($urunAdisl);
                                if($UrunTipiResim==null){$topboyut="top:30px;";}else{$topboyut="top:90px;";}
                                if($UrunTipiAdi=='Rapiol Bitüm Gençleştirici Katkı Rejuvenatör' || $UrunTipiAdi=='Polimer Modifiye Bitüm (PmB) Stabilizatör' ){ $margin="0px 0 10px 0;";}else{$margin="13px 0 10px 0;";}
                                $deger[] ='<div class="col-lg-4 col-sm-6 col-md-12 col-xs-12 margin_bottom_30_all">
                                <div class="product_img"> <a href="/'.$lang.'/urundetay.php?id=' . $UrunID . '&slug='.$slugurunadi.'"><img class="img-responsive" src="/images/products/' . $UrunTipiResim . '" alt=""></a> </div>
                                <div class="product_list"  style="min-height:unset; width: 360px;">
                                <div class="product_detail_btm" style="'.$topboyut.' width: 100%;height: 45px; background-color:'.$cizgirengi.' !important; ">
                                <div class="center">
                            <h4 style="margin: '.$margin.'"><a  style="color: white !important; font-size: 20px !important;" href="/'.$lang.'/urundetay.php?id=' . $UrunID . '&slug='.$slugurunadi.'">' . $UrunTipiAdi . '</a></h4>
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
       else{
    $sql = $db->prepare("SELECT * FROM urunkategorileri WHERE IsActive=1 AND pid = $ID");						
    $sql->bindParam(':id',$ID, PDO::PARAM_INT);
    $sql->execute();
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
            if($lang=='tr'){$kategoriname=$row['kategoriAdi'];}
            elseif($lang=='en'){$kategoriname=$row['KategoriAdiEN'];}
            elseif($lang=='de'){$kategoriname=$row['KategoriAdiDE'];}
            elseif($lang=='fr'){$kategoriname=$row['KategoriAdiFR'];}
            elseif($lang=='sp'){$kategoriname=$row['KategoriAdiSP'];}

            if($name=='geosentetik'){$cizgirengi='#338c25';}
            else if($name=='yalitim'){$cizgirengi='#009ca3';}
            else if($name=='yesilcati'){$cizgirengi='#338b26';}
            else if($name=='asfalt'){$cizgirengi='#435258';}
            else if($name=='beton'){$cizgirengi='#758573';}
            else if($name=='mermer'){$cizgirengi='#a67041';}

            
                        $UrunID = $row['id'];
                        $UrunTipiAdi = $kategoriname;
                        $UrunTipiResim = $row['KategoriResim'];
                        $urunAdisl=$kategoriname;
                        $slugurunadi=seo2($urunAdisl);
                        if($UrunTipiResim==null){$topboyut="top:30px;";}else{$topboyut="top:90px;";}
                        $deger[] ='
                        <style>.product_list:hover, .product_list:focus {
                          box-shadow: 0 0 25px -17px #000;
                          border-bottom: none !important;
                      }
                      .margin_bottom_30_all {
                        margin-bottom: 10px !important;
                    }</style>
                        <div class="col-lg-4 col-sm-6 col-md-12 col-xs-12 margin_bottom_30_all">
                        <div class="product_img"> <a href="/'.$lang.'/urunler.php?id='. $UrunID .'&slug='.$slugurunadi.'"><img class="img-responsive"
                    src="/'.$lang.'/' . $UrunTipiResim . '" alt=""></a> </div>
             <div class="product_list"  style="min-height:unset; width: 360px;">
             <div class="product_detail_btm" style="'.$topboyut.' width: 100%;height: 45px; background-color:'.$cizgirengi.' !important; ">

                    <div class="center">
                    <h4 style="margin: 13px 0 10px 0;"><a style="color: white !important; font-size: 20px !important;" href="/'.$lang.'/urunler.php?id=' . $UrunID .'&slug='.$slugurunadi.'">' . $UrunTipiAdi . '</a></h4>
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
      
       
      
      
}
 ?>