<?php require_once 'inc/header.php';require_once 'css2.php';require_once '../config.php';

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];

 ?>

<style>
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
    .personal-info-box2 .section-title:before{
        content:none;
    }
    .personal-info-box2 .section-title:after{
        content:none;
    }
    .personal-info-box2 .section-title{
        color:#333 !important;
        margin-bottom: 5px !important;
        padding-bottom: 0px !important;
        font-size: 18px !important;
        text-transform: capitalize !important;
    }
    .personal-info-box2{
        margin-bottom: 0px !important;
    }
    .contact-wrap1 {
    padding: 70px 0px 0px 0px !important;
}
.blog_feature_head{
    height:80px !important;
}
.about-wrap-layout1{
    margin-bottom:60px !important;
}
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">İstanbul Teknik Haberler</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Medya</li>
                                    <li class="breadcrumb-item active" aria-current="page">İstanbul Teknik Haberler</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $sql = "SELECT * FROM haberler WHERE lang='$lang' AND IsActive=1 ORDER BY CreateDate DESC";
              $result = mysqli_query($db, $sql);
              if (mysqli_num_rows($result) > 0) {
                // output data of each rowecho
                //print_r($result);
               $i=0;}
                //print_r($lastnews);
               
              
                  ?>
        <section class="about-wrap-layout1">
            <div class="container">
                <div class="row">
                <?php  while($row = mysqli_fetch_assoc($result)) {
                  $date2=$row['CreateDate'];
                  $date= turkcetarih_formati('j F Y', $date2); ?>
                    <div class="col-lg-4 col-md-6"style="padding-bottom: 30px;">
                    <div class="card card-body">
							<div class="blog_feature_img">
              <a target="_blank" href="haberler.php?id=<?php echo $row['HaberSlug']; ?>&slug=<?php echo $row['ID']; ?>">
								<img src="../../images/haberler/<?php echo $row['HaberİmagePath']; ?>" alt="<?php echo $row['HaberAdi']; ?>" /></a>
								</div>
								<div class="post_time">
									<p>
										<i class="fa fa-clock-o"></i>
										<?php echo $date; ?>
									</p>
								</div>
								<div class="blog_feature_head">
									<a target="_blank" href="haberler.php?id=<?php echo $row['HaberSlug']; ?>&slug=<?php echo $row['ID']; ?>">
										<h4 style="font-weight:700 !important;">
                                            <?php echo $row['HaberAdi']; ?>
										</h4>
									</a>
								</div>
								<div class="blog_feature_cont">
									<p style="height: 65px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow:hidden;">
										<?php echo strip_tags($row['HaberAciklama']); ?>
									</p>
								</div>
							</div>
						</div>
                        <?php } ?>
                    </div>                                       
            </div>
        </section>

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