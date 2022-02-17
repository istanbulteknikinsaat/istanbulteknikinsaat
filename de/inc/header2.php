<!DOCTYPE html>
<html lang="tr">
<?php 
ob_start();
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$urlend = $url['sections'][1]; 
//session_start();
/* $ipadress=$_SERVER['REMOTE_ADDR'];
$_SESSION['ipadres']=$ipadress;
//echo $_SESSION['ipadres'];
setcookie("cookies", $_SESSION['ipadres'],time()+3600); */
//print_r($_COOKIE["closeclick"]);
?>

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>İstanbul Teknik | TR</title>
  <meta name="keywords"
    content="Yeşil Çatı,Geogrid,geosentetikler,İstanbul Teknik,inşaat,Geotekstil,Yalıtım Ürünleri,Yalıtım Malzemesi,Drenaj,Mantolama,Çatı Örtüsü,Membranlar,D">
  <meta name="description"
    content="Geogrid, yeşil çatı sistemleri, çatı ve cephe örtüleri, asfalt katkıları, mebran ve geomembranlar, bantlar, dilatasyon profilleri, epoksi esaslı ürü">
  <!-- site icons -->
  <link rel="icon" href="/images/fevicon/favicon.png" type="image/png" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <!-- Site css -->
  <link rel="stylesheet" href="/css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="/css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="/tr/css/colors1.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="/tr/css/custom.css" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="/css/animate.css" />
  <!-- owl carousel css -->
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <script src="/js/popper.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <link rel="stylesheet" href="/tr/css/zTreeStyle.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body id="default_theme" class="it_service">
  <!-- loader -->
  <div class="bg_load"> <img class="loader_animation" src="/images/logos/istanbul-teknik-logo.png" alt="#" /> </div>
  <!-- end loader -->
  <!-- header -->
  <header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="full">
              <div class="topbar-left">
                <div class="social_icon">
                  <ul id="it-blue" class="list-inline" style="display:none;">
                    <li> <span class="topbar-label"><i class="fa fa-angle-double-right"></i></span> <span
                        class="topbar-hightlight"><a href="https://www.istanbulteknik.blue/">.blue - Alışveriş
                          Portalı</a></span>
                    </li>
                  </ul>
                  <ul id="social_media_icons">
                    <li><a href="https://www.facebook.com/istanbulteknikinsaat" title="Facebook" target="_blank"><i
                          class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://plus.google.com/101013875568885506927" title="Google+" target="_blank"><i
                          class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="https://twitter.com/IstTeknik" title="Twitter" target="_blank"><i
                          class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/istanbul-teknik-in%C5%9Faat/?originalSubdomain=tr"
                        title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="fab fa-instagram-i" href="https://www.instagram.com/istanbulteknikinsaat/"
                        title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li>bilgi@istanbulteknik.com</i></a></li>   
                  </ul>
                  
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 right_section_header_top">
            <div class="multi_language"></div>
            <div class="row">
            <div class="col-md-6">
                <form action="/tr/arama.php" style="top:17px; display:inline-block;"
                  class='form-inline form-sm mt-0 col-md-12'>
                  <div class='input-group'>
                    <input class='aramabt form-control form-control-sm-12 ml-3 w-75' type='text' name='arama'
                      placeholder='Ürün Ara' />
                    <!-- <i style="top: 10px;position: relative; color:white;" class="fas fa-search" aria-hidden="true"></i> -->
                    <div id="livesearch"></div>
                  </div>
                </form>
            </div>
            <div class="col-md-3 languages" style="border-radius: 3px;margin-top: 17px;text-align: center;padding: 3px;box-shadow: 0 0 25px -17px #000;">
                  <a href="/en/"><img class="langicon" src="/images/languages/en.png"></a>
                  <a href="/de/"><img class="langicon" src="/images/languages/de.png"></a>
                  <a href="/es/"><img class="langicon" src="/images/languages/es.png"></a>
                  <a href="/fr/"><img class="langicon" src="/images/languages/fr.png"></a>
            </div>
              <!-- <button class="btn white_btn langbtn dropdown-toggle" type="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img class="langicon" src="/images/languages/tr.png">Türkçe</button>

              <div class="dropdown-menu">
                  <a class="dropdown-item" href="/en/"><img class="langicon" src="/images/languages/en.png">İngilizce</a>
                  <a class="dropdown-item" href="/de/"><img class="langicon" src="/images/languages/de.png">Almanca</a>
                  <a class="dropdown-item" href="/es/"><img class="langicon" src="/images/languages/es.png">İspanyolca</a>
                  <a class="dropdown-item" href="/fr/"><img class="langicon" src="/images/languages/fr.png">Fransızca</a>
              </div> -->
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <!-- logo start -->
            <div class="logo"> <a href="/"><img src="/images/logos/istanbul-teknik-logo.png"
                  alt="logo" /></a>
            </div>
            <!-- logo end -->
          </div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <!-- menu start -->
            <div class="menu_side">
              <div id="navbar_menu">
                <ul class="first-ul">
                  <li> <a class="homebtn" href="/">Anasayfa</a>
                  </li>
                  <li> <a class="aboutbtn" style="cursor: context-menu">Kurumsal</a>
                    <ul>
                    <li><a href="/<?php echo $urlend;?>/hakkimizda.php">Hakkımızda</a></li>
                      <li><a href="/<?php echo $urlend;?>/kalitepolitikamiz.php">Kalite Politikamız</a></li>
                      <li><a href="/<?php echo $urlend;?>/hakkimizda_vizyonumuz_misyonumuz.php">Vizyonumuz & Misyonumuz</a></li>
                      <li><a href="/<?php echo $urlend;?>/ilkelerimiz.php">İlkelerimiz</a></li>
                      <li><a href="/<?php echo $urlend;?>/hakkimizda_tarihcemiz.php">Tarihçemiz</a></li>
                      <li><a href="/<?php echo $urlend;?>/hakkimizda_istanbul_teknikliler.php">Istanbul Teknikliler</a></li>
                      <li><a href="/<?php echo $urlend;?>/arge.php">Arge</a></li>
                      <li><a href="/<?php echo $urlend;?>/kariyer.php">Kariyer</a></li>
                      <li><a href="/<?php echo $urlend;?>/kvkkpolitikasi.php">KVKK</a></li>
                    </ul>
                  </li>
                  <li><a class="productsbtn" href="/<?php echo $urlend;?>/urunler.php">Ürünler</a>
                    <?php
                    require_once '../config.php'; 
                    // kategoriListe(0); 
                    $query = mysqli_query($db, "SELECT * FROM urunkategorileri");
                    $toplamkayit=mysqli_num_rows($query);

                    while ( $row = mysqli_fetch_array($query) )
                    {
                      $menu_array[$row['id']] = array('id' => $row['id'],'name' => $row['kategoriAdi'],'parent' => $row['pid'], 'resim' => $row['KategoriIkonResim'],'anakategorislug' => $row['slug']);
                    }
                    //recursive function that prints categories as a nested html unorderd list
                    function generate_menu($parent)
                    {
                    $has_childs = false;
                    //this prevents printing 'ul' if we don't have subcategories for this category
                    global $menu_array;
                    global $cikti;
                    $i = 0;

                    //use global array variable instead of a local variable to lower stack memory requierment
                    foreach($menu_array as $key => $value)
                    {
                        // key, urunkategorileri tablosundaki id leri getiriyor.

                    //   print("key: " . $key . "</br>");
                    //   print(implode(",", $value) . "</br>");
                      $i++;
                    if ($value['parent'] == $parent)
                    {
                    //if this is the first child print '<ul>'
                    if ($has_childs === false)
                    {
                    //don't print '<ul>' multiple times
                    $has_childs = true;
                    $cikti=$cikti. "<ul class='col-xs-12'>";
                    }
                     $nowurl=$_SERVER['REQUEST_URI'];
                    $url = parse_url($nowurl);
                    $url['sections'] = explode('/', $url['path']);
                    $urlend = $url['sections'][1]; 
                    
                   
                    if ($has_childs === false)
                    {
                        $cikti=$cikti . "<li class='col-xs-12'><label class='cb"  .$i . "'><a>" . $value['name'] ."</a></label>";
                    } 
                    else{
                      $kategoriAdi=$value['name'];
                      $anakategorislug=$value['anakategorislug'];
                      $slugkategori=seo2($kategoriAdi);

                        //eger ana baslik ise icon ekliyoruz.
                        if($parent == 0){
                            $cikti=$cikti . "<li class='col-xs-12'><a class='anagrup' href='/".$urlend."/cozumler.php?id=" . $key . "&name=".$anakategorislug."&iliski=urunler'> " . $value['name'] ."</a>";  
                        } else {
                            $cikti=$cikti . "<li class='col-xs-12'><a href='/".$urlend."/urunler.php?id=" . $key . "&slug=".$slugkategori."'>" . $value['name'] ."</a>";  
                        } 
                      // generate_menu($parent['id']);
                      // echo Urunlerimiz($value['id']);
                    }
                    generate_menu($key);
                    }

                    }
                    if ($has_childs === true) $cikti=$cikti. "</ul>";
                    }
                    //generate menu starting with parent categories (that have a 0 parent)
                    generate_menu(0);
                    echo"$cikti";
                    // $query2 = mysqli_query($db, "SELECT * FROM urunkategorileri WHERE pid=0");
                    // $anakatkayitlari=mysqli_num_rows($query2);

                    // while( $row2 = mysqli_fetch_array($query) ){
                    //     $katresim = $row2['KategoriResim'];
                    //     var textNode = "<img src=" . $katresim . " alt='icon'>";
                    // }
                  ?>
                  </li>
                  <li><a class="solutionsbtn" style="cursor: context-menu">Uygulamalar</a>
                    <ul>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=2&name=geosentetik&iliski=uygulamalar">Geosentetik Uygulamaları</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=3&name=yapikoruma&iliski=uygulamalar">Yalıtım Uygulamaları</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=4&name=yesilcati&iliski=uygulamalar">Yeşil Çatı Uygulamaları</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=5&name=yolbakim&iliski=uygulamalar">Asfalt Uygulamaları</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=6&name=beton&iliski=uygulamalar">Beton Uygulamaları</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=7&name=geoarme&iliski=uygulamalar">Mermer Uygulamaları</a></li>
                    </ul>
                  </li>
                  <li id="sectorbtn"><a class="sectorbtn" style="cursor: context-menu">Sektörler</a>
                    <ul>
                      <?php
                      require_once '../config.php'; 
                      $query = mysqli_query($db, "SELECT * FROM sektorler");
                      $toplamkayit=mysqli_num_rows($query);

                      while ( $row = mysqli_fetch_array($query) )
                      {
                        $sektorID = $row['id'];
                        $sektorAdi = $row['SektorAdi'];
                        $slugsektor=seo2($sektorAdi);
                        echo "<li><a href='/".$urlend."/sektorlerdetay.php?id=" . $sektorID . "&slug=".$slugsektor."'>" . $sektorAdi . "</a></li>";
                      }
                    ?>
                    </ul>
                  </li>
                  </li>

                  <li> <a class="refbtn" href="/<?php echo $urlend;?>/referanslar.php">Referanslar</a>
                  </li>
                  <li> <a class="contactbtn" href="/<?php echo $urlend;?>/iletisim.php">İLETİŞİM</a>
                  </li>
                  <li style="display: block; width:50px;">
                    <img style="display:inline-block; width: 100%;" src="images/blue.png" alt=""><a
                      style="margin: -40px 0px;" href="https://www.istanbulteknik.blue/"></a>
                  </li>
                  <!-- menu end -->
              </div>

            </div>
          </div>
        </div>
        <!-- header bottom end -->
  </header>
  <!-- end header -->
