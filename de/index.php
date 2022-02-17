<?php
require_once 'inc/header.php'; 
require_once '../config.php';
date_default_timezone_set("Europe/Istanbul");

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
?>

<style>
  @media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
    .row.haberler{
      background-color: #039ee3;
    padding: 0px 10px 0px 0px !important;
    margin-left: 0 !important;
    }
    .main_heading.text_align_center.mt-10{
      margin-left: 40% !important;
    }
    .blog_feature_img img{
    height: 200px !important;
    }
    .owl-carousel .owl-nav button.owl-next {
    font-size:16px !important;
    width:20px !important;
    height:20px !important;
    }
    .owl-carousel .owl-nav button.owl-next span {
      font-size:20px !important;
    }
    .owl-carousel .owl-nav button.owl-prev {
      font-size:16px !important;
      width:20px !important;
      height:20px !important;
    }
    .owl-carousel .owl-nav button.owl-prev span {
    font-size:20px !important;
   
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}
.card{
box-shadow: 0 0 25px -17px #000;
}
.carousel-inner{
  overflow:visible !important;
}
div#recipeCarousel {
    margin-bottom: 100px;
}
/* display 3 */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}
span.carousel-control-next-icon{
    background-color: black;
    border-radius: 15px;
}
span.carousel-control-prev-icon{
    background-color: black;
    border-radius: 15px;
}
.main_heading::after {
    content: "";
    display: block;
    margin: 20px auto 0;
    width: 50px;
    height: 5px;
    background: #039ee3;
}

.owl-carousel .owl-nav button.owl-next {
    color: #ffffff !important;
/*     background: rgba(0, 0, 0, 0.65);
 */    border: 0 !important;
    position: absolute;
    top: 50%;
    width: 40px;
    height: 40px;
    /* line-height: 36px; */
    padding: 0;
    font-size: 20px;
    text-align: center;
    margin: 0px;
    -webkit-transition: 400ms;
    -webkit-transform: translateY(-50%);
    border-radius: 30px 0 0 30px !important;
    opacity: 1;
    box-shadow: 0px 5px 25px rgb(0 0 0 / 10%);
    right: 10px;}

    .owl-carousel .owl-nav button.owl-prev {
    color: #ffffff !important;
/*     background: rgba(0, 0, 0, 0.65);
 */    border: 0 !important;
    position: absolute;
    top: 50%;
    width: 35px;
    height: 40px;
    /* line-height: 36px; */
    padding: 0;
    font-size: 20px;
    text-align: center;
    margin: 0px;
    -webkit-transition: 400ms;
    -webkit-transform: translateY(-50%);
    border-radius: 0 30px 30px 0 !important;
    opacity: 1;
    box-shadow: 0px 5px 25px rgb(0 0 0 / 10%);
    left: 10px;}
    .owl-theme .owl-nav [class*=owl-]:hover{
         background: none;
    }
    .owl-carousel .owl-nav button.owl-next span{
      font-size:80px;
      line-height:0px;
    }
    .owl-carousel .owl-nav button.owl-prev span{
      font-size:80px;
      line-height:0px;
    }
   
 /*  @media screen and (min-width: 748px) {

  .header_bottom {
    position: absolute;
    z-index: 9;
    background: rgba(255,255,255,0.75);
    margin-top: 50px;}
    .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    height: 500px;
}} */

  </style>

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
<!-- section -->
<div id="slider" class="section owl-carousel owl-theme owl-height">
<?php
$sql = "SELECT SliderPath,SliderAdi FROM sliders WHERE lang='$lang' AND IsActive=1 ORDER BY ID DESC";
              $result = mysqli_query($db, $sql);
              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) { ?>

    <div class="item"><img src="../../images/sliders/<?php echo $row['SliderPath']; ?>" alt="<?php echo $row['SliderAdi']; ?> "></div>
                                    
<?php           }
              } ?>
