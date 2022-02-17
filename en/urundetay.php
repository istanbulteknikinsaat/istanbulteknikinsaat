<?php 
require_once 'inc/header.php'; 
require_once 'db.php';
if(isset($_GET['id'])){
  $ID=$_GET['id'];}
?>
<style>
  .title-holder-cell.text-left {
    margin-left: 50px;
}
i.fas.fa-angle-down.rotate-icon{
  display:none;
}
div#headinggOne111 [data-toggle="collapse"]:after{
  content:none !important;
}
div#headinggTwo222 [data-toggle="collapse"]:after{
  content:none !important;
}
div#headinggThree333 [data-toggle="collapse"]:after{
  content:none !important;
}
div#headingFive5{
              background-color: rgb(0 163 224) !important;
            }
            
.tableRowBorderRight{
  text-align:center !important;
}
table th{
  border-right: 1px solid;
}
.card-header:first-child{
/*   background-color: rgb(159 9 9 / 3%);
 */    border: 1px solid transparent;
    border-radius: 5px;
    color: #fff;
    display: block;
    font-size: 15px;
    font-weight: 600;
    padding: 8px 5px 12px 30px;
    position: relative;
    transition: all 0.3s ease 0s;
    margin-top: 10px;
}
[data-toggle="collapse"]:after{
    background: #fcf7f7 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 10%;
    box-shadow: 0 3px 10px rgb(0 0 0 / 58%);
    color: #6e7379;
    content: "";
    font-family: fontawesome;
    font-size: 20px;
    height: 40px;
    left: -30px;
    line-height: 40px;
    position: absolute;
    text-align: center;
    top: 3px;
    transition: all 0.3s ease 0s;
    width: 40px;
}
div#headingSix120:after {
    background: #fcf7f7 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 10%;
    box-shadow: 0 3px 10px rgb(0 0 0 / 58%);
    color: #6e7379;
    content: "";
    font-family: fontawesome;
    font-size: 20px;
    height: 40px;
    left: -30px;
    line-height: 40px;
    position: absolute;
    text-align: center;
    top: 3px;
    transition: all 0.3s ease 0s;
    width: 40px;
}
.breadcrumb li a{
  color:white !important;
}
.my-product-details-header{height:300px;width:100%;display:inline-block;position:relative;overflow:visible}.my-product-details-header img{position:absolute;display:inline-block;bottom:0;right:0;width:auto; height:300px;}
/* .my-product-details-header.lefttoright{background:rgba(249,250,252,1);background:-moz-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-webkit-gradient(left top,right bottom,color-stop(0%,rgba(249,250,252,1)),color-stop(0%,rgba(225,232,238,1)),color-stop(43%,rgba(249,250,252,1)),color-stop(100%,rgba(255,255,255,1)));background:-webkit-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-o-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-ms-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:linear-gradient(135deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%)}
 */

 .title-holder {
    margin: 200px 50px 0;
}
@media screen and (min-width:320px) and (max-width:500px){.product-details-header{height:179px;width:100%;display:inline-block;overflow:hidden;position:relative;margin-bottom:20px}
.my-product-details-header{height:196px;width:100%;display:inline-block;overflow:hidden;position:relative;margin-bottom:20px}.product-details-header>img{position:absolute;top:0;right:-85%;float:right;width:1000px}
.my-product-details-header img{position:absolute;display:inline-block;top:0;left:0;width:100%}.product-dilatasyon-details-header img{position:absolute;display:inline-block;bottom:-20px;right:0;width:100%}
.product-dilatasyon-details-header-teknik{width:100%;min-height:300px;display:inline-block;position:relative;overflow:visible;text-align:center}.product-dilatasyon-details-header-teknik.bkg{background-color:#e9eef3;background:rgba(249,250,252,1);background:-moz-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-webkit-gradient(left top,right bottom,color-stop(0%,rgba(249,250,252,1)),color-stop(0%,rgba(225,232,238,1)),color-stop(43%,rgba(249,250,252,1)),color-stop(100%,rgba(255,255,255,1)));background:-webkit-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-o-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-ms-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:linear-gradient(135deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%)}
.product-dilatasyon-details-header-teknik img{width:90%;bottom:10px;margin:0 auto;right:0;left:0;float:none;mix-blend-mode:multiply}.subpage .subpage-header{display:none}
}
td.tableRowBorderRight {
    padding-left: 25px !important;
}
.page-title {
    color: white;
    font-size: 30px;
}
.breadcrumb {
    color: white;
}
@media (max-width: 767px){
.urunsidebar{
display:none;
}}
.col-md-3.urunsidebar {
  background: #fbfbfb;
    border-radius: 4px 4px 4px 4px;
    box-shadow: 0px 14px 30px 0px rgb(89 89 89 / 20%);
    padding-top: 40px;
    margin-bottom: 200px;
}

div#urundetay {
    padding-left: 50px;
}
.side_bar_blog .input-group input.form-control{
  background: #dee2e6 !important;}
  .card{
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%) !important;
    border-radius: 10px;
  }
  .tableRowBorderBottom{
    border: 2px solid #f0f1f5 !important;
  }
  td{
    border: 2px solid #f0f1f5;
  }
