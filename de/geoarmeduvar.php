<?php 
require_once 'inc/header.php'; 
require_once 'db.php';
if(isset($_GET['id'])){
  $ID=$_GET['id'];}
?>

<body id="default_theme" class="it_shop_detail">
    <style>
      #about-us #about-intro{margin-bottom:50px;}
#urundetay #arablock blockquote{position:relative; margin:0; padding:0;}
#urundetay #arablock blockquote p{margin:0; padding:0 0 0 60px; font-size:22px; font-style:italic; line-height:1.6em;}
#urundetay #arablock blockquote p span{position:absolute;left:0; font-size:120px; line-height:.8em;}

      .accordion .card:not(:first-of-type) .card-header:first-child{
        border-radius:1rem !important;
      }
      .product_detail_btm {
    height: 60px;
}
      .sidekick {
  position: relative;
  font-weight: 100;
}
        .card{
            border-radius: 1rem !important;
            margin-top: 20px !important;
        }
        .card-header{
            border-bottom:0px;
        }
        #inner_banner{
          background:url('/images/products/istinatduvarikapak.jpg')50% 50% / cover;
        }
    </style>
  <!-- loader -->
  <!-- end loader -->

  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">GeoArme Duvar </h1>
                <ol class="breadcrumb">
                  <li><a href="/">Anasayfa</a></li>
                  <li class="active">GeoArme Duvar </li>
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
                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseeOne1" aria-expanded="false" aria-controls="collapseeOne1" class="">
                    <h4 class="mb-0" style="color: white;">
                      ??R??NLER??M??Z <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseeOne1" class="collapse" role="tabpanel" aria-labelledby="headinggOne1" data-parent="#accordionEx" style="">
                  <div class="card-body">
                    <ul class="categary">
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Geosentetik
                          ??r??nleri</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yal??t??m
                          ??r??nleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Ye??il ??at??
                          ??r??nleri</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Asfalt
                          ??r??nleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=6&name=geoarme&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Beton ??r??nleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=beton&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Mermer ??r??nleri</a>
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
                <div id="collapseeTwo2" class="collapse" role="tabpanel" aria-labelledby="headinggTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <ul class="categary">
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Geosentetik
                          Uygulamalar??</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yal??t??m
                          Uygulamalar??</a></li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Ye??il ??at??
                          Uygulamalar??</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Asfalt
                          Uygulamalar??</a></li>
                      <li><a href="/tr/cozumler.php?id=6&name=geoarme&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Beton
                          Uygulamalar??</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=beton&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Mermer
                          Uygulamalar??</a>
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
                      SEKT??RLER??M??Z <i class="fas fa-angle-down rotate-icon"></i>
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
                                 <p> Donat??l?? dolgu uygulamalar?? zeminin i??erisine kademeli olarak yerle??tirilen Fortex tek y??nl?? geogrid, ForTex GS geo??erit ve ForCell geoh??cre gibi donat??lar ile dik ve dike yak??n e??imlerde dolgunun durabilmesini sa??layan geleneksel istinat duvarlar??na muadil ????z??mler ve kullan??lan alana g??re geo??ev ????z??mleri sunmaktad??r. Dolgunun yatayla a????s?? 45-70 aral??????nda oldu??unda Geosentetik Donat??l?? ??ev  (Geo??ev) GeoArme Slope ve 70-90 aral??????nda oldu??unda Geosentetik Donat??l?? Dolgu Duvar GeoArme olarak adland??r??l??r. ??stanbul Teknik malzeme temini,  projelendirme ve uygulama hizmetleri sunmaktad??r. </p>
                                 <br>
                                 <p> Donat??l?? dolgu uygulamalar?? zeminin i??erisine kademeli olarak yerle??tirilen Fortex tek y??nl?? geogrid, ForTex GS geo??erit ve ForCell geoh??cre gibi donat??lar ile dik ve dike yak??n e??imlerde dolgunun durabilmesini sa??layan geleneksel istinat duvarlar??na muadil ????z??mler ve kullan??lan alana g??re geo??ev ????z??mleri sunmaktad??r. Dolgunun yatayla a????s?? 45-70 aral??????nda oldu??unda Geosentetik Donat??l?? ??ev  (Geo??ev) GeoArme Slope ve 70-90 aral??????nda oldu??unda Geosentetik Donat??l?? Dolgu Duvar GeoArme olarak adland??r??l??r. ??stanbul Teknik malzeme temini,  projelendirme ve uygulama hizmetleri sunmaktad??r. </p>
                                   </blockquote>
    <img src="../images/products/istinatduvari.png" alt=""> <br>
    <h4>Kullan??m Ama??lar??</h4>
    <ul class="subpage-full-list" style="border-radius: 20px;  padding: 10px;  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%); margin-left: 5px;