</div>
<!-- end section -->
<div class="section urun-uygulamalari" style="margin-bottom:40px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div style="margin-bottom:45px">
          </div>
        </div>
      </div>

      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg1">
        <a href="cozumler.php?id=2&name=geosentetik"><img src="/tr/images/sektorler/geo.jpg" alt="Geosentetikler"></a>
      </div>
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg2">
        <a href="/tr/urunuygulamadetay/4/istinat-duvarlari-ve-dik-sevler"><img src="/tr/images/sektorler/geoarme.jpg" alt="GeoArme Duvar Uygulamaları"></a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg3">
        <a href="cozumler.php?id=4&name=yesilcati"><img src="/tr/images/sektorler/yesil-cati.jpg" alt="Yeşil Çatı Sistemleri"></a>
      </div>
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg4">
        <a href="cozumler.php?id=7&name=mermer"><img src="/tr/images/sektorler/mermer.jpg" alt="Mermer Ürünleri"></a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg5">
        <a href="cozumler.php?id=3&name=yapikoruma"><img src="/tr/images/sektorler/yapi-koruma.jpg" alt="Yalıtım Ürünleri"></a>
      </div>
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg6">
        <a href="cozumler.php?id=5&name=yolbakim"><img src="/tr/images/sektorler/yol-bakim.jpg" alt="Asfalt Ürünleri"></a>
      </div>
    </div>
  </div>
</div>
<!-- end section -->



<!-- end section -->
<div class="container2 text-center">
	<div class="row haberler" style="background-color: #039ee3;    padding: 0px 50px 0px 50px;    margin-left: 0 !important;">
		<div class="main_heading text_align_center mt-10" style="margin-left: 35%; margin-top: 50px; margin-bottom: 15px !important;">
			<h2 style="color: white;" class="haberlerheader">NEUIGKEITEN / ANKÜNDIGUNGEN</h2>
		</div>
		<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
			<div class="carousel-inner w-100" role="listbox">
				  <?php $sql = "SELECT * FROM haberler WHERE lang='$lang' AND IsActive=1";
              $result = mysqli_query($db, $sql);
              if (mysqli_num_rows($result) > 0) {
                // output data of each rowecho
                //print_r($result);
               $i=0;
                //print_r($lastnews);
                while($row = mysqli_fetch_assoc($result)) { 
                  $date2=$row['CreateDate'];
                  $date= turkcetarih_formati('j F Y', $date2);
                  //$date=strftime("%e %B %Y %A", time());
                 // if($lastnews['HaberSlug']==$row['HaberSlug']){$active="active";}else{$active="";}
                 if($i==0){$i=1;$active="active";}else{$active="";}
                  //print_r(mysqli_fetch_assoc($result)->first());
                  ?>
				<div class="carousel-item 
					<?php echo $active; ?>">
					<div class="col-md-3">
						<div class="card card-body">
							<div class="blog_feature_img">
              <a href="haberler.php?id=<?php echo $row['HaberSlug']; ?>&slug=<?php echo $row['ID']; ?>">
								<img src="../../images/haberler/<?php echo $row['HaberİmagePath']; ?>" alt="<?php echo $row['HaberAdi']; ?>" /></a>
								</div>
								<div class="post_time">
									<p>
										<i class="fa fa-clock-o"></i>
										<?php echo $date; ?>
									</p>
								</div>
								<div class="blog_feature_head">
									<a href="haberler.php?id=<?php echo $row['HaberSlug']; ?>&slug=<?php echo $row['ID']; ?>">
										<h4>
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
					</div>
					<?php           }
              } ?>
					<a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev" style="margin-left: -20px;">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Geri</span>
					</a>
					<a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next" style="margin-right: -20px;">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">İleri</span>
					</a>
				</div>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value=""
                  class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>

<!-- owl carousel js -->
<script src="/js/owl.carousel.min.js"></script>
<!-- owl custom carousel js -->
<script src="/tr/js/owlslider_custom.js"></script>
<script src="/js/owl.carousel.min.js"></script>

<script>

$('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

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
  (function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);
</script>
</body>

</html>