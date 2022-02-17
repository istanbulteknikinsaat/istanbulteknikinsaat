<?php 
require_once 'inc/header.php'; 
require_once 'db.php';
if(isset($_GET['id'])){
  $ID=$_GET['id'];}
?>

<body id="default_theme" class="it_shop_detail">
    <style>
      .accordion .card:not(:first-of-type) .card-header:first-child{
        border-radius:1rem !important;
      }
      .product_detail_btm {
    height: 60px;
}
      .sidekick {
  position: relative;
  border-left: 0.2em solid #039be5;

  font-weight: 100;
}
        .card{
            border-radius: 1rem !important;
            margin-top: 20px !important;
        }
        .card-header{
            border-bottom:0px;
        }
    </style>
  <!-- loader -->
  <div class="bg_load"> <img class="loader_animation" src="../images/loaders/loader_1.png" alt="#" /> </div>
  <!-- end loader -->

  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Uygulama Detay Sayfası</h1>
                <ol class="breadcrumb">
                  <li><a href="index.html">Anasayfa</a></li>
                  <li class="active">Uygulama Detay Sayfası</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 product_detail">
    <div class="container">
      <div class="row">
        <div class="col-md-3 urunleracordion">
          <div class="side_bar">
            
            <div class="side_bar_blog">
              <div class="card" style="margin-top: 50px !important;">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headinggOne1" style="background-color: rgb(0 163 224);">
                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseeOne1" aria-expanded="true" aria-controls="collapseeOne1" class="">
                    <h4 class="mb-0" style="color: white;">
                      ÜRÜNLERİMİZ <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseeOne1" class="collapse show" role="tabpanel" aria-labelledby="headinggOne1" data-parent="#accordionEx" style="">
                  <div class="card-body">
                    <ul class="categary">
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Geosentetik
                          Ürünleri</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yalıtım
                          Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yeşil Çatı
                          Ürünleri</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Asfalt
                          Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=6&name=geoarme&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Beton Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=beton&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Mermer Ürünleri</a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="side_bar_blog">
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headinggTwo2" style="background-color: rgb(0 163 224);">
                  <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseeTwo2"
                    aria-expanded="false" aria-controls="collapseeTwo2">
                    <h4 class="mb-0" style="color: white;">
                      UYGULAMALARIMIZ <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseeTwo2" class="collapse show" role="tabpanel" aria-labelledby="headinggTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <ul class="categary">
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Geosentetik
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yalıtım
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yeşil Çatı
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Asfalt
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=6&name=geoarme&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Beton
                          Uygulamaları</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=beton&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Mermer
                          Uygulamaları</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="side_bar_blog">
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headinggThree3" style="background-color: rgb(0 163 224);">
                  <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseeThree3"
                    aria-expanded="false" aria-controls="collapseeThree3">
                    <h4 class="mb-0" style="color: white;">
                      SEKTÖRLERİMİZ <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseeThree3" class="collapse" role="tabpanel" aria-labelledby="headinggThree3"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <ul class="categary">
                      <?php
                      require_once 'db.php'; 
                      $sql = $db->prepare("SELECT * FROM sektorler");						
                      $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
                      $sql->execute();
                      while ( $row=$sql->fetch(PDO::FETCH_ASSOC) )
                      {
                        $sektorID = $row['id'];
                        $sektorAdi = $row['SektorAdi'];
                        echo "<li><a href='sektorlerdetay.php?id=" . $sektorID . "&iliski=sektorler#chooseRelate'><i class='fa fa-angle-right'></i>" . $sektorAdi . "</a></li>";
                      }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="urundetay" class="col-md-9">
        <div class="row">
                        <div class="col-md-12">
                          <div class="full">
                            <div style="margin-top:0;" class="tab_bar_section">
                              <!-- Tab panes -->
                              <div class="tab-content">
                                <div id="description" class="urunuygdetail tab-pane active">
                                  <div class="product_desc">
                                  <blockquote class="sidekick">
                                  Donatılı dolgu uygulamaları zeminin içerisine kademeli olarak yerleştirilen Fortex tek yönlü geogrid, ForTex GS geoşerit ve ForCell geohücre gibi donatılar ile dik ve dike yakın eğimlerde dolgunun durabilmesini sağlayan geleneksel istinat duvarlarına muadil çözümler ve kullanılan alana göre geoşev çözümleri sunmaktadır. Dolgunun yatayla açısı 45-70 aralığında olduğunda Geosentetik Donatılı Şev  (GeoŞev) GeoArme Slope ve 70-90 aralığında olduğunda Geosentetik Donatılı Dolgu Duvar GeoArme olarak adlandırılır. İstanbul Teknik malzeme temini,  projelendirme ve uygulama hizmetleri sunmaktadır. 

                                   </blockquote>
                                   <blockquote class="sidekick2" style=" border-right: 0.2em solid #039be5;">
                                  Donatılı dolgu uygulamaları zeminin içerisine kademeli olarak yerleştirilen Fortex tek yönlü geogrid, ForTex GS geoşerit ve ForCell geohücre gibi donatılar ile dik ve dike yakın eğimlerde dolgunun durabilmesini sağlayan geleneksel istinat duvarlarına muadil çözümler ve kullanılan alana göre geoşev çözümleri sunmaktadır. Dolgunun yatayla açısı 45-70 aralığında olduğunda Geosentetik Donatılı Şev  (GeoŞev) GeoArme Slope ve 70-90 aralığında olduğunda Geosentetik Donatılı Dolgu Duvar GeoArme olarak adlandırılır. İstanbul Teknik malzeme temini,  projelendirme ve uygulama hizmetleri sunmaktadır. 

                                   </blockquote>
    <img src="../images/products/istinatduvari.png" alt=""> <br>
    <h4>Kullanım Amaçları</h4>
    <ul class="subpage-full-list" style="border-radius: 20px;  padding: 10px;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%); margin-left: 5px;