</style>
<body id="default_theme" class="it_shop_detail">
  <!-- loader -->
  <!-- end loader -->

  <!-- inner page banner -->
  <!-- <div id="inner_banner" class="section inner_banner_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Ürün Detay Sayfası</h1>
                <ol class="breadcrumb">
                  <li><a href="index.html">Anasayfa</a></li>
                  <li class="active">Ürün Detay Sayfası</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="row"> 
  <div class="my-product-details-header lefttoright">
  <div id="wrapper-dilatasyon" class="wrapper-dilatasyon">
    <div class="row">
      <div class="title-holder">
          <div class="title-holder-cell text-left">
            <h1 class="page-title">Ürün Detay Sayfası</h1>
            <ol class="breadcrumb">
              <li><a href="/">Anasayfa</a></li>
              <li class="kategori2"><a href="/">Kategori2</a></li>
              <li class="kategori"><a href="/">Kategori</a></li>
              <li class="active">Ürün Detay Sayfası</li>
            </ol>
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
        <div class="col-md-3 urunsidebar">
          <div class="side_bar">
            <div class="side_bar_blog">
              <h4>ARAMA</h4>
              <div class="side_bar_search">
              <form action="/tr/arama.php">
                <div class="input-group stylish-input-group">
                  <input class="form-control" placeholder="Ara" type="text" name="arama">
                  <span class="input-group-addon">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
                  </form>
              </div>
            </div>
            <div class="side_bar_urunler">
            <div class="side_bar_blog" style="margin-bottom: 10px !important;">
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headinggOne111" style="background-color: rgb(0 163 224) !important;">
                  <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseeOne1"
                    aria-expanded="false" aria-controls="collapseeOne1">
                    <h4 class="mb-0" style="color: white;">
                      ÜRÜNLERİMİZ <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseeOne1" class="collapse" role="tabpanel" aria-labelledby="headinggOne1"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <ul class="categary">
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=urunler#chooseRelate"><i class="fa fa-angle-right"></i> Geosentetik
                          Ürünleri</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=urunler#chooseRelate"><i class="fa fa-angle-right"></i> Yalıtım
                          Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=urunler#chooseRelate"><i class="fa fa-angle-right"></i> Yeşil Çatı
                          Ürünleri</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=urunler#chooseRelate"><i class="fa fa-angle-right"></i> Asfalt
                          Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=6&name=beton&iliski=urunler#chooseRelate"><i class="fa fa-angle-right"></i> Beton Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=mermer&iliski=urunler#chooseRelate"><i class="fa fa-angle-right"></i> Mermer Ürünleri</a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="side_bar_blog" style="margin-bottom: 10px !important;">
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headinggTwo222" style="background-color: rgb(0 163 224) !important;">
                  <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseeTwo2"
                    aria-expanded="false" aria-controls="collapseeTwo2">
                    <h4 class="mb-0" style="color: white;">
                      UYGULAMALARIMIZ <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseeTwo2" class="collapse" role="tabpanel" aria-labelledby="headinggTwo2"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <ul class="categary">
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=uygulamalar#chooseRelate"><i class="fa fa-angle-right"></i> Geosentetik
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=uygulamalar#chooseRelate"><i class="fa fa-angle-right"></i> Yalıtım
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=uygulamalar#chooseRelate"><i class="fa fa-angle-right"></i> Yeşil Çatı
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=uygulamalar#chooseRelate"><i class="fa fa-angle-right"></i> Asfalt
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=6&name=beton&iliski=uygulamalar#chooseRelate"><i class="fa fa-angle-right"></i> Beton
                          Uygulamaları</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=mermer&iliski=uygulamalar#chooseRelate"><i class="fa fa-angle-right"></i> Mermer
                          Uygulamaları</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="side_bar_blog">
              <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headinggThree333" style="background-color: rgb(0 163 224) !important;">
                  <a data-toggle="collapse" class="collapsed" data-parent="#accordionEx" href="#collapseeThree3"
                    aria-expanded="false" aria-controls="collapseeThree3">
                    <h4 class="mb-0" style="color: white;">
                      SEKTÖRLERİMİZ <i class="fas fa-angle-down rotate-icon"></i>
                    </h4>
                  </a>
                </div>
                <!-- Card body -->
                <div id="collapseeThree3" class="collapse" role="tabpanel" aria-labelledby="headinggThree3"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <ul class="categary">
                      <?php
                      require_once 'db.php'; 
                      $sql = $db->prepare("SELECT * FROM sektorler");						
                      $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
                      $sql->execute();
                      while ( $row=$sql->fetch(PDO::FETCH_ASSOC) )
                      {
                        $sektorID = $row['id'];
                        $sektorAdi = $row['SektorAdi'];
                        echo "<li><a href='#'><i class='fa fa-angle-right'></i>" . $sektorAdi . "</a></li>";
                      }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div id="urundetay" class="col-md-9"></div>
      </div>
    </div>
  </div>
  <!-- end section -->

  <?php require_once 'inc/footer.php'; ?>

  <script>
    
    function sehirleraktif(element) {
   if(element.options[element.selectedIndex].value=="Yurtiçi"){
     $('#sehirler').css('display','block');
   }else{
    $('#sehirler').css('display','none');

   }
   
   
    }
    var id=<?= $ID ?>;

    if (id !== null && id !== "") {
      SonucGoruntule();
    } else {
      document.location.href = "/";
    }

    function getParameterByName(name, url = window.location.href) {
      name = name.replace(/[\[\]]/g, '\\$&');
      var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    var isMobile = {
      Android: function () {
        return navigator.userAgent.match(/Android/i);
      },
      BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
      },
      iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
      },
      Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
      },
      Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
      },
      any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile
          .Windows());
      }
    };
    function SonucGoruntule() {
      $.ajax({
        url: "/tr/ajax/Liste/UrunDetay.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {
          $("#urundetay").empty();
          cevap = jQuery.parseJSON(response);
          $("h1.page-title").text(cevap.baslik);
          $("ol.breadcrumb li.active").text(cevap.baslik);
          $("#urundetay").append(cevap.icerik);
          $("#accordionEx").append(cevap.ulasimform);
          $('#collapseSix6').remove();
          $('#collapseFive5').remove();
          jQuery("ol.breadcrumb li.kategori a").attr("href", "/tr/urunler.php?id="+cevap.urunkategori1id+"&slug="+cevap.urunkategori1slug+"");
          jQuery("ol.breadcrumb li.kategori a").text(cevap.urunkategori1);
          jQuery("ol.breadcrumb li.kategori2 a").attr("href", "/tr/cozumler.php?id="+cevap.urunkategori2id+"&name="+cevap.urunkategori2slug+"&iliski=urunler");
          jQuery("ol.breadcrumb li.kategori2 a").text(cevap.urunkategori2);
          $(".urunbrosuru").css('display', 'none');
          $(".uruntds").css('display', 'none');
          if (cevap.resim[0] !== "") {
            $("#wrapper-dilatasyon").append(cevap.resim[0]);
          }
          $("title").text(cevap.baslik+" - İstanbul Teknik");
          $("meta[name='description']").attr("content", cevap.kisaaciklama);
          
        },
        error: function (xhr) {
          $("#urundetay").prepend(xhr);
        }
      });
    }

    setTimeout(() => {
      if (isMobile.any()) {
        $("#description ul").removeClass("subpage-full-list");
        $(".product_detail .row")[0].prepend($("#urundetay")[0]);
        $(".product_detail .row")[0].append($(".col-md-3")[0]);
      };
    }, 100);

    function sendAndDownloadPdf() {
      if (jQuery("#defaultForm-username").val() == "") {
        alert("Lütfen isim soyisim alanını boş bırakmayınız.");
      } else if (jQuery("#defaultForm-email").val() == "") {
        alert("Lütfen eposta alanını boş bırakmayınız.");
      } else {
        $.ajax({
          url: "/tr/ajax/Kayit/urunPdf.php",
          type: "post",
          data: {
            id: id,
            username: jQuery("#defaultForm-username").val(),
            mail: jQuery("#defaultForm-email").val(),
            companyname: jQuery("#defaultForm-companyname").val(),
            gorevname: jQuery("#defaultForm-gorevname").val(),
            telephone: jQuery("#defaultForm-telephone").val(),
            action: "pdfindirme"
          },
          success: function (response) {
            cevap = JSON.parse(response);
            if(cevap["ok"] != "urunpdf.pdf"){
             $('#checkinfo').remove();
            html = '<a href="/pdf/' + cevap["ok"] +
              '" id="checkinfodown" class="btn sqaure_bt" download>Indir</a>';
            $('#download').append(html); 
            $("#checkinfodown").click(function () {
              $(".close").click();
            });
            }else{
              $("#modalLoginForm").modal("hide");
              Swal.fire("Başarılı", "En yakın zamanda size geri dönüş sağlanacaktır", "success");

            }
          },
          error: function (xhr) {
            console.log(xhr);
            console.log("Başarısız");
          }
        });
      }
    }
    
    function bizSiziArayalim() {
      var urunkategori=$(".kategori2 a").text();
      if(jQuery("#defaultForm-gorevname1").val() != ""){
        gorevname=jQuery("#defaultForm-gorevname1").val();
      }
      else{
        gorevname=0;
      }
      if(jQuery("#defaultForm-companyname1").val() != ""){
        companyname=jQuery("#defaultForm-companyname1").val();
      }
      else{
        companyname=0;
      }
      if ($("#ulkedurumu").val() == "YurtDışı") {
        sehirler="0";
      }
      else{
        sehirler=jQuery("#sehirler").val();

      }
      if ($("#sehirler").val() == "0" && $("#ulkedurumu").val() == "Yurtiçi") {
        Swal.fire("Başarısız", "Lütfen Şehir alanını boş bırakmayınız.", "error");
      }
      
      else if (jQuery("#defaultForm-username1").val() == "") {
        Swal.fire("Başarısız", "Lütfen İsim Soyisim alanını boş bırakmayınız.", "error");
      }
      else if (jQuery("#defaultForm-email1").val() == "") {
        Swal.fire("Başarısız", "Lütfen Eposta alanını boş bırakmayınız.", "error");
      }
      else if (jQuery("#defaultForm-telephone1").val() == "") {
        Swal.fire("Başarısız", "Lütfen Telefon alanını boş bırakmayınız.", "error");
      }
      else if (jQuery("#ulkedurumu").val() == "0") {
        Swal.fire("Başarısız", "Lütfen Yurtiçi/Yurtdışı alanını boş bırakmayınız.", "error");
      }
     
       else {
        $.ajax({
          url: "/tr/ajax/Kayit/urunPdf.php",
          type: "post",
          data: {
            id: id,
            username: jQuery("#defaultForm-username1").val(),
            mail: jQuery("#defaultForm-email1").val(),
            telephone: jQuery("#defaultForm-telephone1").val(),
            companyname: companyname,
            gorevname: gorevname,
            ulkedurumu: jQuery("#ulkedurumu").val(),
            sehirler: sehirler,
            action: "geriarama",
            urunkategori: urunkategori
          },
          success: function (response) {
            cevap = JSON.parse(response);
            $("#modalLoginForm11 .close").click();
            cevap = jQuery.parseJSON(response);
            Swal.fire("Form Başarıyla İletildi", "Doldurmuş olduğunuz form tarafımıza ulaşmıştır.En kısa sürde sizinle irtibat kurulacaktır. ", "success");
            //alert("En kısa zamanda sizinle iletişime geçilecektir.");
          },
          error: function (xhr) {
            console.log(xhr);
          }
        });
      }
    }

    function tdsIndirme() {
      if (jQuery("#defaultForm-username2").val() == "") {
        alert("Lütfen isim soyisim alanını boş bırakmayınız.");
      } else if (jQuery("#defaultForm-email2").val() == "") {
        alert("Lütfen eposta alanını boş bırakmayınız.");
      } else {
        $.ajax({
          url: "/tr/ajax/Kayit/urunPdf.php",
          type: "post",
          data: {
            id: id,
            username: jQuery("#defaultForm-username2").val(),
            mail: jQuery("#defaultForm-email2").val(),
            companyname: jQuery("#defaultForm-companyname2").val(),
            gorevname: jQuery("#defaultForm-gorevname2").val(),
            telephone: jQuery("#defaultForm-telephone2").val(),
            action: "tdsindirme"
          },
          success: function (response) {
            cevap = JSON.parse(response);
            $("#modalLoginForm2 .close").click();
            Swal.fire("Başarılı", "Teknik Döküman Talebiniz bize ulaşmıştır. En kısa zamanda sizinle iletişime geçeceğiz.", "success");
          },
          error: function (xhr) {
            console.log(xhr);
            console.log("hatalı kayit");
            Swal.fire("Başarısız", "Bir hata oluştu lütfen tekrar deneyiniz.", "error");
          }
        });
      }
    }
  </script>
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