<?php 
require_once 'inc/header.php'; 
require_once 'db.php';
if(isset($_GET['id'])){
  $ID=$_GET['id'];}
?>
<style>
  @media (max-width: 767px){
    .product_detail_btm{
      height:20px !important;
    }
  }
  @media (max-width: 767px){
.urunleracordion{
display:none;
}}
.col-md-3.urunleracordion {
  background: #fbfbfb;
    border-radius: 4px 4px 4px 4px;
    box-shadow: 0px 14px 30px 0px rgb(89 89 89 / 20%);
    padding-top: 40px;
    margin-bottom: 200px;
}
@media (min-width: 767px){
div#urundetay {
    padding-left: 50px;
}}
.title-holder-cell.text-left {
    margin-left: 0px;
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
td.tableRowBorderRight {
    padding-left: 25px !important;
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
  .product_list:hover{
    box-shadow: 0px 14px 30px 0px rgb(89 89 89 / 50%) !important;
    border-bottom:none !important;
  }
  .uygdetayurun{ 
    border: 1px solid #bdbdbd !important;
  }
</style>
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
                <h1 class="page-title">Uygulama Detay Sayfası</h1>
                <ol class="breadcrumb">
                  <li><a href="/">Anasayfa</a></li>
                  <li class=kategori2>Uygulamalar</a></li>
                  <li class=kategori>Kategori</a></li>
                  <li class="active">Uygulama Detay Sayfası</li>
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
        <div class="col-md-3 urunleracordion">
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
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Geosentetik
                          Ürünleri</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yalıtım
                          Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yeşil Çatı
                          Ürünleri</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Asfalt
                          Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=6&name=beton&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Beton Ürünleri</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=mermer&iliski=urunler#chooseRelate"><i
                            class="fa fa-angle-right"></i> Mermer Ürünleri</a>
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
                      <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Geosentetik
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=3&name=yapikoruma&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yalıtım
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Yeşil Çatı
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=5&name=yolbakim&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Asfalt
                          Uygulamaları</a></li>
                      <li><a href="/tr/cozumler.php?id=6&name=beton&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Beton
                          Uygulamaları</a>
                      </li>
                      <li><a href="/tr/cozumler.php?id=7&name=mermer&iliski=uygulamalar#chooseRelate"><i
                            class="fa fa-angle-right"></i> Mermer
                          Uygulamaları</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="side_bar_blog" >
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
                        echo "<li><a href='sektorlerdetay.php?id=" . $sektorID . "&iliski=sektorler#chooseRelate'><i class='fa fa-angle-right'></i>" . $sektorAdi . "</a></li>";
                      }
                    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="urundetay" class="col-md-9"></div>
        <div class="col-md-3"></div>
        <div id="urunler" class="col-md-9"></div>
      </div>
    </div>
  </div>
  <!-- end section -->

  <?php require_once 'inc/footer.php'; ?>
</body>
<script>
  var id=<?= $ID  ?>;
    $(document).ready(function () {
      if (id !== null && id !== "") {
        SonucGoruntule();
        setTimeout(() => {
          checkReadMore();
        }, 100);
        UrunListele();
      } else {
        document.location.href = "/";
      }
    });

    function getParameterByName(name, url = window.location.href) {
      name = name.replace(/[\[\]]/g, '\\$&');
      var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    function SonucGoruntule() {
      $.ajax({
        url: "../../ajax/Liste/BaglantiliUygulamaDetaySayfasiListe.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {
          cevap = jQuery.parseJSON(response);
          if (cevap.baslik[0].indexOf("ve") > 0) {
            console.log("ve");
            str1 = cevap.baslik[0].split("ve")[0];
            str2 = cevap.baslik[0].split("ve")[1];
            baslik = str1.concat('ve', str2);
            $("h1.page-title").html(baslik);
            jQuery("ol.breadcrumb li.active").text(cevap.baslik);
            $("title").text(baslik+" - İstanbul Teknik");

          } else {
            $("h1.page-title").text(cevap.baslik);
            $("title").text(cevap.baslik+" - İstanbul Teknik");
            jQuery("ol.breadcrumb li.active").text(cevap.baslik);
            jQuery("ol.breadcrumb li.kategori").text(cevap.uygulamakategori);
          }
          
          jQuery("ol.breadcrumb li.kategori").text(cevap.uygulamakategori);
          $("#urundetay").append(cevap.icerik);
          if (cevap.resim[0] !== "") {
            $("#inner_banner").css('background', 'url(/images/products/' + cevap.resim[0] +
              ')  50% 50% / cover');
          }
          $("#accordionEx").append(cevap.ulasimform);
          $("#collapseSix60").remove();
          console.log(cevap.uygulamakategori);
          if(cevap.uygulamakategori =='Geosentetik Uygulamaları' ||cevap.urunkategori1slug =='Asfalt Uygulamaları'){
            $('.selectbox').css('display','none');
          }
          
        },
        error: function (xhr) {
          $("#urundetay").append(xhr);
        }
      });
    }

    function UrunListele() {
      $.ajax({
        url: "../../ajax/Liste/BaglantiliUrunUygDetaySayfasiListe.php",
        type: "get",
        data: {
          ID: id,
        },
        success: function (response) {
          cevap = jQuery.parseJSON(response);
          $("#urunler").append("<h4>İlişkili Ürünler</h4>");
          $("#urunler").append(cevap.ok);
        },
        error: function (xhr) {
          $("#urunler").append(xhr);
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
        moreText.style.display = "inline-block";
      }
    };

    function checkReadMore() {
      if (jQuery("#description .product_desc").height() >= 540) {
        document.getElementById("readMore").style.display = "inline";
        document.getElementById("dots").style.display = "inline";
      }
    }
    
    
    function bizSiziArayalim() {
      if(jQuery("#defaultForm-gorevname1").val()==null){
        gorevname=jQuery("#defaultForm-gorevname1").val();
      }
      else{
        gorevname=0;
      }
      if(jQuery("#defaultForm-companyname1").val()==null){
        companyname=jQuery("#defaultForm-companyname1").val();
      }
      else{
        companyname=0;
      }
      if(jQuery("#defaultForm-ulkedurumu").val()==null){
        ulkedurumu=jQuery("#defaultForm-ulkedurumu").val();
      }
      else{
        ulkedurumu=0;
      }
      if(jQuery("#defaultForm-sehirler").val()==null){
        sehirler=jQuery("#defaultForm-sehirler").val();
      }
      else{
        sehirler=0;
      }
      if (jQuery("#defaultForm-username1").val() == "") {
        Swal.fire("Başarısız", "Lütfen İsim Soyisim alanını boş bırakmayınız.", "error");
      } else if (jQuery("#defaultForm-email1").val() == "") {
        Swal.fire("Başarısız", "Lütfen Eposta alanını boş bırakmayınız.", "error");
      }
      else if (jQuery("#defaultForm-telephone1").val() == "") {
        Swal.fire("Başarısız", "Lütfen Telefon alanını boş bırakmayınız.", "error");
      } else {
        $.ajax({
          url: "/tr/ajax/Kayit/uygulamaPdf.php",
          type: "post",
          data: {
            id: id,
            username: jQuery("#defaultForm-username1").val(),
            mail: jQuery("#defaultForm-email1").val(),
            telephone: jQuery("#defaultForm-telephone1").val(),
            companyname: companyname,
            gorevname: gorevname,
            ulkedurumu: ulkedurumu,
            sehirler: sehirler,
            action: "uygulamageriarama"
          },
          success: function (response) {
            cevap = JSON.parse(response);
            $("#modalLoginForm11 .close").click();
            cevap = jQuery.parseJSON(response);
            Swal.fire("Başarılı", "En yakın zamanda sizinle iletişime geçeceğiz", "success");
            //alert("En kısa zamanda sizinle iletişime geçilecektir.");
          },
          error: function (xhr) {
            console.log(xhr);
          }
        });
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