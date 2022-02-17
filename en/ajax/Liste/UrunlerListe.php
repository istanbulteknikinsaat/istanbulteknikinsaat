<?php
require_once '../../db.php';
function seo2($tr1) {
  $turkce = array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
  $duzgun = array("s", "S", "id", "u", "U", "o", "O", "c", "C", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
  $tr1 = str_replace($turkce, $duzgun, $tr1);
  $tr1 = trim($tr1);
  $tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i", "-", $tr1);
  $tr1 = strtolower($tr1);
  $tr1 = rtrim($tr1, "-");
  $tr1 = ltrim($tr1, "-");
  return $tr1;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

  $nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];

    $ID = $_GET['ID'];

    $sql3 = $db->prepare("SELECT * FROM urunkategorileri WHERE IsActive=1 AND id = $ID");						
    $sql3->bindParam(':id',$ID, PDO::PARAM_INT);
    $sql3->execute();
             while($row=$sql3->fetch(PDO::FETCH_ASSOC)) 
          { $KategoriResmi = $row['KategoriCozResim']; 
            $değer3[] =$KategoriResmi; 
            if($lang=='tr'){$değer4=$row['kategoriAdi'];}
            elseif($lang=='en'){$değer4=$row['KategoriAdiEN'];}
            elseif($lang=='de'){$değer4=$row['KategoriAdiDE'];}
            elseif($lang=='fr'){$değer4=$row['KategoriAdiFR'];}
            elseif($lang=='sp'){$değer4=$row['KategoriAdiSP'];}
/*             $değer4[]=$row['kategoriAdi']; 
 */            $değer5=$row['pid'];
                         }
    $sql2 = $db->prepare("SELECT * FROM urunkategorileri WHERE IsActive=1 AND id = $değer5");						
    $sql2->bindParam(':id',$ID, PDO::PARAM_INT);
    $sql2->execute();
              while($row=$sql2->fetch(PDO::FETCH_ASSOC)) 
          {
            if($lang=='tr'){$değer6[]=$row['kategoriAdi'];$değer7=$row['kategoriAdi'];}
            elseif($lang=='en'){$değer6[]=$row['KategoriAdiEN'];$değer7=$row['KategoriAdiEN'];}
            elseif($lang=='de'){$değer6[]=$row['KategoriAdiDE'];$değer7=$row['KategoriAdiDE'];}
            elseif($lang=='fr'){$değer6[]=$row['KategoriAdiFR'];$değer7=$row['KategoriAdiFR'];}
            elseif($lang=='sp'){$değer6[]=$row['KategoriAdiSP'];$değer7=$row['KategoriAdiSP'];}
            /* $değer6[]=$row['kategoriAdi'];
            $değer7=$row['kategoriAdi']; */
            $kategoriid=$row['id'];
          }

          if($kategoriid=='2'){$cizgirengi='5px solid #338c25';}
          else if($kategoriid=='3'){$cizgirengi='5px solid #009ca3';}
          else if($kategoriid=='4'){$cizgirengi='5px solid #338b26';}
          else if($kategoriid=='5'){$cizgirengi='5px solid #435258';}
          else if($kategoriid=='6'){$cizgirengi='5px solid #758573';}
          else if($kategoriid=='7'){$cizgirengi='5px solid #a67041';}
          
          if($kategoriid=='2'){$backgroundrengi='#338c25';}
          else if($kategoriid=='3'){$backgroundrengi='#009ca3';}
          else if($kategoriid=='4'){$backgroundrengi='#338b26';}
          else if($kategoriid=='5'){$backgroundrengi='#435258';}
          else if($kategoriid=='6'){$backgroundrengi='#758573';}
          else if($kategoriid=='7'){$backgroundrengi='#a67041';}
          ?>
          


    <?php $sql = $db->prepare("SELECT * FROM urunler WHERE UrunKatID = $ID AND IsActive=1 AND lang='$lang' ");
   //print_r($sql);						
    $sql->bindParam(':id',$ID, PDO::PARAM_INT);
    $sql->execute();
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					    {
                        $urunid = $row['ID'];
                        $UrunAdi = $row['UrunAdi'];
                        $KisaAciklama= $row['UrunKisaAciklama'];
                        $UrunSatinAlmaLink= $row['UrunSatinAlmaUrl'];
                        $UrunResmi= $row['UrunResmi'];
                        $urunAdisl=$row['UrunAdi'];
                        $slugurunadi=seo2($urunAdisl);
                        if($UrunAdi=="TekDrain ZMN 20/150 Drenaj Levhası" || $UrunAdi=="TekDrain ZMN 20/200 Drenaj Levhası"){
                          $margin= "0px";
                        }
                        
                    $deger[] ='
                    <style>
                    .product_list:hover, .product_listfocus{border-bottom:'.$cizgirengi.' !important;}
                    </style>
                    <div class="col-lg-4 col-sm-6 col-md-12 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                    <div class="product_img"> <a href="../../urundetay.php?id=' . $urunid . '&slug='.$slugurunadi.'"><img class="img-responsive" src="/images/products/' . $UrunResmi . '" alt=""></a> </div>
              <div class="product_detail_btm">
              <div class="center urunbaslik" style="background-color: '.$backgroundrengi.' !important;     height: 50px !important;">
              <h4><a style="color: white !important;" href="../../urundetay.php?id=' . $urunid . '&slug='.$slugurunadi.'">' . $UrunAdi . '</a></h4>
                </div>
                <div class="product_price">
                  <p>' . $KisaAciklama . '</p>
                </div>
              </div>
                  </div>
          </div>
                    ';
          	
         
        }
         
                               if (!empty($deger)){
          $deger2[] = '
          <img src="/images/products/'.$UrunResmi.'" >';
                               }
          if (!empty($deger)){
            $slugkategori2 = seo2($değer7);
            
            if($slugkategori2=="geosentetikler"){$slugkategori2="geosentetik";}
            else if($slugkategori2=="yalidtidm-urunleri"){$slugkategori2="yapikoruma";}
            else if($slugkategori2=="yesil-catid-sistemleri"){$slugkategori2="yesilcati";}
            else if($slugkategori2=="asfalt-urunleri"){$slugkategori2="asfalt";}
            else if($slugkategori2=="beton-urunleri"){$slugkategori2="beton";}
            else if($slugkategori2=="mermer-urunleri"){$slugkategori2="mermer";}
            $sonuc["urunkategori2slug"] = $slugkategori2;
            $sonuc["urunkategori2id"] = $kategoriid;
            $sonuc["ok"]  = $deger;
            $sonuc["resim"] = $değer3;
            $sonuc['baslik'] = $değer4;
            $sonuc['kategoriadi'] = $değer6;
            
            $sonuc['cizgirengi'] = $cizgirengi;
            echo json_encode($sonuc); 
          } else {
            $sonuc['baslik'] = $değer4;
            $sonuc['kategoriadi'] = $değer6;
            $sonuc['cizgirengi'] = $cizgirengi;
            $sonuc["resim"] = $değer3 ;
            $sonuc["ok"]  = "<h3 style='text-align: center; width: 100%;'>Üzgünüz.. Kategoriye ait bir ürün bulunamadı..</h3>";
            echo json_encode($sonuc); 
          }
        
}
 ?>
