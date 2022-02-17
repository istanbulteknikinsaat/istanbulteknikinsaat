<?php
require_once '../../db.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ID = $_GET['ID'];
    $sql = $db->prepare("SELECT * FROM sektorler WHERE id = $ID");						
    $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
    $sql->execute();

				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
             if($lang=='tr'){$sektorname=$row['SektorAdi'];$sektoraciklama=$row['SektorAciklama'];$sektorresim = $row['SektorResim'];}
            elseif($lang=='en'){$sektorname=$row['SektorAdiEN'];$sektoraciklama=$row['SektorAciklamaEN'];$sektorresim = $row['SektorResim'];}
            elseif($lang=='de'){$sektorname=$row['SektorAdiDE'];$sektoraciklama=$row['SektorAciklamaDE'];$sektorresim = $row['SektorResim'];}
            
					{
                        $urunid = $row['id'];
                        $SektorAdi = $sektorname;
                        $SektorResim = $sektorresim;
                        $SektorAciklama = $sektoraciklama;
                      
                    $deger[] ='
                  <div class="row col-xs-12">
                    <div class="col-md-12 col-xs-12">
                      <div class="full">
                        <div class="tab_bar_section" style="margin-top:0;">
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div id="description" class="tab-pane active col-md-12">
                              <div class="product_desc">
                                ' . $SektorAciklama . '
                              </div>
                              <button class="btn main_bt custombtn" onclick="readmore()" id="readMore" style="display:none;margin-bottom: 30px;border-radius:unset;font-weight:unset;min-width:130px;height:30px;line-height:unset;">Devamını
                                    Oku</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          ';
          $deger1[] = $SektorAdi;
          $deger2[] = $SektorResim;
          }	
         
          if (!empty($deger) && !empty($deger1)){
            $sonuc["aciklama"]  = $deger;
            $sonuc["baslik"] = $deger1;
            $sonuc["resim"] = $deger2;

            echo json_encode($sonuc); 
          } else {
            $sonuc["ok"]  = "Sektörler ile ilgili sonuç bulunamadı.";
            echo json_encode($sonuc); 
          }
      
}

 ?>
