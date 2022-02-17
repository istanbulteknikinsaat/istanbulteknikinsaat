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
    background-color: #039ee3;
    /* opacity: 35%; */
    text-align: center;
    border-radius: 10px;
    height: 150px;
    color: #ffffff;
    font-size: 35px;
}
p.text-capitalize {
    color: #ffffff;
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
</style>
        <section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">Hakkımızda</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
        require_once 'db.php';
        $sql = $db->prepare("SELECT * FROM pagehakkimizda WHERE lang ='$lang'");						
        $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
        $sql->execute();
        while ( $Row=$sql->fetch(PDO::FETCH_ASSOC) )
              {
                $SayfaBaslik = $Row["SayfaBaslik"];
                $SayfaBaslikAlt = $Row["SayfaBaslikAlt"];
                $SayfaAciklama = $Row["SayfaAciklama"];
                $SayfaAciklamaAlt = $Row["SayfaAciklamaAlt"];
                $SayfaResimBayi = $Row["SayfaResimBayi"];
                $SayfaResimDeneyim = $Row["SayfaResimDeneyim"];
                $SayfaResimSermaye = $Row["SayfaResimSermaye"];
                $SayfaResimİhracat = $Row["SayfaResimİhracat"];
                $SayfaResimKıta = $Row["SayfaResimKıta"];
              }
        ?>
        <section class="about-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <p class="heading-title"><?php echo $SayfaBaslik;  ?></p>
                            <p style="font-size:23px;"><?php echo $SayfaBaslikAlt;  ?></p>
                            <p> <?php echo $SayfaAciklama;  ?>  </p>
                            <p style="margin-bottom:45px !important;"><span style="font-weight:bold;"><?php echo $SayfaAciklamaAlt;  ?></span></p>
                            <div class="paragrafend"></div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6">
                        <div class="about-box5">
                            <div class="item-img">
                                <img src="img/about/1.png" alt="about" width="501" height="607">
                                
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
            <section class="patern-bg pt-5 pb-5">
               <div class="patern-bg-inner">
               <div class="container">
                   <div class="row" style="width: 120%;">
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <img class="hakkimizdaimg" src="/images/kurumsal/<?php echo $SayfaResimBayi;  ?>">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <img class="hakkimizdaimg" src="/images/kurumsal/<?php echo $SayfaResimDeneyim;  ?>">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <img class="hakkimizdaimg" src="/images/kurumsal/<?php echo $SayfaResimSermaye;  ?>">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <img class="hakkimizdaimg" src="/images/kurumsal/<?php echo $SayfaResimİhracat;  ?>">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <img class="hakkimizdaimg" src="/images/kurumsal/<?php echo $SayfaResimKıta;  ?>">
                        </div>
                  </div>          
               </div>  
             </div>
           </section>
<?php require_once 'inc/footer.php'; ?>

</body>
<script>
$(document).ready(function () {
    $("title").text("Hakkımızda - İstanbul Teknik");
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
        
        
jQuery(function ($) {
 
if ($(".counter").length ) {
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
}
 
 
});
  </script>