<?php declare(strict_types=1);
require_once '../config.php'; 
require_once 'inc/header.php'; 

$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
if(isset($_GET['id'])){
    $ID=$_GET['id'];}
if(isset($_GET['slug'])){
    $Slug=$_GET['slug'];}
$slugg= explode('/', $Slug);
$slug=$slugg[1];

function Urunlerimiz($id) {
  global $db;
  $kod = "SELECT
  U.ID, U.UrunKatID, U.UrunAdi,
  (SELECT COUNT(A.ID) FROM urunler AS A INNER JOIN urunkategorileri UK ON A.UrunKatID = UK.id) AS UrunSayisi
  FROM urunler AS U
  WHERE U.UrunKatID={$id}";
  $sql=mysqli_query($db,$kod);
  while($urunler=mysqli_fetch_assoc($sql)){
      $urunadi=$urunler["UrunAdi"];
    echo $urunler["UrunAdi"] . "</br>";
  }
}
if($Slug=='/geotekstiller' || $Slug=='/ozel-uzman-urunleri' || $Slug=='/cati-ve-cephe-ortuleri' || $Slug=='/perde-yalitimi-korumu-levhalari' || $Slug=='/geotekstilli-drenaj-levhalari' || $Slug=='/egimli-catilar' ||  $Slug=='/bantlar' || $Slug=='/butil-bantlar' || $Slug=='/egimli-catilar' || $Slug=='/baski-citalari-ve-aski-pimleri' || $Slug=='/sentetik-kaucuk-bez-bantlar' || $Slug=='/su-tutucu-bantlar' || $Slug=='/ski-citalari-ve-aski-pimleri' || $Slug=='/islak-hacim-membranlari' || $Slug=='/orgusuz-geotekstiller' || $Slug=='/kok-tutucular'|| $Slug=='/drenaj-levhalari'|| $Slug=='/mantolama-urunleri'){
?>
<style>
.product_img{
    height: 160px;
    text-align: center;
}
.product_img img{
    height: 160px;
    
    transform: scale(1.2);
}

.my-product-details-header{height:300px;width:100%;display:inline-block;position:relative;overflow:visible}.my-product-details-header img{position:absolute;display:inline-block;
}
.my-product-details-header.lefttoright{background:rgba(249,250,252,1);background:-moz-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-webkit-gradient(left top,right bottom,color-stop(0%,rgba(249,250,252,1)),color-stop(0%,rgba(225,232,238,1)),color-stop(43%,rgba(249,250,252,1)),color-stop(100%,rgba(255,255,255,1)));background:-webkit-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-o-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-ms-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:linear-gradient(135deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%)}

@media screen and (min-width:320px) and (max-width:500px){
.product-details-header{height:179px;width:100%;display:inline-block;overflow:hidden;position:relative;margin-bottom:20px}
.my-product-details-header{height:196px;width:100%;display:inline-block;overflow:hidden;position:relative;margin-bottom:20px}.product-details-header>img{position:absolute;top:0;right:-85%;float:right;width:1000px}
.my-product-details-header img{position:absolute;display:inline-block;top:0;left:0;width:100%}.product-dilatasyon-details-header img{position:absolute;display:inline-block;bottom:-20px;right:0;width:100%}
.product-dilatasyon-details-header-teknik{width:100%;min-height:300px;display:inline-block;position:relative;overflow:visible;text-align:center}.product-dilatasyon-details-header-teknik.bkg{background-color:#e9eef3;background:rgba(249,250,252,1);background:-moz-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-webkit-gradient(left top,right bottom,color-stop(0%,rgba(249,250,252,1)),color-stop(0%,rgba(225,232,238,1)),color-stop(43%,rgba(249,250,252,1)),color-stop(100%,rgba(255,255,255,1)));background:-webkit-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-o-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:-ms-linear-gradient(-45deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%);background:linear-gradient(135deg,rgba(249,250,252,1) 0,rgba(225,232,238,1) 0,rgba(249,250,252,1) 43%,rgba(255,255,255,1) 100%)}
.product-dilatasyon-details-header-teknik img{width:90%;bottom:10px;margin:0 auto;right:0;left:0;float:none;mix-blend-mode:multiply}.subpage .subpage-header{display:none}
}

</style>

<?php } 
if($Slug=='/cati-ve-cephe-ortuleri'){
?>

<style>
    .product_img img{
    height: 160px;
    transform: scale(1.6) !important;
}
</style>
<?php } ?>
<style>

@media (max-width: 767px){

.inner_banner_section{
    background-size: 200% 50% !important;
background-repeat: no-repeat !important;
margin-bottom: -100px;
margin-top: -50px;
min-height:340px !important;
}
.breadcrumb>li::before {
    position: relative;
    content: '\203A' !important;
    margin: 0 10px;
    /* font-size: 18px; */
    color: inherit;
    opacity: .7;
    display: inline-block;
}
.title-holder{
    margin: 100px 0 0 !important;
    width: 160px !important;
}
}
</style>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title" style="text-transform:capitalize">Ürünler</h1>
                            <ol class="breadcrumb">
                                <li><a href="/">Anasayfa</a></li>
                                <li class="kategori"><a href="#"></a></li>
                                <li class="active">Ürünler</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-image">
        <div class="cozresim">
            
        </div>
    </div>
</div>
<!-- <div class="my-product-details-header lefttoright">
  <div id="wrapper-dilatasyon" class="wrapper-dilatasyon">
    <div class="title-holder">
        <div class="title-holder-cell text-left">
          <h1 class="page-title">Ürünler</h1>
          <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active">Ürünler</li>
          </ol>
        </div>  
      </div>
  </div>
</div> -->
<!-- end inner page banner -->

<!-- section -->
<div class="section padding_layout_1 product_list_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-12">

                    <?php 
                    
      // kategoriListe(0); 
      $query2 = mysqli_query($db, "SELECT * FROM urunkategorileri");
$toplamkayit=mysqli_num_rows($query2);

while ( $row = mysqli_fetch_array($query2) )
{
    if($lang=='tr'){$kategoriname=$row['kategoriAdi'];}
    elseif($lang=='en'){$kategoriname=$row['KategoriAdiEN'];}
    elseif($lang=='de'){$kategoriname=$row['KategoriAdiDE'];}
    elseif($lang=='fr'){$kategoriname=$row['KategoriAdiFR'];}
    elseif($lang=='sp'){$kategoriname=$row['KategoriAdiSP'];}

$menu_array2[$row['id']] = array('id' => $row['id'],'name' => $kategoriname,'parent' => $row['pid'], 'resim' => $row['KategoriIkonResim']);
}
//recursive function that prints categories as a nested html unorderd list
function generate_menu_spec($pid)
{
$has_childs = false;
//this prevents printing 'ul' if we don't have subcategories for this category
global $menu_array2;
global $cikti2;
$i = 0;

//use global array variable instead of a local variable to lower stack memory requierment
foreach($menu_array2 as $key => $value)
{
    // key, urunkategorileri tablosundaki id leri getiriyor.

//   print("key: " . $key . "</br>");
//   print(implode(",", $value) . "</br>");
  $i++;
if ($value['parent'] == $pid)
{
//if this is the first child print '<ul>'
if ($has_childs === false)
{
//don't print '<ul>' multiple times
$has_childs = true;
$cikti2=$cikti2. "<ul id='treeDemo' class='ztree col-xs-12'>";
}

if ($has_childs === false)
{
    $cikti2=$cikti2 . "<li class='col-xs-12'><label class='cb"  .$i . "'><a class='ilgiliurunler' onclick='return SonucGoruntule(" . $key . ");' href='#urunler'>" . $value['name'] ."</a></label>";
} 
else{
    //eger ana baslik ise icon ekliyoruz.
    if($pid == 0){
        $cikti2=$cikti2 . "<li class='col-xs-12'><label class='col-xs-12 altkatcl cb"  .$i . "'> <img class='anakatcl' src='" . $value['resim'] . "' alt='icon'> <a class='ilgiliurunler' style='margin-top:15px;border-bottom: 1px solid #000; font-weight: 700' onclick='return SonucGoruntule(" . $key . ");' href='#urunler'>" . $value['name'] ."</a></label>";  
    } else {
        $cikti2=$cikti2 . "<li class='col-xs-12'><label class='col-xs-12 cb"  .$i . "'><a class='ilgiliurunler' onclick='return SonucGoruntule(" . $key . ");' href='#urunler'>" . $value['name'] ."</a></label>";  
    } 
  // generate_menu($parent['id']);
  // echo Urunlerimiz($value['id']);
}
generate_menu_spec($key);
}
}
if ($has_childs === true) $cikti2=$cikti2. "</ul>";
}
//generate menu starting with parent categories (that have a 0 parent)
generate_menu_spec(0);
echo "$cikti2";
// $query2 = mysqli_query($db, "SELECT * FROM urunkategorileri WHERE pid=0");
// $anakatkayitlari=mysqli_num_rows($query2);

// while( $row2 = mysqli_fetch_array($query) ){
//     $katresim = $row2['KategoriResim'];
//     var textNode = "<img src=" . $katresim . " alt='icon'>";
// }
      ?>

                </div>




            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row" id="urunler"></div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- end section -->

<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div
                        class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="#" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search"
                                    value="" class="search-global__input">
                                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to
                                    search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>

</body>
<script src="/xtbadmin/Sayfalar/plugins/bootstrap-dialog.min.js"></script>

<script>
    var id=<?= $ID ?>;
    function getParameterByName(name, url = window.location.href) {
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    function SonucGoruntule($id) {
        $.ajax({
            url: "/tr/ajax/Liste/UrunlerListe.php",
            type: "get",
            data: {
                ID: $id,
            },
            success: function (response) {
                $("#urunler").empty();
                cevap = jQuery.parseJSON(response);
                $("#urunler").prepend(cevap.ok);
                //console.log(cevap.resim[0]);
                if (cevap.resim[0] !== "") {
                    $("#inner_banner").css('background', 'url(/images/products/' + cevap.resim[0] +
                    ')  50% 50% / cover');
                }
                if (cevap.baslik[0].indexOf("ve") > 0) {
                    str1 = cevap.baslik[0].split("ve")[0];
                    str2 = cevap.baslik[0].split("ve")[1];
                    baslik = str1.concat('ve', str2);
                    $("h1.page-title").html(baslik);
                    jQuery("ol.breadcrumb li.kategori a").attr("href", "/tr/cozumler.php?id="+cevap.urunkategori2id+"&name="+cevap.urunkategori2slug+"&iliski=urunler");
                    jQuery("ol.breadcrumb li.kategori a").text(cevap.kategoriadi);
                    jQuery("ol.breadcrumb li.active").text(cevap.baslik);
                    $("title").text(baslik+" - İstanbul Teknik");
                } else {
                    $("h1.page-title").text(cevap.baslik);
                    $("title").text(cevap.baslik+" - İstanbul Teknik");
                    jQuery("ol.breadcrumb li.active").text(cevap.baslik);
                    jQuery("ol.breadcrumb li.kategori a").attr("href", "/tr/cozumler.php?id="+cevap.urunkategori2id+"&name="+cevap.urunkategori2slug+"&iliski=urunler");
                    jQuery("ol.breadcrumb li.kategori a").text(cevap.kategoriadi);
                }
            },
            error: function (xhr) {
                //Do Something to handle error
                $("#urunler").empty();
                $("#urunler").prepend(xhr);
            }
        });
    }
</script>
<script>
    $(document).ready(function () {
        if (id !== null && id !== "") {
            var id="<?= $ID ?>";
            jQuery("#treeDemo").remove();
            jQuery("#urunler").parent().removeClass("col-lg-8");
            $.ajax({
                url: "../../ajax/Liste/KategoriCozResim.php",
                type: "get",
                data: {
                    ID: id,
                },
                success: function (responsed) {
                    cevap = JSON.parse(responsed);
                    resim = "<img src='" + cevap.ok + "'>";
                    $(".cozresim").prepend(resim);
                },
            });
            SonucGoruntule(id);
        }
            // jQuery(".kategoriagacidiv").css("display", "block");
        var katkat = jQuery("ul.ztree").length;
            // console.log(katkat);
        for (var i = 1; i < katkat; i++) {
            // console.log(jQuery("ul.ztree").eq(i));
            jQuery("ul.ztree").eq(i).addClass("altkatstyle");
        }
        var select = $(".anagrup");
        var cozumisim = "";
        arr = [];
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