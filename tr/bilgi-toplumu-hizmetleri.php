<?php 
require_once '../config.php';
require_once 'inc/header.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
?>
<link rel="stylesheet" href="css/about/about.css">
<link rel="stylesheet" href="css/about/bootstrap.min.css">
<!-- Animate Css Start Here -->
<link rel="stylesheet" href="css/about/animate.css">
<!-- Owl Carousel Start Here -->
<link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendor/owlcarousel/owl.theme.default.min.css">
<!-- Nivo Slider Start Here -->
<link rel="stylesheet" href="vendor/nivo-slider/nivo-slider.css">
<!-- Animate Css Start Here -->
<link rel="stylesheet" href="css/about/animate.min.css">
<!-- Slick Css Start Here -->
<link rel="stylesheet" href="css/about/slick.css">
<link rel="stylesheet" href="css/about/slick-theme.css">
<!-- Meanmenu Css Start Here -->
<link rel="stylesheet" href="css/about/meanmenu.min.css">
<!-- All min Css Start Here -->
<link rel="stylesheet" href="css/about/all.min.css">
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
                            <h1 class="page-title">Bilgi Toplumu Hizmetleri</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bilgi Toplumu Hizmetleri</li>
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
                            <p class="heading-title">Bilgi Toplumu Hizmetleri</p>
                            <p style="font-weight:bold;"> A.YASAL UYARI</p>
                            <p>Bu b??l??m, ??stanbul Teknik ??n??aat San ve Tic. A.?? ??nternet Sitesini (Site) ziyaret ve kullan??m ko??ullar??n?? i??ermektedir.</p>	

                            <p>Bu ??nternet Sitesi ??stanbul Teknik ??n??aat San ve Tic. A.??'ye ait olup, sitede yer alan t??m i??erik (yaz??,resim, grafik, foto??raf,video,??r??n/??r??n bilgisi vs) Fikir ve Sanat Eserleri Kanunu, 5237 say??l?? T??rk Ceca Kanunu,  kapsam??nda korunmaktad??r. Bu haklar?? ihlal eden ki??ilere kar????, 5846 say??l?? Fikir ve Sanat eserleri Kanunu, 5237 say??l?? T??rk Ceza Kanunu, di??er telif haklar?? kanunlar??, uluslararas?? s??zle??meler ve di??er fikri m??lkiyet kanun ve s??zle??meleri kapsam??nda hukuki ve cezai yapt??r??mlar uygulanacakt??r. Aksi ihlallerde ??stanbul Teknik ??n??aat San ve Tic. A.?? 	yasal i??lem ba??latma hakk??na sahiptir.</p>

                            <p>Bu internet sitesinde yer alan t??m bilgiler ile bu sitedeki linkler, ziyaret??iye bilgi vermek amac??yla sunulmu??tur.</p>

                            <p>Bu ??nternet Sitesinin her hangi bir sayfas??na girilmesi halinde  a??a????da belirtilen ??artlar kabul edilmi?? say??l??r. Bu  ??artlar??n kabul edilmemesi durumunda ??nternet Sitesine girilmemelidir.
                            Bu ??nternet Sitesinde yer alan bilgiler ve materyaller ??stanbul Teknik ??n??aat San ve Tic. A.??'nin izin al??nmaks??z??n de??i??tirilemez, ??o??alt??lamaz, yay??mlanamaz, da????t??lamaz, umuma iletilemez,ileride kullan??lmak ??zere muhafaza edilemez, ticari ama??la kullan??lamaz, ba??ka bir lisana ??evrilemez.</p>

                            <p>Siteyi kullanan ki??inin, Sitenin ilk defa kullan??m an??ndan itibaren ge??erlilik kazanan  kullan??m ko??ullar?? kabul edilmi?? say??l??r. Bu sitede yer alan bilgilerin revizesi ya da d??zeltilmesi ile ilgili olarak; ??stanbul Teknik ??irketi ??nceden haber vermeksizin, istedi??i zaman sitedeki bilgilerin de??i??tirilmesi, revizesi, d??zeltilmesi ve ????kar??lmas?? gibi i??lemleri yapacak tek yetkili olup bu konuda t??m haklara sahiptir.  Yay??nlanan de??i??ikliklerden zaman??nda haberdar olmak i??in i?? bu yasal uyar??y?? d??zenli olarak takip etmek, site kullan??c??s??n??n sorumlulu??undad??r. Yap??lan de??i??ikliklerden sonra siteyi kullanmaya devam eden ki??i, "Kullan??m Ko??ullar??"ndaki de??i??iklikleri kabul etmi?? say??l??r.</p>

                            <p>Bu Siteye eri??im, her hangi bir duyuru yap??lmaks??z??n ge??ici veya s??rekli olarak durdurulabilir. Web sitesinde yay??nlanm???? bilgiler ya da bilgilere dayan??larak yap??lan i??lemlerden veya siteye ula????lamamas??ndan do??an ve do??acak zarar ve/veya kay??plardan dolay?? ??stanbul Teknik ??irketi sorumluluk kabul etmez. ??stanbul Teknik  Site kullan??c??lar??na sundu??u bilgilerin do??ru olmas?? i??in her t??rl?? gayreti g??stermekle beraber, bilgilerin do??rulu??u konusunda, a????ktan veya ima yolu ile hi?? bir garanti vermez. ??stanbul Teknik yanl???? veya eksik bilgiden sorumlu de??ildir. Web sitesinin yay??nlanmas??, hi?? bir ki??i ve/veya kurulu??a herhangi bir konuda, herhangi bir taahh??t?? i??ermemektedir. Sitede yer alan bilgiler ??????????nda verilecek her t??rl?? kararlar ile ilgili t??m sorumluluk, siteyi ziyaret eden ki??iye aittir.??stanbul Teknik  web sitesine veya sitesinden ba??lant?? yap??larak ula????lan herhangi bir web site bilgisine girilmesi veya bunlar??n kullan??m??ndan do??abilecek do??rudan veya dolayl?? kay??p veya zararlardan, sorumlu tutulamaz.</p>

                            <p>Site, ??????nc?? ki??iler taraf??ndan sunulan bilgiler de i??erebilir. ??????nc?? ki??iler, bu Sitede yay??nlanan materyallerin ulusal ve uluslararas?? mevzuatla uyumlu olmas??n?? sa??lamak ile y??k??ml??d??rler. ??stanbul Teknik  bu materyalin do??rulu??unu garanti edemez ve materyaldeki hata, ihmal veya eksiklik, yanl???? beyan, materyalde vaad edilen hizmetlerin yerine getirilmesinde meydana gelecek bir aksama veya getirilmesinin aksamas?? iddias?? kar????s??nda ve Sitede duyurulan hizmetleri sunan firma, ??irket veya bireyin iflas?? veya firma veya ??irketin tasfiyesi durumlar??nda do??abilecek maddi/manevi kay??p veya zarar nedeniyle sorumluluk kabul etmeyece??ini a????k??a beyan eder. Sunulan bilgilerin do??rulu??u ve g??ncelli??i, s??z konusu kurulu??lar??n kendilerine onaylat??lmal??d??r.</p>

                            <p>??stanbul Teknik  sitenin kullan??lmas??, kullan??lamamas??, b??nyesinde sunulan bilgiler veya siteye ba??l?? olarak yap??lan eylemler veya al??nan kararlar nedeniyle kullan??m??nda meydana gelen aksakl??ktan, sitenin i??erdi??i materyalden, sitenin kullan??m??ndan sonra al??nan bir karar veya yap??lan bir eylemden do??an, kontrat, haks??z fiil veya ba??ka t??rl?? (s??n??rlama olmadan, i?? kayb??ndan do??an zararlar veya k??r kayb?? dahil) zararlardan sorumlu de??ildir.</p>

                            <p style="font-weight:bold;">B. SORUMLULUK REDD??</p>

                            <p>??stanbul Teknik  bu Sitede yer alan bilgilerin tam ve do??ru oldu??unu veya sayfaya kesintisiz giri?? sa??lanaca????n?? garanti etmemektedir. ????bu Sitede yer alan beyanlar hukuken taahh??t niteli??inde say??lmamaktad??r ve ba??lay??c?? de??ildir. Bu bilgilerle ??????nc?? ??ah??slar??n haklar??n??n ihlal edilmemesi; m??lkiyet, sat??labilirlik, belirli bir ama?? i??in uygunluk ve/veya bilgisayar vir??s?? bulunmamas??na ili??kin garantiler dahil, ancak bunlarla s??n??rl?? kalmamak kayd??yla, z??mnen, a????k??a ya da yasal olarak hi?? bir garanti vermemektedir.. Bu internet Sitesinde yer alan veya almas?? muhtemel  bilgi, rapor,  grafik ve benzeri her t??rl?? elektronik dok??man ??stanbul Teknik  taraf??ndan her hangi bir maddi menfaat temin edilmeksizin genel anlamda bilgilendirme amac??yla haz??rlanm????t??r. </p>
                            <p>Internet Sitesinde yer alan bu bilgi ve dok??manlar??n do??rulu??u; yaz??m hatas??, yaz??l??m hatas??, aktar??m hatas??, sistemlerin bozulmas?? veya sald??r??ya u??ramas?? gibi nedenlerden kaynaklanan hatalara kar???? garanti edilmemekte olup, bu bilgiler belli bir getirinin sa??lanmas??na y??nelik olarak verilmemektedir. Bu nedenle bu ??nternet Sitesinde yer alan elektronik dok??manlardaki hatalardan, eksikliklerden ya da bu dok??manlara dayan??larak yap??lan i??lemlerden do??acak, do??rudan veya dolayl??, her t??rl?? maddi/manevi zararlar ve masraflardan  ??stanbul Teknik sorumlu tutulamaz.Bu ??nternet Sitesinin kullan??m?? s??ras??nda her hangi bir ar??za, hata, eksiklik, kesinti, kusur veya nakilde gecikme, bilgisayar vir??s?? veya hat veya sistem ar??zas?? sonucu do??rudan ya da dolayl?? ortaya ????kan zarar, ziyan ve masraflar da dahil, ancak bunlarla s??n??rl?? olmamak ??zere hi?? bir zarardan, ??stanbul Teknik ve/veya ??al????an??, bu t??r bir zarar olas??l??????ndan haberdar edilmi?? olsalar dahi, sorumlu olmazlar. Bu bilgiler do??rultusunda, ??stanbul Teknik  bu sitenin i??eri??inde yer alan bilgilerden ve g??rsel malzemeden kaynaklanabilecek hatalardan, maddi veya manevi zararlardan hi?? bir ??ekil ve surette sorumlu de??ildir.</p>



                            <p style="font-weight:bold;">C. COOK??ES</p>
                            <p>???Cookie??? bilgisayar??n??za g??nderilebilen bir yaz??l??md??r. ???Cookie???ler ??nternet Sitelerimizin ve servislerimizin nas??l kullan??ld??????na dair bilgileri toplamaya ve y??netmeye yarar. E??er bilgisayar??n??za bir ???cookie??? g??nderirsek, sizin bilginiz ve onay??n??z olmadan, sizinle ilgili bir veri toplamayacakt??r. O zamana kadar ???cookie??? sadece genel kullan??m modellerini izleyecek ve sizi birey olarak tan??mlamada kullan??lmayacakt??r.</p>


                            <p style="font-weight:bold;">D.TAB?? OLUNAN YASA<p>
                            <p style="margin-bottom:45px !important;">Kullan??m ??artlar??yla ilgili ortaya ????kabilecek ihtilaflarda, m??nhas??ran T??rk Hukuku kapsam??nda  Bak??rk??y Mahkemeleri ve ??cra Daireleri yetkilidir.

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
               
           </section>
<?php require_once 'inc/footer.php'; ?>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script> 
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
