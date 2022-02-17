<?php 
require_once '../config.php';
require_once 'inc/header.php';
require_once 'css2.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];

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
    .timeline{
        padding-left: 100px;
}
.col-lg-4.header{
    margin-left: 50px;
}
h3.isbirlik1{
    margin-left: 80px;
}
.inovatif{
    width: 300px !important;
    margin-left: -100px !important;
    }
}

.birimler{
    width: 330px !important;
}
@media only screen and (max-width: 479px){
.breadcrumb-box .page-title {
    font-size: 20px;
    line-height: 40px;
}
}
.heading-title{
    font-size:28px;
}

p {
    color: #495057;
    font-size: 18px;
    line-height: 30px;
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
@media only screen and (max-width: 991px) {
    .about-box4 .about-layout{
        padding: 40px 0px 30px 50px;
    }
    p {
    color: #495057;
    font-size: 16px;
    line-height: 30px;
}
.inovatif{
   width: 260px !important;
   left: 45px !important;
}
.birimler{
    width: 260px !important;
}
.about-box4 .heading-title {
    font-size: 28px !important;
}
}
.rightdiv {
    left: -260px !important;
    margin-top: -125px;
    box-shadow: none !important;
    background-color: white !important;
}
.isbilirlikciler{
    text-align:center;
    margin-top:-20px;
}
p {
    margin-top: 0.1rem;
    margin-bottom: 0rem;
}
.isbirkciimage{
    width:90px;
}

.imageclass{
    height:150px;
    margin-top: 40px;
    text-align: center;
}
.pfont{
    font-size:14px !important;
    color:#646464 !important;
}
.company-value-wrap {
    padding: 0px 0px 40px 0px;
    color: #fff;
}
.company-value-box .media {
    background-color: #f8f8f8;
    /* border-left: 3px solid #039ee3; */
    border-radius: 4px;
/*     border-right: 3px solid #039ee3;
 */}
.company-value-box .media .media-body p{
    font-size:20px;
}
.company-value-box .media .media-body{
    text-align:center;
}
.leftdiv {
    left: 45px !important;
    margin-top: -125px;
    box-shadow: none !important;
    background-color: white !important;
}
.paragrafend {
    content: "";
    height: 4px;
    width: 50px;
    background-color: #4285f4;
    position: absolute;
    bottom: 40px;
    left: 130px;
    border-radius: 10px;
    border: none;
    margin-bottom: 0px !important;
}
*, *::before, *::after {
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
}
   .timeline {
	 font: normal 10.6666666667px 'Titillium Web', sans-serif;
/* 	 background: linear-gradient(54deg, #9164ff, #8bfff4);*/
   background: linear-gradient(54deg, rgb(249 250 252), rgb(249 250 252))
	 color: #3c3f64;
	 overflow-x: hidden;
	 padding-bottom: 50px;
   padding-top: 0px;
} 
 .timeline ul li {
	 list-style-type: none;
	 position: relative;
	 width: 3px;
	 margin: 0 auto;
     padding-top: 25px;
	 background: #039ee3;
}
 /* .timeline ul li::after {
  content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%) rotate(45deg);
    width: 20px;
    height: 20px;
    z-index: 2;
    background: #039ee3;
} */
 .timeline ul li div {
  position: relative;
    bottom: 0;
    width: 210px;
    padding: 20px;
    background-color: #f8f8f8;
    box-shadow:0px 0px 10px 1px #e9ecef;
/*     box-shadow: 4px 13px 30px 1px #a2b4c5;
 */    border-radius: 5px;
	 /* display: flex; */
	 align-items: center;
}
 .timeline ul li div time {
	 position: absolute;
	 background: #f5af19;
	 width: 80px;
	 height: 30px;
	 top: -15px;
	 border-radius: 5px;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 letter-spacing: 2px;
}
 .timeline ul li div div {
	 height: 100px;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
}
 .timeline ul li div div p {
	 text-align: center;
}
 .timeline ul li div .discovery {
	 margin-right: 10px;
}
 .timeline ul li:nth-of-type(odd) > div {
	 left: 45px;
}
 .timeline ul li:nth-of-type(even) > div {
    left: -260px;

}
 .timeline ul li div {
	 visibility: hidden;
	 opacity: 0;
	 transition: all 0.5s ease-in-out;
}
 .timeline ul li:nth-of-type(odd) div {
	 transform: translate3d(100px, -10px, 0) rotate(10deg);
}
 .timeline ul li:nth-of-type(even) div {
	 transform: translate3d(-100px, -10px, 0) rotate(10deg);
}
 .timeline ul li.in-view div {
	 transform: none;
	 visibility: visible;
	 opacity: 1;
   height:100%;
   line-height: 0px;
   text-align: center;
}
.about-box4 .heading-subtitle2 {
    font-size: 15px;
    font-weight: 700;
    color: #444;
    position: relative;
    margin-bottom: 10px;
    margin-top: -10px;
}
@media only screen and (max-width: 479px){
.about-box4 .heading-subtitle2 {
    margin-top: 0;
}}
 @media screen and (max-width: 900px) {
	 .timeline ul li div {
		 width: 250px;
		 flex-direction: column;
	}
	 .timeline ul li div div {
		 width: 80%;
		 margin: 10px;
	}
	 .timeline ul li:nth-of-type(even) > div {
		 left: -289px;
	}
    .leftdiv {
    left: 45px !important;
    margin-top: 0px;
    box-shadow: none !important;
    background-color: white !important;
}
.rightdiv {
    left: 45px !important;
    margin-top: 0px;
    box-shadow: none !important;
    background-color: white !important;
}
}
 @media screen and (max-width: 600px) {
	
	 .timeline ul li {
		 margin-left: 20px;
	}
	 .timeline ul li div {
		 width: calc(100vw - 91px);
	}
	 .timeline ul li:nth-of-type(even) > div {
		 left: 45px;
	}

    .patentlimarka{
        margin-top: 0px !important; 
        
    }
    .genisurun{
        margin-top: 0px !important;
       
    }
    .argemerkezi{
        border-radius: 0 15px 0 15px; margin-top: -50px;
        margin-top:0px !important;
    }
    .rightdiv.arge{
        margin-left:0px !important;
        width: 250px !important;
    }
    .rightdiv.patent{
        width: 250px;
       margin-left: -20px !important;
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
    .about-box4 .heading-title{
        font-size: 28px !important;
    }
    .patentlimarka{
        border-radius: 0 15px 0 15px;
        margin-top: -90px; 
        box-shadow: 0px 14px 30px 0px rgb(89 89 89 / 30%) !important;
    }
    .genisurun{
        border-radius: 15px 0 15px 0;
        margin-top: -160px;
        margin-left: -50px;
        box-shadow: 0px 14px 30px 0px rgb(89 89 89 / 30%) !important;
    }
    .argemerkezi{
        border-radius: 0 15px 0 15px; margin-top: -50px;
    }
    .rightdiv.arge{
        width: 250px;
        margin-left: -20px;
    }
    .rightdiv.patent{
        width: 250px;
        margin-left: -30px;
    }
</style>
        <section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">AR-GE MERKEZİ</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">AR-GE MERKEZİ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <p class="heading-title">İstanbul Teknik'de AR-GE</p>
                            <p style="font-size:23px;">Yaşamı iyileştirmek için...</p>
                            <p>İstanbul Teknik yola çıktığı ilk günden beri geliştirdiği ürün, çözüm ve uygulamalar ile pek çok İLK’lere ve EN’lere imza atmıştır. İnovasyonu ve yenilikçiliği her zaman işinin merkezine koyan İstanbul Teknik bu vizyonla kendisine ait, genel müdürlükten farklı bir lokasyonda, farklı bir iş birimi olarak AR-GE merkezini konumlandırmış; Geosentetik, Asfalt ve mermer faaliyet alanlarında Türkiye’deki ilk AR-GE Merkezi olmayı başarmıştır.</p>                           
                            <p>İstanbul Teknik Ar-Ge Merkezi yeni teknoloji, yeni ürün, yeni süreçler ve know-how noktasında firmaya yenilik sağlayan, gelişmelere ayak uyduran ve yaptığı/yapacağı tüm çalışmaları belirli bir sistematik dahilinde yürüten bir yapıda faaliyetlerine devam etmektedir.2019 yılı Ocak ayında TC Sanayi ve Teknoloji Bakanlığı Ar-Ge Teşvikleri Genel Müdürlüğü tarafından Ar-Ge Merkezi olarak tescillenmiştir. </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="company-value-wrap">
            <div class="container">
                <div class="item-content">
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 header">
                        <div class="company-value-box">
                            <div class="media">
                                <div class="media-body">
                                   <p > <span style="font-weight:700;">TÜRKİYE'NİN İLK</span> GEOSENTETİK, ASFALT VE MERMER AR-GE MERKEZİ <p class="paragrafend"></p></p>
                                    <div class="item-button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
        <section class="timeline">
      <ul>
        <li class="in-view">
            <div>
                <p class="pfont">%16 DOKTORA  </p><br>
                <p class="pfont">%40 Y. LİSANS </p><br>
                <p class="pfont">ÇALIŞAN ORANI</p>
            </div>
            <div class="rightdiv arge" style="">
               <img class="argemerkezi" src="/tr/img/service/3.jpg" alt="">
            </div>
        </li>
        <li class="in-view">
            <div>
                <p class="pfont">2 TÜBİTAK PROJESİ</p><br>
                <p class="pfont">1 KOSGEB PROJESİ</p><br>
                <p class="pfont">3 AB PROJESİ</p><br>
            </div>
            <div class="leftdiv">
                <img style="border-radius: 15px 0 15px 0;" src="/tr/img/service/arge3.png" alt="">
            </div>
        </li>
        <li class="in-view">
          <div>
              <p class="pfont">2 PATENT BAŞVURUSU</p>
          </div>
          
        </li>
        <li class="in-view">
          <div class="inovatif" style="">
        
              <p class="pfont" style="font-weight:700; text-align:center;"> İNOVATİF ÜRÜNLERİMİZ</p>
              <p class="pfont">SOYULMA ÖNLEYİCİ KATKILAR</p>
              <p class="pfont">ASFALT EMÜLSİYONLARI</p>
              <p class="pfont">MERMER KORUMA JELLERİ</p>
              <p class="pfont">GEOSENTETİK KAPLAMALAR</p>
              <p class="pfont">MODİFİYE ASFALT BİTÜM EMÜLSİYONLARI</p>
              <p class="pfont">İLERİ MALZEME TEKNOLOJİLERİ</p>

          </div>
          <div class="leftdiv" style="width: 250px;">
               <img class="genisurun" style="" src="/tr/img/service/6.jpg" alt="">
            </div>
        </li>
        
        <li class="in-view">
          <div class="birimler">
              <p class="pfont" style="text-align:left;text-transform: uppercase;">Proje Koordinasyon Birimi</p>
              <p class="pfont" style="text-align:left;text-transform: uppercase;">Araştırma Birimi</p>
              <p class="pfont" style="text-align:left;text-transform: uppercase;">Test ve Analiz Birimi</p>
              <p class="pfont" style="text-align:left;text-transform: uppercase;">Geliştirme Birimi</p>
              <p class="pfont" style="text-align:left;text-transform: uppercase;">Fikri ve Sınai Mülkiyet Hakları Birimi</p>
              <p class="pfont" style="text-align:left;text-transform: uppercase;">Destek Birimi</p>
          </div>
          <div class="rightdiv patent">
               <img class="patentlimarka" src="/tr/img/service/4.jpg" alt="">
            </div>
        </li>
        <li class="in-view">
            <div>
              <p class="pfont">ULUSLARARASI AKADEMİK VE SANAYİ İŞBİRLİKLERİ</p>
            </div>
         
        </li>
        
    </ul>
</section>
        
        <!-- <section class="company-value-wrap">
            <div class="container">
                <div class="item-content">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="company-value-box">
                            <div class="media">
                                <div class="item-img">
                                    <img src="img/service/arge5.png" alt="about" width="235" height="251">
                                </div>
                                <div class="media-body">
                                    <p>Orta Doğu ve Türkî Cumhuriyetler başta olmak üzere 52 ülkeye ihracat yapmaktadır. Türkiye genelinde 1.000 satış noktasına sahiptir. Bünyesindeki 20’yi aşkın mühendis ve mimarı ayrıca konusunda uzman 80 çalışanıyla her müşterisi için projesine özgün çözümler sunmaktadır.</p>
                                    <div class="item-button">
                                     </div>
                                    <div class="item-number">01</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="company-value-box">
                            <div class="media">
                                <div class="item-img">
                                    <img src="img/service/arge6.png" alt="about" width="235" height="251">
                                </div>
                                <div class="media-body">
                                   <p> İstanbul Teknik, EN ISO 9001:2008 Kalite Yönetim Sistemi altında çalışmalarını sürdürmektedir. Ayrıca ürünlerinin Avrupa Birliği sınırları içinde kullanılabilirliğini gösteren CE sertifikalarına sahiptir.</p>
                                    <div class="item-button">
                                    </div>
                                    <div class="item-number">02</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="company-value-wrap">
            <h3 class="isbirlik1" style="text-align:center; font-weight:700;">YAYINLARIMIZ</h3>
            <div class="container">
                <div class="item-content">
                    <p style="width: 100% !important;">"İstanbul Teknik AR-GE Merkezi" tarafından yayımlanan yayınlara ulaşmak için <a href="/tr/yayinlarimiz.php"> tıklayınız. </a></p>
                </div>
            </div>
        </section>
        <section class="company-value-wrap">
            <h3 class="isbirlik1" style="text-align:center; font-weight:700;">İŞBİRLİKLERİMİZ</h3>
            <div class="container">
                <div class="item-content">
                    
                </div>
                <div class="row">
                    <div class="col-lg-3">
                     <div class="imageclass">   
                    <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/ytü.png" alt="about" width="235" height="251">
                    </div>    
                    <p class="isbilirlikciler">Yıldız Teknik Üniversitesi</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">   
                    <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/odtü.png" alt="about" width="235" height="251">
                    </div>    
                    <p class="isbilirlikciler">Orta Doğu Teknik Üniversitesi</p>
                    </div>
                    <div class="col-lg-3">
                     <div class="imageclass">   
                    <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/marmaralogo.png" alt="about" width="235" height="251">
                    </div>    
                    <p class="isbilirlikciler">Marmara Üniversitesi</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">   
                    <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/itü.png" alt="about" width="235" height="251">
                    </div>    
                    <p class="isbilirlikciler">İstanbul Teknik Üniversitesi</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/sabancıuniversitesilogo.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">Sabancı Üniversitesi</p>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-3">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/Tubitak-logo.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">Tübitak</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/istanbulüniversitesi-logo.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">İstanbul Üniversitesi</p>
                    </div>
                    <div class="col-lg-3">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/isologo.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">İstanbul Sanayi Odası</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/isfalt.jpg" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">İsfalt</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/gtü.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">Gebze Teknik Üniversitesi</p>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-3">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/eskisehir-teknik-universitesi_logo.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">Eskişehir Teknik Üniversitesi</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/Cu_Logo.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">Çukurova Üniversitesi</p>
                    </div>
                    <div class="col-lg-3">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/kgm.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">Karayolları Genel Müdürlüğü</p>
                    </div>
                    <div class="col-lg-2">
                     <div class="imageclass">    
                        <img class="isbirkciimage" src="/tr/img/isbirlikcilerimiz/kiva-logo.png" alt="about" width="235" height="251">
                    </div>
                        <p class="isbilirlikciler">KİWA</p>
                    </div>
                </div>
                
            </div>
        </section>
 
     
<?php require_once 'inc/footer.php'; ?>
<script src="../xtbadmin/Sayfalar/dist/js/timeline.js"></script>

</body>
<script>
$(document).ready(function () {
    $("title").text("Arge - İstanbul Teknik");

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