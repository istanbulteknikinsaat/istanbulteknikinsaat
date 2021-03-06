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
                            <h1 class="page-title">??lkelerimiz</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">??lkelerimiz</li>
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
                    <h2 class="section-title" >??stanbul Teknik ??lkelerimiz</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Konumuzda Uzman??z</h3>
                                    <p>??al????t??????m??z konularda ihtiyaca t??m??yle cevap verebilecek teknik bilgiye sahip olmam??z gereklidir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">??nc??y??z</h3>
                                    <p>Bir sonraki ad??m?? herkesten ??nce bilmemiz ve bunun i??in harekete ge??memiz gereklidir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Farkl??y??z</h3>
                                    <p>Standart ??r??n ve hizmetlerde bile ??stanbul Teknik`in tercih nedeni olacak bir fark?? olmal??d??r.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Kararl??y??z</h3>
                                    <p>Al??nan kararlar??n uygulamas??nda sab??rl??y??z. Karar ne kadar b??y??kse o kadar da sab??r ve gayret gerektirir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Sayg??l??y??z</h3>
                                    <p>??artlar ne olursa olsun, i??eride ve d????ar??da sosyal sayg?? i??inde hareket ederiz.</p>
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
                                    <p>Gelecekten umutluyuz. ??leriye bakarken ??ncelikle engelleri de??il, f??rsat ve olanaklar?? g??r??r??z.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">Yeniliklere a????????z</h3>
                                    <p>S??rekli yenilik pe??inde ko??mam??z gereklidir. Ciromuz b??y??se de ayn?? oranda bilgi birikimimizin de b??y??mesi gerekmektedir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">????birlik??iyiz</h3>
                                    <p>Hedeflerimize tek ba????na ula??amay??z. Bunun i??in tedarik??i ve m????terilerimizle ortak anlay????la ilerlememiz gereklidir.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">H??zl??y??z</h3>
                                    <p>Hem m????terilerin ihtiya??lar??n?? kar????lamada hem de, ??irket i??i karar vermede h??zl?? davran??r.</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="company-value-box">
                            <div class="media">
                                
                                <div class="media-body">
                                    <h3 class="heading-title">G??veniliriz</h3>
                                    <p>Herkes ??stanbul Teknik`in yaz??l?? olmasa bile s??zlerini ve taahh??tlerini tutaca????n?? ve s??k??nt?? ya??amayaca????n?? bilir.</p>
                                    
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