<?php 
require_once '../config.php';
require_once 'inc/header.php'; 
require_once 'css2.php';
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
    margin-top: 1px;
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
    @media only screen and (min-width: 768px){
.cd-horizontal-timeline .events-content h2 {
    font-size: 25px !important;
}
}
@media only screen and (max-width: 1439px){
.breadcrumb-box {
    padding: 16px 0px !important;
}}
@media only screen and (max-width: 1439px){

.breadcrumb-box {
    padding: 16px 0px 16px 0px !important;
}}
</style>
<link rel="stylesheet" href="../xtbadmin/Sayfalar/dist/css/style.min.css">
<!-- inner page banner -->
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">Tarihçemiz</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tarihçe</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end inner page banner -->
<!-- section -->

<section class="about-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <p class="heading-title">İstanbul Teknik Tarihçe </p>
                            
                            <section class="cd-horizontal-timeline">
                          <div class="timeline">
                            <div class="events-wrapper">
                              <div class="events">
                                <ol>
                                  <?php
                                  require_once 'db.php'; 
                                  $sql = $db->prepare("SELECT * FROM pagetarihce");						
                                  $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
                                  $sql->execute();
                                   while ( $Row=$sql->fetch(PDO::FETCH_ASSOC) )
                                    {
                                      $SayfaTarihYil= $Row["SayfaTarihYil"];
                                      $SayfaTarihBaslik= $Row["SayfaTarihBaslik"];
                                      $SayfaTarihAciklama= $Row["SayfaTarihAciklama"];
                                    
                                    ?>
                                  <li><a href="#0" data-date="01/01/<?php echo $SayfaTarihYil; ?>"<?php if($SayfaTarihYil==1998){echo "class=selected";}else{ echo "";} ?>><?php echo $SayfaTarihYil; ?></a></li>
                                  <?php } ?>
                                </ol>

                                <span class="filling-line" aria-hidden="true"></span>
                              </div> <!-- .events -->
                            </div> <!-- .events-wrapper -->

                            <ul class="cd-timeline-navigation">
                              <li><a href="#0" class="prev inactive">Geri</a></li>
                              <li><a href="#0" class="next">İleri</a></li>
                            </ul> <!-- .cd-timeline-navigation -->
                          </div> <!-- .timeline -->

                          <div class="events-content">
                            <ol>
                            <?php
                                  require_once 'db.php'; 
                                  $sql = $db->prepare("SELECT * FROM pagetarihce");						
                                  $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
                                  $sql->execute();
                                   while ( $Row=$sql->fetch(PDO::FETCH_ASSOC) )
                                    {
                                      $SayfaTarihYil= $Row["SayfaTarihYil"];
                                      $SayfaTarihBaslik= $Row["SayfaTarihBaslik"];
                                      $SayfaTarihAciklama= $Row["SayfaTarihAciklama"];
                                    
                                    ?>
                  <li <?php if($SayfaTarihYil==1998){echo "class=selected";}else{ echo "";} ?> data-date="01/01/<?php echo $SayfaTarihYil; ?>">
                    <h2><?php echo $SayfaTarihBaslik; ?></h2>
                    <p>
                    <?php echo $SayfaTarihAciklama; ?>
                    </p>
                  </li>
                  <?php } ?>
                </ol>
              </div> <!-- .events-content -->
            </section>
            <div class="paragrafend"></div>
          </div>
          </section>
           <!-- SubPage END -->
          
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

<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>
<script src="../xtbadmin/Sayfalar/dist/js/timeline.js"></script>
</body>
<script>
$(document).ready(function () {
  $("title").text("Tarihçemiz - İstanbul Teknik");

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