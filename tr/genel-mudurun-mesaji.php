<?php 
require_once '../config.php';
require_once 'inc/header.php';
require_once 'css2.php';

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
?>

<style>
      section.patern-bg.pt-5.pb-5 {
        background-color: #ffffff;
    margin-bottom: 30px;
}

.count-info {
    background-color: rgb(0 0 0 / 12%);
    /* opacity: 35%; */
    text-align: center;
    border-radius: 10px;
    height: 150px;
    color: #212529;
    font-size: 35px;
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
@media only screen and (max-width: 761px) {
    .about-box4 {
        margin-top: 50px;
    }
}
p {
    color: #495057;
    font-size: 18px;
    line-height: 30px;
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
    .paragrafend{
        margin-bottom:0px !important;
    }
    .about-box5 .item-img{
      z-index:-1 !important;
    }
    .about-box5 .item-img img {
        border-radius: 0px 0px 0px 0px;
        margin-top: 10px;
        box-shadow: 0px 14px 30px 0px rgb(89 89 89 / 50%);
    }
</style>
        <?php
            require_once 'db.php';
            $sql = $db->prepare("SELECT * FROM pagegenelmudur WHERE lang ='$lang'");						
            $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
            $sql->execute();
            while ( $Row=$sql->fetch(PDO::FETCH_ASSOC) )
            {
                $SayfaAdi= $Row["SayfaAdi"];
                $SayfaBaslik= $Row["SayfaBaslik"];
                $SayfaAciklama= $Row["SayfaAciklama"];
                $SayfaResim= $Row["SayfaResim"];
                $SayfaAlt= $Row["SayfaAlt"];
            }
        ?>
        <section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title"><?php echo $SayfaAdi ?></h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $SayfaAdi ?></li>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="about-box5">
                            <div class="item-img">
                                <img src="/images/kurumsal/<?php echo $SayfaResim ?>" alt="about" width="501" height="607">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" style="margin-bottom: 25px;">
                        <div class="about-box4">
                            <p class="heading-title"><?php echo $SayfaBaslik ?></p>
                            <p><?php echo $SayfaAciklama ?></p>
                            <p style="margin-bottom: 60px !important;"><span style="font-weight:bold; ">Macit Tanyol<br>Genel Müdür</span></p>
                            <div class="paragrafend"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
<?php require_once 'inc/footer.php'; ?>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

<script>
$(document).ready(function () {
    $("title").text("Genel Müdürün Mesajı - İstanbul Teknik");
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