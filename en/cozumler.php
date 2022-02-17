<?php 
require_once 'inc/header.php'; 
require_once '../config.php';
error_reporting(0);
?>
<style>
  @media screen and (max-width:768px){
    .product_list{
      width:100% !important;
    }
    .margin_bottom_30_all{
      padding-left: 10px !important;
    }
    .product_img img {
      height: 90px;
      width: 335px  !important;
}
  }
.product_detail_btm {
    z-index: 55555555;
    width: 93%;
    color: #fff !important;
    height: 30px;
}
.product_img img {
  height: 90px;
  width: 360px;
}
.product_list {
  box-shadow:0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}
.product_img {
	overflow: hidden;
	/*background: #f3f3f3;*/
	/* height: 250px; */
	width: 360px;
}
.product_list:hover, .product_list:focus {
    box-shadow: none;
    border-bottom: none;
}
</style>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="background-image"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
</div>

<!-- end inner page banner -->
<!-- section -->
<?php
  $nowurl=$_SERVER['REQUEST_URI'];
  $url = parse_url($nowurl);
  $url['sections'] = explode('/', $url['path']);
  $lang = $url['sections'][1];
  $ID=$_GET['id'];
  $Name=$url['sections'][4];
  $Name=str_replace("/", "", $Name);
  $menutur=$url['sections'][5];
  $menutur=str_replace("/", "", $menutur);
