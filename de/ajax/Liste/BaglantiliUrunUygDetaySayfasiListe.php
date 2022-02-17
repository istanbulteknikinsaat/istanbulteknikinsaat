
<?php
require_once '../../db.php';
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
                        $UrunResmi = $row['UrunResmi'];
                        $deger[] ='<div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=' . $UrunID . '"> <img style="height: 50px;transform: scale(2.2);" class="img-responsive" src="/images/products/' .$UrunResmi. '" alt=""> </a></div>
                            <div style="height:80px;" class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=' . $UrunID . '">' . $UrunAdi . '</a></h4>
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
