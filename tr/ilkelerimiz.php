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
    section.patern-bg.pt-5.pb-5 {
        background-color: #ffffff;
    margin-bottom: 30px;
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
}
ul.about-list {
    color: #646464;
}
p{
    font-size:14px !important;
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
.about-box4 .heading-subtitle:after{
    background-color:#fff; 
}
.about-box4 .heading-subtitle:before{
    background-color:#fff; 
}
.about-box4 .heading-subtitle{
    margin-top:0;
}
i.fas.fa-long-arrow-alt-right {
    color: #039ee3;
    margin-right: 10px;
    font-size: 18px;
}
i.fas.fa-long-arrow-alt-left {
    color: #fff;
    margin-right: 10px;
    font-size: 18px;
}
p.ilkecontent {
    margin-left: 25px;
    margin-top: 0px;
    margin-bottom: 15px;
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
.about-box4 .heading-title {
    font-size: 28px !important;
}
.company-value-wrap .item-content{
    text-align:left !important;
}
.company-value-wrap .item-content .section-title{
    font-size:28px !important;
}
h2{
    text-transform: capitalize !important;
}

.company-value-box .media .media-body .heading-title{
    font-size: 18px !important;
}
.company-value-wrap{
    padding-top: 60px !important;
}

@media only screen and (max-width: 479px){
.company-value-box .media .media-body {
    text-align: left !important;
}}
.company-value-box .media{
    background-color: #f7f7f7 !important;
}
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">İlkelerimiz</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">İlkelerimiz</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
       
        <section class="company-value-wrap">
            <div class="container">
                <div class="item-content">
                    <h2 class="section-title" >İstanbul Teknik İlkelerimiz</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Konumuzda Uzmanız</h3>
                                    <p>Çalıştığımız konularda ihtiyaca tümüyle cevap verebilecek teknik bilgiye sahip olmamız gereklidir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Öncüyüz</h3>
                                    <p>Bir sonraki adımı herkesten önce bilmemiz ve bunun için harekete geçmemiz gereklidir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="heading-title">Farklıyız</h3>
                                    <p>Standart ürün ve hizmetlerde bile İstanbul Teknik`in tercih nedeni olacak bir farkı olmalıdır.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="heading-title">Kararlıyız</h3>
                                    <p>Alınan kararların uygulamasında sabırlıyız. Karar ne kadar büyükse o kadar da sabır ve gayret gerektirir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Saygılıyız</h3>
                                    <p>Şartlar ne olursa olsun, içeride ve dışarıda sosyal saygı içinde hareket ederiz.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Olumluyuz</h3>
                                    <p>Gelecekten umutluyuz. İleriye bakarken öncelikle engelleri değil, fırsat ve olanakları görürüz.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Yeniliklere açığız</h3>
                                    <p>Sürekli yenilik peşinde koşmamız gereklidir. Ciromuz büyüse de aynı oranda bilgi birikimimizin de büyümesi gerekmektedir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">İşbirlikçiyiz</h3>
                                    <p>Hedeflerimize tek başına ulaşamayız. Bunun için tedarikçi ve müşterilerimizle ortak anlayışla ilerlememiz gereklidir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Hızlıyız</h3>
                                    <p>Hem müşterilerin ihtiyaçlarını karşılamada hem de, şirket içi karar vermede hızlı davranır.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Güveniliriz</h3>
                                    <p>Herkes İstanbul Teknik`in yazılı olmasa bile sözlerini ve taahhütlerini tutacağını ve sıkıntı yaşamayacağını bilir.</p>
                                    
                                </div>
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