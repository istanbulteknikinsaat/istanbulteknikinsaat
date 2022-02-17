<?php require_once 'inc/header.php'; require_once 'css2.php';?>

<style>
  .template_faq {
    background: #edf3fe none repeat scroll 0 0;
}
.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
    margin-bottom: 0;
    padding: 30px;
}
th{
  text-align: left !important;
}
th.baslik{
  color: #fff;
}
table th {
    font-size: 15px;
    font-weight: 300;
    color:#474f54;
}
#accordion .panel {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 15px 10px;
}
#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}

table th{
  font-size:18px !important;
}
#accordion .panel-title a {
    background: #039ee3 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 10px;
    color: #fff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 20px 12px 50px;
    position: relative;
    transition: all 0.3s ease 0s;
}
#accordion .panel-title a.collapsed {
    background: #039ee3 none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #fff;
}
#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
  background: #ffffff none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 10%;
    box-shadow: 0 3px 10px rgb(0 0 0 / 58%);
    color: #000;
    content: "";
    font-family: fontawesome;
    font-size: 20px;
    height: 50px;
    left: -30px;
    line-height: 55px;
    position: absolute;
    text-align: center;
    top: -5px;
    transition: all 0.3s ease 0s;
    width: 50px;
}

#accordion .panel-title a.collapsed::after {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    box-shadow: none;
    color: #333;
    content: "";
}
#accordion .panel-body {
    background: transparent none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}
