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
                   Geosentetik Referanslar
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
                          <th scope="row" style="color:#474f54;">Teknorot Düzce Fabrikası</th>
                          <th>Düzce</th>
                          <th>Zemin İyileştirme </th>
                          <th>50000</th>
                        </tr>
                        <tr>
                          
                          <th scope="row">DSİ Riva Deresi Islahı</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>40000</th>
                        </tr>
                        <tr>
                          </th>
                          <th scope="row">Fritolay Kocaeli Fabrikası</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>30000</th>
                        </tr>
                        <tr>
                          
                          <th scope="row">Bosch-Siemens Fabrikası</th>
                          <th>Tekirdağ</th>
                          <th>Zemin İyileştirme</th>
                          <th>20000</th>
                        </tr>
                        <tr>
                          
                          <th scope="row">TCDD Afyon-Sandıklı Kesimi</th>
                          <th>Afyon</th>
                          <th>Zemin İyileştirme</th>
                          <th>25000</th>
                        </tr>
                        <tr>
                          <th scope="row">İskenderun Limanı</th>
                          <th>Hatay</th>
                          <th>Zemin İyileştirme</th>
                          <th>23000</th>
                        </tr>
                        <tr>
                          <th scope="row">Bim Ankara Deposu</th>
                          <th>Ankara</th>
                          <th>Zemin İyileştirme</th>
                          <th>16500</th>
                        </tr>
                        <tr>
                          <th scope="row">Hacettepe Üniversitesi Beytepe Hukuk Fak.</th>
                          <th>Ankara</th>
                          <th>Zemin İyileştirme</th>
                          <th>15000</th>
                        </tr>
                        <tr>
                          <th scope="row">Fritolay Tarsus Fabrikası</th>
                          <th>Ankara</th>
                          <th>Zemin İyileştirme</th>
                          <th>15000</th>
                        </tr>
                        <tr>
                          <th scope="row">Hyundai Fabrikası</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>13000</th>
                        </tr>
                        <tr>
                          <th scope="row">TCDD Karabük Ülkü Garı</th>
                          <th>Karabük</th>
                          <th>Geokompozit</th>
                          <th>5000</th>
                        </tr>
                        <tr>
                          <th scope="row">Garanti Bankası Operasyon Merkezi</th>
                          <th>Karabük</th>
                          <th>Zemin İyileştirme</th>
                          <th>16000</th>
                        </tr>
                        <tr>
                          <th scope="row">Bomonti Hilton</th>
                          <th>İstanbul</th>
                          <th>AsfaltTex</th>
                          <th>7170</th>
                        </tr>
                        <tr>
                          <th scope="row">Yüksek Hızlı Tren Köseköy Gebze Kesimi</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>11900</th>
                        </tr>
                        <tr>
                          <th scope="row">Bodrum Havalimanı</th>
                          <th>Muğla</th>
                          <th>Zemin İyileştirme</th>
                          <th>12000</th>
                        </tr>
                        <tr>
                          <th scope="row">Tiryaki Agro Fabrikası</th>
                          <th>Mersin</th>
                          <th>Zemin İyileştirme</th>
                          <th>10000</th>
                        </tr>
                        <tr>
                          <th scope="row">Kipaş Kağıt Fabrikası</th>
                          <th>Kahramanmaraş</th>
                          <th>Zemin İyileştirme</th>
                          <th>2000</th>
                        </tr>
                        <tr>
                          <th scope="row">Sabiha Gökçen Havalimanı Hangar Projesi</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>10000</th>
                        </tr>
                        <tr>
                          <th scope="row">Sabiha Gökçen Havalimanı HEAŞ Hangar</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>1000</th>
                        </tr>
                        <tr>
                          <th scope="row">BİM Afyon Deposu</th>
                          <th>Afyon</th>
                          <th>Zemin İyileştirme</th>
                          <th>2000</th>
                        </tr>
                        <tr>
                          <th scope="row">Sabiha Gökçen Havalimanı Hangar ve Mütemmimleri</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>1160</th>
                        </tr>
                        <tr>
                          <th scope="row">BİM Afyon Deposu</th>
                          <th>Afyon</th>
                          <th>Zemin İyileştirme</th>
                          <th>2000</th>
                        </tr>
                        <tr>
                          <th scope="row">Symbol 262 AVM, Otel ve Hastane Projesi</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>3000</th>
                        </tr>
                        <tr>
                          <th scope="row">Silivri RES Akses Yolları</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>3000</th>
                        </tr>
                        <tr>
                          <th scope="row">Süleymaniye Fritolay Fabrikası</th>
                          <th>Irak</th>
                          <th>Zemin İyileştirme</th>
                          <th>1500</th>
                        </tr>
                        <tr>
                          <th scope="row">Water Transmission Line from Ifraz to Erbil</th>
                          <th>Irak</th>
                          <th>Zemin İyileştirme</th>
                          <th>10000</th>
                        </tr>
                        <tr>
                          <th scope="row">Dilovası EAE Elektrik Fabrikası</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>17000</th>
                        </tr>
                        <tr>
                          <th scope="row">Bim Sivas Deposu</th>
                          <th>Sivas</th>
                          <th>Zemin İyileştirme</th>
                          <th>26000</th>
                        </tr>
                        <tr>
                          <th scope="row">Türkmenistan Karayolu Projesi</th>
                          <th>Türkmenistan</th>
                          <th>Zemin İyileştirme</th>
                          <th>60000</th>
                        </tr>
                        <tr>
                          <th scope="row">3M Çorlu Fabrikası</th>
                          <th>Tekirdağ</th>
                          <th>Zemin İyileştirme</th>
                          <th>12000</th>
                        </tr>
                        <tr>
                          <th scope="row">Azerbaycan Gölet</th>
                          <th>Azerbaycan</th>
                          <th>Zemin İyileştirme</th>
                          <th>8400</th>
                        </tr>
                        <tr>
                          <th scope="row">TCDD Mersin Yenice Lojistik Merkezi</th>
                          <th>Mersin</th>
                          <th>Zemin İyileştirme</th>
                          <th>83000</th>
                        </tr>
                        <tr>
                          <th scope="row">Tramvay Fabrikası Tramvay Deneme Yolu Yapımı</th>
                          <th>Bursa</th>
                          <th>Zemin İyileştirme</th>
                          <th>6600</th>
                        </tr>
                        <tr>
                          <th scope="row">Ambarlı Konteyner Limanı</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>21000</th>
                        </tr>
                        <tr>
                          <th scope="row">Atatürk Havalimanı Pist Yenileme</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>6000</th>
                        </tr>
                        <tr>
                          <th scope="row">ISU Dilovası Atıksu Arıtma Tesisi</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>38400</th>
                        </tr>
                        <tr>
                          <th scope="row">Petkim Konteyner Limanı</th>
                          <th>İzmir</th>
                          <th>Zemin İyileştirme</th>
                          <th>140000</th>
                        </tr>
                        <tr>
                          <th scope="row">Ümraniye Belediyesi Yol Alt Yapı Rehabilitasyon İşleri</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>6900</th>
                        </tr>
                        <tr>
                          <th scope="row">KGM Bursa-Karacabey Ayr. Keles-Orhaneli Ayr. Yolu Üst Yapı İşleri</th>
                          <th>Bursa</th>
                          <th>Asfalt Donatısı</th>
                          <th>3280</th>
                        </tr>
                        <tr>
                          <th scope="row">KGM Ordu Çevre yolu, Fore Kazık Makinesi Platformu</th>
                          <th>Ordu</th>
                          <th>Zemin İyileştirme</th>
                          <th>2400</th>
                        </tr>
                        <tr>
                          <th scope="row">KGM Ankara Çevre Otoyolu Üzerinde Bulunan Kavşak Kollarında ve Muhtelif Kesimlerde Üstyapı İyileştirmesi</th>
                          <th>Ankara</th>
                          <th>Zemin İyileştirme</th>
                          <th>4100</th>
                        </tr>
                        <tr>
                          <th scope="row">TCDD Konya Karaman Demiryolu Yapım Ortaklığı</th>
                          <th>Konya</th>
                          <th>Zemin İyileştirme</th>
                          <th>37600</th>
                        </tr>
                        <tr>
                          <th scope="row">İGA İstanbul 3. Havalimanı</th>
                          <th>Ankara</th>
                          <th>Zemin İyileştirme</th>
                          <th>4100</th>
                        </tr>
                        <tr>
                          <th scope="row">Adana İncirlik Hava Üssü</th>
                          <th>Adana</th>
                          <th>Zemin İyileştirme</th>
                          <th>500</th>
                        </tr>
                        <tr>
                          <th scope="row">Afyon Belediyesi Köprülü Kavşak Yapımı</th>
                          <th>Afyon</th>
                          <th>Zemin İyileştirme</th>
                          <th>6000</th>
                        </tr>
                        <tr>
                          <th scope="row">Turkcell Veri Merkezi</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>8400</th>
                        </tr>
                        <tr>
                          <th scope="row">Kentkonut Çınarlıkent Evleri</th>
                          <th>Kocaeli</th>
                          <th>Zemin İyileştirme</th>
                          <th>15000</th>
                        </tr>
                        <tr>
                          <th scope="row">Kalkandere Adliye Sarayı</th>
                          <th>Rize</th>
                          <th>Zemin İyileştirme</th>
                          <th>3000</th>
                        </tr>
                        <tr>
                          <th scope="row">Alpin Su Pozantı Fabrikası</th>
                          <th>Adana</th>
                          <th>Zemin İyileştirme</th>
                          <th>3600</th>
                        </tr>
                        <tr>
                          <th scope="row">Türkmenistan Karayolu Projesi</th>
                          <th>Türkmenistan</th>
                          <th>Zemin İyileştirme</th>
                          <th>98000</th>
                        </tr>
                        <tr>
                          <th scope="row">Kayseri Kocasinan 228 Adet İşyeri ve 55 Adet İmalathane İnşaatı</th>
                          <th>Kayseri</th>
                          <th>Zemin İyileştirme</th>
                          <th>19200</th>
                        </tr>
                        <tr>
                          <th scope="row">Mediloft Konut Projesi</th>
                          <th>Bursa</th>
                          <th>Zemin İyileştirme</th>
                          <th>4200</th>
                        </tr>
                        <tr>
                          <th scope="row">Alat-Astara Otoyolu, Masalli-Jalilabad Kesiminin Yapım İşi</th>
                          <th>Azerbaycan</th>
                          <th>Zemin İyileştirme</th>
                          <th>450000</th>
                        </tr>
                        <tr>
                          <th scope="row">Bakü-Şamahi-Muğanlı Yolu</th>
                          <th>Azerbaycan</th>
                          <th>Asfalt Donatısı</th>
                          <th>3000</th>
                        </tr>
                        <tr>
                          <th scope="row">Kürdemir Yevlax Yolu</th>
                          <th>Azerbaycan</th>
                          <th>Zemin İyileştirme</th>
                          <th>148200</th>
                        </tr>
                        <tr>
                          <th scope="row">Jeotermal Enerji Üretim Tesisi</th>
                          <th>Manisa</th>
                          <th>Zemin İyileştirme</th>
                          <th>124000</th>
                        </tr>
                        <tr>
                          <th scope="row">İstanbul 3. Boğaz Köprüsü ve Kuzey Marmara Otoyolu</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>6000</th>
                        </tr>
                        <tr>
                          <th scope="row">BİM İstanbul Depo</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>4200</th>
                        </tr>
                        <tr>
                          <th scope="row">Vitra Fabrikası</th>
                          <th>Bozüyük</th>
                          <th>Zemin İyileştirme</th>
                          <th>3300</th>
                        </tr>
                        <tr>
                          <th scope="row">Korozo Fabrikası</th>
                          <th></th>
                          <th>Zemin İyileştirme</th>
                          <th>52200</th>
                        </tr>
                        <tr>
                          <th scope="row">Ümraniye Belediyesi Yol Altyapı Rehabilitasyon İşleri</th>
                          <th>İstanbul</th>
                          <th>Zemin İyileştirme</th>
                          <th>14000</th>
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
                        <th scope="row">Zonguldak - Karabük Yolu</th>
                        <th>Zonguldak</th>
                        <th>GeoTeknik 250 </th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Azerbaycan Yol Yapımı</th>
                        <th>Azerbaycan</th>
                        <th>İzoTeknik 400</th>
                        <th>Yol Yapımı </th>
                      </tr>
                      <tr>
                        <th scope="row">Ankara - Sivas Hızlı Tren Tünel Yalıtımı</th>
                        <th>Ankara</th>
                        <th>İzoTeknik 400</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Azerbaycan Yol Yapımı</th>
                        <th>Azerbaycan</th>
                        <th>GeoTeknik 550</th>
                        <th>Yol Yapımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Azerbaycan Altyapı Projeleri</th>
                        <th>Azerbaycan</th>
                        <th>İzoTeknik 250</th>
                        <th>Kanalizasyon Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Marmaray Projesi</th>
                        <th>İstanbul</th>
                        <th>İzoTeknik 500</th>
                        <th>Denizaltı Tüneli</th>
                      </tr>
                      <tr>
                        <th scope="row">Hatay - Bodrum Havalimanı</th>
                        <th>Muğla / Hatay</th>
                        <th>İzoTeknik 250</th>
                        <th>Havalimanı Apron</th>
                      </tr>
                      <tr>
                        <th scope="row">İstanbul Katı Atık Sahası Kaplaması</th>
                        <th>İstanbul</th>
                        <th>GeoTeknik 600</th>
                        <th>Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Samsun Altyapı ve Atık Su Projesi</th>
                        <th>Samsun</th>
                        <th>İzoTeknik 500</th>
                        <th>Kanalizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Türkmenistan Aşkabat Katı Atık Alan</th>
                        <th>Aşkabat</th>
                        <th>İzoTeknik 250</th>
                        <th>Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Polikay Alanya Atık Alanı Projesi</th>
                        <th>Antalya</th>
                        <th>İzoTeknik 500</th>
                        <th>Atık Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Elkhovov Katı Atık Sahası</th>
                        <th>Bulgaristan</th>
                        <th>İzoTeknik 250</th>
                        <th>Atık Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">İzsu - İzmir Su A.Ş.</th>
                        <th>İzmir</th>
                        <th>GeoTeknik 600</th>
                        <th>İçme Su Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Marmaray Projesi Çamur Sahası Capping</th>
                        <th>İstanbul</th>
                        <th>İzoTeknik 500</th>
                        <th>Çamur Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Serge Regülatörü ve HES Projesi</th>
                        <th>Erzurum</th>
                        <th>İzoTeknik 400</th>
                        <th>Su Barajı</th>
                      </tr>
                      <tr>
                        <th scope="row">Gümüşhane Lahanos Atık Depolama Sahası</th>
                        <th>Gümüşhane</th>
                        <th>İzoTeknik 400</th>
                        <th>Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Bursa Katı Atık Sahası Kaplaması</th>
                        <th>Bursa</th>
                        <th>İzoTeknik 400</th>
                        <th>Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Patara Katı Atık Sahası Kaplaması</th>
                        <th>Antalya</th>
                        <th>İzoTeknik 400</th>
                        <th>Katı Atık Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Sincan Tıbbi Atık Deposu</th>
                        <th>Ankara</th>
                        <th>İzoTeknik 400</th>
                        <th>Tıbbi Atık Deposu</th>
                      </tr>
                      <tr>
                        <th scope="row">Atıksu Arıtma Tesisleri ve Çamur Yatağı Kaplaması</th>
                        <th>Manisa</th>
                        <th>İzoTeknik 400</th>
                        <th>Atık Su ve Çamur Yatağı Kaplaması</th>
                      </tr>
                      <tr>
                        <th scope="row">Çanakkale Göle</th>
                        <th>Çanakkale</th>
                        <th>İzoTeknik 400</th>
                        <th>Gölet</th>
                      </tr>
                      <tr>
                        <th scope="row">Malatya Tüneli</th>
                        <th>Malatya</th>
                        <th>GeoTeknik 650</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">D Yapı Derince ve Aliağa Tank Tabanı HDPE Kaplaması</th>
                        <th>İzmir</th>
                        <th>İzoTeknik 400</th>
                        <th>Tank Tabanı Kaplaması</th>
                      </tr>
                      <tr>
                        <th scope="row">Erbil Havaalanı Tank Tabanı HDPE Membran Kaplaması</th>
                        <th>Irak</th>
                        <th>İzoTeknik 400</th>
                        <th>Tank Tabanı Kaplaması</th>
                      </tr>
                      <tr>
                        <th scope="row">Arnavutluk - Kavaje Arıtma Tesisi</th>
                        <th>Arnavutluk</th>
                        <th>İzoTeknik 400</th>
                        <th>Arıtma Tesisi</th>
                      </tr>
                      <tr>
                        <th scope="row">Sincan Alt Geçit Yalıtımı</th>
                        <th>Ankara</th>
                        <th>İzoTeknik 500</th>
                        <th>Alt Geçit Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Köyceğiz Arıtma Tesisi</th>
                        <th>Muğla</th>
                        <th>İzoTeknik 250</th>
                        <th>Arıtma Tesisi</th>
                      </tr>
                      <tr>
                        <th scope="row">Petrol Tank Sahası</th>
                        <th></th>
                        <th>GeoTeknik 600</th>
                        <th>Petrol Tank Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Kütahya Tank Tabanı</th>
                        <th>Kütahya</th>
                        <th>İzoTeknik 500</th>
                        <th>Petrol Tank Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Tank Sahası Projesi ve Tank Tabanı Kaplaması</th>
                        <th>Türkmenistan</th>
                        <th>Türkmenistan</th>
                        <th>Petrol Tank Sahası</th>
                      </tr>
                      <tr>
                        <th scope="row">Ankara Baraj Projesi</th>
                        <th>Ankara</th>
                        <th>İzoTeknik 400</th>
                        <th>Su Barajı</th>
                      </tr>
                      <tr>
                        <th scope="row">Diyarbakır Atık Havuzu</th>
                        <th>Diyarbakır</th>
                        <th>İzoTeknik 500</th>
                        <th>Atık Havuzu</th>
                      </tr>
                      <tr>
                        <th scope="row">Kolin - Azerbaycan Yol Projesi</th>
                        <th>Azerbaycan</th>
                        <th>GeoTeknik 5500</th>
                        <th>Yol Yapımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi - Mön Karabük Demiryolu</th>
                        <th>Karabük</th>
                        <th>GeoTeknik 2500</th>
                        <th>Demiryolu Yapımı</th>
                      </tr>

                      <tr>
                        <th scope="row">Yertaş - Türkmenistan Yol Projesi</th>
                        <th>Türkmenistan</th>
                        <th>GeoTeknik 4500</th>
                        <th>Yol Yapımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Kolin - İzmir Menemen Otoyol Projesi</th>
                        <th>İzmir</th>
                        <th>Örgülü Geotekstil</th>
                        <th>Yol Yapımı</th>
                      </tr>

                      <tr>
                        <th scope="row">Ege Grup - Suudi Arabistan Cidde Tünel Projesi</th>
                        <th>Suudi Arabistan</th>
                        <th>İzoTeknik 500</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">CMA Ovit Tüneli</th>
                        <th>Rize</th>
                        <th>GeoTeknik 5500</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Ilgaz Tüneli</th>
                        <th>Kastamonu</th>
                        <th>GeoTeknik 5500</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Duygu Mühendislik Kahramanmaraş Tüneli</th>
                        <th>Kahramanmaraş</th>
                        <th>GeoTeknik 5500</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Limak Yusufeli Tünelleri</th>
                        <th>Artvin</th>
                        <th>GeoTeknik 5500</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Zaho Tüneli</th>
                        <th>Irak</th>
                        <th>GeoTeknik 5500</th>
                        <th>Tünel Yalıtımı</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Etiyopya</th>
                        <th>İzoTeknik 1000</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Etiyopya</th>
                        <th>GeoTeknik 2000</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Etiyopya</th>
                        <th>GeoTeknik 3000</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Etiyopya</th>
                        <th>GeoTeknik 5000</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Etiyopya</th>
                        <th>GeoTeknik 5500</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Tanzanya</th>
                        <th>GeoTeknik 1100</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Tanzanya</th>
                        <th>GeoTeknik 2000</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Tanzanya</th>
                        <th>GeoTeknik 3000</th>
                        <th>Tren Yolu Stabilizasyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Etiyopya Demiryolu Projesi</th>
                        <th>Tanzanya</th>
                        <th>GeoTeknik 5000</th>
                        <th>Tren Yolu Stabilizasyon</th>
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
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>İzmit Yalova Devlet Yolu Gölcük - Altınova Kesimi İstinat Duvarı Yenileme İşi</th>
                        <th>İstanbul/2004 </th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>İzmit Yalova Devlet Yolu Konca Kesimi İstinat Duvarı Yapım İşi</th>
                        <th>İstanbul/2005</th>
                        <th>Bloklu GeoArme İstinat Sistemi </th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>D100 Karayolu Şirinyalı - Tavşancıl Kesimi Arası Duvar İşi</th>
                        <th>İstanbul/2007</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Prekast Beton</th>
                        <th>İstinat Duvarı Yapım İşi</th>
                        <th>Tekirdağ/2007</th>
                        <th>Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>Hasdal - Kemerburgaz - Yassı Ören Devlet Yolu Göktürk Kavşağı İşi</th>
                        <th>İstanbul/2007</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Emaar Türkiye</th>
                        <th>Toskana Vadisi Projesi İstinat Duvarları Yapımı İşi</th>
                        <th>İstanbul/2008</th>
                        <th>Bohçalı ve Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 17. Bölge Müdürlüğü</th>
                        <th>Kavacık - Beykoz Yolu V2 Kavşağı Geosentetik Donatılı İstinat Duvarı Yapımı İşi</th>
                        <th>İstanbul/2008</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>Adapazarı - Bilecik Yolu İsabalı ve Ali Fuat Paşa Kavşakları Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th>İstanbul/2008</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 4. Bölge Müdürlüğü</th>
                        <th>Eskişehir Şehir Geçişi Geosentetik Donatılı İstinat Duvarı Yapımı İşi</th>
                        <th>Ankara/2009</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 16. Bölge Müdürlüğü</th>
                        <th>Erzincan Pülümür 12. Bölge Hudut Yolu Pülümür Ayrımı İstinat Duvarı Yapımı İşi</th>
                        <th>Sivas/2010</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>Adapazarı - Bilecik Yolu Nuruosmaniye ve Örence Kavşağı Yaklaşımları Yapımı İşi</th>
                        <th>İstanbul/2010</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>Hendek - Sakarya 4. Bölge Hudut Yolu Toprak İşleri Sanat Yapıları Yapımı İşi</th>
                        <th>İstanbul/2010</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 16. Bölge Müdürlüğü</th>
                        <th>MüdürlüğüHasdal Kavşağı, Kemerburgaz - Yassıören Ayrımı , TEM Geçiş Tüneli Giriş - Çıkış Portal ve Yaklaşımları Geosentetik Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th>İstanbul/2011</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 4. Bölge Müdürlüğü</th>
                        <th>Düzce Çevre Yolu, Kazukoğlu ve Akçakoca Kavşakları İstinat Duvarları Yapımı İşi</th>
                        <th>Düzce/2011</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Düzce Üniversitesi</th>
                        <th>Düzce Üniversitesi Fen Edebiyat Fakültesi Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th>Düzce/2012</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Osmangazi Belediyesi Fen İşleri Müdürlüğü</th>
                        <th>Alacahırka Parkı GeoArme Duvarlları</th>
                        <th>Bursa/2012</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      
                      <tr>
                        <th scope="row">Karayolları 14. Bölge Müdürlüğü</th>
                        <th>Balıkesir - Akhisar Devlet Yolu İkmal İnşaatı Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th>Balıkesir/2012 - 2013</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Esenyurt Belediyesi</th>
                        <th>Esenyurt Şehir Parkı Geosentetik Donatılı İstinat Duvarları</th>
                        <th>İstanbul/2012 - 2013</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 1. Bölge Müdürlüğü</th>
                        <th>Hasdal Kavşağı - Kemerburgaz - Yassıören Ayrımı, Devlet Yolu Şerit Genişletme Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th>İstanbul/2013</th>
                        <th>Bloklu ve Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Kent Konut</th>
                        <th>Yıldız Konutları Geosentetik Donatılı İstinat Duvarı</th>
                        <th>İstanbul/2013</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 15. Bölge Müdürlüğü</th>
                        <th>Bartın - Kurucaşile - Sinop Yolu Amasra Ayrımı ve Tünel Çıkış Portalı İstinat Duvarları</th>
                        <th>Kastamonu/2013</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Karayolları 17. Bölge Müdürlüğü</th>
                        <th>Hasdal Yerleşkesi Çevre Düzenlemesi Kapsamında Geogrid Donatılı İstinat Duvarları Yapımı İşi</th>
                        <th>İstanbul/2010</th>
                        <th>Bloklu ve Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">Bursa Büyükşehir Belediyesi</th>
                        <th>Bursa - Uludağ - İnkaya Yolu Geogrid Donatılı İstinat Duvarı Yapımı İşi</th>
                        <th>Bursa/2013</th>
                        <th>Bloklu GeoArme İstinat Sistemi</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 15. Bölge Müdürlüğü</th>
                        <th>Ilgaz - Kastamonu Tüneli ve Bağlantı Yolları K5 Kavşağı</th>
                        <th>Kastamonu/2015</th>
                        <th>Bloklu ve Bohçalı GeoArme İstinat Sistemi</th>
                      </tr>
                      
                      <tr>
                        <th scope="row">KGM 15. Bölge Müdürlüğü</th>
                        <th>Bartın - Arıt Yolu</th>
                        <th>Kastamonu/2015</th>
                        <th>Bohçalı GeoArme İstinat Sistem</th>
                      </tr>
                      <tr>
                        <th scope="row">Terra Yapı</th>
                        <th>EAE Elektrik Dilovası Fabrikası Çevre Duvarları</th>
                        <th>Kocaeli/2015</th>
                        <th>Saksı Bloklu GeoArme İstinat Sistemi</th>
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
                        <th scope="row">Denizli Çardak Havaalanı</th>
                        <th>1998</th>
                        <th>40000 </th>
                        <th>1,50 mm PP</th>
                      </tr>
                      <tr>
                        <th scope="row">Bursa Katı Atık Sahası Kaplaması</th>
                        <th>1999</th>
                        <th>25000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Köyceğiz Arıtma Tesisi</th>
                        <th>1999</th>
                        <th>8000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Antalya Patara Katı Atık Sahası Kaplaması</th>
                        <th>2000</th>
                        <th>22000</th>
                        <th>1,50 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">İstanbul Katı Atık Sahası Kaplaması</th>
                        <th>2001 - 2003</th>
                        <th>115000</th>
                        <th>1,50 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Bolu Göynük Su Kanalı</th>
                        <th>2001</th>
                        <th>18000</th>
                        <th>1,50 mm LLDP</th>
                      </tr>
                      <tr>
                        <th scope="row">TPAO Doğalgaz Sondaj Çukurları, Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th>2001 - 2004</th>
                        <th>80000</th>
                        <th>1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">BMP Ortak Girişimi Arnavutluk - Kavaje Arıtma Tesisi Göletleri</th>
                        <th>2005</th>
                        <th>9000</th>
                        <th>2,00 mm HDPE, 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">İzsu Arıtma Tesisi Çamur Kurutma Yatakları Kaplaması</th>
                        <th>2005</th>
                        <th>81000</th>
                        <th>1,00 mm HDPE 250 gr/m² Geotekstil 20 kN Geogrid</th>
                      </tr>
                      <tr>
                        <th scope="row">TPAO Doğalgaz Sondaj Çukurları, Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th>2005</th>
                        <th>11000</th>
                        <th>1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Manisa OSB Atıksu Arıtma Tesisi ÇAMUR Yatakları Kaplaması</th>
                        <th>2005</th>
                        <th>13000</th>
                        <th>2,00 mm HDPE 300 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Marmaray Projesi Atık Stok Sahası</th>
                        <th>2005</th>
                        <th>24000</th>
                        <th>2,00 mm HDPE 500 gr/m² Örgüsüz Geotekstil 40 Kn/m Örgülü Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Antalya Katı Atık Depolama Tesisi Geomembran, Geotekstil ve Bentonit Kaplaması İşi</th>
                        <th>2006</th>
                        <th>40000</th>
                        <th>2,00 mm HDPE 2000 gr/m² Geotekstil Bentonit</th>
                      </tr>
                      <tr>
                        <th scope="row">Karacabey Kültürpark Göleti</th>
                        <th>2006</th>
                        <th>25000</th>
                        <th>1,5 mm HDPE 250 gr/m² Geotekstil/th>
                      </tr>
                      <tr>
                        <th scope="row">Çiğli Çamur Serme Yatakları Geosentetik Uygulamaları</th>
                        <th>2006</th>
                        <th>80000</th>
                        <th>1,00 mm HDPE 250 gr/m² Geotekstil Geogrid</th>
                      </tr>
                      <tr>
                        <th scope="row">D Yapı Derince ve Aliağa Tank Tabanı HDPE Kaplaması</th>
                        <th>2006</th>
                        <th>10000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">TPAO Doğalgaz Sondaj Çukurları, Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th>2006</th>
                        <th>9000</th>
                        <th>1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Anıt Yapı Ödemiş Kültürpark Göleti</th>
                        <th>2006</th>
                        <th>10000</th>
                        <th>1,00 mm HDPE 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Anıt Yapı Aliağa Doğal Arıtma Tesisi</th>
                        <th>2001</th>
                        <th>20000</th>
                        <th>1,00 mm HDPE 800 gr/m² Geotekstil ve Geogrid</th>
                      </tr>
                      <tr>
                        <th scope="row">Erciyes Üniversitesi Kültür Park Göleti</th>
                        <th>2006</th>
                        <th>12000</th>
                        <th>1,50 mm HDPE 250 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Kırklareli Katı Atık Projesi</th>
                        <th>2006</th>
                        <th>34000</th>
                        <th>2,00 mm HDPE 800 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Taisei Marmaray Projesi Çamur Projesi Capping İşi</th>
                        <th>2006</th>
                        <th>26000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Millenium Park Villaları Göleti</th>
                        <th>2006</th>
                        <th>8500</th>
                        <th>2,00 mm HDPE 300 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Mitaş Proje Çamur Sahası Yapım İşi</th>
                        <th>2007</th>
                        <th>11000</th>
                        <th>2,50 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Tüpraş Tank Sahası İşi</th>
                        <th>2007</th>
                        <th>7000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">TPAO Doğalgaz Sondaj Çukurları Çamur ve Su Depolama Havuzları Trakya Bölge</th>
                        <th>2007</th>
                        <th>7000</th>
                        <th>1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Histaç Polikay Alanya Atık Alanı Projesi</th>
                        <th>2007</th>
                        <th>31000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Histaç Polikay Çiğili Çamur Yatakları Şantiyesi</th>
                        <th>2007</th>
                        <th>80000</th>
                        <th>1,00 mm HDPE 250 gr/m² Geotekstil 20 Kn/m Geogrid</th>
                      </tr>
                      <tr>
                        <th scope="row">Bornova Göletleri</th>
                        <th>2007</th>
                        <th>9600</th>
                        <th>2,00 mm HDPE 1100 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Tekirdağ Atık Alan Projesi</th>
                        <th>2007</th>
                        <th>46000</th>
                        <th>2,00 mm HDPE 800 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Konya Organize Sanayi Bölgesi</th>
                        <th>2007</th>
                        <th>8500</th>
                        <th>1,50 mm LDPE 300 gr Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Zonguldak Atık Alan Projesi</th>
                        <th>2007</th>
                        <th>30000</th>
                        <th>2,00 mm HDPE 800 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Erbil HavaalanıTank Tabanı HDPE Kaplama İşi</th>
                        <th>2007</th>
                        <th>10000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Çiğli Çamur Yatakları</th>
                        <th>2008</th>
                        <th>150000</th>
                        <th>1,00 mm HDPE 500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">İZSU</th>
                        <th>2007</th>
                        <th>27500</th>
                        <th>1,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Devnya Fabrika Atık Depolama Sahası</th>
                        <th>2009</th>
                        <th>70000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Sönmez Petrol Petronas Carigali Kıyı Gaz Terminali Buharlaşma Havuzları</th>
                        <th>2010</th>
                        <th>200000</th>
                        <th>2,00 mm HDPE 4000 gr/m² GeotekstilE</th>
                      </tr>
                      <tr>
                        <th scope="row">Kütahya Perli Köyü Katı Atık Depolama Tesisi</th>
                        <th>2010</th>
                        <th>40000</th>
                        <th>2,00 mm HDPE 1200 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">N.V.Turkse Perenco Mudpit Yapımı</th>
                        <th>2010</th>
                        <th>8500</th>
                        <th>8500</th>
                      </tr>
                      <tr>
                        <th scope="row">Marmara Depoculuk A.Ş. Tank Tabanı Yalıtımı</th>
                        <th>2010</th>
                        <th>14000</th>
                        <th>2,00 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Lahanos Maden Atık Barajı</th>
                        <th>2010</th>
                        <th>10000</th>
                        <th>2,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Çanakkkale Sulama Kanalı</th>
                        <th>2011</th>
                        <th>65000</th>
                        <th>1,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Ankara Sincan Tıbbi atık Depolama</th>
                        <th>2011</th>
                        <th>16000</th>
                        <th>2,5 mm HDPE 5000 gr/m² GCL</th>
                      </tr>
                      <tr>
                        <th scope="row">Adapazarı Yol Ayrımı Viyadük Altı</th>
                        <th>2011</th>
                        <th>8000</th>
                        <th>1,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Demir Export</th>
                        <th>2011 - 2013</th>
                        <th>20000</th>
                        <th>2,5 mm HDPE</th>
                      </tr>
                      <tr>
                        <th scope="row">Çorlu Katı atık Depolama Sahası</th>
                        <th>2013 - 2014</th>
                        <th>28000</th>
                        <th>2,5 mm HDPE 1200 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Şişecam Soda Sanyi Atık Depolama Sahası</th>
                        <th>Sahası2013 - 2014</th>
                        <th>120000</th>
                        <th>2 mm HDPE 8000 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Yarımca Tünelleri Rehabilitasyon Sahası</th>
                        <th>2013</th>
                        <th>20000</th>
                        <th>2 mm PVC 5000 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Ordu Çevreyolu Boztepe - Öceli Tüneli</th>
                        <th>2013 - 2014</th>
                        <th>140000</th>
                        <th>2 mm PVC 6500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Bursa Yenişehir Hızlı Tren Projesi</th>
                        <th>2013 - 2014</th>
                        <th>275000</th>
                        <th>2 mm PVC 5000 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Türkiye - Gürcistan Demiryolu Tünelleri</th>
                        <th>2012 - 20143</th>
                        <th>350000</th>
                        <th>2,5 mm PVC 5000 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">İzmir Konak Yeşildere Bağlantı Tünelleri</th>
                        <th>2013 - 2014</th>
                        <th>80000</th>
                        <th>2 mm PVC 6500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Ilgaz - Çankırı Tünelleri</th>
                        <th>2013 - 2014</th>
                        <th>300000</th>
                        <th>2 mm PVC 6500 gr/m² Geotekstil</th>
                      </tr>
                      <tr>
                        <th scope="row">Maraş - Göksun Karayolu Tünelleri</th>
                        <th>2013 - 2014</th>
                        <th>300000</th>
                        <th>2 mm PVC 6500 gr/m² Geotekstil</th>
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
                  TeraGrip	
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
                        <th scope="row">Beylik İnşaat</th>
                        <th>Konya</th>
                        
                      </tr>
                      <tr>
                        <th scope="row">Bingöl İl Özel İdaresi</th>
                        <th>Bingöl</th>
                      </tr>
                      <tr>
                        <th scope="row">Cengiz İçtaş Adi Ortaklığı</th>
                        <th>Ordu - Giresun</th>
                        
                      </tr>
                      <tr>
                        <th scope="row">Çakıroğlu Asfaltlama Ltd. Şti.</th>
                        <th>Erzurum</th>
                        
                      </tr>
                      <tr>
                        <th scope="row">Dörtyol İnşaat A.Ş.</th>
                        <th>Amasya</th>
                      </tr>
                      <tr>
                        <th scope="row">Eko İnşaat ve Ticaret A.Ş.</th>
                        <th>İstanbul</th>
                      </tr>
                      <tr>
                        <th scope="row">Eni Enerji A.Ş. (Otoyol A.Ş.)</th>
                        <th>İzmit - İzmir - Yalova</th>
                      </tr>
                      <tr>
                        <th scope="row">Erdem Altyapı</th>
                        <th>Bingöl</th>
                      </tr>
                      <tr>
                        <th scope="row">Etsun Entegre Tarım Ürünleri San. Tic. A.Ş.</th>
                        <th>İstanbul</th>
                      </tr>
                      <tr>
                        <th scope="row">Fernas İnşaat</th>
                        <th>Trabzon</th>
                      </tr>
                      <tr>
                        <th scope="row">Hayati Dündar</th>
                        <th>Hayati Dündar</th>
                      </tr>
                      <tr>
                        <th scope="row">ICA İçtaş - Astaldi Adi Ortaklığı</th>
                        <th>İstanbul</th>
                      </tr>
                      <tr>
                        <th scope="row">İnçel - Ceylan İş Ortaklığı</th>
                        <th>Kuzey Irak</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 4. Bölge Müdürlüğü</th>
                        <th>Ankara</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 6. Bölge Müdürlüğü</th>
                        <th>Kayseri</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 7. Bölge Müdürlüğü</th>
                        <th>Samsun</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 8. Bölge Müdürlüğü</th>
                        <th>Elazığ</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 12. Bölge Müdürlüğü</th>
                        <th>Erzurum</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 14. Bölge Müdürlüğü</th>
                        <th>Bursa</th>
                      </tr>
                      <tr>
                        <th scope="row">Kızılırmak İnşaat</th>
                        <th>Afyon</th>
                      </tr>
                      <tr>
                        <th scope="row">Konya İl Özel İdaresi</th>
                        <th>Konya</th>
                      </tr>
                      <tr>
                        <th scope="row">Mapa İnşaat A.Ş.</th>
                        <th>Tekirdağ</th>
                      </tr>
                      <tr>
                        <th scope="row">Mehmet Ali Ünal İnşaat A.Ş.</th>
                        <th>Konya</th>
                      </tr>
                      <tr>
                        <th scope="row">Nalbantoğlu İnşaat ve Tic. Ltd. Şti.</th>
                        <th>Kayseri</th>
                      </tr>
                      <tr>
                        <th scope="row">Nesce İnşaat</th>
                        <th>Erzurum</th>
                      </tr>
                      <tr>
                        <th scope="row">Niğde İl Özel İdaresi</th>
                        <th>Niğde</th>
                      </tr>
                      <tr>
                        <th scope="row">Ordu Büyükşehir Belediyesi</th>
                        <th>Ordu</th>
                      </tr>
                      <tr>
                        <th scope="row">Öngün İnşaat Taahhüt Ticaret A.Ş.</th>
                        <th>Yozgat</th>
                      </tr>
                      <tr>
                        <th scope="row">Özcan Group</th>
                        <th>Erzurum</th>
                      </tr>
                      <tr>
                        <th scope="row">Polat Yol Yapı Sanayi ve Tic. A.Ş.</th>
                        <th>Azerbaycan - Karabük</th>
                      </tr>
                      <tr>
                        <th scope="row">Taşyapı İnşaat A.Ş.</th>
                        <th>Konya</th>
                      </tr>
                      <tr>
                        <th scope="row">Van Beton</th>
                        <th>Van</th>
                      </tr>
                      <tr>
                        <th scope="row">Yüzen Ticaret</th>
                        <th>İstanbul</th>
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
                 Pawma 
                  </a>
								</h4>
							</div>
							<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #414042;border-color: #414042;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">Kullanılan Ürün</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      <tr>
                        <th scope="row">Açılım İnşaat (Tekirdağ)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">Asfalter Group (Yunanistan)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">BCG Group (Avustralya)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">Black Sea Group (Gürcistan)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">Cengiz İnşaat  (KMO)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">ERG İnşaat (Niğde Otoyolu)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">Limak İnşaat   (KMO)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">Mapa İnşaat   (Keşan)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
                      </tr>
                      <tr>
                        <th scope="row">Polat Yol İnşaat  (Azerbaycan)</th>
                        <th>Pawma İşlenebilirlik Arttırıcı Katkı</th>
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
                 Diğer
                  </a>
								</h4>
							</div>
							<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
								<div class="panel-body">
                <table class="table">
                <thead class="thead" style="color: #fff;background-color: #414042;border-color: #414042;">
                      <tr>
                        <th class="baslik" scope="col">Proje Adı</th>
                        <th class="baslik" scope="col">Kullanılan Ürün</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Azer Yol Servis</th>
                        <th>HipeCell Selülozik Elyaf</th>
                        
                      </tr>
                      <tr>
                        <th scope="row">Bingöl İl Özel İdaresi</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                       
                      </tr>
                      <tr>
                        <th scope="row">Cengiz - İçtaş Adi Ortaklığı</th>
                        <th>HiperCell Selülozik Elyaf ve Teragrip DOP</th>
                        
                      </tr>
                      <tr>
                        <th scope="row">Çakıroğlu Asfaltlama Ltd. Şti.</th>
                        <th>HiperCell Selülozik Elyaf ve Teragrip DOP</th>
                        
                      </tr>
                      <tr>
                        <th scope="row">Eko İnşaat ve Ticaret A.Ş.</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Etsun Entegre Tarım Ürünleri Sanayi ve Ticaret A.Ş.</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Fermak İnşaat</th>
                        <th>HiperCell Selülozik Elyaf</th>
                      </tr>
                      <tr>
                        <th scope="row">Fernas İnşaat</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">İnçel - Ceylan İş Ortaklığı</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 6. Bölge Müdürlüğü Kayseri</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 7. Bölge Müdürlüğü Samsun</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">KGM 12. Bölge Müdürlüğü Erzurum</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Konya İl Özel İdaresi</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Mehmet Ali Ünal İnşaat A.Ş.</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Metgün - Fernas Ortaklığı</th>
                        <th>HiperCell Selülozik Elyaf</th>
                      </tr>
                      <tr>
                        <th scope="row">Niğde İl Özel İdaresi</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Öngün İnşaat Taahhüt Ticaret A.Ş.</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Polat Yol Yapı Sanayi ve Ticaret A.Ş.</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Yüzen Ticaret</th>
                        <th>TeraGrip Soyulma Önleyici Katkı Malzemesi</th>
                      </tr>
                      <tr>
                        <th scope="row">Artera İnşaat (Şereflikoçhisar)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Arya-İmfalt İş Ortaklığı (Aydın)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Atis Asfalt (Cebeci-İstanbul)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Azeryol Servis (Bakü)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Bergiz-Özbağ İnşaat (Kırşehir)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Burkay İnşaat (İzmir)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Cengiz - İçtaş Adi Ortaklığı (Ordu-Giresun Havaalanı)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Çağlar Yol Yapı (Alanya)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Çelikler İnşaat (Samsun)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Demyol İnşaat (Mardin)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Elityol İnşaat (Kayseri)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Fermak İnşaat (Konya)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Heltaş (Kayseri)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">İmfalt Yol Yapı (Kuşadası, Menemen, İzmir)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Makimsan (Şereflikoçhisar)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Metgün-Fernas Ortaklığı (Aksaray)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">MNL İnşaat (Kayseri)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Oze İnşaat (Konya)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Öz İnşaat - HGG İnşaat Ortaklığı (Muğla)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Polat Yol Yapı (Araç-Kastamonu)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Sarıosmanoğlu İnşaat (Aydın)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Seza İnşaat (Elazığ, Erzurum, Keşan)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Simge-Yol İnşaat (Bolu)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Şahinler İnşaat Madencilik (Cizre-Şırnak)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Şimşek Grup İnşaat (Batman)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Teyda İnşaat (Aydın-İzmir)</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">YDA İnşaat / İntaş İnşaat (Aydın, Kayseri)</th>
                        <th></th>
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
                        <th scope="row">Pelican Hill Evleri</th>
                        <th>İstanbul</th>
                        <th>Panel Kiremit </th>
                        <th>3900</th>
                      </tr>
                      <tr>
                        <th scope="row">Güzel Şehir Evleri</th>
                        <th>İstanbul</th>
                        <th>Siding</th>
                        <th>32400</th>
                      </tr>
                      <tr>
                        <th scope="row">Deniz Forum Çamlık AVM</th>
                        <th>Denizli</th>
                        <th>Kenet Çatı</th>
                        <th>3000</th>
                      </tr>
                      <tr>
                        <th scope="row">Merinos Kültür Merkezi</th>
                        <th>Bursa</th>
                        <th>Kenet Çatı</th>
                        <th>30000</th>
                      </tr>
                      <tr>
                        <th scope="row">Mariinsky Supermarket</th>
                        <th>Rusya</th>
                        <th>Kenet Çatı</th>
                        <th>18600</th>
                      </tr>
                      <tr>
                        <th scope="row">Fiskobirlik Depoları</th>
                        <th>Karadeniz Sahili</th>
                        <th>Kenet Çatı</th>
                        <th>63000</th>
                      </tr>
                      <tr>
                        <th scope="row">Serdivan AVM</th>
                        <th>Sakarya</th>
                        <th>Kenet Çatı</th>
                        <th>24000</th>
                      </tr>
                      <tr>
                        <th scope="row">İncirlik Villaları</th>
                        <th>Adana</th>
                        <th>Kenet Çatı</th>
                        <th>45000</th>
                      </tr>
                      <tr>
                        <th scope="row">Florya Akvaryum</th>
                        <th>İstanbul</th>
                        <th>Ahşap ve Granit Cephe</th>
                        <th>12000</th>
                      </tr>
                      <tr>
                        <th scope="row">Irak Hastane Projeleri</th>
                        <th>Irak</th>
                        <th>Giydirme Cephe</th>
                        <th>93000</th>
                      </tr>
                      
                      <tr>
                        <th scope="row">Türkmenbaşı Havaalanı İnşaatı</th>
                        <th>Türkmenistan</th>
                        <th>Kenet Çatı ve Cephe Giydirme </th>
                        <th>81000</th>
                      </tr>
                      <tr>
                        <th scope="row">Türkmenistan Olimpiyat Köyü</th>
                        <th>Türkmenistan</th>
                        <th>Kenet Çatı</th>
                        <th>163500</th>
                      </tr>
                      <tr>
                        <th scope="row">Mahmut Şahin İş Merkezi</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>17100</th>
                      </tr>
                      <tr>
                        <th scope="row">Lotus Evleri</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>1100</th>
                      </tr>
                      <tr>
                        <th scope="row">Balçova Yaşam Merkezi</th>
                        <th>İzmir</th>
                        <th>Giydirme Cephe</th>
                        <th>10500</th>
                      </tr>
                      <tr>
                        <th scope="row">Marmara Forum AVM</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>7050</th>
                      </tr>
                      <tr>
                        <th scope="row">Solarkent</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>3000</th>
                      </tr>
                      <tr>
                        <th scope="row">Converse Fabrika Binası</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>15000</th>
                      </tr>
                      <tr>
                        <th scope="row">Çalık Holding Plaza</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>2025</th>
                      </tr>
                      <tr>
                        <th scope="row">Monachus Hotel</th>
                        <th>Antalya</th>
                        <th>Kiremit Çatı</th>
                        <th>3150</th>
                      </tr>
                      <tr>
                        <th scope="row">İstanbul Sarayları</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>21000</th>
                      </tr>
                      <tr>
                        <th scope="row">Ak-Asya Konut Projesi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>15000</th>
                      </tr>
                      <tr>
                        <th scope="row">Bosphorus City Halkalı</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>3750</th>
                      </tr>
                      <tr>
                        <th scope="row">Çengelköy Evleri</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>16500</th>
                      </tr>
                      <tr>
                        <th scope="row">Beşiktaş Denizcilik Müzesi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>6600</th>
                      </tr>
                      <tr>
                        <th scope="row">Residence Projesi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>4500</th>
                      </tr>
                      <tr>
                        <th scope="row">Toki Sulukule Konakları</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>53000</th>
                      </tr>
                      <tr>
                        <th scope="row">Antalya Belediyesi Kültür Merkezi</th>
                        <th>Antalya</th>
                        <th>Giydirme Cephe</th>
                        <th>1500</th>
                      </tr>
                      <tr>
                        <th scope="row">Bomonti Apartments</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>4125</th>
                      </tr>
                      <tr>
                        <th scope="row">Çankaya Üniversitesi</th>
                        <th>Ankara</th>
                        <th>Giydirme Cephe</th>
                        <th>10050</th>
                      </tr>
                      <tr>
                        <th scope="row">15300 Misia</th>
                        <th>Bursa</th>
                        <th>Giydirme Cephe</th>
                        <th>24000</th>
                      </tr>

                      <tr>
                        <th scope="row">Armada 2</th>
                        <th>Ankara</th>
                        <th>Giydirme Cephe</th>
                        <th>7425</th>
                      </tr>
                      <tr>
                        <th scope="row">Radisson Hotel</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>4050</th>
                      </tr>
                      <tr>
                        <th scope="row">Oyakkent Konutları</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>6300</th>
                      </tr>
                      <tr>
                        <th scope="row">Acunkent Projesi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>5100</th>
                      </tr>
                      <tr>
                        <th scope="row">Şehrizar Konakları</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>63000</th>
                      </tr>
                      <tr>
                        <th scope="row">Şehrizar Konakları</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>26000</th>
                      </tr>
                      <tr>
                        <th scope="row">Yasa Holding Yönetim Binası</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>2550</th>
                      </tr>
                      <tr>
                        <th scope="row">Esenyurt İbis Hotel</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>8400</th>
                      </tr>
                      <tr>
                        <th scope="row">TED Ankara Koleji</th>
                        <th>Ankara</th>
                        <th>Giydirme Cephe</th>
                        <th>4050</th>
                      </tr>
                      <tr>
                        <th scope="row">Ataman Karina Pendik</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>1500</th>
                      </tr>
                      <tr>
                        <th scope="row">Otağtepe Koru Konakları</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>1650</th>
                      </tr>
                      <tr>
                        <th scope="row">Medpo Medikal İlaç Fabrikası</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>6300</th>
                      </tr>
                      <tr>
                        <th scope="row">Bomonti Palms Studio & Shopping</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>1500</th>
                      </tr>
                      <tr>
                        <th scope="row">Trabzon Adalet Sarayı</th>
                        <th>Trabzon</th>
                        <th>Giydirme Cephe</th>
                        <th>10050</th>
                      </tr>
                      <tr>
                        <th scope="row">Bayrampaşa Doğa Koleji</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>1200</th>
                      </tr>
                      <tr>
                        <th scope="row">Zeno Business Center</th>
                        <th>Bursa</th>
                        <th>Giydirme Cephe</th>
                        <th>5800</th>
                      </tr>
                      <tr>
                        <th scope="row">İnegöl AVM</th>
                        <th>Bursa</th>
                        <th>Giydirme Cephe</th>
                        <th>3000</th>
                      </tr>
                      <tr>
                        <th scope="row">Okan Üniversitesi</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı ve Giydirme Cephe</th>
                        <th>10500</th>
                      </tr>
                      <tr>
                        <th scope="row">Kırk Konak Tarabya Evleri</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>3600</th>
                      </tr>
                      <tr>
                        <th scope="row">Modern Boztepe Residence</th>
                        <th>Trabzon</th>
                        <th>Giydirme Cephe</th>
                        <th>46000</th>
                      </tr>
                      <tr>
                        <th scope="row">Fuaye Süreyyapaşa</th>
                        <th>Maltepe</th>
                        <th>Ahşap Giydirme Cephe</th>
                        <th>5100</th>
                      </tr>
                      <tr>
                        <th scope="row">Adana İbis Hotel</th>
                        <th>Adana</th>
                        <th>Seramik Giydirme Cephe</th>
                        <th>4750</th>
                      </tr>
                      <tr>
                        <th scope="row">İzmir İbis Hotel</th>
                        <th>İzmir</th>
                        <th>Seramik Giydirme Cephe</th>
                        <th>4200</th>
                      </tr>
                      <tr>
                        <th scope="row">Çubuklu Vadi Evleri</th>
                        <th>Kavacık</th>
                        <th>Ahşap Giydirme Cephe</th>
                        <th>12000</th>
                      </tr>
                      <tr>
                        <th scope="row">Edremit Havaalanı</th>
                        <th>Balıkesir</th>
                        <th>Kenet Çatı</th>
                        <th>17100</th>
                      </tr>
                      <tr>
                        <th scope="row">Çamlıca 210</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>4200</th>
                      </tr>
                      <tr>
                        <th scope="row">Çamlıca 210</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>5400</th>
                      </tr>
                      <tr>
                        <th scope="row">Konya 3. Ana Hava Jet Üstü</th>
                        <th>Konya</th>
                        <th>Kenet Çatı</th>
                        <th>6300</th>
                      </tr>
                      <tr>
                        <th scope="row">Ekşinar Konakları</th>
                        <th>İstanbul</th>
                        <th>Kenet Çatı</th>
                        <th>15000</th>
                      </tr>
                      <tr>
                        <th scope="row">Avrupa Konutları, Atakent 3 Hastane</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>8000</th>
                      </tr>
                      <tr>
                        <th scope="row">Taurus AVM</th>
                        <th>Ankara</th>
                        <th>Giydirme Cephe, Xfire</th>
                        <th>9000</th>
                      </tr>
                      <tr>
                        <th scope="row">Türkiye Müteahitler Birliği Genel Müdürlüğü</th>
                        <th>Ankara</th>
                        <th>Giydirme Cephe, Xfire</th>
                        <th>900</th>
                      </tr>
                      <tr>
                        <th scope="row">Özel GOP İdeal Hastanesi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe, Xfire</th>
                        <th>12000</th>
                      </tr>
                      <tr>
                        <th scope="row">Mall of İstanbul</th>
                        <th>İstanbul</th>
                        <th>Membran - Çatı</th>
                        <th>30000</th>
                      </tr>
                      <tr>
                        <th scope="row">Sera Kütahya AVM</th>
                        <th>Kütahya</th>
                        <th>Kenet Çatı</th>
                        <th>12000</th>
                      </tr>
                      <tr>
                        <th scope="row">Türkmenbaşı Havalimanı</th>
                        <th>Türkmenistan</th>
                        <th>Kenet Çatı</th>
                        <th>50000</th>
                      </tr>
                      <tr>
                        <th scope="row">Gilan Qabale Konserve Fabrikası</th>
                        <th>Azerbaycan</th>
                        <th>Kenet Çatı</th>
                        <th>18000</th>
                      </tr>
                      <tr>
                        <th scope="row">Koç Üniversitesi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe, Xfire</th>
                        <th>8000</th>
                      </tr>
                      <tr>
                        <th scope="row">Kiptaş The İstanbul Veliefendi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>10000</th>
                      </tr>
                      <tr>
                        <th scope="row">İzmir Bornova Polis Kriminal Laboratuvarı</th>
                        <th>İzmir</th>
                        <th>Giydirme Cephe ve Çatı</th>
                        <th>6000</th>
                      </tr>
                      <tr>
                        <th scope="row">Halkalı TOKİ Hizmet Binası</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe, XFire</th>
                        <th>8000</th>
                      </tr>
                      <tr>
                        <th scope="row">İbis Otel Ankara</th>
                        <th>Ankara</th>
                        <th>Giydirme Cephe</th>
                        <th>5000</th>
                      </tr>
                      <tr>
                        <th scope="row">Mevlana Üniversitesi Hastanesi</th>
                        <th>Konya</th>
                        <th>Giydirme Cephe</th>
                        <th>7050</th>
                      </tr>
                      <tr>
                        <th scope="row">Van Cezaevi</th>
                        <th>Van</th>
                        <th>Metal Kenet Çatı</th>
                        <th>20000</th>
                      </tr>
                      <tr>
                        <th scope="row">Van Filo Komutanlığı</th>
                        <th>Van</th>
                        <th>Trapez Çatı</th>
                        <th>7000</th>
                      </tr>
                      <tr>
                        <th scope="row">İzmir Bornova Polis Kriminal Laboratuvarı</th>
                        <th>İzmir</th>
                        <th>Giydirme Cephe ve Çatı</th>
                        <th>6000</th>
                      </tr>
                      <tr>
                        <th scope="row">Beşiktaş Maçka Oteli</th>
                        <th>İstanbul</th>
                        <th>Titanyum Çinko Çatı</th>
                        <th>1000</th>
                      </tr>
                      <tr>
                        <th scope="row">İstanbul İl Özel İdaresi Okul Projesi</th>
                        <th>İstanbul</th>
                        <th>Cephe ve Çatı</th>
                        <th>5000</th>
                      </tr>
                      <tr>
                        <th scope="row">Beytepe Restorium</th>
                        <th>Ankara</th>
                        <th>Kenet Metal Çatı</th>
                        <th>6750</th>
                      </tr>
                      <tr>
                        <th scope="row">Ankara Yeni Başbakanlık Konut Projesi</th>
                        <th>Ankara</th>
                        <th>Kenet Çatı, TrioTex R-FX</th>
                        <th>25000</th>
                      </tr>
                      <tr>
                        <th scope="row">Zeytinburnu Yeni Belediye Binası</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>7500</th>
                      </tr>
                      <tr>
                        <th scope="row">Sultangazi Yeni Belediye Binası</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe</th>
                        <th>5000</th>
                      </tr>
                      <tr>
                        <th scope="row">Adnan Menderes Havalimanı Yeni İç Hatlar Terminali</th>
                        <th>İzmir</th>
                        <th>Çatı, TrioTex R-FX 180 Plus</th>
                        <th>15750</th>
                      </tr>
                      <tr>
                        <th scope="row">Dekon Çekmeköy Projesi</th>
                        <th>İstanbul</th>
                        <th>Kenet Metal Çatı</th>
                        <th>3500</th>
                      </tr>
                      <tr>
                        <th scope="row">Marmaray Yenikapı İstasyon Projesi</th>
                        <th>İstanbul</th>
                        <th>Çatı</th>
                        <th>1350</th>
                      </tr>
                      <tr>
                        <th scope="row">Sinpaş Liva Projesi</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe, TrioTex</th>
                        <th>1500</th>
                      </tr>
                      <tr>
                        <th scope="row">Halkalı TOKİ Hizmet Binası</th>
                        <th>İstanbul</th>
                        <th>Giydirme cephe, TrioTex</th>
                        <th>8000</th>
                      </tr>
                      <tr>
                        <th scope="row">İbis Otel</th>
                        <th>Ankara</th>
                        <th>Giydirme Cephe</th>
                        <th>5000</th>
                      </tr>
                      <tr>
                        <th scope="row">Mevlana Üniversitesi Hastanesi</th>
                        <th>Konya</th>
                        <th>Giydirme Cephe</th>
                        <th>7050</th>
                      </tr>
                      <tr>
                        <th scope="row">Zeytinburnu Yeni Kaymakamlık Binası</th>
                        <th>İstanbul</th>
                        <th>Giydirme Cephe, TrioTex</th>
                        <th>6000</th>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>

                    </tbody>
                  </table>
                </div>
							</div>
						</div>
            <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background:#009ca3;">
                 Diğer
                	</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
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
                        <th scope="row">Yapı Merkezi – Tanzanya Demiryolu Projesi</th>
                        <th>Tanzanya</th>
                        <th>TekDrain GDL 600/200 Drenaj Levhası </th>
                        <th>246.040 m2</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Tanzanya Demiryolu Projesi</th>
                        <th>Tanzanya</th>
                        <th>TrioTex X Fire Nefes Alan Örtü</th>
                        <th>1.650 m2</th>
                      </tr>
                      <tr>
                        <th scope="row">Yapı Merkezi – Tanzanya Demiryolu Projesi</th>
                        <th>Tanzanya</th>
                        <th>TrioTex X Fire Akrilik Bant</th>
                        <th>83 adet</th>
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
				</div><!--- END COL -->		
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