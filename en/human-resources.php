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
                                    <li class="breadcrumb-item"> <a href="/">Home</a></li>
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
                                                <li style="color: #495057;font-size:18px;"><i class="fas fa-check"></i>kariyer@istanbulteknik.com ???a ??zge??mi??lerinizi g??nderebilir,</li>
                                                <li style="color: #495057;font-size:18px;"><i class="fas fa-check"></i>www.kariyer.net  adresinden i?? ilanlar??m??z?? inceleyebilirsiniz.</li>
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
                   <div class="row boxs"  style="">
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
        <!--=====================================-->
        <!--=          Consulting Start         =-->
        <!--=====================================-->
        <!-- <section class="consulting-service-wrap2">
            <div class="container">
                <div class="row gutters-50">
                    <div class="col-lg-5">
                        <div class="consulting-top1">
                            <h2 class="section-title">????e Al??m S??recimiz</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="consulting-top2">
                         </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">????in ??lana ????k??lmas??</h3>
                            <div class="item-img">
                                <img src="img/figure/figure59.png" alt="figure" width="87" height="65">
                            </div>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">Ba??vurular??n De??erlendirilmesi</h3>
                            <div class="item-img">
                                <img src="img/figure/figure60.png" alt="figure" width="49" height="63">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">M??lakat Daveti</h3>
                            <div class="item-img">
                                <img src="img/figure/figure61.png" alt="figure" width="45" height="64">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="consulting-service4">
                            <h3 class="heading-title">????e Kabul Bildirimi</h3>
                            <div class="item-img">
                                <img src="img/figure/figure62.png" alt="figure" width="42" height="64">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
       <!--  <section class="call-back-wrap call-back-wrap2">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <div class="call-back-box1">
                            <h3 class="section-title">Ba??vuru Yap??n</h3>
                            <form class="message-box">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="??sim Soyisim">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Telefon">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="Okul Ad??">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" placeholder="B??l??m">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label style="color:white;">CV</label>
                                        <input type="file" class="form-control" placeholder="CV">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <a href="index.html" class="item-btn">G??nder</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="call-back-box2">
                            <div class="item-img">
                                <img src="img/service/service12.png" alt="blog" width="690" height="582">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
<?php require_once 'inc/footer.php'; ?>
</body>
<script>
$(document).ready(function () {
    $("title").text("Human Resources - Istanbul Teknik");

    var select = $(".anagrup");
    var cozumisim = "";
    window.arr = [];
    for (var i = 0; i < select.length; i++) {
      arr.push(select[i]);
      if (arr[i].text.indexOf("Geosentetik") > 0) {
          cozumIsim = "&name=geosentetik";
          arr[i].href = arr[i].href.concat(cozumIsim);
        } 
        if (arr[i].text.indexOf("??at??") > 0) {
          cozumIsim = "&name=yesilcati";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Yal??t??m") > 0) {
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