<script>

/* $("#sectorbtn li").click(function(){ 
      var id= $(this).attr("data-id");
      console.log(id);
      $.ajax({
            url: "sektorlerdetay.php",
            type: "post",
            data: {
              "ID": id,
            },
    });
    }); */
</script>
  <script type="text/javascript">
   
    function SonucGoruntule($id) {
      $.ajax({
        url: "ajax/Liste/UrunlerListe.php",
        type: "get",
        data: {
          ID: $id,
        },
        success: function (response) {
          document.location.href = document.location.origin + "/tr/urunler.php";
          //Do Something
          $("#urunler").empty();
          cevap = jQuery.parseJSON(response);
          $("#urunler").prepend(cevap.ok);
        },
        error: function (xhr) {
          document.location.href = document.location.origin + "/tr/urunler.php";
          //Do Something to handle error
          $("#urunler").empty();
          $("#urunler").prepend(xhr);
        }
      });
    }
    
    
  </script>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605c2221f7ce18270933afcf/1f1juaktd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39783153-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-39783153-1');
</script>

<!--End of Tawk.to Script-->

  <!-- Start of HubSpot Embed Code -->
 <!--  <script type="text/javascript" id="hs-script-loader" async defer src="https://js.hs-scripts.com/9470952.js"></script>
  -->
  <!-- End of HubSpot Embed Code -->
</body>