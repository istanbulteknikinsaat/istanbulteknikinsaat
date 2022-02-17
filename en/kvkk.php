<?php
require_once '../config.php'; 
require_once 'inc/header.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
?>
<link rel="stylesheet" href="../xtbadmin/Sayfalar/dist/css/style.min.css">
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section"> 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">K.V.K.K Politikamız</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Anasayfa</a></li>
                <li class="active">Hakkımızda</li>
                <li class="active">KVKK</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<p>
<span class="list-title">Bilgi Toplumu Hizmeti</span>
İlgili Dökümana ulaşmak için <a target="_blank"
href="../pdf/bilgitoplumuhizmeti.pdf">tıklayınız.</a><br /><br />
</p>
<?php require_once 'inc/footer.php'; ?>
<script src="../xtbadmin/Sayfalar/dist/js/timeline.js"></script>
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
</html>