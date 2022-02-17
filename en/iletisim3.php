<?php require_once 'inc/header.php'; ?>
<link rel="stylesheet" href="css/about/about.css">
<link rel="stylesheet" href="css/about/bootstrap.min.css">
<!-- Animate Css Start Here -->
<link rel="stylesheet" href="css/about/animate.css">
<!-- Owl Carousel Start Here -->
<link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/owlcarousel/owl.theme.default.min.css">
<!-- Nivo Slider Start Here -->
<link rel="stylesheet" href="vendor/nivo-slider/nivo-slider.css">
<!-- Animate Css Start Here -->
<link rel="stylesheet" href="css/about/animate.min.css">
<!-- Slick Css Start Here -->
<link rel="stylesheet" href="css/about/slick.css">
<link rel="stylesheet" href="css/about/slick-theme.css">
<!-- Meanmenu Css Start Here -->
<link rel="stylesheet" href="css/about/meanmenu.min.css">
<!-- All min Css Start Here -->
<link rel="stylesheet" href="css/about/all.min.css">
<style>
p.text-capitalize {
    color: #212529;
}
.breadcrumb-box .breadcrumb .breadcrumb-item.active {
    color: #333;
}
.breadcrumb-box .breadcrumb .breadcrumb-item a {
    color: #e9ecef;
    transition: all 0.3s ease-in-out;
}
.about-box4 .heading-title {
    font-size: 28px !important;
}
.breadcrumb-wrap {
    background-image: url(/tr/img/service/hakkimizdabanner.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
  @media only screen and (min-width: 991px) {
    .container{
        width: 1200px;
    max-width: 1200px;
    }
    .ilkteragrip{
        font-size:20px;
    }
}
@media only screen and (max-width: 991px) {
    .about-box4 .about-layout{
        padding: 40px 0px 30px 50px;
    }
    .counter-block-2.light-counter-layout.counter-border {
    margin-top: 25px;
    width: 90%;
}
.breadcrumb-wrap{
    background-image: url(/tr/img/service/s.jpg);
    background-color: #039ee3 !important;
}
}
footer p{
        font-size:14px !important;
    }
    .newsletters p{
        font-size: 12px !important;
    }
    span.kayitolmetin {
        color: #979797;
    }
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">İletişim</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div id="tabs-container" class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="wrapper-ignore">
          <div class="contact-tabs">
            <ul>
              <li><a class="current" href="#tab-1">İletişim Formu</a></li>
              <li><a href="#tab-2">Bayi Başvuru Formu</a></li>
              <li><a href="#tab-3">Memnuniyet/Şikayet Formu</a></li>
            </ul>
          </div>
        </div>

        <div class="wrapper">
          <div class="tab">
            <div id="tab-1" class="tab-content">
              <section class="contact-form" id="contact-form-email">
                <div class="preload">

                </div>

                <div class="contact-form-answer">
                  <div class="contact-form-send-icon"></div>
                  <h5>Mesajınız <b>İstanbul Teknik</b> ilgili birimine iletilmiştir.</h5>
                  <p>Size en yakın zamanda geri dönüş yapılacaktır.</p>
                </div>

                <div class="contact-form-inner">
                  <div class="line">
                    <div class="column-half">
                      <label for="advesoyad">Ad Soyad *</label>
                      <input name="advesoyad" type="text">
                    </div>
                    <div class="column-half">
                      <label for="firma">Firma</label>
                      <input name="firma" type="text">
                    </div>
                  </div>

                  <div class="line">
                    <div class="column-half">
                      <label for="gorev">Görev</label>
                      <input name="gorev" type="text">
                    </div>
                    <div class="column-half">
                      <label for="telefon">Telefon *</label>
                      <input name="telefon" type="text">
                    </div>
                  </div>


                  <div class="line">
                    <div class="column-half">
                      <label for="email">Email *</label>
                      <input name="email" type="text">
                    </div>
                    <div class="column-half">
                      <label for="konu">Konu</label>
                      <input name="konu" type="text">
                    </div>
                  </div>

                  <div class="line">
                    <div class="column-full">
                      <label for="mesaj">Mesaj</label>
                      <textarea name="mesaj" rows="4"></textarea>

                    </div>
                  </div>

                  <div class="line">
                    <div class="column-full">
                      <a id="gonder-mail">Gönder</a>

                    </div>
                  </div>
                </div>

              </section>
            </div>


            <div id="tab-2" class="tab-content">
              <section class="contact-form" id="contact-form-bayi">
                <div class="preload"></div>

                <div class="contact-form-answer">
                  <div class="contact-form-send-icon"></div>
                  <h5>Mesajınız <b>İstanbul Teknik</b> ilgili birimine iletilmiştir.</h5>
                  <p>Size en yakın zamanda geri dönüş yapılacaktır.</p>
                </div>


                <div class="contact-form-inner">
                  <div class="line">
                    <div class="column-half">
                      <label for="firmaadi">Firma Adı (Tam Unvan)</label>
                      <input name="firmaadi" type="text">
                    </div>
                    <div class="column-half">
                      <label for="yetkilikisiadivegorevi">Yetkili Kişi Adı ve Görevi</label>
                      <input name="yetkilikisiadivegorevi" type="text">
                    </div>
                  </div>

                  <div class="line">
                    <div class="column-half">
                      <label for="firmaadresi">Firma Adresi</label>
                      <input name="firmaadresi" type="text">
                    </div>
                    <div class="column-half">
                      <label for="telefon">Telefon</label>
                      <input name="telefon" type="text">
                    </div>
                  </div>

                  <div class="line">
                    <div class="column-half">
                      <label for="fax">Fax</label>
                      <input name="fax" type="text">
                    </div>
                    <div class="column-half">
                      <label for="ceptelefonu">Cep Telefonu</label>
                      <input name="ceptelefonu" type="text">
                    </div>
                  </div>

                  <div class="line">
                    <div class="column-half">
                      <label for="email">Email</label>
                      <input name="email" type="text">
                    </div>
                    <div class="column-half">
                      <label for="firmawebsiteadresi">Firma Web Site Adresi</label>
                      <input name="firmawebsiteadresi" type="text">
                    </div>
                  </div>
                  <div class="line">
                    <div class="column-half">
                      <label for="vergidairesino">Vergi Dairesi No</label>
                      <input name="vergidairesino" type="text">
                    </div>
                    <div class="column-half">
                      <label for="ticsicno">Tic.Sic.No</label>
                      <input name="ticsicno" type="text">
                    </div>
                  </div>
                  <div class="line">
                    <div class="column-half">
                      <label for="oncekiyilcirosu">Önceki Yıl Cirosu</label>
                      <input name="oncekiyilcirosu" type="text">
                    </div>
                    <div class="column-half">
                      <label for="toplampersonalsayisi">Toplam Personel Sayısı</label>
                      <input name="toplampersonalsayisi" type="text">
                    </div>
                  </div>

                  <div class="line">
                    <div class="column-full">
                      <label for="aktifolaraksatisyapilaniller">Aktif Olarak Satış Yapılan İller</label>
                      <textarea name="aktifolaraksatisyapilaniller" rows="4"></textarea>

                    </div>
                  </div>

                  <div class="line">
                    <div class="column-full">
                      <label for="bayiliginiyapmaktaoldugunuzdigermarkalar">Bayiliğini Yapmakta Olduğunuz Diğer
                        Markalar</label>
                      <textarea name="bayiliginiyapmaktaoldugunuzdigermarkalar" rows="4"></textarea>

                    </div>
                  </div>
                  <div class="line">
                    <div class="column-full">
                      <a id="gonder-bayi">Gönder</a>
                    </div>
                  </div>
                </div>
              </section>
            </div>


            <div id="tab-3" class="tab-content">
              <section class="contact-form" id="contact-form-musteri">
                <div class="preload"></div>

                <div class="contact-form-answer">
                  <div class="contact-form-send-icon"></div>
                  <h5><b>İstanbul Teknik</b> hakkındaki değerlendirmeniz ilgili birimine iletilmiştir.</h5>
                  <p>Teşekkür ederiz</p>
                </div>
                <div class="contact-form-inner">
                  <div class="line">
                    <div class="column-half">
                      <label for="firmaadi">Firma Adı</label>
                      <input name="firmaadi" type="text">
                    </div>
                    <div class="column-half">
                      <label for="yetkilikisiadivegorevi">Yetkili Kişi Adı ve Görevi</label>
                      <input name="yetkilikisiadivegorevi" type="text">
                    </div>
                  </div>
                  <div class="line">
                    <div class="column-full">
                      <label for="memnuniyetsikayetkonusu">Memnuniyet/Şikayet Konusu</label>
                      <select name="memnuniyetsikayetkonusu">
                        <option value="Ürün">Seçiniz</option>
                        <option value="Ürün">Ürün</option>
                        <option value="Lojistik">Lojistik</option>
                        <option value="Kalite">Kalite</option>
                        <option value="Termin Tarihi">Termin Tarihi</option>
                        <option value="Fatura">Fatura</option>
                        <option value="Müşteri İlişkileri">Müşteri İlişkileri</option>
                        <option value="Diğer">Diğer</option>
                      </select>
                    </div>
                  </div>
                  <div class="line">
                    <div class="column-full">
                      <label for="memnuniyetveyasikayet">Memnuniyetiniz/Şikayetiniz</label>
                      <textarea name="memnuniyetveyasikayet" rows="4"></textarea>

                    </div>
                  </div>
                  <div class="line">
                    <div class="column-half">
                      <label for="email">Email</label>
                      <input name="email" type="text">
                    </div>
                    <div class="column-half">
                      <label for="telefon">Telefon</label>
                      <input name="telefon" type="text">
                    </div>
                  </div>
                  <div class="line">
                    <div class="column-full">
                      <a id="gonder-musteri">Gönder</a>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>

          
        </div>
      </div>
      <section id="iletisimform" class="subpage col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="subpage-header"
              style="background-image: url(https://www.istanbulteknik.com/img/istanbul-teknik-iletisim-telefon-numaralari.png);"></div>
            <div class="subpage-header-mobile"
              style="background-image: url(https://www.istanbulteknik.com/img/istanbul-teknik-iletisim-telefon-numaralari-small.png);"></div>
            <div class="seperator"></div>

            <section class="addresses ">
              <h2>İletişim Bilgileri</h2>
              <ul>
                <li>
                  <h5>MERKEZ OFİS</h5>
                  <div class="line">
                    <div class="label">Adres<span class="double-dots">:</span></div>
                    <div class="desc">Tekstilkent Koza Plaza <br />B Blok K:30 34235 <br />Esenler/İSTANBUL</div>
                  </div>
                  <div class="line">
                    <div class="label">Telefon<span class="double-dots">:</span></div>
                    <div class="desc">0212 438 18 08</div>
                  </div>
                  <div class="line">
                    <div class="label">Fax<span class="double-dots">:</span></div>
                    <div class="desc">0212 438 18 01</div>
                  </div>
                  <div class="line">
                    <div class="label">Email<span class="double-dots">:</span></div>
                    <div class="desc">bilgi@istanbulteknik.com</div>
                  </div>
                </li>
                <li>
                  <h5>DEPO</h5>
                  <div class="line">
                    <div class="label">Adres<span class="double-dots">:</span></div>
                    <div class="desc">Pirinççi Mah. <br />Pirinççi Köy Yolu No:57/1 Eyüpsultan/İSTANBUL
                    </div>
                  </div>
                  <div class="line">
                    <div class="label">Telefon<span class="double-dots">:</span></div>
                    <div class="desc">0212 595 20 00</div>
                  </div>
                  <div class="line">
                    <div class="label">Fax<span class="double-dots">:</span></div>
                    <div class="desc">0212 595 02 22</div>
                  </div>
                </li>

                <li>
                  <h5>FABRİKA</h5>
                  <div class="line">
                    <div class="label">Adres<span class="double-dots">:</span></div>
                    <div class="desc">Bolu Organize Sanayi Bölgesi <br />11. Cadde No.9 <br />Merkez / BOLU
                    </div>
                  </div>
                  <div class="line">
                    <div class="label">Telefon<span class="double-dots">:</span></div>
                    <div class="desc">0282 674 43 08</div>
                  </div>
                  <div class="line">
                    <div class="label">Fax<span class="double-dots">:</span></div>
                    <div class="desc">0282 674 43 04</div>
                  </div>
                </li>
                <li>
                  <h5>Almanya Ofis</h5>
                  <div class="line">
                    <div class="label">Adres<span class="double-dots">:</span></div>
                    <div class="desc">Andreas Schwaiger Planeggerstrasse 79<br />81241 München<br />
                    </div>
                  </div>
                  <div class="line">
                    <div class="label">Telefon<span class="double-dots">:</span></div>
                    <div class="desc">+49 89 215529041</div>
                  </div>
                  <div class="line">
                    <div class="label">Email<span class="double-dots">:</span></div>
                    <div class="desc">info@istanbulteknik.com</div>
                  </div>
                </li>
                <li>
                  <h5>Ukrayna Ofis</h5>
                  <div class="line">
                    <div class="label">Adres<span class="double-dots">:</span></div>
                    <div class="desc">Ukraine, Dnepr, 49000, Glinki street 2, Most City Business Tower Office 802 
                    </div>
                  </div>
                  <div class="line">
                    <div class="label">Telefon<span class="double-dots">:</span></div>
                    <div class="desc">+380-63-708-0708 </div>
                  </div>
                  <div class="line">
                    <div class="label"><span class="double-dots">:</span></div>
                    <div class="desc">+380-63-608-0608</div>
                  </div>
                  <div class="line">
                    <div class="label">Email<span class="double-dots">:</span></div>
                    <div class="desc">info@istanbulteknik.com</div>
                  </div>
                </li>
              </ul>
            </section>
</section>
    </div>
  </div>
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 map_section section">
    <div class="container">
      <div class="row">
      <!-- <div id="map"></div> -->
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6016.029429419335!2d28.864317!3d41.068671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55d7f0f64310d0cf!2zxLBzdGFuYnVsIFRla25payDEsG7Fn2FhdA!5e0!3m2!1str!2str!4v1610005544898!5m2!1str!2str" width="500" height="400"></iframe>
      </div>
    </div>
    
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value=""
                  class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>
<script>
  // This example adds a marker to indicate the position of Bondi Beach in Sydney,
  // Australia.
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: {
        lat: 41.06864264,
        lng: 28.86468786
      },
      styles: [{
          elementType: 'geometry',
          stylers: [{
            color: '#fefefe'
          }]
        },
        {
          elementType: 'labels.icon',
          stylers: [{
            visibility: 'off'
          }]
        },
        {
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#616161'
          }]
        },
        {
          elementType: 'labels.text.stroke',
          stylers: [{
            color: '#f5f5f5'
          }]
        },
        {
          featureType: 'administrative.land_parcel',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#bdbdbd'
          }]
        },
        {
          featureType: 'poi',
          elementType: 'geometry',
          stylers: [{
            color: '#eeeeee'
          }]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#757575'
          }]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{
            color: '#e5e5e5'
          }]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#9e9e9e'
          }]
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [{
            color: '#eee'
          }]
        },
        {
          featureType: 'road.arterial',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#3d3523'
          }]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [{
            color: '#eee'
          }]
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#616161'
          }]
        },
        {
          featureType: 'road.local',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#9e9e9e'
          }]
        },
        {
          featureType: 'transit.line',
          elementType: 'geometry',
          stylers: [{
            color: '#e5e5e5'
          }]
        },
        {
          featureType: 'transit.station',
          elementType: 'geometry',
          stylers: [{
            color: '#000'
          }]
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [{
            color: '#c8d7d4'
          }]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [{
            color: '#b1a481'
          }]
        }
      ]
    });

    var image = 'images/it_service/location_icon_map_cont.png';
    var beachMarker = new google.maps.Marker({
      position: {
        lat: 41.06864264,
        lng: 28.86468786
      },
      map: map,
      icon: image
    });
  }
