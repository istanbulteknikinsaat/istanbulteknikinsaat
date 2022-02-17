<?php require_once 'inc/header.php';require_once 'css2.php';
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
    font-size:17px !important;
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
                            <h1 class="page-title">Kontakt</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/en">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
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
                            <h2 class="heading-title">Kontakt Formular</h2>
                            <div class="contact-icon">
                                <div class="item-icon"><i class="fas fa-envelope"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                        <div class="contact-box1" data-toggle="modal" data-target="#bayi-basvuru-form">
                            <h2 class="heading-title">Antragsformular für Händler</h2>
                            <div class="contact-icon">
                                <div class="item-icon"><i class="fas fa-envelope"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                        <div class="contact-box1 contact-box4" data-toggle="modal" data-target="#memnuniyet-form">
                            <h2 class="heading-title">Zufriedenheits-/Beschwerdeformular</h2>
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
                            <div id="googleMap" class="google-map" style="width:100%; height:700px; border-radius:4px;">   <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.0145352105205!2d28.862128014916426!3d41.06867492365584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab003be342aab%3A0x55d7f0f64310d0cf!2sIstanbul%20Technical%20construction!5e0!3m2!1sen!2str!4v1623164036784!5m2!1sen!2str" width="500" height="400"></iframe></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-box7">
                            <div class="contact-bg-image">
                                <img src="img/figure/figure94.png" alt="figure" width="266" height="214">
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">ZENTRUM BÜRO</h2>
                                    <ul class="information-list">
                                        <li>Adresse: Tekstilkent Koza Plaza B Block K:30 34235 Esenler/ISTANBUL</li>
                                        <li>Telefon: 0212 438 18 08</li>
                                        <li>Fax: 0212 438 18 01</li>
                                        <li>Email: info@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">GESCHÄFT</h2>
                                    <ul class="information-list">
                                        <li>Adresse: Pirinççi Mah. Pirinççi Köy Yolu No:57/1 Eyüpsultan/İSTANBUL</li>
                                        <li>Telefon: 0212 595 20 00</li>
                                        <li>Fax: 0212 595 02 22</li>
                                        <li>Email: info@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">FABRIK</h2>
                                    <ul class="information-list">
                                        <li>Adresse: Bolu Organize Sanayi Bölgesi 11. Cadde No.9 Merkez / BOLU</li>
                                        <li>Telefon: 0850 939 56 31</li>
                                        <li>Email: bilgi@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">BÜRO DEUTSCHLAND</h2>
                                    <ul class="information-list">
                                        <li>Adresse: Andreas Schwaiger Planeggerstrasse 79 81241 München</li>
                                        <li>Telefon: +49 89 215529041</li>
                                        <li>Email: info@istanbulteknik.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info-box2">
                                    <h2 class="section-title">BÜRO UKRAINE</h2>
                                    <ul class="information-list">
                                        <li>Adresse: Ukraine, Dnepr, 49000, Glinki street 2, Most City Business Tower Office 802</li>
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
                                <h2 class="item-title">Kontakt Formular</h2>
                                <p></p>
                            </div>
                            <form class="message-box" id="contact-form">
                                <div class="row gutters-10">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="advesoyad" placeholder="Vorname Familienname*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firma" placeholder="Name der Firma*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="gorev" placeholder="Mission*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="telefon" placeholder="Telefon*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="konu" placeholder="Gegenstand*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="mesaj" id="mesaj" class="form-control" placeholder="Botschaft" cols="30" rows="6" data-error="Dieses Feld wird benötigt" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <a id="gonder-mail" class="item-btn">Einreichen</a>
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
                                <h2 class="item-title">Antragsformular für Händler</h2>
                                <p></p>
                            </div>
                            <form class="message-box" id="contact-form">
                                <div class="row gutters-10">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmaadi" placeholder="Firmenname (vollständiger Titel)*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="yetkilikisiadivegorevi" placeholder="Name der autorisierten Person*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmaadresi" placeholder="Firmenanschrift*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="telefon" placeholder="Telefon*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="ceptelefonu" placeholder="Mobiltelefone*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="fax" placeholder="Fax*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmawebsiteadresi" placeholder="Webadresse des Unternehmens*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="vergidairesino" placeholder="Finanzamtsnummer*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="ticsicno" placeholder="Handelsreg. Nein.*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="oncekiyilcirosu" placeholder="Umsatz des Vorjahres*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="toplampersonalsayisi" placeholder="Gesamtzahl des Personals*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="aktifolaraksatisyapilaniller" id="aktifolaraksatisyapilaniller" class="form-control" placeholder="Aktiv verkaufte Provinzen" cols="30" rows="6" data-error="Dieses Feld wird benötigt" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="bayiliginiyapmaktaoldugunuzdigermarkalar" id="bayiliginiyapmaktaoldugunuzdigermarkalar" class="form-control" placeholder="Andere Marken, mit denen Sie zu tun haben" cols="30" rows="6" data-error="Dieses Feld wird benötigt" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <a id="gonder-bayi" class="item-btn">Einreichen</a>
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
                                <h2 class="item-title">Zufriedenheits-/Beschwerdeformular</h2>
                                <p></p>
                            </div>
                            <form class="message-box" id="contact-form">
                                <div class="row gutters-10">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="firmaadi" placeholder="Name der Firma*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="yetkilikisiadivegorevi" placeholder="Name der autorisierten Person*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="telefon" placeholder="Telefon*" data-error="Dieses Feld wird benötigt" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <select name="memnuniyetsikayetkonusu" class="form-control" data-error="Dieses Feld wird benötigt" required>
                                            <option value="Ürün">Wählen Sie ein Thema der Zufriedenheit/Beschwerde</option>
                                            <option value="Ürün">Produkt</option>
                                            <option value="Lojistik">Logistik</option>
                                            <option value="Kalite">Qualität</option>
                                            <option value="Termin Tarihi">Fristen</option>
                                            <option value="Fatura">Rechnung</option>
                                            <option value="Müşteri İlişkileri">Kundenbeziehung</option>
                                            <option value="Diğer">Andere</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="memnuniyetveyasikayet" id="memnuniyetveyasikayet" class="form-control" placeholder="Ihre Zufriedenheit/Beschwerde" cols="30" rows="6" data-error="Dieses Feld wird benötigt" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <a id="gonder-musteri" class="item-btn">Einreichen</a>
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
                        Swal.fire("Erfolg", "Ihre Nachricht hat uns erreicht. Wir werden Sie so schnell wie möglich kontaktieren.", "success");
                    } 
                else {
                    if (v == "bayibasvurusu") {
                        $("#bayi-basvuru-form .close").click();
                        Swal.fire("Erfolg", "Ihre Bewerbung hat uns erfolgreich erreicht. Wir werden Sie so schnell wie möglich kontaktieren.", "success");
                        }
                    else {
                            $("#memnuniyet-form .close").click();
                            Swal.fire("Erfolg", "Ihre Zufriedenheits-/Beschwerdeformular wurde uns erfolgreich zugestellt. Wir werden Sie so schnell wie möglich kontaktieren.", "success");
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