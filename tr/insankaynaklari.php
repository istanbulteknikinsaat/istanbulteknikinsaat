<?php 
require_once '../config.php';
require_once 'inc/header.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
require_once 'css2.php';
?>

<style>
     footer p{
        font-size:14px !important;
    }
    .newsletters p{
        font-size: 12px !important;
    }
    span.kayitolmetin {
        color: #979797;
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
    .boxs{
        width: 100% !important;   
        margin-left:15px !important; 
    }
    
}
.breadcrumb-wrap {
    background-image: url(/tr/img/service/hakkimizdabanner.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.heading-subtitle{
    font-weight:bold;
}
.boxs{
    width: 100%;
    margin-left: 150px;
}
.breadcrumb-box .breadcrumb .breadcrumb-item a{
    color: #f8f9fa !important;
}

section.patern-bg.pt-5.pb-5 {
        background-color: #ffffff;
    margin-bottom: 30px;
}

.count-info {
    background-color: rgb(0 157 220);
    /* opacity: 35%; */
    text-align: center;
    border-radius: 10px;
    height: 150px;
    color: #212529;
    font-size: 35px;
}
p.text-capitalize {
    color: #fff;
    font-size: 22px;
    padding-top: 5px;
}
.breadcrumb-box .breadcrumb .breadcrumb-item.active {
    color: #fff;
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
i.fas.fa-long-arrow-alt-right {
    color: #039ee3;
}
i.fa.fa-graduation-cap {
    color: #fff;
    font-size: 35px;
    margin-top: 25px;
}
i.fa.fa-briefcase {
    color: #fff;
    font-size: 35px;
    margin-top: 25px;
}
i.fa.fa-book {
    color: #fff;
    font-size: 35px;
    margin-top: 25px;
}
.about-box4 .about-box8 .heading-title {
    color: #000;
    font-size: 30px;
    font-weight: 700;
    padding-right: 35px;
}
.about-box4 .heading-subtitle:before{
    display:none;
}
.about-box4 .heading-subtitle:after{
    display:none;
}
i.fas.fa-check {
    color: #039ee3;
    padding-right: 5px;
}
</style>
<?php 
    require_once 'db.php'; 
    $sql = $db->prepare("SELECT * FROM pageinsankaynaklari WHERE lang ='$lang'");						
    $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
    $sql->execute();
    while ( $Row=$sql->fetch(PDO::FETCH_ASSOC) )
            {
                $SayfaAdi= $Row["SayfaAdi"];
                $SayfaBaslik= $Row["SayfaBaslik"];
                $SayfaAciklama= $Row["SayfaAciklama"];
                $SayfaResim1= $Row["SayfaResim1"];
                $SayfaResim2= $Row["SayfaResim2"];
                $SayfaResim3= $Row["SayfaResim3"];
            }
    ?>
        <section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title"><?php echo $SayfaAdi; ?></h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $SayfaAdi; ?></li>
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
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="about-box8">
                                        <p class="heading-title"><?php echo $SayfaBaslik; ?></p>
                                        <p style="margin-top: 30px;"><?php echo $SayfaAciklama; ?></p>
                                        <div class="media">
                                            <ul class="about-list" style="margin-bottom:30px;">
                                                <li style="color: #495057; font-size:18px;"><i class="fas fa-check"></i>kariyer@istanbulteknik.com ‘a özgeçmişlerinizi gönderebilir,</li>
                                                <li style="color: #495057;font-size:18px;"><i class="fas fa-check"></i>www.kariyer.net  adresinden iş ilanlarımızı inceleyebilirsiniz.</li>
                                                <!-- <li><i class="fas fa-check"></i>Lorem ipsum, dolor sit amet consectetur</li>
                                                <li><i class="fas fa-check"></i>Lorem ipsum, dolor sit amet consectetur</li> -->
                                            </ul>
                                            <div class="paragrafend"></div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="patern-bg pt-5 pb-5">
               <div class="patern-bg-inner">
               <div class="container">
                   <div class="row boxs">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <img src="/images/kurumsal/<?php echo $SayfaResim1; ?>">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <img src="/images/kurumsal/<?php echo $SayfaResim2; ?>">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <img src="/images/kurumsal/<?php echo $SayfaResim3; ?>">
                        </div>
                  </div>          
               </div>  
           </div>
        </section>       
<?php require_once 'inc/footer.php'; ?>
</body>
<script>
$(document).ready(function () {
        
    $("title").text("İnsan Kaynakları - İstanbul Teknik");
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