</script>
<!-- google map js -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script> -->
<!-- end google map js -->
<!-- zoom effect -->
<script src='js/hizoom.js'></script>
<script>
  $(document).ready(function() {
    if ($("body .contact-tabs").length) {
    $(".contact-tabs a").click(function (v) {
      v.preventDefault();
      $(this).addClass("current");
      $(this).parent().siblings().children().removeClass("current");
      var u = $(this).attr("href");
      $(".tab-content").css("display", "none");
      $(u).fadeIn();
    });
  }

  if ($("body .contact-form").length) {
        $("#gonder-mail").bind("click", e);
        $("#gonder-bayi").bind("click", g);
        $("#gonder-musteri").bind("click", h);
    }

    function e() {
        var B = $("#contact-form-email input[name=advesoyad]").val();
        var z = $("#contact-form-email input[name=firma]").val();
        var w = $("#contact-form-email input[name=gorev]").val();
        var x = $("#contact-form-email input[name=telefon]").val();
        var y = $("#contact-form-email input[name=email]").val();
        var A = $("#contact-form-email input[name=konu]").val();
        var v = $("#contact-form-email textarea[name=mesaj]").val();
        var u = "advesoyad=" + B + "&firma=" + z + "&gorev=" + w + "&telefon=" + x + "&email=" + y + "&konu=" + A + "&mesaj=" + v;
        d(u, "mailgonder");
    }

    function g() {
        var B = $("#contact-form-bayi input[name=firmaadi]").val();
        var y = $("#contact-form-bayi input[name=yetkilikisiadivegorevi]").val();
        var v = $("#contact-form-bayi input[name=firmaadresi]").val();
        var I = $("#contact-form-bayi input[name=telefon]").val();
        var u = $("#contact-form-bayi input[name=fax]").val();
        var E = $("#contact-form-bayi input[name=ceptelefonu]").val();
        var D = $("#contact-form-bayi input[name=email]").val();
        var z = $("#contact-form-bayi input[name=firmawebsiteadresi]").val();
        var A = $("#contact-form-bayi input[name=vergidairesino]").val();
        var w = $("#contact-form-bayi input[name=ticsicno]").val();
        var H = $("#contact-form-bayi input[name=oncekiyilcirosu]").val();
        var C = $("#contact-form-bayi input[name=toplampersonalsayisi]").val();
        var x = $("#contact-form-bayi textarea[name=aktifolaraksatisyapilaniller]").val();
        var F = $("textarea[name=bayiliginiyapmaktaoldugunuzdigermarkalar]").val();
        var G = "firmaadi=" + B + "&yetkilikisiadivegorevi=" + y + "&firmaadresi=" + v + "&telefon=" + I + "&fax=" + u + "&ceptelefonu=" + E + "&email=" + D + "&firmawebsiteadresi=" + z + "&vergidairesino=" + A + "&ticsicno=" + w + "&oncekiyilcirosu=" + H + "&toplampersonalsayisi=" + C + "&aktifolaraksatisyapilaniller=" + x + "&bayiliginiyapmaktaoldugunuzdigermarkalar=" + F;
        d(G, "bayibasvurusu");
    }

    function h() {
        var x = $("#contact-form-musteri input[name=firmaadi]").val();
        var z = $("#contact-form-musteri input[name=yetkilikisiadivegorevi]").val();
        var y = $("#contact-form-musteri select[name=memnuniyetsikayetkonusu").val();
        var w = $("#contact-form-musteri textarea[name=memnuniyetveyasikayet]").val();
        var v = $("#contact-form-musteri input[name=email]").val();
        var u = $("#contact-form-musteri input[name=telefon]").val();
        var A = "firmaadi=" + x + "&yetkilikisiadivegorevi=" + z + "&memnuniyetsikayetkonusu=" + y + "&telefon=" + u + "&memnuniyetveyasikayet=" + w + "&email=" + v;
        d(A, "musteri");
    }

    function d(w, v) {
        var u = w + "&operation=" + v;
        console.log(u);
        $.ajax({
            type: "POST",
            data: u,
            cache: false,
            dataType: "json",
            url: "/system/service.php",
            beforeSend: function() {
                $(".contact-form-inner").addClass("animated500 fadeOut");
                window.setTimeout(function() {
                    $(".contact-form-inner").hide();
                    $(".preload").fadeIn("slow");
                    $(".preload").css("display", "inline-block");
                }, 500);
            },
            
            success: function(x) {
                if (v == "mailgonder") {
                    if (x.jStatus == true) {
                        window.setTimeout(function() {
                            $(".preload").hide();
                            $(".contact-form-answer").fadeIn("slow");
                            k("#contact-form-email .contact-form-answer .contact-form-send-icon", "fadeInUp", "0.6", "0.5");
                            k("#contact-form-email .contact-form-answer h5", "fadeInUp", "0.6", "0.5");
                            k("#contact-form-email .contact-form-answer p", "fadeInUp", "0.8", "0.7");
                        }, 500);
                    } else {
                        if (x.jStatus == false) {}
                    }
                } else {
                    if (v == "bayibasvurusu") {
                        if (x.jStatus == true) {
                            window.setTimeout(function() {
                                $(".preload").hide();
                                $(".contact-form-answer").fadeIn("slow");
                                k("#contact-form-bayi .contact-form-answer .contact-form-send-icon", "fadeInUp", "0.6", "0.5");
                                k("#contact-form-bayi .contact-form-answer h5", "fadeInUp", "0.6", "0.5");
                                k("#contact-form-bayi .contact-form-answer p", "fadeInUp", "0.8", "0.7");
                            }, 500);
                        } else {
                            if (x.jStatus == false) {}
                        }
                    } else {
                        if (v == "musteri") {
                            if (x.jStatus == true) {
                                window.setTimeout(function() {
                                    $(".preload").hide();
                                    $(".contact-form-answer").fadeIn("slow");
                                    k("#contact-form-musteri .contact-form-answer .contact-form-send-icon", "fadeInUp", "0.6", "0.5");
                                    k("#contact-form-musteri .contact-form-answer h5", "fadeInUp", "0.6", "0.5");
                                    k("#contact-form-musteri .contact-form-answer p", "fadeInUp", "0.8", "0.7");
                                }, 500);
                            } else {
                                if (x.jStatus == false) {}
                            }
                        }
                    }
                }
            },
            error: function(x) {}
        });
    }
  });

  $('.hi1').hiZoom({
    width: 300,
    position: 'right'
  });
  $('.hi2').hiZoom({
    width: 400,
    position: 'right'
  });
</script>

</body>
<script>
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
          cozumIsim = "&name=beton";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Mermer") > 0) {
          cozumIsim = "&name=mermer";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
    }
  });
  </script>

</html>