">
        <li>Köprü yaklaşımları</li>
        <li>Vadi Geçişleri (Viyadük yerine)</li>
        <li>Maden Atık Sahaları ve Gölet Gibi Sedde Yapımı ve Yükseltmeleri</li>
        <li>Peyzaj Duvarları ve Şevleri</li>
        <li>Yol Genişletmeleri</li>
        <li>Şev Dikleştirmeleri </li>
        <li>Maden Sahalarında Yükleme Rampası Yapımı</li>
    </ul>
    <p> <br><br> Donatılı dolgu için farklı donatı tipi ve ön yüz seçenekleri için aşağıdaki tipleri inceleyebilirsiniz.
    
    </p>
    <!--Accordion wrapper-->
    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
        <!-- Accordion card -->
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingOne1">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                    <h4 class="mb-0">
                        <i class="fas fa-plus"></i>
                        GeoArme RetainBlock 
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                <div class="card-body">
                    <p>RetainBlock geogrid donatılı duvarların ön yüzü olarak kullanılmaktadır. Ayrıca mevcut çeşitli tip
                        istinat duvarlarının kaplanması için veya demir donatı kullanılarak bahçe duvarı gibi mimari istinat
                        duvarları oluşturmakta kullanılmaktadır. Su kenarında yapılan yapılarda şantiyede prekast olarak
                        ıslak betonla üretilen büyük blok elemanlar ile çeşitli çözümler üretmek mümkündür. RetainBlock
                        sisteminin elemanları çok farklı şekil ve renklerde seçilebilmektedir.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                    <h4 class="mb-0">
                    <i class="fas fa-plus"></i>

                        GeoArme PotBlock <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                <div class="card-body">
                    <p>Saksı şeklinde beton blokların ön yüz elemanı olarak kullanılarak ve geriye
                        ötelenerek yerleştirilme metodu ile açılı duvarlar yapılabilmektedir. Bu blokların
                        saksı boşluklarına elle dikim veya nebati toprak koyularak tohumlama ile
                        yeşillenmesi sağlanmaktadır. Blokların şekil ve birleşim yöntemi gereği dairesel
                        duvar dönüşleri oluşturulabilmektedir.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingThree3">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                    <h4 class="mb-0">
                    <i class="fas fa-plus"></i>

                        GeoArme WrapGrid <!-- <i class="fas fa-angle-down rotate-icon"></i> -->
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                <div class="card-body">
                    <p>Ön yüz elemanı geogrid olan bu tip duvarlarda iki taşıyıcı geogrid arasında
                        kalan dolgu, geogridin geriye doğru bohçalanması ile tutulmaktadır. Geogrid
                        taşıyıcı hale gelinceye kadar ön yüzeyi dolgu yapılması sırasında tutacak
                        çelik hasır (WrapMesh), kalıp (WrapMold) veya toprak dolu küçük geotorbalar
                        (WrapBag) kullanılmaktadır. Geogrid, toprak tutucu, geotorba vb. elemanlar
                        bitkilerin çıkmasına veya su ile tohumlanmaya (Hydroseeding) imkan sağlar.
                        Geogridin iç kısmında kullanılan toprak tutucu veya bitki tutucu olarak da
                        adlandırılan bu duvarların ön yüzünü bitki kökleri ve yeşil uzantılar yapı
                        ömrü boyunca geogrid ile birlikte korunur.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingFour4">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                    <h4 class="mb-0">
                    <i class="fas fa-plus"></i>

                        GeoArme CellFace <!-- <i class="fas fa-angle-down rotate-icon"></i> -->
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4" data-parent="#accordionEx">
                <div class="card-body">
                    <p>GeoHücre'lerin ön yüz elemanı olarak kullanılarak ve geriye ötelenerek
                        yerleştirilme metodu ile açılı duvarlar yapılabilmektedir. Bu hücrelerin
                        saksı boşluklarına elle dikim veya nebati toprak koyularak tohumlama ile
                        yeşillenmesi sağlanmaktadır. Kullanılan geohücre malzeme ile esnek ve
                        dayanıklı bir ön yüz oluşturmaktadır.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingFive5">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                    <h4 class="mb-0">
                    <i class="fas fa-plus"></i>

                        GeoArme HexMesh <!-- <i class="fas fa-angle-down rotate-icon"></i> -->
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordionEx">
                <div class="card-body">
                    <p>GeoArme duvarların yapımı tamamlandığı andan itibaren güzel bir görünüm
                        vermesi ve sonrasında yeşillenmesi istendiğinde ön yüz elemanı olarak
                        hasır çelik, toprak tutucu (file, geotekstil, geokompozit, geomat, cocomat)
                        katman ve altıgen çift büklüm tel örgü ile imal edilen bir eleman
                        kullanılmaktadır. Bu eleman geogrid ile birlikte çalışarak dolgu yapılması
                        aşamasında ve sonrasında dolgu kademesinin tutulmasını temin eder. Duvar
                        ön yüzü ister tek ister basamaklı yapılarak çeşitli peyzaj amaçlarına
                        hizmet etmektedir.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingSix6">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                    <h4 class="mb-0">
                    <i class="fas fa-plus"></i>

                        GeoArme Panel <!-- <i class="fas fa-angle-down rotate-icon"></i> -->
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6" data-parent="#accordionEx">
                <div class="card-body">
                    <p>Dik GeoArme yapmanın başka bir metodu olarak ön yüz elemanı olarak
                        klasik toprakarme panelleri ile geogridlerin veya polimer şeritlerin
                        birleştirilerek uygulanmasıdır. Bu sistem çelik şeritlere alternatif
                        bir uygulama olup aktif zeminlerin oluşturduğu korozyon problemlerine
                        çözüm oluşturur. Panellerin şantiyede üretilmesi beton blok üretiminin
                        uzak mesafede olduğu şantiyeler için iyi bir seçenek olabilmektedir.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingSeven7">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                    <h4 class="mb-0">
                    <i class="fas fa-plus"></i>

                        GeoArme Combine <!-- <i class="fas fa-angle-down rotate-icon"></i> -->
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7" data-parent="#accordionEx">
                <div class="card-body">
                    <p>GeoArme duvarlarının çeşitli tipleri birlikte kullanılarak projenin ihtiyaç
                        duyduğu çözüm oluşturulabilir. Bu çözüm imalat alanı, altındaki ve üstündeki
                        yapılar, estetik talepler, fonksiyonellik dikkate alınarak işveren ile birlikte
                        oluşturulmaktadır.
                    </p>
                </div>
            </div>
        </div>
        <!-- Indirme Karti-->
        <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingEight8" style="background-color: rgb(0 163 224);">
                <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseEight8" aria-expanded="false" aria-controls="collapseEight8">
                    <h4 class="mb-0" style="color: white;">
                        Broşür/Teknik Döküman/Bilgi almak istiyorum <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8" data-parent="#accordionEx">
                <div class="card-body">
                    <ul class="subpage-full-list">
                        <li><p>Size ulaşmamızı isterseniz lütfen <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalLoginForm1">tıklayın</a></p></li>
                            <div class="modal fade" id="modalLoginForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Lütfen formu doldurun.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-4">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="defaultForm-username1" name="name" placeholder="İsim Soyisim" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="defaultForm-email1" name="email" placeholder="Eposta Adresiniz" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-building prefix"></i>
                                            <input type="text" id="defaultForm-companyname1" name="companyname" placeholder="Firma Adınız" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-phone prefix"></i>
                                            <input type="number" id="defaultForm-telephone1" name="phone" placeholder="Telefon Numaranız" class="form-control">
                                        </div>
    
                                        <div id="download" class="modal-footer d-flex justify-content-center">
                                            <button id="checkinfo" onclick="bizSiziArayalim()" class="btn sqaure_bt">Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li><p>Ürün broşürünü indirmek için <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalLoginForm">tıklayın</a></p></li>
                        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Lütfen formu doldurun.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-4">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="defaultForm-username" name="name" placeholder="İsim Soyisim" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="defaultForm-email" name="email" placeholder="Eposta Adresiniz" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-building prefix"></i>
                                            <input type="text" id="defaultForm-companyname" name="companyname" placeholder="Firma Adınız" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-phone prefix"></i>
                                            <input type="number" id="defaultForm-telephone" name="phone" placeholder="Telefon Numaranız" class="form-control">
                                        </div>
    
                                        <div id="download" class="modal-footer d-flex justify-content-center">
                                            <button id="checkinfo" onclick="sendAndDownloadPdf()" class="btn sqaure_bt">Gönder ve indir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li><p>Teknik döküman indirmek için <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalLoginForm">tıklayın</a></p></li>
                            <div class="modal fade" id="modalLoginForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Lütfen formu doldurun.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-4">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="defaultForm-username2" name="name" placeholder="İsim Soyisim" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="defaultForm-email2" name="email" placeholder="Eposta Adresiniz" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-building prefix"></i>
                                            <input type="text" id="defaultForm-companyname2" name="companyname" placeholder="Firma Adınız" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-phone prefix"></i>
                                            <input type="number" id="defaultForm-telephone2" name="phone" placeholder="Telefon Numaranız" class="form-control">
                                        </div>
    
                                        <div id="download" class="modal-footer d-flex justify-content-center">
                                            <button id="checkinfo" onclick="tdsIndirme()" class="btn sqaure_bt">Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                                  </div>
                                  <button class="btn main_bt custombtn" onclick="readmore()" id="readMore" style="display: inline; margin-bottom: 30px; border-radius: unset; font-weight: unset; min-width: 130px; height: 30px; line-height: unset;">Devamını
                                        Oku</button>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
        </div>
        <div id="urunler" class="col-md-12" style="border-top: 1px solid #039be5; border-bottom: 1px solid #039be5;">
        <h4 style="text-align:center;">İlişkili Ürünler</h4><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=13"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=13"> ForTex GG Tek Yönlü Geogrid</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=38"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=38"> GeoHücre Erozyon Kontrol Ürünleri</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=127"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=127">ForTex GS FS Geoşeritler</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=128"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=128">ForTex GS FN Geoşeritler</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=129"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=129">ForTex GS FW Geoşeritler</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>                        
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->

  <?php require_once 'inc/footer.php'; ?>
