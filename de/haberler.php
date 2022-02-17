<?php 
require_once '../config.php';
require_once 'inc/header.php';

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];


 ?>
<link rel="stylesheet" href="/tr/css/about/about.css">
<link rel="stylesheet" href="/tr/css/about/bootstrap.min.css">
<!-- Animate Css Start Here -->
<link rel="stylesheet" href="/tr/css/about/animate.css">
<!-- Owl Carousel Start Here -->
<link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/owlcarousel/owl.theme.default.min.css">
<!-- Nivo Slider Start Here -->
<link rel="stylesheet" href="vendor/nivo-slider/nivo-slider.css">
<!-- Animate Css Start Here -->
<link rel="stylesheet" href="/tr/css/about/animate.min.css">
<!-- Slick Css Start Here -->
<link rel="stylesheet" href="/tr/css/about/slick.css">
<link rel="stylesheet" href="/tr/css/about/slick-theme.css">
<!-- Meanmenu Css Start Here -->
<link rel="stylesheet" href="/tr/css/about/meanmenu.min.css">
<!-- All min Css Start Here -->
<link rel="stylesheet" href="/tr/css/about/all.min.css">
<style>
  .about-wrap-layout1{
    min-height:300px !important;
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
<?php 
              $ID=$_GET['id'];
              $sql = "SELECT * FROM haberler WHERE lang='$lang' AND HaberSlug='$ID'";
              //echo ($sql);
              $result = mysqli_query($db, $sql);
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) 
                {
                    $HaberAdi = $row['HaberAdi'];
                    $HaberAciklama = $row['HaberAciklama'];
                    $HaberTarih = $row['CreateDate'];
                    $HaberAciklamaStr = substr($HaberAciklama, 0, 180);
                    $HaberAciklamaStr2 = utf8_encode(strip_tags($HaberAciklamaStr));
                    ?>
<!-- inner page banner -->
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">Haberler</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Haberler</li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $row['HaberAdi']; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end inner page banner -->
<section class="about-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <h2><?php echo $row['HaberAdi']; ?></h2>
                            <p class="haberaciklama"><?php echo $row['HaberAciklama']; ?></p>
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
<!-- section -->

<?php 
}
}
?>

<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>
</body>

</html>
<script>
    var HaberAdi ="<?php echo $HaberAdi ?>";
    $(document).ready(function () {
        $("title").text(HaberAdi+"-İstanbul Teknik | TR");
        //$("meta[name=description]").attr("content",HaberAciklamaStr2);

    });

</script>