">
        <li>K??pr?? yakla????mlar??</li>
        <li>Vadi Ge??i??leri (Viyad??k yerine)</li>
        <li>Maden At??k Sahalar?? ve G??let Gibi Sedde Yap??m?? ve Y??kseltmeleri</li>
        <li>Peyzaj Duvarlar?? ve ??evleri</li>
        <li>Yol Geni??letmeleri</li>
        <li>??ev Dikle??tirmeleri </li>
        <li>Maden Sahalar??nda Y??kleme Rampas?? Yap??m??</li>
    </ul><br><br>
    <!-- <div class="arablock"  id="arablock"><br><br>
    <blockquote>
            <p><span>???</span>  Donat??l?? dolgu i??in farkl?? donat?? tipi ve ??n y??z se??enekleri i??in a??a????daki tipleri inceleyebilirsiniz.</p>
          </blockquote></div> -->
    <p> <br><br> Donat??l?? dolgu i??in farkl?? donat?? tipi ve ??n y??z se??enekleri i??in a??a????daki tipleri inceleyebilirsiniz.
     
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
                    <p>RetainBlock geogrid donat??l?? duvarlar??n ??n y??z?? olarak kullan??lmaktad??r. Ayr??ca mevcut ??e??itli tip
                        istinat duvarlar??n??n kaplanmas?? i??in veya demir donat?? kullan??larak bah??e duvar?? gibi mimari istinat
                        duvarlar?? olu??turmakta kullan??lmaktad??r. Su kenar??nda yap??lan yap??larda ??antiyede prekast olarak
                        ??slak betonla ??retilen b??y??k blok elemanlar ile ??e??itli ????z??mler ??retmek m??mk??nd??r. RetainBlock
                        sisteminin elemanlar?? ??ok farkl?? ??ekil ve renklerde se??ilebilmektedir.
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
                    <p>Saks?? ??eklinde beton bloklar??n ??n y??z eleman?? olarak kullan??larak ve geriye
                        ??telenerek yerle??tirilme metodu ile a????l?? duvarlar yap??labilmektedir. Bu bloklar??n
                        saks?? bo??luklar??na elle dikim veya nebati toprak koyularak tohumlama ile
                        ye??illenmesi sa??lanmaktad??r. Bloklar??n ??ekil ve birle??im y??ntemi gere??i dairesel
                        duvar d??n????leri olu??turulabilmektedir.
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
                    <p>??n y??z eleman?? geogrid olan bu tip duvarlarda iki ta????y??c?? geogrid aras??nda
                        kalan dolgu, geogridin geriye do??ru boh??alanmas?? ile tutulmaktad??r. Geogrid
                        ta????y??c?? hale gelinceye kadar ??n y??zeyi dolgu yap??lmas?? s??ras??nda tutacak
                        ??elik has??r (WrapMesh), kal??p (WrapMold) veya toprak dolu k??????k geotorbalar
                        (WrapBag) kullan??lmaktad??r. Geogrid, toprak tutucu, geotorba vb. elemanlar
                        bitkilerin ????kmas??na veya su ile tohumlanmaya (Hydroseeding) imkan sa??lar.
                        Geogridin i?? k??sm??nda kullan??lan toprak tutucu veya bitki tutucu olarak da
                        adland??r??lan bu duvarlar??n ??n y??z??n?? bitki k??kleri ve ye??il uzant??lar yap??
                        ??mr?? boyunca geogrid ile birlikte korunur.
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
                    <p>GeoH??cre'lerin ??n y??z eleman?? olarak kullan??larak ve geriye ??telenerek
                        yerle??tirilme metodu ile a????l?? duvarlar yap??labilmektedir. Bu h??crelerin
                        saks?? bo??luklar??na elle dikim veya nebati toprak koyularak tohumlama ile
                        ye??illenmesi sa??lanmaktad??r. Kullan??lan geoh??cre malzeme ile esnek ve
                        dayan??kl?? bir ??n y??z olu??turmaktad??r.
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
                    <p> GeoArme duvarlar??n yap??m?? tamamland?????? andan itibaren g??zel bir g??r??n??m
                        vermesi ve sonras??nda ye??illenmesi istendi??inde ??n y??z eleman?? olarak
                        has??r ??elik, toprak tutucu (file, geotekstil, geokompozit, geomat, cocomat)
                        katman ve alt??gen ??ift b??kl??m tel ??rg?? ile imal edilen bir eleman
                        kullan??lmaktad??r. Bu eleman geogrid ile birlikte ??al????arak dolgu yap??lmas??
                        a??amas??nda ve sonras??nda dolgu kademesinin tutulmas??n?? temin eder. Duvar
                        ??n y??z?? ister tek ister basamakl?? yap??larak ??e??itli peyzaj ama??lar??na
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
                    <p>Dik GeoArme yapman??n ba??ka bir metodu olarak ??n y??z eleman?? olarak
                        klasik toprakarme panelleri ile geogridlerin veya polimer ??eritlerin
                        birle??tirilerek uygulanmas??d??r. Bu sistem ??elik ??eritlere alternatif
                        bir uygulama olup aktif zeminlerin olu??turdu??u korozyon problemlerine
                        ????z??m olu??turur. Panellerin ??antiyede ??retilmesi beton blok ??retiminin
                        uzak mesafede oldu??u ??antiyeler i??in iyi bir se??enek olabilmektedir.
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
                    <p>GeoArme duvarlar??n??n ??e??itli tipleri birlikte kullan??larak projenin ihtiya??
                        duydu??u ????z??m olu??turulabilir. Bu ????z??m imalat alan??, alt??ndaki ve ??st??ndeki
                        yap??lar, estetik talepler, fonksiyonellik dikkate al??narak i??veren ile birlikte
                        olu??turulmaktad??r.
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
                        Bro????r/Teknik D??k??man/Bilgi almak istiyorum <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                </a>
            </div>
            <!-- Card body -->
            <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8" data-parent="#accordionEx">
                <div class="card-body">
                    <ul class="subpage-full-list">
                        <li><p>Size ula??mam??z?? isterseniz l??tfen <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalLoginForm1">t??klay??n</a></p></li>
                            <div class="modal fade" id="modalLoginForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">L??tfen formu doldurun.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">??</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-4">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="defaultForm-username1" name="name" placeholder="??sim Soyisim" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="defaultForm-email1" name="email" placeholder="Eposta Adresiniz" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-building prefix"></i>
                                            <input type="text" id="defaultForm-companyname1" name="companyname" placeholder="Firma Ad??n??z" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-phone prefix"></i>
                                            <input type="number" id="defaultForm-telephone1" name="phone" placeholder="Telefon Numaran??z" class="form-control">
                                        </div>
    
                                        <div id="download" class="modal-footer d-flex justify-content-center">
                                            <button id="checkinfo" onclick="bizSiziArayalim()" class="btn sqaure_bt">G??nder</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li><p>??r??n bro????r??n?? indirmek i??in <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalLoginForm">t??klay??n</a></p></li>
                        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">L??tfen formu doldurun.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">??</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-4">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="defaultForm-username" name="name" placeholder="??sim Soyisim" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="defaultForm-email" name="email" placeholder="Eposta Adresiniz" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-building prefix"></i>
                                            <input type="text" id="defaultForm-companyname" name="companyname" placeholder="Firma Ad??n??z" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-phone prefix"></i>
                                            <input type="number" id="defaultForm-telephone" name="phone" placeholder="Telefon Numaran??z" class="form-control">
                                        </div>
    
                                        <div id="download" class="modal-footer d-flex justify-content-center">
                                            <button id="checkinfo" onclick="sendAndDownloadPdf()" class="btn sqaure_bt">G??nder ve indir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li><p>Teknik d??k??man indirmek i??in <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalLoginForm">t??klay??n</a></p></li>
                            <div class="modal fade" id="modalLoginForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">L??tfen formu doldurun.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">??</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-4">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="defaultForm-username2" name="name" placeholder="??sim Soyisim" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="defaultForm-email2" name="email" placeholder="Eposta Adresiniz" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-building prefix"></i>
                                            <input type="text" id="defaultForm-companyname2" name="companyname" placeholder="Firma Ad??n??z" class="form-control">
                                        </div>
    
                                        <div class="md-form mb-4">
                                            <i class="fas fa-phone prefix"></i>
                                            <input type="number" id="defaultForm-telephone2" name="phone" placeholder="Telefon Numaran??z" class="form-control">
                                        </div>
    
                                        <div id="download" class="modal-footer d-flex justify-content-center">
                                            <button id="checkinfo" onclick="tdsIndirme()" class="btn sqaure_bt">G??nder</button>
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
                                  <button class="btn main_bt custombtn" onclick="readmore()" id="readMore" style="display: inline; margin-bottom: 30px; border-radius: unset; font-weight: unset; min-width: 130px; height: 30px; line-height: unset;">Devam??n??
                                        Oku</button>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
        </div>
        <div id="urunler" class="col-md-12" style="border-top: 1px solid #039be5; border-bottom: 1px solid #039be5;">
        <h4 style="text-align:center;">??li??kili ??r??nler</h4><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=13"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=13"> ForTex GG Tek Y??nl?? Geogrid</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=38"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=38"> GeoH??cre Erozyon Kontrol ??r??nleri</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=127"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=127">ForTex GS FS Geo??eritler</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=128"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=128">ForTex GS FN Geo??eritler</a></h4>
                                </div>
                            </div>
                        </div>
                    </div><div class="uygdetayurundiv col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list uygdetayurun">
                            <div class="product_img"><a href="../../urundetay.php?id=129"> <img class="img-responsive" src="/images/products/" alt=""> </a></div>
                            <div class="product_detail_btm">
                                <div class="center">
                                    <h4><a href="../../urundetay.php?id=129">ForTex GS FW Geo??eritler</a></h4>
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
          $("#urunler").append("<h4>??li??kili ??r??nler</h4>");
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
        btnText.innerHTML = "Devam??";
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
        if (arr[i].text.indexOf("??at??") > 0) {
          cozumIsim = "&name=yesilcati";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Yal??t??m") > 0) {
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