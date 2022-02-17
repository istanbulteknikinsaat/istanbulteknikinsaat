<?php 
require_once '../config.php';
require_once 'inc/header.php';

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];


 ?>
<link rel="stylesheet" href="/tr/css/about/about.css">
<link rel="stylesheet" href="/tr/css/about/all.min.css">

<link rel="stylesheet" href="/tr/css/about/bootstrap.min.css">
<!-- Animate Css Start Here -->
<link rel="stylesheet" href="/tr/css/about/animate.css">
<!-- Owl Carousel Start Here -->
<!-- Nivo Slider Start Here -->
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
    .blog-box3 .content-box .blog-date{
        top: -25px !important;
        font-size: 22px;
    }
    .blog-box3 .content-box:after{
        transform: none !important;
        background: #128ad6;

    }
</style>

<?php 
if(isset($_GET['id'])){
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
        $date2=$row['CreateDate'];
        $date= turkcetarih_formati('j F Y', $date2);
        ?>
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
        <section class="about-wrap-layout1" style=" margin-bottom: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <h2><?php echo $row['HaberAdi']; ?></h2>
                            <img src="../../../images/haberler/<?php echo $row['HaberİmagePath']; ?>" alt="<?php echo $row['HaberAdi']; ?>" /></a>
                            <div class="blog-date"><?php echo turkcetarih_formati('j F Y', $date); ?></div>
                                <p class="haberaciklama"><?php echo $row['HaberAciklama']; ?></p>
                            <div class="paragrafend"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
}
}
}
else{
?>
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
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-wrap-layout3">
            <div class="container">
                <div class="row gutters-50">
                    <div class="col-lg-12">
                        <div class="row">
                            <?php
                                $sql = "SELECT * FROM haberler WHERE lang='$lang' AND IsActive =1 ";
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
                                    $date2=$row['CreateDate'];
                                    $date= turkcetarih_formati('j F Y', $date2);
                              ?>
                                <div class="col-lg-4">
                                     <div class="blog-box3">
                                     <div class="item-img">
                                        <a href="#"><img style="height:300px; width:760px;" src="../../images/haberler/<?php echo $row['HaberİmagePath']; ?>" alt="blog" width="760" height="530"></a>
                                     </div>
                                     <div class="content-box">
                                        <h2 class="section-title"><a href="single-blog.html"><?php echo $HaberAdi; ?></a></h2>
                                        <div class="blog-date"><?php echo turkcetarih_formati('j', $date2); ?> <span><?php echo turkcetarih_formati('F', $date2); ?></span><span><?php echo turkcetarih_formati('Y', $date2); ?></span></div>
                                        <p style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow:hidden;"><?php echo strip_tags($HaberAciklama);?></p>
                                        <div class="blog-button">
                                            <a href="../haberler.php?id=<?php echo $row['HaberSlug']; ?>&slug=<?php echo $row['ID']; ?>" class="blog-btn">Devamını Oku<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                     </div>
                                </div>
                            </div>
                           <?php }  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } ?>
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