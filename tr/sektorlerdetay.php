<?php 
require_once 'inc/header.php'; 
require_once 'db.php';
$ID=$_GET['id'];
?>

<body id="default_theme" class="it_shop_detail">
  <!-- loader -->
  <!-- end loader -->

  <!-- inner page banner -->
  <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Sektör Detay Sayfası</h1>
                <ol class="breadcrumb">
                  <li><a href="index.php">Anasayfa</a></li>
                  <li class="active">Sektör Detay Sayfası</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 product_detail">
    <div class="container">
      <div class="row">
        <div data-id="<?php echo $ID=$_GET['id']; ?>" id="sektordetay" class="col-md-12">

        </div>
      </div>
    </div>
  </div>
  <!-- end section -->

  <?php require_once 'inc/footer.php'; ?>

  <script>
     var id = <?= $ID; ?>;
     console.log(id);
    $(document).ready(function () {
     
      //console.log(id);
      if (id !== null && id !== "") {
        SonucGoruntule();
        setTimeout(() => {
          checkReadMore();
        }, 100);
        UrunListele();
        UygulamaListele();
      } else {
        alert("veri yok");
        //document.location.href = "/";
      }
    });

    function getParameterByName(name, url = window.location.href) {
      name = name.replace(/[\[\]]/g, '\\$&');
      var regex = new RegExp('[?&/\]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
        //console.log(regex);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    function SonucGoruntule() {
      $.ajax({
        url: "/tr/ajax/Liste/SektorDetay.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {

          cevap = jQuery.parseJSON(response);
          if (cevap.baslik[0].indexOf("ve") > 0) {
            str1 = cevap.baslik[0].split("ve")[0];
            str2 = cevap.baslik[0].split("ve")[1];
            baslik = str1.concat('ve <br>', str2);
            $("h1.page-title").html(baslik);
            jQuery("ol.breadcrumb li.active").text(cevap.baslik);
          } else {
            $("h1.page-title").text(cevap.baslik);
            jQuery("ol.breadcrumb li.active").text(cevap.baslik);
          }
          $("#sektordetay").prepend(cevap.aciklama);
          console.log(cevap.resim[0]);
           if (cevap.resim[0] !== "") {
            $("#inner_banner").css('background', 'url(/images/sektorler/' + cevap.resim[0] +
              ')  50% 50% / cover');
          } 
        },
        error: function (xhr) {
          // $("#sektordetay").empty();
          $("#sektordetay").prepend(xhr);
        }
      });
    }

    function UygulamaListele() {
      $.ajax({
        url: "/tr/ajax/Liste/SektorBaglantiliUygulama.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {
          cevap = jQuery.parseJSON(response);
          $("#sektordetay").append(cevap.ok);
        },
        error: function (xhr) {
          $("#sektordetay").append(xhr);
        }
      });
    }


    function UrunListele() {
      $.ajax({
        url: "/tr/ajax/Liste/SektorBaglantiliUrun.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {
          cevap = jQuery.parseJSON(response);
          $("#sektordetay").append(cevap.ok);
        },
        error: function (xhr) {
          $("#sektordetay").append(xhr);
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
      if (jQuery("#description .product_desc").height() >= 40) {
        document.getElementById("readMore").style.display = "inline";
        document.getElementById("dots").style.display = "inline";
      }
    }

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