#accordion .panel-body p {
    border-left: 1px dashed #8c8c8c;
    padding-left: 25px;
}
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
<!-- inner page banner -->
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">Referanslar</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Referanslar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <iframe src="https://www.google.com/maps/d/embed?mid=16zGcYuocGPqNyIQup-GsotXSpoeqDZEV" id="ref-map"></iframe> -->
        </div>
    </div>
    
    <div class="row">				
				<div class="col-md-12">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne" >
              <h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapseOne" style="background:#338c25;">
                   Geosentetik Referanslarw
									</a>
								</h4>
							</div>
							<div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
                  <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="background:#338c25;">
                    ForTex Geogrid
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                  <table class="table">
                      <thead class="thead" style="color: #fff;background-color: #338c25;border-color: #338c25;">
                        <tr>
                          <th class="baslik" class="baslik" scope="col">Proje Adı</th>
                          <th class="baslik" class="baslik" scope="col">İli</th>
                          <th class="baslik" class="baslik" scope="col">Uygulama</th>
                          <th class="baslik" class="baslik" scope="col">Miktar/m²</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          </th>
                          <th class="row1" class="row1" scope="row" style="color:#474f54;">Teknorot Düzce Fabrikası</th>
                          <th class="row2">Düzce</th>
                          <th class="row2">Zemin İyileştirme </th>
                          <th class="row2">50.000</th>
                        </tr>
                        <tr>
                          
                          <th class="row1" scope="row">DSİ Riva Deresi Islahı</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">40.000</th>
                        </tr>
                        <tr>
                          </th>
                          <th class="row1" scope="row">Fritolay Kocaeli Fabrikası</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">30.000</th>
                        </tr>
                        <tr>
                          
                          <th class="row1" scope="row">Bosch-Siemens Fabrikası</th>
                          <th class="row2">Tekirdağ</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">20.000</th>
                        </tr>
                        <tr>
                          
                          <th class="row1" scope="row">TCDD Afyon-Sandıklı Kesimi</th>
                          <th class="row2">Afyon</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">25.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">İskenderun Limanı</th>
                          <th class="row2">Hatay</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">23.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Bim Ankara Deposu</th>
                          <th class="row2">Ankara</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">16.500</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Hacettepe Üniversitesi Beytepe Hukuk Fak.</th>
                          <th class="row2">Ankara</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">15.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Fritolay Tarsus Fabrikası</th>
                          <th class="row2">Ankara</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">15.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Hyundai Fabrikası</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">13.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">TCDD Karabük Ülkü Garı</th>
                          <th class="row2">Karabük</th>
                          <th class="row2">Geokompozit</th>
                          <th class="row2">5.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Garanti Bankası Operasyon Merkezi</th>
                          <th class="row2">Karabük</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">16.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Bomonti Hilton</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">AsfaltTex</th>
                          <th class="row2">7.170</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Yüksek Hızlı Tren Köseköy Gebze Kesimi</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">11.900</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Bodrum Havalimanı</th>
                          <th class="row2">Muğla</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">12.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Tiryaki Agro Fabrikası</th>
                          <th class="row2">Mersin</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">10.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Kipaş Kağıt Fabrikası</th>
                          <th class="row2">Kahramanmaraş</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">2.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Sabiha Gökçen Havalimanı Hangar Projesi</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">10.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Sabiha Gökçen Havalimanı HEAŞ Hangar</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">1.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">BİM Afyon Deposu</th>
                          <th class="row2">Afyon</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">2.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Sabiha Gökçen Havalimanı Hangar ve Mütemmimleri</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">1.160</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">BİM Afyon Deposu</th>
                          <th class="row2">Afyon</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">2.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Symbol 262 AVM, Otel ve Hastane Projesi</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">3.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Silivri RES Akses Yolları</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">3.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Süleymaniye Fritolay Fabrikası</th>
                          <th class="row2">Irak</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">1.500</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Water Transmission Line from Ifraz to Erbil</th>
                          <th class="row2">Irak</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">10.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Dilovası EAE Elektrik Fabrikası</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">17.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Bim Sivas Deposu</th>
                          <th class="row2">Sivas</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">26.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Türkmenistan Karayolu Projesi</th>
                          <th class="row2">Türkmenistan</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">60.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">3M Çorlu Fabrikası</th>
                          <th class="row2">Tekirdağ</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">12.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Azerbaycan Gölet</th>
                          <th class="row2">Azerbaycan</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">8.400</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">TCDD Mersin Yenice Lojistik Merkezi</th>
                          <th class="row2">Mersin</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">83.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Tramvay Fabrikası Tramvay Deneme Yolu Yapımı</th>
                          <th class="row2">Bursa</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">6.600</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Ambarlı Konteyner Limanı</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">21.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Atatürk Havalimanı Pist Yenileme</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">6.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">ISU Dilovası Atıksu Arıtma Tesisi</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">38.400</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Petkim Konteyner Limanı</th>
                          <th class="row2">İzmir</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">140.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Ümraniye Belediyesi Yol Alt Yapı Rehabilitasyon İşleri</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">6.900</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">KGM Bursa-Karacabey Ayr. Keles-Orhaneli Ayr. Yolu Üst Yapı İşleri</th>
                          <th class="row2">Bursa</th>
                          <th class="row2">Asfalt Donatısı</th>
                          <th class="row2">3.280</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">KGM Ordu Çevre yolu, Fore Kazık Makinesi Platformu</th>
                          <th class="row2">Ordu</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">2.400</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">KGM Ankara Çevre Otoyolu Üzerinde Bulunan Kavşak Kollarında ve Muhtelif Kesimlerde Üstyapı İyileştirmesi</th>
                          <th class="row2">Ankara</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">4.100</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">TCDD Konya Karaman Demiryolu Yapım Ortaklığı</th>
                          <th class="row2">Konya</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">37.600</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">İGA İstanbul 3. Havalimanı</th>
                          <th class="row2">Ankara</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">4.100</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Adana İncirlik Hava Üssü</th>
                          <th class="row2">Adana</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">500</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Afyon Belediyesi Köprülü Kavşak Yapımı</th>
                          <th class="row2">Afyon</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">6000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Turkcell Veri Merkezi</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">8.400</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Kentkonut Çınarlıkent Evleri</th>
                          <th class="row2">Kocaeli</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">15.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Kalkandere Adliye Sarayı</th>
                          <th class="row2">Rize</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">3.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Alpin Su Pozantı Fabrikası</th>
                          <th class="row2">Adana</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">3.600</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Türkmenistan Karayolu Projesi</th>
                          <th class="row2">Türkmenistan</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">98.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Kayseri Kocasinan 228 Adet İşyeri ve 55 Adet İmalathane İnşaatı</th>
                          <th class="row2">Kayseri</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">19.200</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Mediloft Konut Projesi</th>
                          <th class="row2">Bursa</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">4.200</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Alat-Astara Otoyolu, Masalli-Jalilabad Kesiminin Yapım İşi</th>
                          <th class="row2">Azerbaycan</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">450.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Bakü-Şamahi-Muğanlı Yolu</th>
                          <th class="row2">Azerbaycan</th>
                          <th class="row2">Asfalt Donatısı</th>
                          <th class="row2">3.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Kürdemir Yevlax Yolu</th>
                          <th class="row2">Azerbaycan</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">148.200</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Jeotermal Enerji Üretim Tesisi</th>
                          <th class="row2">Manisa</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">124.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">İstanbul 3. Boğaz Köprüsü ve Kuzey Marmara Otoyolu</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">6.000</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">BİM İstanbul Depo</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">4.200</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Vitra Fabrikası</th>
                          <th class="row2">Bozüyük</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">3.300</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Korozo Fabrikası</th>
                          <th class="row2"></th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">52.200</th>
                        </tr>
                        <tr>
                          <th class="row1" scope="row">Ümraniye Belediyesi Yol Altyapı Rehabilitasyon İşleri</th>
                          <th class="row2">İstanbul</th>
                          <th class="row2">Zemin İyileştirme</th>
                          <th class="row2">14.000</th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background:#338c25;">
                  GeoTeknik Örgüsüz Geotekstiller 
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
                  <table class="table">
                  <thead class="thead" style="color: #fff;background-color: #338c25;border-color: #338c25;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">İli</th>
                        <th class="baslik" scope="col">Ürün</th>
                        <th class="baslik" scope="col">Uygulama</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="row1" scope="row">Zonguldak - Karabük Yolu</th>
                        <th class="row2">Zonguldak</th>
                        <th class="row2">GeoTeknik 250 </th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Azerbaycan Yol Yapımı</th>
                        <th class="row2">Azerbaycan</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Yol Yapımı </th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ankara - Sivas Hızlı Tren Tünel Yalıtımı</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Azerbaycan Yol Yapımı</th>
                        <th class="row2">Azerbaycan</th>
                        <th class="row2">GeoTeknik 550</th>
                        <th class="row2">Yol Yapımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Azerbaycan Altyapı Projeleri</th>
                        <th class="row2">Azerbaycan</th>
                        <th class="row2">İzoTeknik 250</th>
                        <th class="row2">Kanalizasyon Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Marmaray Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Denizaltı Tüneli</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Hatay - Bodrum Havalimanı</th>
                        <th class="row2">Muğla / Hatay</th>
                        <th class="row2">İzoTeknik 250</th>
                        <th class="row2">Havalimanı Apron</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İstanbul Katı Atık Sahası Kaplaması</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">GeoTeknik 600</th>
                        <th class="row2">Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Samsun Altyapı ve Atık Su Projesi</th>
                        <th class="row2">Samsun</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Kanalizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Türkmenistan Aşkabat Katı Atık Alan</th>
                        <th class="row2">Aşkabat</th>
                        <th class="row2">İzoTeknik 250</th>
                        <th class="row2">Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Polikay Alanya Atık Alanı Projesi</th>
                        <th class="row2">Antalya</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Atık Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Elkhovov Katı Atık Sahası</th>
                        <th class="row2">Bulgaristan</th>
                        <th class="row2">İzoTeknik 250</th>
                        <th class="row2">Atık Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İzsu - İzmir Su A.Ş.</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">GeoTeknik 600</th>
                        <th class="row2">İçme Su Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Marmaray Projesi Çamur Sahası Capping</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Çamur Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Serge Regülatörü ve HES Projesi</th>
                        <th class="row2">Erzurum</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Su Barajı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Gümüşhane Lahanos Atık Depolama Sahası</th>
                        <th class="row2">Gümüşhane</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bursa Katı Atık Sahası Kaplaması</th>
                        <th class="row2">Bursa</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Patara Katı Atık Sahası Kaplaması</th>
                        <th class="row2">Antalya</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sincan Tıbbi Atık Deposu</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Tıbbi Atık Deposu</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Atıksu Arıtma Tesisleri ve Çamur Yatağı Kaplaması</th>
                        <th class="row2">Manisa</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Atık Su ve Çamur Yatağı Kaplaması</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çanakkale Göle</th>
                        <th class="row2">Çanakkale</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Gölet</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Malatya Tüneli</th>
                        <th class="row2">Malatya</th>
                        <th class="row2">GeoTeknik 650</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">D Yapı Derince ve Aliağa Tank Tabanı HDPE Kaplaması</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Tank Tabanı Kaplaması</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Erbil Havaalanı Tank Tabanı HDPE Membran Kaplaması</th>
                        <th class="row2">Irak</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Tank Tabanı Kaplaması</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Arnavutluk - Kavaje Arıtma Tesisi</th>
                        <th class="row2">Arnavutluk</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Arıtma Tesisi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sincan Alt Geçit Yalıtımı</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Alt Geçit Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Köyceğiz Arıtma Tesisi</th>
                        <th class="row2">Muğla</th>
                        <th class="row2">İzoTeknik 250</th>
                        <th class="row2">Arıtma Tesisi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Petrol Tank Sahası</th>
                        <th class="row2"></th>
                        <th class="row2">GeoTeknik 600</th>
                        <th class="row2">Petrol Tank Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kütahya Tank Tabanı</th>
                        <th class="row2">Kütahya</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Petrol Tank Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Tank Sahası Projesi ve Tank Tabanı Kaplaması</th>
                        <th class="row2">Türkmenistan</th>
                        <th class="row2">Türkmenistan</th>
                        <th class="row2">Petrol Tank Sahası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ankara Baraj Projesi</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">İzoTeknik 400</th>
                        <th class="row2">Su Barajı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Diyarbakır Atık Havuzu</th>
                        <th class="row2">Diyarbakır</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Atık Havuzu</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kolin - Azerbaycan Yol Projesi</th>
                        <th class="row2">Azerbaycan</th>
                        <th class="row2">GeoTeknik 5500</th>
                        <th class="row2">Yol Yapımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi - Mön Karabük Demiryolu</th>
                        <th class="row2">Karabük</th>
                        <th class="row2">GeoTeknik 2500</th>
                        <th class="row2">Demiryolu Yapımı</th>
                      </tr>

                      <tr>
                        <th class="row1" scope="row">Yertaş - Türkmenistan Yol Projesi</th>
                        <th class="row2">Türkmenistan</th>
                        <th class="row2">GeoTeknik 4500</th>
                        <th class="row2">Yol Yapımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kolin - İzmir Menemen Otoyol Projesi</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">Örgülü Geotekstil</th>
                        <th class="row2">Yol Yapımı</th>
                      </tr>

                      <tr>
                        <th class="row1" scope="row">Ege Grup - Suudi Arabistan Cidde Tünel Projesi</th>
                        <th class="row2">Suudi Arabistan</th>
                        <th class="row2">İzoTeknik 500</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">CMA Ovit Tüneli</th>
                        <th class="row2">Rize</th>
                        <th class="row2">GeoTeknik 5500</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ilgaz Tüneli</th>
                        <th class="row2">Kastamonu</th>
                        <th class="row2">GeoTeknik 5500</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Duygu Mühendislik Kahramanmaraş Tüneli</th>
                        <th class="row2">Kahramanmaraş</th>
                        <th class="row2">GeoTeknik 5500</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Limak Yusufeli Tünelleri</th>
                        <th class="row2">Artvin</th>
                        <th class="row2">GeoTeknik 5500</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Zaho Tüneli</th>
                        <th class="row2">Irak</th>
                        <th class="row2">GeoTeknik 5500</th>
                        <th class="row2">Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Etiyopya</th>
                        <th class="row2">İzoTeknik 1000</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Etiyopya</th>
                        <th class="row2">GeoTeknik 2000</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Etiyopya</th>
                        <th class="row2">GeoTeknik 3000</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Etiyopya</th>
                        <th class="row2">GeoTeknik 5000</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Etiyopya</th>
                        <th class="row2">GeoTeknik 5500</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Tanzanya</th>
                        <th class="row2">GeoTeknik 1100</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Tanzanya</th>
                        <th class="row2">GeoTeknik 2000</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Tanzanya</th>
                        <th class="row2">GeoTeknik 3000</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th class="row2">Tanzanya</th>
                        <th class="row2">GeoTeknik 5000</th>
                        <th class="row2">Tren Yolu Stabilizasyon</th>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background:#338c25;">
                  GeoArme Geosentetik Donatılı Duvar
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">

                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #338c25;border-color: #338c25;">
                      <tr>
                        <th class="baslik" scope="col">İdare / İşveren</th>
                        <th class="baslik" scope="col">İşi</th>
                        <th class="baslik" scope="col">İl</th>
                        <th class="baslik" scope="col">Uygulama</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">İzmit Yalova Devlet Yolu Gölcük - Altınova Kesimi İstinat Duvarı Yenileme İşi</th>
                        <th class="row2">İstanbul/2004 </th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">İzmit Yalova Devlet Yolu Konca Kesimi İstinat Duvarı Yapım İşi</th>
                        <th class="row2">İstanbul/2005</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi </th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">D100 Karayolu Şirinyalı - Tavşancıl Kesimi Arası Duvar İşi</th>
                        <th class="row2">İstanbul/2007</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Prekast Beton</th>
                        <th class="row2">İstinat Duvarı Yapım İşi</th>
                        <th class="row2">Tekirdağ/2007</th>
                        <th class="row2">Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">Hasdal - Kemerburgaz - Yassı Ören Devlet Yolu Göktürk Kavşağı İşi</th>
                        <th class="row2">İstanbul/2007</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Emaar Türkiye</th>
                        <th class="row2">Toskana Vadisi Projesi İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">İstanbul/2008</th>
                        <th class="row2">Bohçalı ve Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 17. Bölge Müdürlüğü</th>
                        <th class="row2">Kavacık - Beykoz Yolu V2 Kavşağı Geosentetik Donatılı İstinat Duvarı Yapımı İşi</th>
                        <th class="row2">İstanbul/2008</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">Adapazarı - Bilecik Yolu İsabalı ve Ali Fuat Paşa Kavşakları Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">İstanbul/2008</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 4. Bölge Müdürlüğü</th>
                        <th class="row2">Eskişehir Şehir Geçişi Geosentetik Donatılı İstinat Duvarı Yapımı İşi</th>
                        <th class="row2">Ankara/2009</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 16. Bölge Müdürlüğü</th>
                        <th class="row2">Erzincan Pülümür 12. Bölge Hudut Yolu Pülümür Ayrımı İstinat Duvarı Yapımı İşi</th>
                        <th class="row2">Sivas/2010</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">Adapazarı - Bilecik Yolu Nuruosmaniye ve Örence Kavşağı Yaklaşımları Yapımı İşi</th>
                        <th class="row2">İstanbul/2010</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">Hendek - Sakarya 4. Bölge Hudut Yolu Toprak İşleri Sanat Yapıları Yapımı İşi</th>
                        <th class="row2">İstanbul/2010</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 16. Bölge Müdürlüğü</th>
                        <th class="row2">Hasdal Kavşağı, Kemerburgaz - Yassıören Ayrımı , TEM Geçiş Tüneli Giriş - Çıkış Portal ve Yaklaşımları Geosentetik Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">İstanbul/2011</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 4. Bölge Müdürlüğü</th>
                        <th class="row2">Düzce Çevre Yolu, Kazukoğlu ve Akçakoca Kavşakları İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">Düzce/2011</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Düzce Üniversitesi</th>
                        <th class="row2">Düzce Üniversitesi Fen Edebiyat Fakültesi Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">Düzce/2012</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Osmangazi Belediyesi Fen İşleri Müdürlüğü</th>
                        <th class="row2">Alacahırka Parkı GeoArme Duvarlları</th>
                        <th class="row2">Bursa/2012</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      
                      <tr>
                        <th class="row1" scope="row">Karayolları 14. Bölge Müdürlüğü</th>
                        <th class="row2">Balıkesir - Akhisar Devlet Yolu İkmal İnşaatı Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">Balıkesir/2012 - 2013</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Esenyurt Belediyesi</th>
                        <th class="row2">Esenyurt Şehir Parkı Geosentetik Donatılı İstinat Duvarları</th>
                        <th class="row2">İstanbul/2012 - 2013</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th class="row2">Hasdal Kavşağı - Kemerburgaz - Yassıören Ayrımı, Devlet Yolu Şerit Genişletme Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">İstanbul/2013</th>
                        <th class="row2">Bloklu ve Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kent Konut</th>
                        <th class="row2">Yıldız Konutları Geosentetik Donatılı İstinat Duvarı</th>
                        <th class="row2">İstanbul/2013</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 15. Bölge Müdürlüğü</th>
                        <th class="row2">Bartın - Kurucaşile - Sinop Yolu Amasra Ayrımı ve Tünel Çıkış Portalı İstinat Duvarları</th>
                        <th class="row2">Kastamonu/2013</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karayolları 17. Bölge Müdürlüğü</th>
                        <th class="row2">Hasdal Yerleşkesi Çevre Düzenlemesi Kapsamında Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th class="row2">İstanbul/2010</th>
                        <th class="row2">Bloklu ve Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bursa Büyükşehir Belediyesi</th>
                        <th class="row2">Bursa - Uludağ - İnkaya Yolu Geogrid Donatılı İstinat Duvarı Yapımı İşi</th>
                        <th class="row2">Bursa/2013</th>
                        <th class="row2">Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 15. Bölge Müdürlüğü</th>
                        <th class="row2">Ilgaz - Kastamonu Tüneli ve Bağlantı Yolları K5 Kavşağı</th>
                        <th class="row2">Kastamonu/2015</th>
                        <th class="row2">Bloklu ve Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      
                      <tr>
                        <th class="row1" scope="row">KGM 15. Bölge Müdürlüğü</th>
                        <th class="row2">Bartın - Arıt Yolu</th>
                        <th class="row2">Kastamonu/2015</th>
                        <th class="row2">Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Terra Yapı</th>
                        <th class="row2">EAE Elektrik Dilovası Fabrikası Çevre Duvarları</th>
                        <th class="row2">Kocaeli/2015</th>
                        <th class="row2">Saksı Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background:#338c25;">
                  GeoSeal Membranlar
                	</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #338c25;border-color: #338c25;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">Yılı</th>
                        <th class="baslik" scope="col">Miktar / m²</th>
                        <th class="baslik" scope="col">Kullanılan Malzeme</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="row1" scope="row">Denizli Çardak Havaalanı</th>
                        <th class="row2">1998</th>
                        <th class="row2">40.000 </th>
                        <th class="row2">1,50 mm PP</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bursa Katı Atık Sahası Kaplaması</th>
                        <th class="row2">1999</th>
                        <th class="row2">25.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Köyceğiz Arıtma Tesisi</th>
                        <th class="row2">1999</th>
                        <th class="row2">8.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Antalya Patara Katı Atık Sahası Kaplaması</th>
                        <th class="row2">2000</th>
                        <th class="row2">22.000</th>
                        <th class="row2">1,50 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İstanbul Katı Atık Sahası Kaplaması</th>
                        <th class="row2">2001 - 2003</th>
                        <th class="row2">115.000</th>
                        <th class="row2">1,50 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bolu Göynük Su Kanalı</th>
                        <th class="row2">2001</th>
                        <th class="row2">18.000</th>
                        <th class="row2">1,50 mm LLDP</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">TPAO Doğalgaz Sondaj Çukurları, Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th class="row2">2001 - 2004</th>
                        <th class="row2">80.000</th>
                        <th class="row2">1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">BMP Ortak Girişimi Arnavutluk - Kavaje Arıtma Tesisi Göletleri</th>
                        <th class="row2">2005</th>
                        <th class="row2">9.000</th>
                        <th class="row2">2,00 mm HDPE - 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İzsu Arıtma Tesisi Çamur Kurutma Yatakları Kaplaması</th>
                        <th class="row2">2005</th>
                        <th class="row2">81.000</th>
                        <th class="row2">1,00 mm HDPE - 250 gr/m² Geotekstil - 20 kN Geogrid</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">TPAO Doğalgaz Sondaj Çukurları, Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th class="row2">2005</th>
                        <th class="row2">11.000</th>
                        <th class="row2">1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Manisa OSB Atıksu Arıtma Tesisi ÇAMUR Yatakları Kaplaması</th>
                        <th class="row2">2005</th>
                        <th class="row2">13.000</th>
                        <th class="row2">2,00 mm HDPE - 300 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Marmaray Projesi Atık Stok Sahası</th>
                        <th class="row2">2005</th>
                        <th class="row2">24.000</th>
                        <th class="row2">2,00 mm HDPE - 500 gr/m² Örgüsüz Geotekstil - 40 Kn/m Örgülü Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Antalya Katı Atık Depolama Tesisi Geomembran, Geotekstil ve Bentonit Kaplaması İşi</th>
                        <th class="row2">2006</th>
                        <th class="row2">40.000</th>
                        <th class="row2">2,00 mm HDPE - 2000 gr/m² Geotekstil Bentonit</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karacabey Kültürpark Göleti</th>
                        <th class="row2">2006</th>
                        <th class="row2">25.000</th>
                        <th class="row2">1,5 mm HDPE - 250 gr/m² Geotekstil/th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çiğli Çamur Serme Yatakları Geosentetik Uygulamaları</th>
                        <th class="row2">2006</th>
                        <th class="row2">80.000</th>
                        <th class="row2">1,00 mm HDPE - 250 gr/m² Geotekstil Geogrid</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">D Yapı Derince ve Aliağa Tank Tabanı HDPE Kaplaması</th>
                        <th class="row2">2006</th>
                        <th class="row2">10.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">TPAO Doğalgaz Sondaj Çukurları, Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th class="row2">2006</th>
                        <th class="row2">9.000</th>
                        <th class="row2">1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Anıt Yapı Ödemiş Kültürpark Göleti</th>
                        <th class="row2">2006</th>
                        <th class="row2">10.000</th>
                        <th class="row2">1,00 mm HDPE 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Anıt Yapı Aliağa Doğal Arıtma Tesisi</th>
                        <th class="row2">2001</th>
                        <th class="row2">20.000</th>
                        <th class="row2">1,00 mm HDPE 800 gr/m² Geotekstil ve Geogrid</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Erciyes Üniversitesi Kültür Park Göleti</th>
                        <th class="row2">2006</th>
                        <th class="row2">12.000</th>
                        <th class="row2">1,50 mm HDPE - 250 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kırklareli Katı Atık Projesi</th>
                        <th class="row2">2006</th>
                        <th class="row2">34.000</th>
                        <th class="row2">2,00 mm HDPE - 800 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Taisei Marmaray Projesi Çamur Projesi Capping İşi</th>
                        <th class="row2">2006</th>
                        <th class="row2">26.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Millenium Park Villaları Göleti</th>
                        <th class="row2">2006</th>
                        <th class="row2">8.500</th>
                        <th class="row2">2,00 mm HDPE - 300 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mitaş Proje Çamur Sahası Yapım İşi</th>
                        <th class="row2">2007</th>
                        <th class="row2">11.000</th>
                        <th class="row2">2,50 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Tüpraş Tank Sahası İşi</th>
                        <th class="row2">2007</th>
                        <th class="row2">7.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">TPAO Doğalgaz Sondaj Çukurları Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th class="row2">2007</th>
                        <th class="row2">7.000</th>
                        <th class="row2">1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Histaç Polikay Alanya Atık Alanı Projesi</th>
                        <th class="row2">2007</th>
                        <th class="row2">31.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Histaç Polikay Çiğili Çamur Yatakları Şantiyesi</th>
                        <th class="row2">2007</th>
                        <th class="row2">80.000</th>
                        <th class="row2">1,00 mm HDPE - 250 gr/m² Geotekstil - 20 Kn/m Geogrid</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bornova Göletleri</th>
                        <th class="row2">2007</th>
                        <th class="row2">9.600</th>
                        <th class="row2">2,00 mm HDPE - 1100 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Tekirdağ Atık Alan Projesi</th>
                        <th class="row2">2007</th>
                        <th class="row2">46.000</th>
                        <th class="row2">2,00 mm HDPE - 800 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Konya Organize Sanayi Bölgesi</th>
                        <th class="row2">2007</th>
                        <th class="row2">8.500</th>
                        <th class="row2">1,50 mm LDPE - 300 gr Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Zonguldak Atık Alan Projesi</th>
                        <th class="row2">2007</th>
                        <th class="row2">30.000</th>
                        <th class="row2">2,00 mm HDPE - 800 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Erbil HavaalanıTank Tabanı HDPE Kaplama İşi</th>
                        <th class="row2">2007</th>
                        <th class="row2">10.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çiğli Çamur Yatakları</th>
                        <th class="row2">2008</th>
                        <th class="row2">150.000</th>
                        <th class="row2">1,00 mm HDPE - 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İZSU</th>
                        <th class="row2">2007</th>
                        <th class="row2">27.500</th>
                        <th class="row2">1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Devnya Fabrika Atık Depolama Sahası</th>
                        <th class="row2">2009</th>
                        <th class="row2">70.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sönmez Petrol Petronas Carigali Kıyı Gaz Terminali Buharlaşma Havuzları</th>
                        <th class="row2">2010</th>
                        <th class="row2">200.000</th>
                        <th class="row2">2,00 mm HDPE - 4000 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kütahya Perli Köyü Katı Atık Depolama Tesisi</th>
                        <th class="row2">2010</th>
                        <th class="row2">40.000</th>
                        <th class="row2">2,00 mm HDPE - 1200 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">N.V.Turkse Perenco Mudpit Yapımı</th>
                        <th class="row2">2010</th>
                        <th class="row2">8.500</th>
                        <th class="row2">1,00 mm HDPE - 250 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Marmara Depoculuk A.Ş. Tank Tabanı Yalıtımı</th>
                        <th class="row2">2010</th>
                        <th class="row2">14.000</th>
                        <th class="row2">2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Lahanos Maden Atık Barajı</th>
                        <th class="row2">2010</th>
                        <th class="row2">10.000</th>
                        <th class="row2">2,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çanakkkale Sulama Kanalı</th>
                        <th class="row2">2011</th>
                        <th class="row2">65.000</th>
                        <th class="row2">1,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ankara Sincan Tıbbi atık Depolama</th>
                        <th class="row2">2011</th>
                        <th class="row2">16.000</th>
                        <th class="row2">2,5 mm HDPE - 5000 gr/m² GCL</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Adapazarı Yol Ayrımı Viyadük Altı</th>
                        <th class="row2">2011</th>
                        <th class="row2">80.00</th>
                        <th class="row2">1,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Demir Export</th>
                        <th class="row2">2011 - 2013</th>
                        <th class="row2">20.000</th>
                        <th class="row2">2,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çorlu Katı atık Depolama Sahası</th>
                        <th class="row2">2013 - 2014</th>
                        <th class="row2">28.000</th>
                        <th class="row2">2,5 mm HDPE - 1200 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Şişecam Soda Sanyi Atık Depolama Sahası</th>
                        <th class="row2">2013 - 2014</th>
                        <th class="row2">120.000</th>
                        <th class="row2">2 mm HDPE - 800 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yarımca Tünelleri Rehabilitasyon Sahası</th>
                        <th class="row2">2013</th>
                        <th class="row2">20.000</th>
                        <th class="row2">2 mm PVC - 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ordu Çevreyolu Boztepe - Öceli Tüneli</th>
                        <th class="row2">2013 - 2014</th>
                        <th class="row2">140.000</th>
                        <th class="row2">2 mm PVC - 650 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bursa Yenişehir Hızlı Tren Projesi</th>
                        <th class="row2">2013 - 2014</th>
                        <th class="row2">275.000</th>
                        <th class="row2">2 mm PVC - 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Türkiye - Gürcistan Demiryolu Tünelleri</th>
                        <th class="row2">2012 - 2014</th>
                        <th class="row2">350.000</th>
                        <th class="row2">2,5 mm PVC - 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İzmir Konak Yeşildere Bağlantı Tünelleri</th>
                        <th class="row2">2013 - 2014</th>
                        <th class="row2">80.000</th>
                        <th class="row2">2 mm PVC - 650 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ilgaz - Çankırı Tünelleri</th>
                        <th class="row2">2013 - 2014</th>
                        <th class="row2">300.000</th>
                        <th class="row2">2 mm PVC - 650 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Maraş - Göksun Karayolu Tünelleri</th>
                        <th class="row2">2013 - 2014</th>
                        <th class="row2">300.000</th>
                        <th class="row2">2 mm PVC - 650 gr/m² Geotekstil</th>
                      </tr>

                    </tbody>
                  </table>
                </div>
							</div>
						</div>
                </div>
							</div>
						</div>
           
            <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11" style="background:#414042;">
                  Asfalt Referanslar	
                  </a>
								</h4>
							</div>
							<div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
								<div class="panel-body">
                <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="background:#414042;">
                  TeraGrip Soyulma Önleyici Katkı Malzemesi
	
                  </a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #414042;border-color: #414042;">
                      <tr>
                        <th class="baslik" scope="col">Yüklenici</th>
                        <th class="baslik" scope="col">Bölge</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="row1" scope="row">ACR Grup</th>
                        <th class="row2">Nevşehir</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Açılım İnşaat</th>
                        <th class="row2">Elazığ</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Artera İnşaat A.Ş.</th>
                        <th class="row2">Şereflikoçhisar</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bafra Belediyesi</th>
                        <th class="row2">Samsun</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bahadır Grup İnşaat</th>
                        <th class="row2">Sivas</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Beylik İnşaat</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bingöl İl Özel İdaresi</th>
                        <th class="row2">Bingöl</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Cengiz İçtaş Adi Ortaklığı</th>
                        <th class="row2">Ordu - Giresun</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Cengiz İnşaat</th>
                        <th class="row2">KMO Projesi</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çakıroğlu Asfaltlama Ltd. Şti.</th>
                        <th class="row2">Erzurum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çanakkale İl Özel İdaresi</th>
                        <th class="row2">Çanakkale</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Dalgıçlar İnşaat A.Ş.</th>
                        <th class="row2">Çorum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Doğusan İnşaat</th>
                        <th class="row2">Balıkesir</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Dörtyol İnşaat A.Ş.</th>
                        <th class="row2">Amasya</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Eko İnşaat ve Ticaret A.Ş.</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Eni Enerji A.Ş. (Otoyol A.Ş.)</th>
                        <th class="row2">İzmit - İzmir - Yalova</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Erdem Altyapı</th>
                        <th class="row2">Bingöl</th>
                      </tr>
                    
                      <tr>
                        <th class="row1" scope="row">Etsun Entegre Tarım Ürünleri San. Tic. A.Ş.</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Fermak İnşaat</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Fernas İnşaat</th>
                        <th class="row2">Trabzon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Günfar İnşaat A.Ş.</th>
                        <th class="row2">Iğdır</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Hatay Büyükşehir Belediyesi</th>
                        <th class="row2">Hatay</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Hayati Dündar</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">ICA İçtaş - Astaldi Adi Ortaklığı</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İGA Havaalan</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İmfalt Yol Yapı A.Ş. </th>
                        <th class="row2">Muğla</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İnçel - Ceylan İş Ortaklığı</th>
                        <th class="row2">Kuzey Irak</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İnçel İnşaat</th>
                        <th class="row2">Ankara</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İpekyol Nakliyat İnşaat</th>
                        <th class="row2">Artvin</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İsfalt</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Karaman İl Özel İdaresi</th>
                        <th class="row2">Karaman</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 4. Bölge Müdürlüğü</th>
                        <th class="row2">Ankara</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 6. Bölge Müdürlüğü</th>
                        <th class="row2">Kayseri</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 7. Bölge Müdürlüğü</th>
                        <th class="row2">Samsun</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 8. Bölge Müdürlüğü</th>
                        <th class="row2">Elazığ</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 9. Bölge Müdürlüğü</th>
                        <th class="row2">Diyarbakır</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 12. Bölge Müdürlüğü</th>
                        <th class="row2">Erzurum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 14. Bölge Müdürlüğü</th>
                        <th class="row2">Bursa</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 15. Bölge Müdürlüğü</th>
                        <th class="row2">Kastamonu</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">KGM 16. Bölge Müdürlüğü</th>
                        <th class="row2">Sivas</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kırklareli İl Özel İdaresi</th>
                        <th class="row2">Kırklareli</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kızılırmak İnşaat</th>
                        <th class="row2">Afyon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Konya İl Özel İdaresi</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mapa İnşaat A.Ş.</th>
                        <th class="row2">Tekirdağ</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mehmet Ali Ünal İnşaat A.Ş.</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Midas Enerji İnşaat</th>
                        <th class="row2">Trabzon</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Nalbantoğlu İnşaat ve Tic. Ltd. Şti.</th>
                        <th class="row2">Kayseri</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Nesce İnşaat</th>
                        <th class="row2">Erzurum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Niğde İl Özel İdaresi</th>
                        <th class="row2">Niğde</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ordu Büyükşehir Belediyesi</th>
                        <th class="row2">Ordu</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Öngün İnşaat Taahhüt Ticaret A.Ş.</th>
                        <th class="row2">Yozgat</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Özcan Group</th>
                        <th class="row2">Erzurum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Polat Yol Yapı Sanayi ve Tic. A.Ş.</th>
                        <th class="row2">Azerbaycan - Karabük</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sed-Yol İnşaat</th>
                        <th class="row2">Tekirdağ</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Şimşek Grup</th>
                        <th class="row2">Batman</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Taşyapı İnşaat A.Ş.</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Tepeyol İnşaat</th>
                        <th class="row2">Konya</th>
                      </tr>
                      
                      <tr>
                        <th class="row1" scope="row">Van Beton</th>
                        <th class="row2">Van</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yozgat İl Özel İdaresi</th>
                        <th class="row2">Erzincan</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yüngül İnşaat</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yüzen Ticaret</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
							</div>
						</div>
            
            <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSix">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="background:#414042;">
                  Pawma İşlenebilirlik Arttırıcı Katkı
                  </a>
								</h4>
							</div>
							<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #414042;border-color: #414042;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">Bölge</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <tr>
                        <th class="row1" scope="row">Açılım İnşaat</th>
                        <th class="row2">Tekirdağ</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Asfalter Group</th>
                        <th class="row2">Yunanistan</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">BCG Group</th>
                        <th class="row2">Avustralya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Black Sea Group</th>
                        <th class="row2">Gürcistan</th>
                      </tr>
                      <tr> 
                        <th class="row1" scope="row">Cengiz İnşaat</th>
                        <th class="row2">KMO</th>
                      </tr> 
                      <tr> 
                        <th class="row1" scope="row">ERG İnşaat</th>
                        <th class="row2">Niğde</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Limak İnşaat</th>
                        <th class="row2">KMO</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mapa İnşaat</th>
                        <th class="row2">Keşan</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Polat Yol İnşaat</th>
                        <th class="row2">Azerbaycan</th>
                      </tr> 
                    </tbody>
                  </table>
                </div>
							</div>
						</div>
            <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingNine">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine" style="background:#414042;">
                    HiperCell  Selülozik Elyaf
                  </a>
								</h4>
							</div>
							<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #414042;border-color: #414042;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">Bölge</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <tr>
                        <th class="row1" scope="row">Artera İnşaat</th>
                        <th class="row2">Şereflikoçhisar</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Arya-İmfalt İş Ortaklığı</th>
                        <th class="row2">Aydın</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Atis Asfalt</th>
                        <th class="row2">Cebeci-İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Azeryol Servis</th>
                        <th class="row2">Bakü</th>
                      </tr>
                      <tr> 
                        <th class="row1" scope="row">Bergiz-Özbağ İnşaat</th>
                        <th class="row2">Kırşehir</th>
                      </tr> 
                      <tr> 
                        <th class="row1" scope="row">Burkay İnşaat</th>
                        <th class="row2">İzmir</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Cengiz - İçtaş Adi Ortaklığı</th>
                        <th class="row2">Ordu-Giresun Havaalanı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çağlar Yol Yapı</th>
                        <th class="row2">Alanya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çakıroğlu Asfaltlama Ltd. Şti.</th>
                        <th class="row2">Erzurum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çelikler İnşaat</th>
                        <th class="row2">Samsun</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Demyol İnşaat</th>
                        <th class="row2">Mardin</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Elityol İnşaat</th>
                        <th class="row2">Kayseri</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Fermak İnşaat</th>
                        <th class="row2">Konya</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Heltaş</th>
                        <th class="row2">Kayseri</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">İmfalt Yol Yapı</th>
                        <th class="row2">Kuşadası, Menemen, İzmir</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Makimsan</th>
                        <th class="row2">Şereflikoçhisar</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Metgün-Fernas Ortaklığı</th>
                        <th class="row2">Aksaray</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">MNL İnşaat</th>
                        <th class="row2">Kayseri</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Oze İnşaat</th>
                        <th class="row2">Konya</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Öz İnşaat - HGG İnşaat Ortaklığı</th>
                        <th class="row2">Muğla</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Polat Yol Yapı</th>
                        <th class="row2">Araç-Kastamonu</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Sarıosmanoğlu İnşaat</th>
                        <th class="row2">Aydın</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Seza İnşaat</th>
                        <th class="row2">Elazığ, Erzurum, Keşan</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Simge-Yol İnşaat</th>
                        <th class="row2">Bolu</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Şahinler İnşaat Madencilik</th>
                        <th class="row2">Cizre-Şırnak</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Şimşek Grup İnşaat</th>
                        <th class="row2">Batman</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">Teyda İnşaat</th>
                        <th class="row2">Aydın-İzmir</th>
                      </tr> 
                      <tr>
                        <th class="row1" scope="row">YDA İnşaat / İntaş İnşaat</th>
                        <th class="row2">Aydın, Kayseri</th>
                      </tr> 
                    </tbody>
                  </table>
                </div>
							</div>
						</div>
            <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSix">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="background:#414042;">
                  LCY Globalprene SBS
                  </a>
								</h4>
							</div>
							<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #414042;border-color: #414042;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">Bölge</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="row1" scope="row">Açıkalın Altyapı San. Tic.</th>
                        <th class="row2">Kayseri</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Açılım İnşaat</th>
                        <th class="row2">Keşan</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Alagözler Madencilik</th>
                        <th class="row2">Zonguldak</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Amiroğlu İnşaat</th>
                        <th class="row2">İzmir</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Arya İmfalt İnşaat</th>
                        <th class="row2">Aydın</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Atis Asfalt</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Aydın İnşaat </th>
                        <th class="row2">Antalya, Adapazarı-Bolu Otobanı</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Burkay İnşaat</th>
                        <th class="row2">İzmir</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Cengiz İnşaat</th>
                        <th class="row2">Gümüşhane</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Dalgıçlar İnşaat</th>
                        <th class="row2">Çorum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Danış Yapı</th>
                        <th class="row2">Balıkesir – Susurluk yolu</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Elityol İnşaat</th>
                        <th class="row2">Kayseri</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Enfalt İnşaat</th>
                        <th class="row2">Konya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Eskikale İnşaat</th>
                        <th class="row2">İzmir</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Farsel İnşaat </th>
                        <th class="row2">Malatya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Fermak İnşaat</th>
                        <th class="row2">Konya Çevre Yolu</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İmfalt Yol İnşaat</th>
                        <th class="row2">Manisa</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İntel Yapı</th>
                        <th class="row2">Çorlu Otoban</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İsfalt</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kiska-Makimsan Ortaklığı</th>
                        <th class="row2">Erzurum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Konaç Yapı İnşaat A.Ş</th>
                        <th class="row2">Antalya</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Limak İnşaat</th>
                        <th class="row2">Adapazarı-Bilecik</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mapa İnşaat</th>
                        <th class="row2">Tekirdağ</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Metiş İnşaat</th>
                        <th class="row2">Balıkesir – Susurluk</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mön İnşaat Ticaret</th>
                        <th class="row2">Kayseri</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Nalbantoğlu  İnşaat</th>
                        <th class="row2">Kayseri, Nevşehir</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Öngün İnşaat</th>
                        <th class="row2">İzmir Bölge</th>
                      </tr> 
                      <tr> 
                        <th class="row1" scope="row">Özdemir İnşaat</th>
                        <th class="row2">Erzincan</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Polat Yol İnşaat</th>
                        <th class="row2">Karabük</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sarıosmanoğlu İnşaat</th>
                        <th class="row2">Manisa</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Seza İnşaat</th>
                        <th class="row2">Elazığ, Erzurum</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Simge-Yol İnşaat</th>
                        <th class="row2">Kırıkkale</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Söğüt İnşaat</th>
                        <th class="row2">Ankara</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Şahinler İnşaat Madencilik</th>
                        <th class="row2">Diyarbakır</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Şimşek Grup</th>
                        <th class="row2">Batman</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Taşpolat İnşaat</th>
                        <th class="row2">Samsun</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Taşyapı İnşaat</th>
                        <th class="row2">Ankara-Gerede</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Teyda İnşaat</th>
                        <th class="row2">Manisa-Kuşadası</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yazıcıoğlu İnşaat</th>
                        <th class="row2">Muş</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yüngül İnşaat</th>
                        <th class="row2">Erzincan</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yüzen Ticaret</th>
                        <th class="row2">İstanbul</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
							</div>
						</div>
                </div>
							</div>
						</div>
            <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12" style="background:#009ca3;">
                  Yalıtım Referanslar	
                  </a>
								</h4>
							</div>
							<div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
								<div class="panel-body">
                <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingSeven">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="background:#009ca3;">
                  TrioTex Çatı ve Cephe Örtüleri	
                  </a>
								</h4>
							</div>
							<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #009ca3;border-color: #009ca3;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">İli</th>
                        <th class="baslik" scope="col">Uygulama</th>
                        <th class="baslik" scope="col">Miktar / m²</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="row1" scope="row">Pelican Hill Evleri</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Panel Kiremit </th>
                        <th class="row2">3.900</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Güzel Şehir Evleri</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Siding</th>
                        <th class="row2">32.400</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Deniz Forum Çamlık AVM</th>
                        <th class="row2">Denizli</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">3.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Merinos Kültür Merkezi</th>
                        <th class="row2">Bursa</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">30.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mariinsky Supermarket</th>
                        <th class="row2">Rusya</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">18.600</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Fiskobirlik Depoları</th>
                        <th class="row2">Karadeniz Sahili</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">63.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Serdivan AVM</th>
                        <th class="row2">Sakarya</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">24.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İncirlik Villaları</th>
                        <th class="row2">Adana</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">45.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Florya Akvaryum</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Ahşap ve Granit Cephe</th>
                        <th class="row2">12.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Irak Hastane Projeleri</th>
                        <th class="row2">Irak</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">93.000</th>
                      </tr>
                      
                      <tr>
                        <th class="row1" scope="row">Türkmenbaşı Havaalanı İnşaatı</th>
                        <th class="row2">Türkmenistan</th>
                        <th class="row2">Kenet Çatı ve Cephe Giydirme </th>
                        <th class="row2">81.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Türkmenistan Olimpiyat Köyü</th>
                        <th class="row2">Türkmenistan</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">163.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mahmut Şahin İş Merkezi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">17.100</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Lotus Evleri</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">1.100</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Balçova Yaşam Merkezi</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">10.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Marmara Forum AVM</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">7.050</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Solarkent</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">3.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Converse Fabrika Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">15.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çalık Holding Plaza</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">2.025</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Monachus Hotel</th>
                        <th class="row2">Antalya</th>
                        <th class="row2">Kiremit Çatı</th>
                        <th class="row2">3.150</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İstanbul Sarayları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">21.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ak-Asya Konut Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">15.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bosphorus City Halkalı</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">3.750</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çengelköy Evleri</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">16.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Beşiktaş Denizcilik Müzesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">6.600</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Residence Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">4.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Toki Sulukule Konakları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">53.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Antalya Belediyesi Kültür Merkezi</th>
                        <th class="row2">Antalya</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">1.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bomonti Apartments</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">4.125</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çankaya Üniversitesi</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">10.050</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">15300 Misia</th>
                        <th class="row2">Bursa</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">24.000</th>
                      </tr>

                      <tr>
                        <th class="row1" scope="row">Armada 2</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">7.425</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Radisson Hotel</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">4.050</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Oyakkent Konutları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">6.300</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Acunkent Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.100</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Şehrizar Konakları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">63.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Şehrizar Konakları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">26.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yasa Holding Yönetim Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">2.550</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Esenyurt İbis Hotel</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">8.400</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">TED Ankara Koleji</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">4.050</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ataman Karina Pendik</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">1.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Otağtepe Koru Konakları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">1.650</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Medpo Medikal İlaç Fabrikası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">6.300</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bomonti Palms Studio & Shopping</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">1.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Trabzon Adalet Sarayı</th>
                        <th class="row2">Trabzon</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">10.050</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Bayrampaşa Doğa Koleji</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">1.200</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Zeno Business Center</th>
                        <th class="row2">Bursa</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.800</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İnegöl AVM</th>
                        <th class="row2">Bursa</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">3.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Okan Üniversitesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı ve Giydirme Cephe</th>
                        <th class="row2">10.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kırk Konak Tarabya Evleri</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">3.600</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Modern Boztepe Residence</th>
                        <th class="row2">Trabzon</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">46.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Fuaye Süreyyapaşa</th>
                        <th class="row2">Maltepe</th>
                        <th class="row2">Ahşap Giydirme Cephe</th>
                        <th class="row2">5.100</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Adana İbis Hotel</th>
                        <th class="row2">Adana</th>
                        <th class="row2">Seramik Giydirme Cephe</th>
                        <th class="row2">4.750</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İzmir İbis Hotel</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">Seramik Giydirme Cephe</th>
                        <th class="row2">4.200</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çubuklu Vadi Evleri</th>
                        <th class="row2">Kavacık</th>
                        <th class="row2">Ahşap Giydirme Cephe</th>
                        <th class="row2">12.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Edremit Havaalanı</th>
                        <th class="row2">Balıkesir</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">17.100</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çamlıca 210</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">4.200</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Çamlıca 210</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">5.400</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Konya 3. Ana Hava Jet Üstü</th>
                        <th class="row2">Konya</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">6.300</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ekşinar Konakları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">15.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Avrupa Konutları, Atakent 3 Hastane</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">8.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Taurus AVM</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe, Xfire</th>
                        <th class="row2">9.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Türkiye Müteahitler Birliği Genel Müdürlüğü</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe, Xfire</th>
                        <th class="row2">900</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Özel GOP İdeal Hastanesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe, Xfire</th>
                        <th class="row2">12.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mall of İstanbul</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Membran - Çatı</th>
                        <th class="row2">30.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sera Kütahya AVM</th>
                        <th class="row2">Kütahya</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">12.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Türkmenbaşı Havalimanı</th>
                        <th class="row2">Türkmenistan</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">50.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Gilan Qabale Konserve Fabrikası</th>
                        <th class="row2">Azerbaycan</th>
                        <th class="row2">Kenet Çatı</th>
                        <th class="row2">18.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Koç Üniversitesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe, Xfire</th>
                        <th class="row2">8.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kiptaş The İstanbul Veliefendi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">10.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İzmir Bornova Polis Kriminal Laboratuvarı</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">Giydirme Cephe ve Çatı</th>
                        <th class="row2">6.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Halkalı TOKİ Hizmet Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe, XFire</th>
                        <th class="row2">8.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İbis Otel Ankara</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mevlana Üniversitesi Hastanesi</th>
                        <th class="row2">Konya</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">7.050</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Van Cezaevi</th>
                        <th class="row2">Van</th>
                        <th class="row2">Metal Kenet Çatı</th>
                        <th class="row2">20.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Van Filo Komutanlığı</th>
                        <th class="row2">Van</th>
                        <th class="row2">Trapez Çatı</th>
                        <th class="row2">7.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İzmir Bornova Polis Kriminal Laboratuvarı</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">Giydirme Cephe ve Çatı</th>
                        <th class="row2">6.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Beşiktaş Maçka Oteli</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Titanyum Çinko Çatı</th>
                        <th class="row2">1.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İstanbul İl Özel İdaresi Okul Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Cephe ve Çatı</th>
                        <th class="row2">5.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Beytepe Restorium</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Kenet Metal Çatı</th>
                        <th class="row2">6.750</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ankara Yeni Başbakanlık Konut Projesi</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Kenet Çatı, TrioTex R-FX</th>
                        <th class="row2">25.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Zeytinburnu Yeni Belediye Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">7.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sultangazi Yeni Belediye Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Adnan Menderes Havalimanı Yeni İç Hatlar Terminali</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">Çatı, TrioTex R-FX 180 Plus</th>
                        <th class="row2">15.750</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Dekon Çekmeköy Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Metal Çatı</th>
                        <th class="row2">3.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Marmaray Yenikapı İstasyon Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı</th>
                        <th class="row2">1.350</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sinpaş Liva Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe, TrioTex</th>
                        <th class="row2">1.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Halkalı TOKİ Hizmet Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme cephe, TrioTex</th>
                        <th class="row2">8.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İbis Otel</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Mevlana Üniversitesi Hastanesi</th>
                        <th class="row2">Konya</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">7.050</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Zeytinburnu Yeni Kaymakamlık Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe, TrioTex</th>
                        <th class="row2">6.000</th>
                      </tr>
                      <tr>			
                        <th class="row1" scope="row">Sultangazi Yeni Belediye Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Adnan Menderes Havalimanı Yeni İç Hatlar Terminali</th>
                        <th class="row2">İzmir</th>
                        <th class="row2">Çatı Uygulaması</th>
                        <th class="row2">15.750</th>
                      </tr>
                      <tr>			
                        <th class="row1" scope="row">Dekon Çekmeköy Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Metal Çatı</th>
                        <th class="row2">3.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Marmaray Yenikapı İstasyon Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Uygulaması</th>
                        <th class="row2">1.350</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sinpaş Liva Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">1.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Halkalı TOKİ Hizmet Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Giydirme cephe</th>
                        <th class="row2">8.000</th>
                      </tr>
                      <tr>			
                        <th class="row1" scope="row">İbis Otel</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.000</th>
                      </tr>
                      <tr>			
                        <th class="row1" scope="row">Mevlana Üniversitesi Hastanesi</th>
                        <th class="row2">Konya</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">7.050</th>
                      </tr>
                      <tr>		
                        <th class="row1" scope="row">Ankara Etlik Şehir Hastanesi</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">5.000</th>
                      </tr>
                      <tr> 		 	
                        <th class="row1" scope="row">Tuzla Marina Otel</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Uygulaması</th>
                        <th class="row2">18.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sınır Kapısı Kontrol Binası</th>
                        <th class="row2">Edirne</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">17.000</th>
                      </tr>
                      <tr>			
                        <th class="row1" scope="row">Roketsan (TSK) Projesi</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Çatı ve Cephe</th>
                        <th class="row2">12.600</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Milli Savunma Rektörlüğü Saymanlık Müdürlüğü</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">11.000</th>
                      </tr>
                      <tr>		
                        <th class="row1" scope="row">Yamanevler - Ümraniye</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">	Çatı ve Cephe Örtü Uygulaması</th>
                        <th class="row2">10.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Afad Binası</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Mekanik Ankrajlı Mermer Cephe Uygulaması</th>
                        <th class="row2">11.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Coca Cola Fabrikası</th>
                        <th class="row2">Bursa</th>
                        <th class="row2">Çatı Buhar Kesici Uygulaması</th>
                        <th class="row2">10.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Validebağ Konakları</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı ve Cephe Örtü Uygulaması</th>
                        <th class="row2">10000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Galataport İstanbul</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı ve Cephe Örtü Uygulaması</th>
                        <th class="row2">18.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Riva Düşler Vadisi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı ve Cephe Örtü Uygulaması</th>
                        <th class="row2">10000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Halkalı Millet Bahçesi ve Külliyesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">25.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İstanbul Havaalanı İnşaatı</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı ve Cephe Örtü Uygulaması</th>
                        <th class="row2">30.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">MetroHome Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Kenet Çatı Buhar Kesici Uygulaması</th>
                        <th class="row2">31.500</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Beylikdüzü Kapalı Pazar Yeri</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">15.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">LM Wind Power</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">12.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İBB Katı Atık Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">20.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Kara Havacılık Komutanlığı Tesisleri</th>
                        <th class="row2">Isparta</th>
                        <th class="row2">Çatı ve Cephe Örtü Uygulaması</th>
                        <th class="row2">20.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">İstanbul Finans Merkezi Projesi</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">15.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Toki Konut Şantiyesi - Tuzla</th>
                        <th class="row2">İstanbul</th>
                        <th class="row2">Çatı ve Cephe Örtü Uygulaması</th>
                        <th class="row2">11.550</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Konya İskan Projesi</th>
                        <th class="row2">Konya</th>
                        <th class="row2">Kiremit Altı Yalıtım Uygulaması</th>
                        <th class="row2">50.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Ankara Millet Bahçesi</th>
                        <th class="row2">Ankara</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">19.000</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Rize Havaalanı </th>
                        <th class="row2">Rize</th>
                        <th class="row2">Çatı Yalıtım Uygulaması</th>
                        <th class="row2">39.300</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Sasa Metropol</th>
                        <th class="row2">Adana</th>
                        <th class="row2">Giydirme Cephe</th>
                        <th class="row2">117.675</th>
                      </tr>
                    </tbody>
                  </table>
                </div>
							</div>
						</div>
            <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour2">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2" style="background:#009ca3;">
                     Diğer
                	</a>
								</h4>
							</div>
							<div id="collapseFour2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #009ca3;border-color: #009ca3;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">İli</th>
                        <th class="baslik" scope="col">Ürün</th>
                        <th class="baslik" scope="col">Miktar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Tanzanya Demiryolu Projesi</th>
                        <th class="row2">Tanzanya</th>
                        <th class="row2">TekDrain GDL 600/200 Drenaj Levhası </th>
                        <th class="row2">246.040 m2</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Tanzanya Demiryolu Projesi</th>
                        <th class="row2">Tanzanya</th>
                        <th class="row2">TrioTex X Fire Nefes Alan Örtü</th>
                        <th class="row2">1.650 m2</th>
                      </tr>
                      <tr>
                        <th class="row1" scope="row">Yapı Merkezi – Tanzanya Demiryolu Projesi</th>
                        <th class="row2">Tanzanya</th>
                        <th class="row2">TrioTex X Fire Akrilik Bant</th>
                        <th class="row2">83 adet</th>
                      </tr>
                      </tbody>
                  </table>
                </div>
							</div>
						</div>

                </div>
							</div>
						</div>
					</div>
				</div>
        </div>
  </div>
</div>

</div>
<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>
</body>
<script>
  (function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

	}); 	

				
})(jQuery);
$(document).ready(function () {
  $("title").text("Referanslar - İstanbul Teknik");

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