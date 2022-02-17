
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
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ID = $_GET['ID'];
    // echo $ID;
    $sql = $db->prepare("SELECT * FROM urunuygulamalari WHERE ID IN($ID)");						
    $sql->bindParam(':id',$ID, PDO::PARAM_INT);
    $sql->execute();
    $row=$sql->fetch(PDO::FETCH_ASSOC);
    $Urunler=$row['Urunler'];
    $sql2 = $db->prepare("SELECT * FROM urunler WHERE ID IN($Urunler)");						
    $sql2->bindParam(':id',$ID, PDO::PARAM_INT);
    $sql2->execute();
    
    
				     while($row=$sql2->fetch(PDO::FETCH_ASSOC)) 
					{
                        $UrunID = $row['ID'];
                        $UrunAdi = $row['UrunAdi'];
                        $slugurunadi = seo2($UrunAdi);
                        $UrunResmi = $row['UrunResmi'];
                        $deger[] ='<div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=' . $UrunID . '&slug='.$slugurunadi .'"> <img style="height: 50px;transform: scale(2.2);" class="img-responsive" src="/images/products/' .$UrunResmi. '" alt=""> </a></div>
                            <div style="height:80px;" class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=' . $UrunID . '&slug='.$slugurunadi .'">' . $UrunAdi . '</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>';
          }	
          if (!empty($deger)){
            $sonuc["ok"]  = $deger;
            echo json_encode($sonuc); 
          } else {
            $sonuc["ok"]  = "<h6 style='text-align: center; width: 100%;'>İlişkili ürün bulamadık.</h6>";
            echo json_encode($sonuc); 
          }
      
}
 ?>
