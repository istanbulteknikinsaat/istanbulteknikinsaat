<?php
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
/**
 * @param array      $array
 * @param int|string $position
 * @param mixed      $insert
 */
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
function array_insert(&$array, $position, $insert)
{
    if (is_int($position)) {
        array_splice($array, $position, 0, $insert);
    } else {
        $pos   = array_search($position, array_keys($array));
        $array = array_merge(
            array_slice($array, 0, $pos),
            $insert,
            array_slice($array, $pos)
        );
    }
}

require_once '../../db.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ID = $_GET['ID'];
    // echo $ID;
    $sql = $db->prepare("SELECT * FROM  sektoruygulama WHERE sektorID = $ID");						
    $sql->bindParam(':id',$ID, PDO::PARAM_INT);
    
    $sql->execute();
	
		while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
        
		{
            $uygulamaId = $row['uygulamaID'];
            $sql2 = $db->prepare("SELECT * FROM  urunuygulamalari WHERE IsActive=1 AND ID = $uygulamaId ");						
            $sql2->bindParam(':id',$ID, PDO::PARAM_INT);
            
            $sql2->execute();
            
            $item = $sql2->fetch();
            if($lang=='tr'){$uygulamaname=$item['UrunTipiAdi'];}
            elseif($lang=='en'){$uygulamaname=$item['UrunTipiAdiEN'];}
            elseif($lang=='de'){$uygulamaname=$item['UrunTipiAdiDE'];}
            $UrunAdi = $uygulamaname;
            $UrunID = $item['ID'];
            $UrunResmi = $item['UygulamaDetayResim'];
            $slugurunadi=seo2($UrunAdi);
            $deger[] ='<div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12 margin_bottom_30_all">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urunuygulamadetay.php?id=' . $UrunID . '&slug='.$slugurunadi.'"> <img class="img-responsive" src="/images/products/' .$UrunResmi. '" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urunuygulamadetay.php?id=' . $UrunID . '&slug='.$slugurunadi.'">' . $UrunAdi . '</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>';


        }	
          if (!empty($deger)){
            array_insert($deger,0,'<h4>İlişkili Uygulamalar</h4>');
            $sonuc["ok"]  = $deger;
            echo json_encode($sonuc); 
          } else {
            $sonuc["ok"]  = "<h6 style='text-align: center; width: 100%;'>İlişkili ürün bulamadık.</h6>";
            echo json_encode($sonuc); 
          }
      
}
 ?>
