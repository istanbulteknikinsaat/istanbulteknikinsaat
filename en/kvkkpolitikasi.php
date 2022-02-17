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
ul.about-list {
    color: #646464;
}
i.fas.fa-check {
    margin-right: 10px;
    color: #fff;
    height: 18px;
    width: 18px;
    font-size: 10px;
    display: inline-block;
    text-align: center;
    line-height: 18px;
    background-color: #039ee3;
    border-radius: 50%;
    border: none;
    margin-right: 10px;
}
li {
    line-height: 1.8;
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
footer p{
        font-size:14px !important;
    }
    .newsletters p{
        font-size: 12px !important;
    }
    span.kayitolmetin {
        color: #979797;
    }
    .team-about-box .team-body .section-subtitle:before{
        content:none;
    }
    .team-about-box .team-body .section-subtitle:after{
        content:none;
    }
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">KVKK Politikası</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">KVKK Politikası</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-about-wrap">
            <div class="background-image">
                <img src="img/figure/figure89.png" alt="figure" width="172" height="169">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-about-box">
                            <div class="row gutters-50">
                                
                                <div class="col-lg-12">
                                    <div class="team-body">
                                        <h3 class="section-subtitle">KVKK Politikası</h3>
                                        <p>Forem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempincididunt ut labore et dolore magna aliqua.Ut enim ad minim venostrud exercitation ullamco laboris nisi ut aliquip ex ea commodocoDuis aute irure dolor in reprehenderit.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit delectus labore asperiores, perspiciatis quod nam sapiente excepturi enim ipsum dignissimos saepe? Facilis vero tenetur ipsum. Officia blanditiis maiores dolorem neque?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam repudiandae, deleniti facere pariatur eligendi sint officia minus cum dolorem? Vero deleniti dolor tempore molestiae? Laudantium voluptate non minus nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam in nulla, expedita unde necessitatibus magni vel suscipit dignissimos laboriosam numquam consequatur iusto tenetur voluptates enim sapiente magnam at omnis tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, accusantium nisi. Inventore facere voluptatibus consequatur atque vero quis nihil voluptate dolorem aspernatur distinctio voluptatum qui laborum reprehenderit aperiam, voluptates odit?</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit delectus labore asperiores, perspiciatis quod nam sapiente excepturi enim ipsum dignissimos saepe? Facilis vero tenetur ipsum. Officia blanditiis maiores dolorem neque?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nam repudiandae, deleniti facere pariatur eligendi sint officia minus cum dolorem? Vero deleniti dolor tempore molestiae? Laudantium voluptate non minus nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam in nulla, expedita unde necessitatibus magni vel suscipit dignissimos laboriosam numquam consequatur iusto tenetur voluptates enim sapiente magnam at omnis tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, accusantium nisi. Inventore facere voluptatibus consequatur atque vero quis nihil voluptate dolorem aspernatur distinctio voluptatum qui laborum reprehenderit aperiam, voluptates odit?</p>
<p>Blgi Toplumu hizmetleri dökümanımıza ulaşmak için<a href="/pdf/bilgitoplumuhizmeti.pdf">tıklayınız.</a></p>
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