<?php require_once 'inc/header.php';
require_once 'css2.php';
 ?>

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
    .personal-info-box2 .section-title:before{
        content:none;
    }
    .personal-info-box2 .section-title:after{
        content:none;
    }
    .personal-info-box2 .section-title{
        color:#333 !important;
        margin-bottom: 5px !important;
        padding-bottom: 0px !important;
        font-size: 18px !important;
        text-transform: capitalize !important;
    }
    .personal-info-box2{
        margin-bottom: 0px !important;
    }
    .contact-wrap1 {
    padding: 70px 0px 0px 0px !important;
}
.contact-icon i:after{
    background:#009ddc !important;
}
.contact-icon i{
  z-index:0 !important;
}
    .contact-box2 .google-map {
    filter: none !important;
}
.contact-box1{
    padding: 45px 40px 20px 40px !important;
    cursor: pointer;
}
.personal-info-box2 .information-list li{
    color: #4b4e51 !important;
}
.contact-box3 .message-box .form-group .item-btn{
    background: #039ee3 !important; 
}
.contact-box1 .heading-title{
    margin-top: 5px !important;
}
.contact-box3 .item-heading .item-title{
    font-size: 20px;
}
.contact-box7{
    background-color: #f7f7f7;
    position: relative;
    border-radius: 4px;
    padding: 30px 0px 30px 50px !important;
}
.contact-box7 .contact-bg-image {
    position: absolute;
    bottom: 0;
    right: 0;
}
.contact-box3 .message-box .form-group .form-control{
    color: #6c757d !important;
}
.contact-box3 .message-box .form-group .item-btn:hover{
  color:#ffffff;
}
@media only screen and (max-width: 575px){
.contact-box7 {
    padding: 20px 30px 20px 30px !important;
}}
.contact-box3{
    padding: 0px 0px 45px 0px !important;
}
    @media only screen and (max-width: 575px){
.contact-box3 {
    padding: 20px 0px 20px 0px !important;
}}
@media only screen and (max-width: 575px){
.contact-box3 .item-heading .item-title {
    font-size: 20px;
}}
@media only screen and (max-width: 575px){
  div#googleMap {
    height: 400px !important;
}}
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
        <section class="contact-wrap1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-box1" data-toggle="modal" data-target="#iletisim-form">
                            <h2 class="heading-title">İLETİŞİM FORMU</h2>
                            <div class="contact-icon">
                                <div class="item-icon"><i class="fas fa-envelope"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-box1" data-toggle="modal" data-target="#bayi-basvuru-form">
                            <h2 class="heading-title">BAYİ BAŞVURU FORMU</h2>
                            <div class="contact-icon">
                                <div class="item-icon"><i class="fas fa-envelope"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-box1 contact-box4" data-toggle="modal" data-target="#memnuniyet-form">
                            <h2 class="heading-title">MEMNUNİYET / ŞİKAYET FORMU</h2>
                            <div class="contact-icon">
                                <div class="item-icon"><i class="fas fa-envelope"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <section class="contact-wrap2">
            <div class="container">
                <div class="row gutters-40">
                    <div class="col-lg-6">
                        <div class="contact-box2">
                            <div id="googleMap" class="google-map" style="width:100%; height:700px; border-radius:4px;">      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6016.029429419335!2d28.864317!3d41.068671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55d7f0f64310d0cf!2zxLBzdGFuYnVsIFRla25payDEsG7Fn2FhdA!5e0!3m2!1str!2str!4v1610005544898!5m2!1str!2str" width="500" height="400"></iframe></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-box7">
                            <div class="contact-bg-image">
                                <img src="img/figure/figure94.png" alt="figure" width="266" height="214">
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">MERKEZ OFİS <a href="javascript:HaritaMapsMerkez();">(Haritayı Gör)</a></h2>
                                    <ul class="information-list">
                                        <li>Adres: Tekstilkent Koza Plaza B Blok K:30 34235 Esenler/İSTANBUL</li>
                                        <li>Telefon: 0212 438 18 08</li>
                                        <li>Fax: 0212 438 18 01</li>
                                        <li>Email: bilgi@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">DEPO <a href="javascript:HaritaMapsDepo();">(Haritayı Gör)</a></h2>
                                    <ul class="information-list">
                                        <li>Adres: Pirinççi Mah. Pirinççi Köy Yolu No:57/1 Eyüpsultan/İSTANBUL</li>
                                        <li>Telefon: 0212 595 20 00</li>
                                        <li>Fax: 0212 595 02 22</li>
                                        <li>Email: bilgi@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">FABRİKA <a href="javascript:HaritaMapsFabrika();">(Haritayı Gör)</a></h2>
                                    <ul class="information-list">
                                        <li>Adres: Bolu Organize Sanayi Bölgesi 11. Cadde No.9 Merkez / BOLU</li>
                                        <li>Telefon: 0850 939 56 31</li>
                                        <li>Email: bilgi@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">ALMANYA OFİS <a href="javascript:HaritaMapsAlmanya();">(Haritayı Gör)</a></h2>
                                    <ul class="information-list">
                                        <li>Adres: Andreas Schwaiger Planeggerstrasse 79 81241 München</li>
                                        <li>Telefon: +49 89 215529041</li>
                                        <li>Email: info@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">UKRAYNA OFİS <a href="javascript:HaritaMapsUkrayna();">(Haritayı Gör)</a></h2>
                                    <ul class="information-list">
                                        <li>Adres: Ukraine, Dnepr, 49000, Glinki street 2, Most City Business Tower Office 802</li>
                                        <li>Telefon: +380 63 708 0708</li>
                                        <li>Telefon: +380 63 608 0608</li>
                                        <li>Email: info@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <div class="modal fade istanbulteknikform" id="iletisim-form" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color:#f7f7f7;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body" style="background-color:#f7f7f7;">
      <div class="col-lg-12">
                        <div class="contact-box3">
                            <div class="contact-bg-image">
                                <img src="img/figure/figure94.png" alt="figure" width="266" height="214">
                            </div>
                            <div class="item-heading">
                                <h2 class="item-title">İletişim Formu</h2>
                                <p></p>
                            </div>
                            <form class="message-box" id="contact-form">
                                <div class="row gutters-10">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="advesoyad" placeholder="Adınız Soyadınız*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firma" placeholder="Firma Adı*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="gorev" placeholder="Görev*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="telefon" placeholder="Telefon*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="konu" placeholder="Konu*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="mesaj" id="mesaj" class="form-control" placeholder="Mesaj" cols="30" rows="6" data-error="Bu alan Zorunludur" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <a id="gonder-mail" class="item-btn">Gönder</a>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade istanbulteknikform" id="bayi-basvuru-form" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color:#f7f7f7;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body" style="background-color:#f7f7f7;">
      <div class="col-lg-12">
                        <div class="contact-box3">
                            <div class="contact-bg-image">
                                <img src="img/figure/figure94.png" alt="figure" width="266" height="214">
                            </div>
                            <div class="item-heading">
                                <h2 class="item-title">Bayi Başvuru Formu</h2>
                                <p></p>
                            </div>
                            <form class="message-box" id="contact-form">
                                <div class="row gutters-10">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmaadi" placeholder="Firma Adı(Tam Unvan)*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="yetkilikisiadivegorevi" placeholder="Yetkili Kişi Adı*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmaadresi" placeholder="Firma Adresi*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="telefon" placeholder="Telefon*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="ceptelefonu" placeholder="Cep Telefonu*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="fax" placeholder="Fax*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmawebsiteadresi" placeholder="Firma Web Adresi*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="vergidairesino" placeholder="Vergi Dairesi No*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="ticsicno" placeholder="Tic. Sic. No*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="oncekiyilcirosu" placeholder="Önceki yıl Cirosu*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="toplampersonalsayisi" placeholder="Toplam Personel Sayısı*" data-error="Bu Alan Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="aktifolaraksatisyapilaniller" id="aktifolaraksatisyapilaniller" class="form-control" placeholder="Aktif Olarak Satış Yapılan İller" cols="30" rows="6" data-error="Bu alan Zorunludur" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="bayiliginiyapmaktaoldugunuzdigermarkalar" id="bayiliginiyapmaktaoldugunuzdigermarkalar" class="form-control" placeholder="Bayiliğini Yapmakta Olduğunuz Diğer Markalar" cols="30" rows="6" data-error="Bu alan Zorunludur" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <a id="gonder-bayi" class="item-btn">Gönder</a>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade istanbulteknikform" id="memnuniyet-form" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color:#f7f7f7;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body" style="background-color:#f7f7f7;">
      <div class="col-lg-12">
                        <div class="contact-box3">
                            <div class="contact-bg-image">
                                <img src="img/figure/figure94.png" alt="figure" width="266" height="214">
                            </div>
                            <div class="item-heading">
                                <h2 class="item-title">Memnuniyet/Şikayet Formu</h2>
                                <p></p>
                            </div>
                            <form class="message-box" id="contact-form">
                                <div class="row gutters-10">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmaadi" placeholder="Firma Adı*" data-error="Firma Adı Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="yetkilikisiadivegorevi" placeholder="Yetkili Kişi Adı*" data-error="Yetkili Kişi Adı Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" data-error="Email Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="telefon" placeholder="Telefon*" data-error="Telefon Zorunludur" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <select name="memnuniyetsikayetkonusu" class="form-control" data-error="Bu alan Zorunludur" required>
                                            <option value="0">Memnuniyet/Şikayet Konusu Seçiniz</option>
                                            <option value="Ürün">Ürün</option>
                                            <option value="Lojistik">Lojistik</option>
                                            <option value="Kalite">Kalite</option>
                                            <option value="Termin Tarihi">Termin Tarihi</option>
                                            <option value="Fatura">Fatura</option>
                                            <option value="Müşteri İlişkileri">Müşteri İlişkileri</option>
                                            <option value="Diğer">Diğer</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="memnuniyetveyasikayet" id="memnuniyetveyasikayet" class="form-control" placeholder="Memnuniyetiniz/Şikayetiniz" cols="30" rows="6" data-error="Bu alan Zorunludur" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <a id="gonder-musteri" class="item-btn">Gönder</a>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
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
    /* if ($("body .contact-tabs").length) {
    $(".contact-tabs a").click(function (v) {
      v.preventDefault();
      $(this).addClass("current");
      $(this).parent().siblings().children().removeClass("current");
      var u = $(this).attr("href");
      $(".tab-content").css("display", "none");
      $(u).fadeIn();
    });
  } */
  $("title").text("İletişim - İstanbul Teknik");

  if ($(".istanbulteknikform").length) {
        $("#gonder-mail").bind("click", e);
        $("#gonder-bayi").bind("click", g);
        $("#gonder-musteri").bind("click", h);
    }

    function e() {
        var B = $("#iletisim-form input[name=advesoyad]").val();
        var z = $("#iletisim-form input[name=firma]").val();
        var w = $("#iletisim-form input[name=gorev]").val();
        var x = $("#iletisim-form input[name=telefon]").val();
        var y = $("#iletisim-form input[name=email]").val();
        var A = $("#iletisim-form input[name=konu]").val();
        var v = $("#iletisim-form textarea[name=mesaj]").val();
        var u = "advesoyad=" + B + "&firma=" + z + "&gorev=" + w + "&telefon=" + x + "&email=" + y + "&konu=" + A + "&mesaj=" + v;
        d(u, "mailgonder");
    }

    function g() {
        var B = $("#bayi-basvuru-form input[name=firmaadi]").val();
        var y = $("#bayi-basvuru-form input[name=yetkilikisiadivegorevi]").val();
        var v = $("#bayi-basvuru-form input[name=firmaadresi]").val();
        var I = $("#bayi-basvuru-form input[name=telefon]").val();
        var u = $("#bayi-basvuru-form input[name=fax]").val();
        var E = $("#bayi-basvuru-form input[name=ceptelefonu]").val();
        var D = $("#bayi-basvuru-form input[name=email]").val();
        var z = $("#bayi-basvuru-form input[name=firmawebsiteadresi]").val();
        var A = $("#bayi-basvuru-form input[name=vergidairesino]").val();
        var w = $("#bayi-basvuru-form input[name=ticsicno]").val();
        var H = $("#bayi-basvuru-form input[name=oncekiyilcirosu]").val();
        var C = $("#bayi-basvuru-form input[name=toplampersonalsayisi]").val();
        var x = $("#bayi-basvuru-form textarea[name=aktifolaraksatisyapilaniller]").val();
        var F = $("textarea[name=bayiliginiyapmaktaoldugunuzdigermarkalar]").val();
        var G = "firmaadi=" + B + "&yetkilikisiadivegorevi=" + y + "&firmaadresi=" + v + "&telefon=" + I + "&fax=" + u + "&ceptelefonu=" + E + "&email=" + D + "&firmawebsiteadresi=" + z + "&vergidairesino=" + A + "&ticsicno=" + w + "&oncekiyilcirosu=" + H + "&toplampersonalsayisi=" + C + "&aktifolaraksatisyapilaniller=" + x + "&bayiliginiyapmaktaoldugunuzdigermarkalar=" + F;
        d(G, "bayibasvurusu");
    }

    function h() {
        var x = $("#memnuniyet-form input[name=firmaadi]").val();
        var z = $("#memnuniyet-form input[name=yetkilikisiadivegorevi]").val();
        var y = $("#memnuniyet-form select[name=memnuniyetsikayetkonusu").val();
        var w = $("#memnuniyet-form textarea[name=memnuniyetveyasikayet]").val();
        var v = $("#memnuniyet-form input[name=email]").val();
        var u = $("#memnuniyet-form input[name=telefon]").val();
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
            success: function(x) {
                console.log("başarılı");
                
            },
            error: function(x) {
                if (v == "mailgonder") {
                        $("#iletisim-form .close").click();
                        Swal.fire("Başarılı", "Mesajınız bize ulaşmıştır. En kısa zamanda sizinle iletişime geçeceğiz.", "success");
                    } 
                else {
                    if (v == "bayibasvurusu") {
                        $("#bayi-basvuru-form .close").click();
                        Swal.fire("Başarılı", "Başvurunuz bize başarılı bir şekilde ulaşmıştır. En kısa zamanda sizinle iletişime geçeceğiz.", "success");
                        }
                    else {
                            $("#memnuniyet-form .close").click();
                            Swal.fire("Başarılı", "Memnuniyet/Şikayet Formunuz bize başarılı bir şekilde ulaşmıştır. En kısa zamanda sizinle iletişime geçeceğiz", "success");
                            }
                        }
                    
            }
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
  function HaritaMapsMerkez (){
    var src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6016.029429419335!2d28.864317!3d41.068671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55d7f0f64310d0cf!2zxLBzdGFuYnVsIFRla25payDEsG7Fn2FhdA!5e0!3m2!1str!2str!4v1623995813082!5m2!1str!2str";
    $("#map").attr("src",src);
  };
  function HaritaMapsDepo (){
    var src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.822185899586!2d28.830580014918826!3d41.13840751935674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caae73ad69df5f%3A0xea862a7e41beb137!2zxLBzdGFuYnVsIFRla25payDEsG7Fn2FhdCBEZXBv!5e0!3m2!1str!2str!4v1623942202485!5m2!1str!2str";
    $("#map").attr("src",src);
  };
  function HaritaMapsFabrika (){
    var src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12091.079922097295!2d31.729734684217995!3d40.745086635933994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7092d39230cfdfb4!2zxLBzdGFuYnVsIFRla25payDEsG7Fn2FhdCBGYWJyaWth!5e0!3m2!1str!2str!4v1623943086621!5m2!1str!2str";
    $("#map").attr("src",src);
  };
  function HaritaMapsAlmanya (){
    var src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.592846217884!2d11.452398315173395!3d48.13737475915477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ddf4400d140b3%3A0x3521300d16610f9f!2sBuildingConcept!5e0!3m2!1str!2str!4v1623942700372!5m2!1str!2str";
    $("#map").attr("src",src);
  };
  function HaritaMapsUkrayna (){
    var src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.4978287328013!2d35.04851691518624!3d48.46616393619763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2c2c60241bd%3A0x999c964048051b3e!2sMOST-City!5e0!3m2!1str!2str!4v1623942804129!5m2!1str!2str";
    $("#map").attr("src",src);
  };
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