<?php 
require_once '../config.php';
require_once 'inc/header.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
?>
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
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">Hakkımızda</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <!--=====================================-->
        <!--=            About Start            =-->
        <!--=====================================-->
        <section class="about-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-box4">
                            <p class="heading-title">İstanbulTeknik</p>
                            <p class="heading-subtitle">Yaşamı iyileştirmek için...</p><br>
                            <p>İstanbul Teknik, 1998 yılında faaliyette bulunduğu inşaat sektörünün ihtiyaçlarını karşılamak ve ülke sanayisine katkıda bulunmak üzere kurulan %100 Türk sermayeli bir yapı malzeme üretim, satış ve çözüm mühendisliği firmasıdır.</p>
                            <div class="about-layout">
                                <div class="media">
                                    <div class="item-img about-img2">
                                        <img src="img/figure/figure76.png" alt="figure" width="44" height="46">
                                    </div>
                                    <div class="media-body">
                                        <div class="item-content">
                                            <!-- <h3 class="item-title">Financial Analysis</h3> -->
                                            <p>İnşaat sektörüne yönelik maksimum faydayı sunan ürünlerin üretimini ve satışını sağlayan İstanbul Teknik, yer aldığı tüm projelerde amaca uygun çözümleriyle dikkat çekmektedir.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-layout">
                                <div class="media">
                                <div class="item-img">
                                        <img src="img/figure/figure77.png" alt="figure" width="44" height="46">
                                    </div>
                                    <div class="media-body">
                                        <div class="item-content">
                                            <!-- <h3 class="item-title">Financial Analysis</h3> -->
                                            <p>Altyapıdan konuta, yalıtımdan asfalt uygulamalarına kadar geniş bir ürün ve mühendislik uygulaması yelpazesine sahip olan İstanbul Teknik, sektörde kalitesiyle ve uzun yılların deneyimi sonucunda müşterilerine verdiği güven ile öne çıkmaktadır.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <p>2011’in Nisan ayında Çorlu’da faaliyete geçen ve 4.500 m² kapalı alana sahip tesisinde, yıllık 4 milyon m² kapasite ile 6,20 metre genişliğe kadar geogrid üretimi yapmaktadır. ForTex ve AsfaltTex markalarıyla pazara sunulan bu ürünleri piyasadaki rakiplerinden ayıran en önemli özelliği, ilk kez bir Türk firmasının polyester ve cam elyaf örgülü geogridi uluslararası standartlarda üretiyor olmasıdır.</p>
                            <div class="about-layout">
                                <div class="media">
                                <div class="item-img">
                                    <img src="img/figure/figure76.png" alt="figure" width="44" height="46">
                                    </div>
                                    <div class="media-body">
                                        <div class="item-content">
                                            <!-- <h3 class="item-title">Financial Analysis</h3> -->
                                            <p class="ilkteragrip">İstanbul Teknik, Türkiye’nin ilk ve tek yerli soyulma önleyici katkı malzemesi olan TeraGrip’in de üreticisidir.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-box5">
                            <div class="item-img">
                                <img src="img/about/1.png" alt="about" width="501" height="607">
                                <!-- <div class="background-image1">
                                    <img src="img/figure/figure73.png" alt="figure" width="167" height="167">
                                </div>
                                <div class="background-image2">
                                    <img src="img/figure/figure74.png" alt="figure" width="121" height="104">
                                </div>
                                <div class="background-image3">
                                    <img src="img/figure/figure75.png" alt="figure" width="139" height="417">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=            Company-value Start    =-->
        <!--=====================================-->
        <section class="company-value-wrap">
            <div class="container">
                <div class="item-content">
<!--                     <h2 class="section-title">Company Core Values</h2>-->
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="company-value-box">
                            <div class="media">
                                <div class="item-img">
                                    <img src="img/about/3.png" alt="about" width="235" height="251">
                                </div>
                                <div class="media-body">
<!--                                     <h3 class="heading-title">Planning & Strategy</h3>
 -->                                    <p>Orta Doğu ve Türkî Cumhuriyetler başta olmak üzere 52 ülkeye ihracat yapmaktadır. Türkiye genelinde 1.000 satış noktasına sahiptir. Bünyesindeki 20’yi aşkın mühendis ve mimarı ayrıca konusunda uzman 80 çalışanıyla her müşterisi için projesine özgün çözümler sunmaktadır.</p>
                                    <div class="item-button">
<!--                                         <a href="team2.html" class="item-btn">Read More<i class="fas fa-long-arrow-alt-right"></i></a>
 -->                                    </div>
                                    <div class="item-number">01</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="company-value-box">
                            <div class="media">
                                <div class="item-img">
                                    <img src="img/about/2.png" alt="about" width="235" height="251">
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
        </section>
        <!--=====================================-->
        <!--=           Progress-bar Start      =-->
        <!--=====================================-->
        <section class="progress-bar-wrap1" style="margin-bottom: 50px;">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <div class="progress-bar-box1 progress-bar-box3">
                            <p>Üretim bantlarında modern teknolojinin sunduğu tüm yenilikleri kullanan İstanbul Teknik, AR-GE faaliyetlerini bünyesindeki laboratuarları ve kalifiye personeli ile sürdürmektedir.</p>
                            <p> İstanbul Teknik, “Yaşamı İyileştirmek İçin” sloganıyla, faaliyette bulunduğu alanlardaki lider konumunu, müşteri memnuniyetinden ödün vermeden sürdürmektedir.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="progress-bar-box2 progress-bar-box3">
                            
                            <div class="item-img">
                                <img src="img/about/6.png" alt="service" width="960" height="555">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        <!--=====================================-->
        <!--=            Call-back Start        =-->
        <!--=====================================-->
        <!-- <section class="call-back-wrap call-back-wrap2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <div class="call-back-box1">
                            <h3 class="section-title">Bizimle İletişime Geçin</h3>
                            <form class="message-box">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Adınız">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Telefon">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea name="comment" id="message" class="form-control" placeholder="Mesajınız" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <a href="#" class="item-btn">Gönder</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="call-back-box2">
                            <div class="item-img">
                                <img src="img/blog/blog4.jpg" alt="blog" width="690" height="582">
                                <div class="call-img">
                                    <img src="img/figure/figure11.png" alt="figure" width="145" height="295">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--=====================================-->
        <!--=            Testimonial Start      =-->
        <!--=====================================-->
        <!-- <section class="testimonial-wrap3">
            <div class="container">
                <div class="testimonial-box3">
                    <div class="slick-carousel slick-slider" data-slick='{"arrows": true, "slidesToShow": 1, "autoplay": false, "autoplaySpeed": 2000}'>
                        
                        
                    </div>
                </div>
            </div>
        </section> -->
<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>
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
          cozumIsim = "&name=geoarme";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Mermer") > 0) {
          cozumIsim = "&name=beton";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
    }
  });
  </script>