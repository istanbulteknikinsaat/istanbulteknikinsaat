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
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script> 
        <script>
            
(function(){var t=[].indexOf||function(t){for(var e=0,n=this.length;e<n;e++){if(e in this&&this[e]===t)return e}return-1},e=[].slice;(function(t,e){if(typeof define==="function"&&define.amd){return define("waypoints",["jquery"],function(n){return e(n,t)})}else{return e(t.jQuery,t)}})(this,function(n,r){var i,o,l,s,f,u,a,c,h,d,p,y,v,w,g,m;i=n(r);c=t.call(r,"ontouchstart")>=0;s={horizontal:{},vertical:{}};f=1;a={};u="waypoints-context-id";p="resize.waypoints";y="scroll.waypoints";v=1;w="waypoints-waypoint-ids";g="waypoint";m="waypoints";o=function(){function t(t){var e=this;this.$element=t;this.element=t[0];this.didResize=false;this.didScroll=false;this.id="context"+f++;this.oldScroll={x:t.scrollLeft(),y:t.scrollTop()};this.waypoints={horizontal:{},vertical:{}};t.data(u,this.id);a[this.id]=this;t.bind(y,function(){var t;if(!(e.didScroll||c)){e.didScroll=true;t=function(){e.doScroll();return e.didScroll=false};return r.setTimeout(t,n[m].settings.scrollThrottle)}});t.bind(p,function(){var t;if(!e.didResize){e.didResize=true;t=function(){n[m]("refresh");return e.didResize=false};return r.setTimeout(t,n[m].settings.resizeThrottle)}})}t.prototype.doScroll=function(){var t,e=this;t={horizontal:{newScroll:this.$element.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.$element.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};if(c&&(!t.vertical.oldScroll||!t.vertical.newScroll)){n[m]("refresh")}n.each(t,function(t,r){var i,o,l;l=[];o=r.newScroll>r.oldScroll;i=o?r.forward:r.backward;n.each(e.waypoints[t],function(t,e){var n,i;if(r.oldScroll<(n=e.offset)&&n<=r.newScroll){return l.push(e)}else if(r.newScroll<(i=e.offset)&&i<=r.oldScroll){return l.push(e)}});l.sort(function(t,e){return t.offset-e.offset});if(!o){l.reverse()}return n.each(l,function(t,e){if(e.options.continuous||t===l.length-1){return e.trigger([i])}})});return this.oldScroll={x:t.horizontal.newScroll,y:t.vertical.newScroll}};t.prototype.refresh=function(){var t,e,r,i=this;r=n.isWindow(this.element);e=this.$element.offset();this.doScroll();t={horizontal:{contextOffset:r?0:e.left,contextScroll:r?0:this.oldScroll.x,contextDimension:this.$element.width(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:r?0:e.top,contextScroll:r?0:this.oldScroll.y,contextDimension:r?n[m]("viewportHeight"):this.$element.height(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};return n.each(t,function(t,e){return n.each(i.waypoints[t],function(t,r){var i,o,l,s,f;i=r.options.offset;l=r.offset;o=n.isWindow(r.element)?0:r.$element.offset()[e.offsetProp];if(n.isFunction(i)){i=i.apply(r.element)}else if(typeof i==="string"){i=parseFloat(i);if(r.options.offset.indexOf("%")>-1){i=Math.ceil(e.contextDimension*i/100)}}r.offset=o-e.contextOffset+e.contextScroll-i;if(r.options.onlyOnScroll&&l!=null||!r.enabled){return}if(l!==null&&l<(s=e.oldScroll)&&s<=r.offset){return r.trigger([e.backward])}else if(l!==null&&l>(f=e.oldScroll)&&f>=r.offset){return r.trigger([e.forward])}else if(l===null&&e.oldScroll>=r.offset){return r.trigger([e.forward])}})})};t.prototype.checkEmpty=function(){if(n.isEmptyObject(this.waypoints.horizontal)&&n.isEmptyObject(this.waypoints.vertical)){this.$element.unbind([p,y].join(" "));return delete a[this.id]}};return t}();l=function(){function t(t,e,r){var i,o;r=n.extend({},n.fn[g].defaults,r);if(r.offset==="bottom-in-view"){r.offset=function(){var t;t=n[m]("viewportHeight");if(!n.isWindow(e.element)){t=e.$element.height()}return t-n(this).outerHeight()}}this.$element=t;this.element=t[0];this.axis=r.horizontal?"horizontal":"vertical";this.callback=r.handler;this.context=e;this.enabled=r.enabled;this.id="waypoints"+v++;this.offset=null;this.options=r;e.waypoints[this.axis][this.id]=this;s[this.axis][this.id]=this;i=(o=t.data(w))!=null?o:[];i.push(this.id);t.data(w,i)}t.prototype.trigger=function(t){if(!this.enabled){return}if(this.callback!=null){this.callback.apply(this.element,t)}if(this.options.triggerOnce){return this.destroy()}};t.prototype.disable=function(){return this.enabled=false};t.prototype.enable=function(){this.context.refresh();return this.enabled=true};t.prototype.destroy=function(){delete s[this.axis][this.id];delete this.context.waypoints[this.axis][this.id];return this.context.checkEmpty()};t.getWaypointsByElement=function(t){var e,r;r=n(t).data(w);if(!r){return[]}e=n.extend({},s.horizontal,s.vertical);return n.map(r,function(t){return e[t]})};return t}();d={init:function(t,e){var r;if(e==null){e={}}if((r=e.handler)==null){e.handler=t}this.each(function(){var t,r,i,s;t=n(this);i=(s=e.context)!=null?s:n.fn[g].defaults.context;if(!n.isWindow(i)){i=t.closest(i)}i=n(i);r=a[i.data(u)];if(!r){r=new o(i)}return new l(t,r,e)});n[m]("refresh");return this},disable:function(){return d._invoke(this,"disable")},enable:function(){return d._invoke(this,"enable")},destroy:function(){return d._invoke(this,"destroy")},prev:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e>0){return t.push(n[e-1])}})},next:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e<n.length-1){return t.push(n[e+1])}})},_traverse:function(t,e,i){var o,l;if(t==null){t="vertical"}if(e==null){e=r}l=h.aggregate(e);o=[];this.each(function(){var e;e=n.inArray(this,l[t]);return i(o,e,l[t])});return this.pushStack(o)},_invoke:function(t,e){t.each(function(){var t;t=l.getWaypointsByElement(this);return n.each(t,function(t,n){n[e]();return true})});return this}};n.fn[g]=function(){var t,r;r=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(d[r]){return d[r].apply(this,t)}else if(n.isFunction(r)){return d.init.apply(this,arguments)}else if(n.isPlainObject(r)){return d.init.apply(this,[null,r])}else if(!r){return n.error("jQuery Waypoints needs a callback function or handler option.")}else{return n.error("The "+r+" method does not exist in jQuery Waypoints.")}};n.fn[g].defaults={context:r,continuous:true,enabled:true,horizontal:false,offset:0,triggerOnce:false};h={refresh:function(){return n.each(a,function(t,e){return e.refresh()})},viewportHeight:function(){var t;return(t=r.innerHeight)!=null?t:i.height()},aggregate:function(t){var e,r,i;e=s;if(t){e=(i=a[n(t).data(u)])!=null?i.waypoints:void 0}if(!e){return[]}r={horizontal:[],vertical:[]};n.each(r,function(t,i){n.each(e[t],function(t,e){return i.push(e)});i.sort(function(t,e){return t.offset-e.offset});r[t]=n.map(i,function(t){return t.element});return r[t]=n.unique(r[t])});return r},above:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset<=t.oldScroll.y})},below:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset>t.oldScroll.y})},left:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset<=t.oldScroll.x})},right:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset>t.oldScroll.x})},enable:function(){return h._invoke("enable")},disable:function(){return h._invoke("disable")},destroy:function(){return h._invoke("destroy")},extendFn:function(t,e){return d[t]=e},_invoke:function(t){var e;e=n.extend({},s.vertical,s.horizontal);return n.each(e,function(e,n){n[t]();return true})},_filter:function(t,e,r){var i,o;i=a[n(t).data(u)];if(!i){return[]}o=[];n.each(i.waypoints[e],function(t,e){if(r(i,e)){return o.push(e)}});o.sort(function(t,e){return t.offset-e.offset});return n.map(o,function(t){return t.element})}};n[m]=function(){var t,n;n=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(h[n]){return h[n].apply(null,t)}else{return h.aggregate.call(null,n)}};n[m].settings={resizeThrottle:100,scrollThrottle:30};return i.load(function(){return n[m]("refresh")})})}).call(this);
            </script>
         <script>
             (function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(d+)(d{3})/.test(l.toString()))l=l.toString().replace(/(d+)(d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);
         </script>
  
        <script>
          
jQuery(function ($) {
 
if ($(".counter").length ) {
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
}
 
 
 
});
        </script>
  </script>