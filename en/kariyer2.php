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
                            <h1 class="page-title">Kariyer</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kariyer</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="about-finnaco-wrap2">
            <div class="container">
                <div class="background-image">
                    <img src="img/figure/figure64.png" alt="figure" width="174" height="173">
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-box3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="item-img">
                                        <img src="img/service/service9.jpg" alt="service" width="690" height="835">
                                        <div class="shape-box">
                                            <!-- <div class="item-shape">
                                                <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                                                <ul class="item-estimate">
                                                    <li></li>
                                                    <li><span>kariyer@istanbulteknik.com</span></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-box8">
                                        <h2 class="heading-title">İstanbulTeknik'de Kariyer</h2>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam in dicta ab quam magnam architecto, quidem omnis soluta, explicabo, veritatis mollitia ipsam quaerat obcaecati non incidunt. Unde incidunt veritatis nihil.</p>
                                        <div class="media">
                                            <ul class="about-list">
                                                <li><i class="fas fa-check"></i>Lorem ipsum, dolor sit amet consectetur</li>
                                                <li><i class="fas fa-check"></i>Lorem ipsum, dolor sit amet consectetur</li>
                                                <li><i class="fas fa-check"></i>Lorem ipsum, dolor sit amet consectetur</li>
                                                <li><i class="fas fa-check"></i>Lorem ipsum, dolor sit amet consectetur</li>
                                            </ul>
                                            <div class="media-body">
                                                <div class="grubh-img">
                                                    <img src="img/figure/figure63.png" alt="figure" width="136" height="137">
                                                </div>
                                            </div>
                                        </div>
                                        <p class="item-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit repellat voluptatibus, delectus blanditiis eos dicta a perferendis voluptate illo aut quos sint sapiente magni unde obcaecati molestiae id dolorem voluptas!</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=          Consulting Start         =-->
        <!--=====================================-->
        <section class="consulting-service-wrap2">
            <div class="container">
                
                <!-- <p class="section-subtitle">What We Do</p> -->
                <div class="row gutters-50">
                    <div class="col-lg-5">
                        <div class="consulting-top1">
                            <h2 class="section-title">İşe Alım Sürecimiz</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="consulting-top2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi rem amet, maiores assumenda molestias impedit quaerat enim quos. Qui dolores asperiores provident nam esse architecto soluta eum. Inventore, soluta.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">İşin İlana Çıkılması</h3>
                            <div class="item-img">
                                <img src="img/figure/figure59.png" alt="figure" width="87" height="65">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="consulting-button">
                                <a href="service2.html" class="consulting-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">Başvuruların Değerlendirilmesi</h3>
                            <div class="item-img">
                                <img src="img/figure/figure60.png" alt="figure" width="49" height="63">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="consulting-button">
                                <a href="service2.html" class="consulting-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">Mülakat</h3>
                            <div class="item-img">
                                <img src="img/figure/figure61.png" alt="figure" width="45" height="64">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="consulting-button">
                                <a href="service2.html" class="consulting-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">İşe Kabul</h3>
                            <div class="item-img">
                                <img src="img/figure/figure62.png" alt="figure" width="42" height="64">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="consulting-button">
                                <a href="service2.html" class="consulting-btn"><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-back-wrap call-back-wrap2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <div class="call-back-box1">
                            <h3 class="section-title">Başvuru Yapın</h3>
                            <form class="message-box">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="İsim Soyisim">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Telefon">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Okul Adı">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Bölüm">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label style="color:white;">CV</label>
                                        <input type="file" class="form-control" placeholder="CV">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <a href="index.html" class="item-btn">Gönder</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="call-back-box2">
                            <div class="item-img">
                                <img src="img/service/service12.png" alt="blog" width="690" height="582">
                                
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