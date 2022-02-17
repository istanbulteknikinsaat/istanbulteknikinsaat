<?php
require_once 'inc/header.php'; 
require_once 'db.php';
?>
<!-- section -->
<div id="slider" class="section owl-carousel owl-theme owl-height">
  <div class="item"><img src="images/sliders/slider2.jpg"></div>
  <div class="item"><img src="images/sliders/slider3.jpg"></div>
  <div class="item"><img src="images/sliders/slider4.jpg"></div>
</div>
<!-- end section -->
<div class="section urun-uygulamalari">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div style="margin-bottom:45px">
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg1">
        <a href="cozumler.php?id=2&name=geosentetik"><img src="images/sektorler/geo.jpg" alt=""></a>
      </div>
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg2">
        <!-- <a href="cozumler.php?id=6&name=geoarme"><img src="images/sektorler/geoarme.jpg" alt=""></a> -->
        <a href="urunuygulamadetay.php?id=4"><img src="images/sektorler/geoarme.jpg" alt=""></a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg3">
        <a href="cozumler.php?id=4&name=yesilcati"><img src="images/sektorler/yesil-cati.jpg" alt=""></a>
      </div>
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg4">
        <a href="cozumler.php?id=7&name=beton"><img src="images/sektorler/mermer.jpg" alt=""></a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg5">
        <a href="cozumler.php?id=3&name=yapikoruma"><img src="images/sektorler/yapi-koruma.jpg" alt=""></a>
      </div>
      <div class="col-sm-4 col-xs-12 col-md-6 urunuyg6">
        <a href="cozumler.php?id=5&name=asfalt"><img src="images/sektorler/yol-bakim.jpg" alt=""></a>
      </div>
    </div>
  </div>
</div>
<!-- end section -->


<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Haberler / Duyurular</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img
              src="./images/haberler/haberteknik.jpg"
              alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> 21 Ocak 2021</p>
          </div>
          <div class="blog_feature_cont">
            <p>Sektörümüzden haberleri, yeni geliştirilen ürünleri ve bilgilendirme yazılarını bulacağınız, sektörümüzün haber kaynağı HaberTeknik güncellendi.  Tüm sayılara ve haberlere <a href="https://www.haberteknik.com.tr" target="_blank">buradan</a> ulaşabilirsiniz..</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img
              src="https://www.istanbulteknik.com/img/haberler/cumartesi-calismalari-small.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> 18 Şubat 2019</p>
          </div>
          <div class="blog_feature_head">
            <h4>Cumartesi günleri depomuzdan sevkiyat yapılmayacaktır</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Habipler depomuz 16 Şubat 2019 Tarihinden itibaren Cumartesi günleri kapalı olacaktır.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full blog_colum">
          <div class="blog_feature_img"> <img
              src="https://www.istanbulteknik.com/en/img/news/Strong-Presence-in-Chile-small.jpg" alt="#" /> </div>
          <div class="post_time">
            <p><i class="fa fa-clock-o"></i> 5 Temmuz 2018 </p>
          </div>
          <div class="blog_feature_head">
            <h4>Şili’de Dev Adımlarla İlerliyoruz</h4>
          </div>
          <div class="blog_feature_cont">
            <p>Şilili müşterimiz, inşaat ve çevre düzenlemesi alanında profesyonellere kaliteli ve en ileri çözümler
              sunan bir şirkettir.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- end section -->

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
<script src="../js/owl.carousel.min.js"></script>
<!-- owl custom carousel js -->
<script src="js/owlslider_custom.js"></script>
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
</body>

</html>