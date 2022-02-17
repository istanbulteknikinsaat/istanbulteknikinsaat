<?php 
require_once '../config.php';
require_once 'inc/header.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
require_once 'css2.php';

?>

<style>
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
}
p{
    font-size:18px !important;
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
.breadcrumb-box .breadcrumb .breadcrumb-item.active {
    color: #333;
    margin-top: 1px;
}
.breadcrumb-box .breadcrumb .breadcrumb-item a {
    color: #e9ecef;
    transition: all 0.3s ease-in-out;
}
.about-box4 .heading-title {
    font-size: 28px !important;
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
                            <h1 class="page-title">Yayınlarımız</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item"><a href="/tr/arge.php">Arge</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">İstanbul Teknik Yayınlarımız</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="single-blog-wrap1">
            <div class="container">
                <div class="row gutters-50">
                    <div class="col-lg-12">
                        <div class="single-blog-box1">
                            <div class="single-about">
                                <div class="row">
                                    <!-- <div class="col-lg-3">
                                        <div class="single-about-img">
                                            <img src="img/about/1.png" alt="about" width="200" height="805">
                                            <div class="background-image">
                                                <img src="img/figure/figure95.png" alt="figure" width="136" height="135">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12">
                                        <div class="blog-body">
                                        <table class="table">
                                            <thead class="thead" style="color: #fff;background-color: #3d4790;border-color: #3d4790;">
                                                <tr>
                                                    <th class="baslik" scope="col">Mülkiyet Türü</th>
                                                    <th class="baslik" scope="col">Türü</th>
                                                    <th class="baslik" scope="col">Buluş Adı</th>
                                                    <th class="baslik" scope="col">Mevcut Durum Açıklama</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Hakemli Makale</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Effect of Polybutadiene Composition on the Glass Transition Temperature of SBS Block Copolymers</th>
                                                    <th>Eskişehir Technical University Journal of Science and Technology A - Applied Sciences and Engineering</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Geosentetiklerle tasarım ve uygulama örnekleri</th>
                                                    <th>İMO-İSTANBUL</th>
                                                </tr>
                                                
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Karmaşık Yapılı Geosentetik Donatılı Zemin Duvarların Tasarım Esasları</th>
                                                    <th>Sekizinci Uluslararası Geoteknik Sempozyumu</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Kolonlara oturan dolgularda geosentetiklerle temel takviyesi</th>
                                                    <th>İMO-İSTANBUL</th>
                                                </tr>
                                                
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>LİNEER VE RADYAL SBS BLOK KOPOLİMERLERİN KARAKTERİZASYONU</th>
                                                    <th> 3. ULUSLARARASI BİLİMSEL ÇALIŞMALAR KONGRESİ</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Modüler Blok Ön Yüzeyli Geogrid Donatılı Entegre Köprü Ayak Duvarları</th>
                                                    <th>Sekizinci Ulusal Geosentetik Konferansı </th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Ovit Çıkış Kavşağı Köprüsü Geogrid Donatılı Entegre Köprü Ayak Duvarları</th>
                                                    <th>Dördüncü Köprüler ve Viyadükler Sempozyumu</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Mİkrokapsüllenmiş Faz Değiştiren Maddelerin ve Dolgu Maddelerinin Bitüm Yapısı Üzerindek Etkİlerinin İncelenmesi</th>
                                                    <th>9. Uluslararası Bilimsel Araştırma Kongresi</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtiçi</th>
                                                    <th>Thermal and Rheological Characterization Microencapsulated Phase Change Materials</th>
                                                    <th>9. Uluslararası  Bilimsel Araştırma Kongresi</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hakemli Makale</th>
                                                    <th>Yurtdışı</th>
                                                    <th>The experimental performance of polyester fiber-based soil geogrids against reflective cracks </th>
                                                    <th>Geotextiles & Geomembranes</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Yayin, Bildiri</th>
                                                    <th>Yurtdışı</th>
                                                    <th>Use of geosynthetic to increase compaction level of embankment fills over soft ground</th>
                                                    <th>The 17th African Regional Conference on Soil Mechanics and Geotechnical Engineering</th>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                                                        </div>
                                            <div class="paragrafend"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
 
     
<?php require_once 'inc/footer.php'; ?>
</body>
<script>
$(document).ready(function () {
    $("title").text("Yayınlarımız - İstanbul Teknik");

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