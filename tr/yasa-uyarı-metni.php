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
        <!--=====================================-->
        <!--=            About Start            =-->
        <!--=====================================-->
        <section class="about-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="about-box4">
                            <p class="heading-title">Bilgi Toplumu Hizmetleri</p>
                            <p style="font-weight:bold;"> A.YASAL UYARI</p>
                            <p>Bu bölüm, İstanbul Teknik İnşaat San ve Tic. A.Ş İnternet Sitesini (Site) ziyaret ve kullanım koşullarını içermektedir.</p>	

                            <p>Bu İnternet Sitesi İstanbul Teknik İnşaat San ve Tic. A.Ş'ye ait olup, sitede yer alan tüm içerik (yazı,resim, grafik, fotoğraf,video,ürün/ürün bilgisi vs) Fikir ve Sanat Eserleri Kanunu, 5237 sayılı Türk Ceca Kanunu,  kapsamında korunmaktadır. Bu hakları ihlal eden kişilere karşı, 5846 sayılı Fikir ve Sanat eserleri Kanunu, 5237 sayılı Türk Ceza Kanunu, diğer telif hakları kanunları, uluslararası sözleşmeler ve diğer fikri mülkiyet kanun ve sözleşmeleri kapsamında hukuki ve cezai yaptırımlar uygulanacaktır. Aksi ihlallerde İstanbul Teknik İnşaat San ve Tic. A.Ş 	yasal işlem başlatma hakkına sahiptir.</p>

                            <p>Bu internet sitesinde yer alan tüm bilgiler ile bu sitedeki linkler, ziyaretçiye bilgi vermek amacıyla sunulmuştur.</p>

                            <p>Bu İnternet Sitesinin her hangi bir sayfasına girilmesi halinde  aşağıda belirtilen şartlar kabul edilmiş sayılır. Bu  şartların kabul edilmemesi durumunda İnternet Sitesine girilmemelidir.
                            Bu İnternet Sitesinde yer alan bilgiler ve materyaller İstanbul Teknik İnşaat San ve Tic. A.Ş'nin izin alınmaksızın değiştirilemez, çoğaltılamaz, yayımlanamaz, dağıtılamaz, umuma iletilemez,ileride kullanılmak üzere muhafaza edilemez, ticari amaçla kullanılamaz, başka bir lisana çevrilemez.</p>

                            <p>Siteyi kullanan kişinin, Sitenin ilk defa kullanım anından itibaren geçerlilik kazanan  kullanım koşulları kabul edilmiş sayılır. Bu sitede yer alan bilgilerin revizesi ya da düzeltilmesi ile ilgili olarak; İstanbul Teknik şirketi önceden haber vermeksizin, istediği zaman sitedeki bilgilerin değiştirilmesi, revizesi, düzeltilmesi ve çıkarılması gibi işlemleri yapacak tek yetkili olup bu konuda tüm haklara sahiptir.  Yayınlanan değişikliklerden zamanında haberdar olmak için iş bu yasal uyarıyı düzenli olarak takip etmek, site kullanıcısının sorumluluğundadır. Yapılan değişikliklerden sonra siteyi kullanmaya devam eden kişi, "Kullanım Koşulları"ndaki değişiklikleri kabul etmiş sayılır.</p>

                            <p>Bu Siteye erişim, her hangi bir duyuru yapılmaksızın geçici veya sürekli olarak durdurulabilir. Web sitesinde yayınlanmış bilgiler ya da bilgilere dayanılarak yapılan işlemlerden veya siteye ulaşılamamasından doğan ve doğacak zarar ve/veya kayıplardan dolayı İstanbul Teknik şirketi sorumluluk kabul etmez. İstanbul Teknik  Site kullanıcılarına sunduğu bilgilerin doğru olması için her türlü gayreti göstermekle beraber, bilgilerin doğruluğu konusunda, açıktan veya ima yolu ile hiç bir garanti vermez. İstanbul Teknik yanlış veya eksik bilgiden sorumlu değildir. Web sitesinin yayınlanması, hiç bir kişi ve/veya kuruluşa herhangi bir konuda, herhangi bir taahhütü içermemektedir. Sitede yer alan bilgiler ışığında verilecek her türlü kararlar ile ilgili tüm sorumluluk, siteyi ziyaret eden kişiye aittir.İstanbul Teknik  web sitesine veya sitesinden bağlantı yapılarak ulaşılan herhangi bir web site bilgisine girilmesi veya bunların kullanımından doğabilecek doğrudan veya dolaylı kayıp veya zararlardan, sorumlu tutulamaz.</p>

                            <p>Site, üçüncü kişiler tarafından sunulan bilgiler de içerebilir. Üçüncü kişiler, bu Sitede yayınlanan materyallerin ulusal ve uluslararası mevzuatla uyumlu olmasını sağlamak ile yükümlüdürler. İstanbul Teknik  bu materyalin doğruluğunu garanti edemez ve materyaldeki hata, ihmal veya eksiklik, yanlış beyan, materyalde vaad edilen hizmetlerin yerine getirilmesinde meydana gelecek bir aksama veya getirilmesinin aksaması iddiası karşısında ve Sitede duyurulan hizmetleri sunan firma, şirket veya bireyin iflası veya firma veya şirketin tasfiyesi durumlarında doğabilecek maddi/manevi kayıp veya zarar nedeniyle sorumluluk kabul etmeyeceğini açıkça beyan eder. Sunulan bilgilerin doğruluğu ve güncelliği, söz konusu kuruluşların kendilerine onaylatılmalıdır.</p>

                            <p>İstanbul Teknik  sitenin kullanılması, kullanılamaması, bünyesinde sunulan bilgiler veya siteye bağlı olarak yapılan eylemler veya alınan kararlar nedeniyle kullanımında meydana gelen aksaklıktan, sitenin içerdiği materyalden, sitenin kullanımından sonra alınan bir karar veya yapılan bir eylemden doğan, kontrat, haksız fiil veya başka türlü (sınırlama olmadan, iş kaybından doğan zararlar veya kâr kaybı dahil) zararlardan sorumlu değildir.</p>

                            <p style="font-weight:bold;">B. SORUMLULUK REDDİ</p>

                            <p>İstanbul Teknik  bu Sitede yer alan bilgilerin tam ve doğru olduğunu veya sayfaya kesintisiz giriş sağlanacağını garanti etmemektedir. İşbu Sitede yer alan beyanlar hukuken taahhüt niteliğinde sayılmamaktadır ve bağlayıcı değildir. Bu bilgilerle üçüncü şahısların haklarının ihlal edilmemesi; mülkiyet, satılabilirlik, belirli bir amaç için uygunluk ve/veya bilgisayar virüsü bulunmamasına ilişkin garantiler dahil, ancak bunlarla sınırlı kalmamak kaydıyla, zımnen, açıkça ya da yasal olarak hiç bir garanti vermemektedir.. Bu internet Sitesinde yer alan veya alması muhtemel  bilgi, rapor,  grafik ve benzeri her türlü elektronik doküman İstanbul Teknik  tarafından her hangi bir maddi menfaat temin edilmeksizin genel anlamda bilgilendirme amacıyla hazırlanmıştır. </p>
                            <p>Internet Sitesinde yer alan bu bilgi ve dokümanların doğruluğu; yazım hatası, yazılım hatası, aktarım hatası, sistemlerin bozulması veya saldırıya uğraması gibi nedenlerden kaynaklanan hatalara karşı garanti edilmemekte olup, bu bilgiler belli bir getirinin sağlanmasına yönelik olarak verilmemektedir. Bu nedenle bu İnternet Sitesinde yer alan elektronik dokümanlardaki hatalardan, eksikliklerden ya da bu dokümanlara dayanılarak yapılan işlemlerden doğacak, doğrudan veya dolaylı, her türlü maddi/manevi zararlar ve masraflardan  İstanbul Teknik sorumlu tutulamaz.Bu İnternet Sitesinin kullanımı sırasında her hangi bir arıza, hata, eksiklik, kesinti, kusur veya nakilde gecikme, bilgisayar virüsü veya hat veya sistem arızası sonucu doğrudan ya da dolaylı ortaya çıkan zarar, ziyan ve masraflar da dahil, ancak bunlarla sınırlı olmamak üzere hiç bir zarardan, İstanbul Teknik ve/veya çalışanı, bu tür bir zarar olasılığından haberdar edilmiş olsalar dahi, sorumlu olmazlar. Bu bilgiler doğrultusunda, İstanbul Teknik  bu sitenin içeriğinde yer alan bilgilerden ve görsel malzemeden kaynaklanabilecek hatalardan, maddi veya manevi zararlardan hiç bir şekil ve surette sorumlu değildir.</p>



                            <p style="font-weight:bold;">C. COOKİES</p>
                            <p>“Cookie” bilgisayarınıza gönderilebilen bir yazılımdır. “Cookie”ler İnternet Sitelerimizin ve servislerimizin nasıl kullanıldığına dair bilgileri toplamaya ve yönetmeye yarar. Eğer bilgisayarınıza bir “cookie” gönderirsek, sizin bilginiz ve onayınız olmadan, sizinle ilgili bir veri toplamayacaktır. O zamana kadar “cookie” sadece genel kullanım modellerini izleyecek ve sizi birey olarak tanımlamada kullanılmayacaktır.</p>


                            <p style="font-weight:bold;">D.TABİ OLUNAN YASA<p>
                            <p style="margin-bottom:45px !important;">Kullanım şartlarıyla ilgili ortaya çıkabilecek ihtilaflarda, münhasıran Türk Hukuku kapsamında  Bakırköy Mahkemeleri ve İcra Daireleri yetkilidir.

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