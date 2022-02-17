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
    .company-value-wrap{
        padding: 34px 0px 10px 0px;
    }
    .widget-brochures-box .brochures-list ul li a{
        padding: 10px 10px;
        font-size: 11px;
    }
    .widget-brochures-box .brochures-list ul li a:hover:after{
        border-color: #039ee3;
    }
    .widget-brochures-box .brochures-list ul li a:after{
        background-color: #039ee3;
    }
    .widget-heading .item-subtitle:before{
        content:none;
    }
    .widget-heading .item-subtitle:after{
        content:none;
    }
    .widget-brochures-box .brochures-list ul li a i{
        color: #039ee3;
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
    .widget-heading{
        display:none;
    }
    .about-box4 .about-layout{
        padding: 40px 0px 30px 50px;
    }
}
ul.about-list {
    color: #646464;
}
p{
    font-size:18px !important;
}
.about-box4 .heading-title {
    font-size: 28px !important;
}
i.fas.fa-check {
    margin-right: 10px;
    color: #fff;
    height: 18px;
    width: 18px;
    font-size: 10px;
    display: inline-block;
    text-align: center;
    line-height: 18px;
    background-color: #039ee3;
    border-radius: 50%;
    border: none;
    margin-right: 10px;
}
li {
    line-height: 1.8;
}
.breadcrumb-wrap {
    background-image: url(/tr/img/service/hakkimizdabanner.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.breadcrumb-box .breadcrumb .breadcrumb-item.active {
    color: #333;
    margin-top: 1px;
}
.breadcrumb-box .breadcrumb .breadcrumb-item a {
    color: #e9ecef;
    transition: all 0.3s ease-in-out;
}
p {
    color: #495057;
    font-size: 18px;
    line-height: 30px;
}
li {
    line-height: 1.8 !important;
    font-size: 18px !important;;
}
</style>

<?php 
        require_once 'db.php'; 
        $sql = $db->prepare("SELECT * FROM pagekalitepolitikasi WHERE lang ='$lang'");						
        $sql->bindParam(':ID',$ID, PDO::PARAM_INT);
        $sql->execute();
        while ( $Row=$sql->fetch(PDO::FETCH_ASSOC) )
        
              {
                $SayfaAdi= $Row["SayfaAdi"];
                $SayfaBaslik= $Row["SayfaBaslik"];
                $SayfaAciklama= $Row["SayfaAciklama"];
                $SayfaAlt= $Row["SayfaAlt"];
                $Sertifika1= $Row["Sertifikasi1"];
                $Sertifika2= $Row["Sertifikasi2"];
                $Sertifika3= $Row["Sertifikasi3"];
                $Sertifika4= $Row["Sertifikasi4"];
                $Sertifika5= $Row["Sertifikasi5"];
                $Sertifika6= $Row["Sertifikasi6"];
                $Sertifika7= $Row["Sertifikasi7"];
    
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
                    <div class="col-lg-12 col-md-12">
                        <div class="about-box4">
                            <p class="heading-title"><?php echo $SayfaBaslik; ?></p>
                            <p><?php echo $SayfaAciklama; ?></p>
                                            
                            <div class="paragrafend"></div>
                         </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6">
                        <div class="about-box5">
                            <div class="item-img">
                                <img src="img/about/1.png" alt="about" width="501" height="607"> -->
                                <!-- <div class="background-image1">
                                    <img src="img/figure/figure73.png" alt="figure" width="167" height="167">
                                </div>
                                <div class="background-image2">
                                    <img src="img/figure/figure74.png" alt="figure" width="121" height="104">
                                </div>
                                <div class="background-image3">
                                    <img src="img/figure/figure75.png" alt="figure" width="139" height="417">
                                </div> -->
                     <!--        </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

       
        <section class="company-value-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="widget widget-brochures-box">
                            <div class="widget-heading">
                                <h3 class="item-subtitle"><?php echo $SayfaAlt; ?></h3>
                            </div>
                            <div class="brochures-list">
                                <ul>
                                    <li><a href="/images/kurumsal/pdf/<?php echo $Sertifika1; ?>" download><i class="fas fa-download"></i>CE Certificate</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget widget-brochures-box">
                            <div class="widget-heading">
                                <h3 class="item-subtitle"><br></h3>
                            </div>
                            <div class="brochures-list">
                                <ul>
                                    <li><a href="/images/kurumsal/pdf/<?php echo $Sertifika2; ?>" download><i class="fas fa-download"></i>ISO 9001.2015</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget widget-brochures-box">
                            <div class="widget-heading">
                                <h3 class="item-subtitle"><br></h3>
                            </div>
                            <div class="brochures-list">
                                <ul>
                                    <li><a href="/images/kurumsal/pdf/<?php echo $Sertifika3; ?>" download><i class="fas fa-download"></i>ISO 10002.2018</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget widget-brochures-box">
                            <div class="widget-heading">
                                <h3 class="item-subtitle"><br></h3>
                            </div>
                            <div class="brochures-list">
                                <ul>
                                    <li><a href="/images/kurumsal/pdf/<?php echo $Sertifika4; ?>" download><i class="fas fa-download"></i>ISO 14001.2015</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2">
                        <div class="widget widget-brochures-box">
                        <div class="widget-heading">
                                <h3 class="item-subtitle"><br></h3>
                            </div>
                            <div class="brochures-list">
                                <ul>
                                    <li><a href="/images/kurumsal/pdf/<?php echo $Sertifika5; ?>" download><i class="fas fa-download"></i>ISO 45001.2018 </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget widget-brochures-box">
                        <div class="widget-heading">

                        <h3 class="item-subtitle"><br></h3>
                        </div>
                            <div class="brochures-list">
                                <ul>
                                    <li><a href="/images/kurumsal/pdf/<?php echo $Sertifika6; ?>" download><i class="fas fa-download"></i>TS EN 13859-1</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget widget-brochures-box">
                            
                            <div class="brochures-list">
                                <ul>
                                    <li><a href="/images/kurumsal/pdf/<?php echo $Sertifika7; ?>" download><i class="fas fa-download"></i>TS EN 13859-2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
     
<?php require_once 'inc/footer.php'; ?>
</body>
<script>
$(document).ready(function () {
    $("title").text("Kalite Politikamız - İstanbul Teknik");

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