</body>
<script>
  var id=<?= $ID  ?>;
    $(document).ready(function () {
      if (id !== null && id !== "") {
        SonucGoruntule();
        setTimeout(() => {
          checkReadMore();
        }, 100);
        UrunListele();
      } else {
        document.location.href = "/";
      }
    });

   

    function SonucGoruntule() {
      $.ajax({
        url: "../../ajax/Liste/BaglantiliUygulamaDetaySayfasiListe.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {
          cevap = jQuery.parseJSON(response);
          if (cevap.baslik[0].indexOf("ve") > 0) {
            str1 = cevap.baslik[0].split("ve")[0];
            str2 = cevap.baslik[0].split("ve")[1];
            baslik = str1.concat('ve <br>', str2);
            $("h1.page-title").html(baslik);
            jQuery("ol.breadcrumb li.active").text(cevap.baslik);
          } else {
            $("h1.page-title").text(cevap.baslik);
            jQuery("ol.breadcrumb li.active").text(cevap.baslik);
          }

          $("#urundetay").append(cevap.icerik);
          if (cevap.resim[0] !== "") {
            $("#inner_banner").css('background', 'url(/images/products/' + cevap.resim[0] +
              ')  50% 50% / cover');
          }
        },
        error: function (xhr) {
          $("#urundetay").append(xhr);
        }
      });
    }

    function UrunListele() {
      $.ajax({
        url: "../../ajax/Liste/BaglantiliUrunUygDetaySayfasiListe.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {
          cevap = jQuery.parseJSON(response);
          $("#urunler").append("<h4>İlişkili Ürünler</h4>");
          $("#urunler").append(cevap.ok);
        },
        error: function (xhr) {
          $("#urunler").append(xhr);
        }
      });
    }

    function readmore() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("readMore");
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Devamı";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Daha Az";
        moreText.style.display = "inline-block";
      }
    };

    function checkReadMore() {
      if (jQuery("#description .product_desc").height() >= 40) {
        document.getElementById("readMore").style.display = "inline";
        document.getElementById("dots").style.display = "inline";
      }
    }

    $(document).ready(function () {
      var select = $(".anagrup");
      var cozumisim = "";
      window.arr = [];
      for (var i = 0; i < select.length; i++) {
        arr.push(select[i]);
        if (arr[i].text.indexOf("Geosentetik") > 0) {
          cozumIsim = "&name=geosentetik";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Çatı") > 0) {
          cozumIsim = "&name=yesilcati";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Yalıtım") > 0) {
          cozumIsim = "&name=yapikoruma";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Asfalt") > 0) {
          cozumIsim = "&name=yolbakim";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Beton") > 0) {
          cozumIsim = "&name=geoarme";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Mermer") > 0) {
          cozumIsim = "&name=beton";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
      }
    });

    var acordion = document.getElementsByClassName('accordion');

var i;
var len = acordion.length;
for(i = 0; i<len; i++){
    acordion[i].addEventListener('click', function(){
        this.classList.toggle('active');
        var panal = this.nextElementSibling;
        if(panal.style.maxHeight){
            panal.style.maxHeight = null;
        }else{
            panal.style.maxHeight = panal.scrollHeight + 'px';
        }
    })
}
  </script>
</html>