?>
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div id="prodcat"></div>
      <div id="urunuygulamalari"></div>
      <div class="col-md-12 col-lg-12 col-xs-12">
        <div id="uygulamadetay"></div>
        <div id="urunuyg" class="container-fluid">
          <div class="side_bar_blog">
            <div id="chooseRelate">
            <?php if($Name=='geosynthetic'){$imgurunsrc="/tr/images/urunkategorileri/geosentetikler/geosentetikurunler.png";$imguygulamasrc="/tr/images/urunkategorileri/geosentetikler/geosentetikuygulamalar.png";$imgsektorsrc="/tr/images/urunkategorileri/geosentetikler/geosentetiksektorler.png";} ?>
            <?php if($Name=='insulation-products'){$imgurunsrc="/tr/images/urunkategorileri/yalitim/yalitimurunler.png";$imguygulamasrc="/tr/images/urunkategorileri/yalitim/yalitimuygulamalar.png";$imgsektorsrc="/tr/images/urunkategorileri/yalitim/yalitimsektorler.png";} ?>
            <?php if($Name=='green-roof-systems'){$imgurunsrc="/tr/images/urunkategorileri/yesilcati/yesilcatiurunler.png";$imguygulamasrc="/tr/images/urunkategorileri/yesilcati/yesilcatiuygulamalar.png";$imgsektorsrc="/tr/images/urunkategorileri/yesilcati/yesilcatisektorler.png";} ?>
            <?php if($Name=='asphalt-products'){$imgurunsrc="/tr/images/urunkategorileri/asfalt/asfalturunler.png";$imguygulamasrc="/tr/images/urunkategorileri/asfalt/asfaltuygulamalar.png";$imgsektorsrc="/tr/images/urunkategorileri/asfalt/asfaltsektorler.png";} ?>
            <?php if($Name=='concrete-products'){$imgurunsrc="/tr/images/urunkategorileri/beton/betonurunler.png";$imguygulamasrc="/tr/images/urunkategorileri/beton/betonuygulamalar.png";$imgsektorsrc="/tr/images/urunkategorileri/beton/betonsektorler.png";} ?>
            <?php if($Name=='marble-products'){$imgurunsrc="/tr/images/urunkategorileri/mermer/mermerurunler.jpg";$imguygulamasrc="/tr/images/urunkategorileri/mermer/mermeruygulamalar.jpg";$imgsektorsrc="/tr/images/urunkategorileri/mermer/mermersektorler.jpg";} ?>

              <a onclick="return iliskiliUrunler();" href="#chooseRelate"><img id="products"
                  onclick="$('img#apps').css('opacity','0.3'); $('img#sectors').css('opacity','0.3'); $('img#products').css('opacity','1');"
                  src=<?php echo $imgurunsrc ?> alt=""></a>
              <a onclick="return UrunUygGoruntule();" href="#chooseRelate"><img id="apps"
                  onclick="$('img#products').css('opacity','0.3'); $('img#sectors').css('opacity','0.3'); $('img#apps').css('opacity','1');"
                  src=<?php echo $imguygulamasrc ?> alt=""></a>
              <!-- <a onclick="return iliskiliSektorler();" href="#chooseRelate"><img id="sectors"
                  onclick="$('img#products').css('opacity','0.3'); $('img#apps').css('opacity','0.3'); $('img#sectors').css('opacity','1');"
                  src=<?php echo $imgsektorsrc ?> alt=""></a> -->
            </div>
          </div>

          <div class="row" id="kutu11"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

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
<script>
  function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }

  var id = <?= $ID ?>;
  var name = '<?= $Name ?>';
  /* function SonucGoruntule() {

    $.ajax({
      url: "/tr/ajax/Liste/UygulamaListe.php",
      type: "get",
      data: {
        ID: id,
      },
      success: function (response) {
        console.log(response);
        $("#urunuygulamalari").empty();
        var minHeight = jQuery("#inner_banner").css("min-height");
        cevap = jQuery.parseJSON(response);
        // var imgWanted = cevap.ok[0].split("src=")[1].split(" ")[0];
        jQuery(".background-image").prepend(cevap.ok[0]);
        jQuery(".inner_banner_section").css("background", "unset");
        jQuery(".inner_banner_section").css("background-size", "unset");
        jQuery(".inner_banner_section").css("background-position", "unset");
        jQuery(".inner_banner_section").css("min-height", "unset");
        jQuery("#prodcat").prepend(cevap.ok1);
        $("#urunuygulamalari").prepend(cevap.ok2);
      },
      error: function (xhr) {
        // $("#urunuygulamalari").empty();
        $("#urunuygulamalari").prepend(xhr);
      }
    });
  }; */

  function iliskiliSektorler() {
    $.ajax({
      url: "/en/ajax/Liste/AltKatSektorListe.php",
      type: "get",
      data: {
        ID: id,
        kategori: name,
      },
      success: function (response) {
        $("#kutu11").empty();
        cevap = jQuery.parseJSON(response);
        $("#kutu11").prepend(cevap.ok);
      },
      error: function (xhr) {
        // $("#urunuyg").empty();
        $("#kutu11").prepend(xhr);
      }
    });
  }

  function UrunUygGoruntule() {
    $.ajax({
      url: "/en/ajax/Liste/AltKatUygulamaListe.php",
      type: "get",
      data: {
        name: name,
      },
      success: function (response) {
        $("#kutu11").empty();
        cevap = jQuery.parseJSON(response);
        $("#kutu11").prepend(cevap.ok);
      },
      error: function (xhr) {
        // $("#urunuyg").empty();
        $("#kutu11").prepend(xhr);
      }
    });
  };

  function iliskiliUrunler() {
    $.ajax({
      url: "/en/ajax/Liste/AltKatUrunListe.php",
      type: "get",
      data: {
        ID: id,
        kategori: name,
      },
      success: function (response) {
        $("#kutu11").empty();
        cevap = jQuery.parseJSON(response);
        if (cevap.ok.indexOf("asfalt") > 0 || cevap.ok.indexOf("beton") > 0) {
          document.location.href = "http://istanbulteknik.net/tr/urunler.php";
        } else {
          $("#kutu11").prepend(cevap.ok);
        }
      },
      error: function (xhr) {
        // $("#urunuyg").empty();
        $("#kutu11").prepend(xhr);
      }
    });
  }


  function readmore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("readMore");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Devamı";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Daha Az";
      moreText.style.display = "inline";
    }

  };

  function checkReadMore() {
    if (jQuery("#urunuygulamalari p").height() >= 40) {
      document.getElementById("readMore").style.display = "inline";
      document.getElementById("dots").style.display = "inline";
    }
  }

  $(document).ready(function () {
    var name = '<?= $Name ?>';
    console.log(name);
    if(name=='geosynthetic'){jQuery("#inner_banner").css("background", "url('/tr/images/urunkategorileri/geosentetikler/geosentetikler.jpg')");$("title").text("Geosentetikler - İstanbul Teknik ");}
    else if(name=='insulation-products'){jQuery("#inner_banner").css("background", "url('/tr/images/urunkategorileri/yalitim/yalitim-urunleri.jpg')");$("title").text("Yalıtım - İstanbul Teknik ");}
    else if(name=='green-roof-systems'){jQuery("#inner_banner").css("background", "url('/tr/images/urunkategorileri/yesilcati/yesil-cati-sistemleri.jpg')");$("title").text("Yeşil Çatı Sistemleri - İstanbul Teknik ");}
    else if(name=='asphalt-products'){jQuery("#inner_banner").css("background", "url('/tr/images/urunkategorileri/asfalt/asfalt-urunleri3.png')");$("title").text("Asfalt / Yol Bakım - İstanbul Teknik ");}
    else if(name=='concrete-products'){jQuery("#inner_banner").css("background", "url('/tr/images/urunkategorileri/beton/beton-urunleri.jpg')");$("title").text("Beton - İstanbul Teknik ");}
    else if(name=='marble-products'){jQuery("#inner_banner").css("background", "url('/tr/images/urunkategorileri/mermer/mermer-urunleri.jpg')");$("title").text("Mermer - İstanbul Teknik ");}
    else{jQuery("#inner_banner").css("background", "url('/tr/images/urunkategorileri/inner_page_banner.jpg')");}

    iliski='<?= $menutur ?>';
    console.log(iliski);
    if (iliski == 'urunler') {
          $('img#apps').css('opacity', '0.3');
          $('img#sectors').css('opacity', '0.3');
          $('img#products').css('opacity', '1');
          return iliskiliUrunler();}
     else if  (iliski == 'uygulamalar'){
          $('img#apps').css('opacity', '1');
          $('img#sectors').css('opacity', '0.3');
          $('img#products').css('opacity', '0.3');
          return UrunUygGoruntule();
          }
    else if  (iliski == 'sektorler'){
          $('img#apps').css('opacity', '0.3');
          $('img#sectors').css('opacity', '1');
          $('img#products').css('opacity', '0.3');
          return iliskiliSektorler();}
});
</script>
</body>

</html>