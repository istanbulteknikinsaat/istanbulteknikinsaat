<?php
require_once '../../db.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];

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
    $sql = $db->prepare("SELECT * FROM urunler WHERE ID = $ID AND lang='$lang'");						
    $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
    
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
                        $urunid = $row['ID'];
                        $UrunAdi = $row['UrunAdi'];
                        $KisaAciklama= $row['UrunKisaAciklama'];
                        $UrunResmi = $row['UrunResmi'];
                        $UrunKapakResmi = $row['UrunResmi'];
                        $UrunAciklama = $row['UrunAciklama'];
                        $UrunSatinAlmaLink= $row['UrunSatinAlmaUrl'];
                        $deger[] = $UrunAdi;

                        $deger6=$row['UrunKatID'];
          /* $filename="images/products/$UrunResmi";
          list($width, $height, $type, $attr) = getimagesize("images/products/$UrunResmi"); */
          $sql2 = $db->prepare("SELECT * FROM urunkategorileri WHERE ID = $deger6");						
          $sql2->bindParam(':ID',$ID, PDO::PARAM_INT);
          $sql2->execute();
                   while($row=$sql2->fetch(PDO::FETCH_ASSOC)) 
                {
                  if($deger6=='5'){$backgroundrengi='#435258';}
                  else if($deger6=='6'){$backgroundrengi='#758573';}
                  $urunkategori=$row['pid'];
                  $urunkategori1id=$row['id'];
                  $urunkategori1=$row['kategoriAdi'];
                }
                if( $urunkategori != '0'){
          $sql3 = $db->prepare("SELECT * FROM urunkategorileri WHERE ID = $urunkategori");	
          $sql3->bindParam(':ID',$ID, PDO::PARAM_INT);
          $sql3->execute();}
          else{
            if($urunkategori1 == ' Asfalt Ürünleri'){
              $sql3 = $db->prepare("SELECT * FROM urunkategorileri WHERE kategoriAdi = ' Asfalt Ürünleri'");	
              $sql3->bindParam(':ID',$ID, PDO::PARAM_INT);
              $sql3->execute();}
            
            else{
              $sql3 = $db->prepare("SELECT * FROM urunkategorileri WHERE kategoriAdi = 'Beton Ürünleri'");	
              $sql3->bindParam(':ID',$ID, PDO::PARAM_INT);
              $sql3->execute();
            }
          }
                    while($row=$sql3->fetch(PDO::FETCH_ASSOC)) 
                {
                  $urunkategori2id=$row['id'];
                  $urunkategori2=$row['kategoriAdi'];
                
                  if($urunkategori2id=='2'){$backgroundrengi='#338c25'; $backgroundurl="/images/products/kapakresim/geosentetikbannersablon.png"; $imageheight="100%";$right="-30px";$bottom="0px";}
                  else if($urunkategori2id=='3'){$backgroundrengi='#009ca3';$backgroundurl="/images/products/kapakresim/yalitimbannersablon.png"; $imageheight="90%";$right="20px";$bottom="20px";}
                  else if($urunkategori2id=='4'){$backgroundrengi='#338b26';$backgroundurl="/images/products/kapakresim/geosentetikbannersablon.png"; $imageheight="100%";$right="0px";$bottom="0px";}
                  else if($urunkategori2id=='5'){$backgroundrengi='#435258';$backgroundurl="/images/products/kapakresim/asfaltbannersablon.png"; $imageheight="100%";$right="0px";$bottom="0px";}
                  else if($urunkategori2id=='6'){$backgroundrengi='#758573';$backgroundurl="/images/products/kapakresim/betonbannersablon.png"; $imageheight="100%";$right="0px";$bottom="0px";}
                  else if($urunkategori2id=='7'){$backgroundrengi='#a67041';$backgroundurl="/images/products/kapakresim/mermerbannersablon.png"; $imageheight="100%";$right="0px";$bottom="0px";}
                 
                }      
              
          $deger2[] = '
             <img class="urunlerimg" src="/images/products/'.$UrunResmi.'">

          ';
                    
          
            $deger1[] ='
            <style>
            .my-product-details-header img{
              height:'.$imageheight.' !important;
              right:'.$right.' !important;
              bottom:'.$bottom.' !important;
              z-index:-1;
            }
            .my-product-details-header.lefttoright{
              background:url('.$backgroundurl.');
            }
            div#headingFive5{
              background-color: rgb(0 163 224) !important;
            }
            div#headingSix6{
              background-color: rgb(0 163 224) !important;
            }
            
            .card-header{
              background-color:'.$backgroundrengi.' !important;
            }
            #description h4{
              color: #ffffff !important;
            }
            .product_detail .tab_bar_section ul.nav.nav-tabs li a.active{
              background: '.$backgroundrengi.' !important;
            }
            </style>
                  <div class="row col-xs-12">
                    <div class="col-md-12 col-xs-12">
                      <div class="full">
                        <div class="tab_bar_section">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Ürün Tanıtımı</a> </li>
                            <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews">Yorumlar</a> </li> -->
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div id="description" class="tab-pane active col-md-12">
                            <div class="row col-xs-12">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 product_detail_side">
                              <div class="shortdesc">
                                <p>' . $KisaAciklama . '</p>
                              </div>
                            </div>
                          </div>
                              <div class="product_desc">
                                ' . $UrunAciklama . '
                              </div>
                            </div>
                        </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          ';
          
          
          }	

          if (!empty($deger) && !empty($deger1) && !empty($deger2)){

            $sonuc["baslik"]  = $deger;
            $sonuc["icerik"] = $deger1;
            $sonuc["resim"] = $deger2;
            $slugkategori1 = seo2($urunkategori1);
            $slugkategori2 = seo2($urunkategori2);
            if($slugkategori2=="geosentetikler"){$slugkategori2="geosentetik";}
            else if($slugkategori2=="yalitim-urunleri"){$slugkategori2="yapikoruma";}
            else if($slugkategori2=="yesil-cati-sistemleri"){$slugkategori2="yesilcati";}
            else if($slugkategori2=="asfalt-urunleri"){$slugkategori2="asfalt";}
            else if($slugkategori2=="beton-urunleri"){$slugkategori2="beton";}
            else if($slugkategori2=="mermer-urunleri"){$slugkategori2="mermer";}
            $sonuc["urunkategori1"] = $urunkategori1;
            $sonuc["urunkategori1slug"] = $slugkategori1;
            $sonuc["urunkategori1id"] = $urunkategori1id;
            $sonuc["urunkategori2"] = $urunkategori2;
            $sonuc["urunkategori2slug"] = $slugkategori2;
            $sonuc["urunkategori2id"] = $urunkategori2id;
            echo json_encode($sonuc);
          } else {

            $sonuc["ok"]  = "uzgunuz.";
            $sonuc["urunkategori1"] = $urunkategori1;
            $sonuc["urunkategori1slug"] = $slugkategori1;
            $sonuc["urunkategori1id"] = $urunkategori1id;
            $sonuc["urunkategori2"] = $urunkategori2;
            $sonuc["urunkategori2slug"] = $slugkategori2;
            $sonuc["urunkategori2id"] = $urunkategori2id;
            echo json_encode($sonuc); 
          }
      
}
 ?>
