<?php require_once 'inc/header.php';require_once 'css2.php';
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
    height:150px !important;
}
.about-wrap-layout1{
    margin-bottom:60px !important;
}
.blog_feature_img img{
    height: 200px !important
}
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">Basında Biz</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Medya</li>
                                    <li class="breadcrumb-item active" aria-current="page">Basında Biz</li>
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
                    <div class="col-lg-4 col-md-6">
                    <div class="card card-body">
							<div class="blog_feature_img">
              <a target="_blank" href="https://www.dunya.com/sirketler/istanbul-teknik-geogrid-ve-asfalt-kimyasallarinda-disa-bagimliligi-azaltiyor-haberi-628737">
								<img src="../tr/images/istanbul-teknik-yonetim-kurulu-baskani.jpg" alt="fgfg" /></a>
								</div>
								<div class="post_time">
									<p>
										<i class="fa fa-clock-o"></i>
										26/07/2021
									</p>
								</div>
								<div class="blog_feature_head">
									<a target="_blank" href="https://www.dunya.com/sirketler/istanbul-teknik-geogrid-ve-asfalt-kimyasallarinda-disa-bagimliligi-azaltiyor-haberi-628737">
										<h4 style="font-weight:700 !important;">
                                        İstanbul Teknik, Geogrid ve Asfalt Kimyasallarında Dışa Bağımlılığı Azaltıyor<br><br><img src="../tr/images/dunya-com.png" style=" width: 158px; height: 46px;">
										</h4>
										</h4>
									</a>
								</div>
								
							</div>
						</div>
                        <div class="col-lg-4 col-md-6">
                    <div class="card card-body">
							<div class="blog_feature_img">
              <a target="_blank" href="https://www.paradergi.com.tr/sektorler/2021/07/26/72-ulkeyi-asfaltlayan-turk">
								<img src="../tr/images/istanbul-teknik-yonetim-kurulu-baskani.jpg" alt="fgfg" /></a>
								</div>
								<div class="post_time">
									<p>
										<i class="fa fa-clock-o"></i>
										26/07/2021
									</p>
								</div>
								<div class="blog_feature_head">
									<a target="_blank" href="https://www.paradergi.com.tr/sektorler/2021/07/26/72-ulkeyi-asfaltlayan-turk">
										<h4 style="font-weight:700 !important;">
                                        72 ülkeyi Asfaltlayan Türk<br><br><br><br><img src="../tr/images/para-com.png">
										</h4>
									</a>
								</div>
								
							</div>
						</div>
                    </div>
                </div>
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