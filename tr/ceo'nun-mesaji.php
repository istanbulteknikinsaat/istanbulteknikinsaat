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
      section.patern-bg.pt-5.pb-5 {
        background-color: #ffffff;
    margin-bottom: 30px;
}

.count-info {
    background-color: rgb(0 0 0 / 12%);
    /* opacity: 35%; */
    text-align: center;
    border-radius: 10px;
    height: 150px;
    color: #212529;
    font-size: 35px;
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
    .paragrafend{
        margin-bottom:0px !important;
    }
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">CEO'nun Mesaj??</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">CEO'nun Mesaj??</li>
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
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <p class="heading-title">??stanbul Teknik</p>
                            <p style="font-size:23px;">Ya??am?? iyile??tirmek i??in...</p>
                            <p>??stanbul Teknik ailesi olarak inan??yoruz ki;<br>Herkes yapt?????? i??, ??retti??i ??r??n, geli??tirdi??i ????z??mler ile, <span style="font-weight:bold;">t??m insanl??????n ya??am??n?? iyile??tirmek i??in </span>k??????k de olsa bir katk??da bulunabilir. </p>
                            <p>Yapt??????n i??i sadece iyi yapmakla kalmamak, m??kemmeli hedeflemek ile ba??layan bu s??re?? giderek b??y??yecek; daha iyiye, daha kaliteliye ula??ma ??abalar??yla bir g??n ulusal s??n??rlar?? a??arak, t??m d??nyaya yay??lacakt??r.</p>
                            <p>22 Y??l ??nce kurumsal ya??ama ba??larken edindi??imiz Ya??am?? ??yile??tirmek ????in mottomuz art??k bizim i??in kurumsal vaade d??n????t??. Asla unutmayaca????m??z, sorumlulu??unu s??rekli ta????yaca????m??z ve ??retti??imiz her ??r??nde, geli??tirdi??imiz her ????z??mde, hizmette sizlere sunaca????m??z bir vaade???</p>
                            <p>??stanbul Teknik???in ??n??m??zdeki s??re??te s??rekli kar????la??aca????n??z yeni at??l??mlar??n??n sizin de ya??am??n??z?? iyile??tirmesi dile??i ile..</p>
                            <p><span style="font-weight:bold;">Macit Tanyol<br>Genel M??d??r</span></p>
                            <div class="paragrafend"></div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6">
                        <div class="about-box5">
                            <div class="item-img">
                                <img src="img/about/1.png" alt="about" width="501" height="607">
                                
                            </div>
                        </div>
                    </div> -->
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
          cozumIsim = "&name=beton";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Mermer") > 0) {
          cozumIsim = "&name=mermer";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
    }
  });  </script>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script> 
 
