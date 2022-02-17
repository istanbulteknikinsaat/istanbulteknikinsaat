<?php
require_once '../../db.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $ID = $_GET['ID'];
    $sql = $db->prepare("SELECT * FROM urunuygulamalari WHERE IsActive=1 AND ID = $ID");						
    $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
    
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
             
					{
            if($lang=='tr'){$uygulamaname=$row['UrunTipiAdi'];$uygulamaaciklama=$row['UrunTipiAciklama'];}
            elseif($lang=='en'){$uygulamaname=$row['UrunTipiAdiEN'];$uygulamaaciklama=$row['UrunTipiAciklamaEN'];}
            elseif($lang=='de'){$uygulamaname=$row['UrunTipiAdiDE'];$uygulamaaciklama=$row['UrunTipiAciklamaDE'];}
			
                        $urunid = $row['ID'];
                        $UrunAdi = $uygulamaname;
                        $UrunKapakResmi = $row['UygulamaKapakResim'];
                        $UrunAciklama = $uygulamaaciklama;
                        $deger6=$row['UrunKatID'];
                        if($deger6=='21'){$backgroundrengi='#338c25';}
                        else if($deger6=='22'){$backgroundrengi='#009ca3';}
                        else if($deger6=='23'){$backgroundrengi='#338b26';}
                        else if($deger6=='24'){$backgroundrengi='#435258';}
                        else if($deger6=='25'){$backgroundrengi='#758573';}
                        else if($deger6=='26'){$backgroundrengi='#a67041';}
                        $deger[] = $UrunAdi;
                        $deger1[] ='
                        <style>
            div#headingFive5{
              background-color: rgb(0 163 224) !important;
            }
            div#headingSix6{
              background-color: rgb(0 163 224) !important;
            }
            div#headingEight8{
              background-color: rgb(0 163 224) !important;
            }
            #headingSix60{
              display:none;
            }
            div#headingSix120{
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
                      <div class="row">
                        <div class="col-md-12">
                          <div class="full">
                            <div style="margin-top:0;" class="tab_bar_section">
                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div id="description" class="urunuygdetail tab-pane active">
                                  <div class="product_desc">
                                    ' . $UrunAciklama . '
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      ';
                      $deger20[] ='
          
          <div class="card">
        <!-- Card header -->
        <div class="card-header" id="headingSix120" data-toggle="modal" data-target="#modalLoginForm11" style="background-color: rgb(0 163 224); cursor:pointer;">
            <h4 class="mb-0">Bilgi Almak İstiyorum</h4>
        </div>
        <div class="modal fade" id="modalLoginForm11" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <p class="modal-title w-100 font-weight-bold">Lütfen formu doldurun.</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                  <div class="md-form mb-4 selectbox">
                  <i class="fas fa-globe prefix"></i>
                        <select id="ulkedurumu" class="form-control" style="width: 50%;margin-left: 35px;"onchange="sehirleraktif(this)">
                          <option value="0" selected>Yurtiçi / Yurtdışı *</option>
                          <option value="Yurtiçi">Yurtiçi</option>
                          <option value="Yurtdışı">Yurtdışı</option>
                        </select>
                        <select id="sehirler" class="form-control" style="width: 50%;margin-left: 35px;display:none;">
                          <option value="0" selected>Şehir Seçiniz *</option>
                          <option value="Adana">Adana</option>
                          <option value="Adıyaman">Adıyaman</option>
                          <option value="Afyonkarahisar">Afyonkarahisar</option>
                          <option value="Ağrı">Ağrı</option>
                          <option value="Amasya">Amasya</option>
                          <option value="Ankara">Ankara</option>
                          <option value="Antalya">Antalya</option>
                          <option value="Artvin">Artvin</option>
                          <option value="Aydın">Aydın</option>
                          <option value="Balıkesir">Balıkesir</option>
                          <option value="Bilecik">Bilecik</option>
                          <option value="Bingöl">Bingöl</option>
                          <option value="Bitlis">Bitlis</option>
                          <option value="Bolu">Bolu</option>
                          <option value="Burdur">Burdur</option>
                          <option value="Bursa">Bursa</option>
                          <option value="Çanakkale">Çanakkale</option>
                          <option value="Çankırı">Çankırı</option>
                          <option value="Çorum">Çorum</option>
                          <option value="Denizli">Denizli</option>
                          <option value="Diyarbakır">Diyarbakır</option>
                          <option value="Edirne">Edirne</option>
                          <option value="Elazığ">Elazığ</option>
                          <option value="Erzincan">Erzincan</option>
                          <option value="Erzurum">Erzurum</option>
                          <option value="Eskişehir">Eskişehir</option>
                          <option value="Gaziantep">Gaziantep</option>
                          <option value="Giresun">Giresun</option>
                          <option value="Gümüşhane">Gümüşhane</option>
                          <option value="Hakkâri">Hakkâri</option>
                          <option value="Hatay">Hatay</option>
                          <option value="Isparta">Isparta</option>
                          <option value="Mersin">Mersin</option>
                          <option value="İstanbul">İstanbul</option>
                          <option value="İzmir">İzmir</option>
                          <option value="Kars">Kars</option>
                          <option value="Kastamonu">Kastamonu</option>
                          <option value="Kayseri">Kayseri</option>
                          <option value="Kırklareli">Kırklareli</option>
                          <option value="Kırşehir">Kırşehir</option>
                          <option value="Kocaeli">Kocaeli</option>
                          <option value="Konya">Konya</option>
                          <option value="Kütahya">Kütahya</option>
                          <option value="Malatya">Malatya</option>
                          <option value="Manisa">Manisa</option>
                          <option value="Kahramanmaraş">Kahramanmaraş</option>
                          <option value="Mardin">Mardin</option>
                          <option value="Muğla">Muğla</option>
                          <option value="Muş">Muş</option>
                          <option value="Nevşehir">Nevşehir</option>
                          <option value="Niğde">Niğde</option>
                          <option value="Ordu">Ordu</option>
                          <option value="Rize">Rize</option>
                          <option value="Sakarya">Sakarya</option>
                          <option value="Samsun">Samsun</option>
                          <option value="Siirt">Siirt</option>
                          <option value="Sinop">Sinop</option>
                          <option value="Sivas">Sivas</option>
                          <option value="Tekirdağ">Tekirdağ</option>
                          <option value="Tokat">Tokat</option>
                          <option value="Trabzon">Trabzon</option>
                          <option value="Tunceli">Tunceli</option>
                          <option value="Şanlıurfa">Şanlıurfa</option>
                          <option value="Uşak">Uşak</option>
                          <option value="Van">Van</option>
                          <option value="Yozgat">Yozgat</option>
                          <option value="Zonguldak">Zonguldak</option>
                          <option value="Aksaray">Aksaray</option>
                          <option value="Bayburt">Bayburt</option>
                          <option value="Karaman">Karaman</option>
                          <option value="Kırıkkale">Kırıkkale</option>
                          <option value="Batman">Batman</option>
                          <option value="Şırnak">Şırnak</option>
                          <option value="Bartın">Bartın</option>
                          <option value="Ardahan">Ardahan</option>
                          <option value="Iğdır">Iğdır</option>
                          <option value="Yalova">Yalova</option>
                          <option value="Karabük">Karabük</option>
                          <option value="Kilis">Kilis</option>
                          <option value="Osmaniye">Osmaniye</option>
                          <option value="Düzce">Düzce</option>
                        </select>
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="defaultForm-username1" name="name"
                            placeholder="İsim Soyisim *" class="form-control">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="text" id="defaultForm-email1" name="email"
                            placeholder="E-posta Adresiniz *" class="form-control">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-building prefix"></i>
                        <input type="text" id="defaultForm-companyname1" name="companyname"
                            placeholder="Firma Adınız" class="form-control">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-briefcase prefix"></i>
                        <input type="text" id="defaultForm-gorevname1" name="gorevname"
                            placeholder="Göreviniz" class="form-control">
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-phone prefix"></i>
                        <input type="number" id="defaultForm-telephone1" name="phone"
                            placeholder="Telefon Numaranız *" class="form-control">
                    </div>
                    <div id="download" class="modal-footer d-flex justify-content-center">
                        <button id="checkinfo" onclick="bizSiziArayalim()"
                            class="btn sqaure_bt">Gönder</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';
                    $deger2[] = $UrunKapakResmi;
                    $sql2 = $db->prepare("SELECT * FROM urunuygulamalari WHERE IsActive=1 AND ID = $deger6");						
                    $sql2->bindParam(':ID',$ID, PDO::PARAM_INT);
                    $sql2->execute();
                  while($row=$sql2->fetch(PDO::FETCH_ASSOC)) 
                {
                    $uygulamakategori=$row['UrunTipiAdi'];
                }
          }	
          if (!empty($deger) && !empty($deger1) && !empty($deger2)){
            $sonuc["baslik"]  = $deger;
            $sonuc["icerik"] = $deger1;
            $sonuc["resim"] = $deger2;
            $sonuc["ulasimform"]=$deger20;
            $sonuc["uygulamakategori"] = $uygulamakategori;
            echo json_encode($sonuc); 
          } else {
            $sonuc["ulasimform"]=$deger20;
            $sonuc["uygulamakategori"] = $uygulamakategori;
            $sonuc["ok"]  = "uzgunuz.";
            echo json_encode($sonuc); 
          }
}
 ?>
