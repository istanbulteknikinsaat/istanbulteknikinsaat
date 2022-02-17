<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR">
<?php 
ob_start();
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$urlend = $url['sections'][1]; 
function seo2($tr1) {
  $turkce = array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
  $duzgun = array("s", "S", "i", "u", "U", "o", "O", "c", "C", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
  $tr1 = str_replace($turkce, $duzgun, $tr1);
  $tr1 = trim($tr1);
  $tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i", "-", $tr1);
  $tr1 = strtolower($tr1);
  $tr1 = rtrim($tr1, "-");
  $tr1 = ltrim($tr1, "-");
  return $tr1;
}
//session_start();
/* $ipadress=$_SERVER['REMOTE_ADDR'];
$_SESSION['ipadres']=$ipadress;
//echo $_SESSION['ipadres'];
setcookie("cookies", $_SESSION['ipadres'],time()+3600); */
//print_r($_COOKIE["closeclick"]);
?>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39783153-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-39783153-1');
</script>
  <!-- basic -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>İstanbul Teknik | TR</title>
  <meta name="keywords"
    content="Yeşil Çatı,Geogrid,geosentetikler,İstanbul Teknik,inşaat,Geotekstil,Yalıtım Ürünleri,Yalıtım Malzemesi,Drenaj,Mantolama,Çatı Örtüsü,Membranlar">
  <meta name="description"
    content="İstanbul Teknik, 1998 yılında faaliyette bulunduğu inşaat sektörünün ihtiyaçlarını karşılamak ve ülke sanayisine katkıda bulunmak üzere kurulan %100 Türk sermayeli bir yapı malzeme üretim, satış ve çözüm mühendisliği firmasıdır.">
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
  <div class="bg_load"> <img class="loader_animation" src="/images/logos/istanbul-teknik-logo.png" alt="İstanbulTeknik" /> </div>
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
                        class="topbar-hightlight"><a href="https://www.istanbulteknik.blue/">.blue - Shopping-Portal</a></span>
                    </li>
                  </ul>
                  <ul id="social_media_icons">
                    <li><a href="https://www.facebook.com/istanbulteknikinsaat" title="Facebook" target="_blank"><i
                          class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/IstTeknik" title="Twitter" target="_blank"><i
                          class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/istanbul-teknik-in%C5%9Faat/?originalSubdomain=tr"
                        title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="fab fa-instagram-i" href="https://www.instagram.com/istanbulteknikinsaat/"
                        title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li>info@istanbulteknik.com</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 right_section_header_top">
            <div class="multi_language">
              <form action="/de/arama.php" style="top:17px; display:inline-block;"
                class='form-inline form-sm mt-0 col-md-6'>
                <div class='input-group'>
                  <input class='aramabt form-control form-control-sm-12 ml-3 w-75' type='text' name='arama'
                    placeholder='Produkt Suchen' />
                  <!-- <i style="top: 10px;position: relative; color:white;" class="fas fa-search" aria-hidden="true"></i> -->
                  <div id="livesearch"></div>
                </div>
              </form>
               <?php if( $urlend !="tr"){?>
                 <a href="/tr/index.php?lang=tr"><img class="langicon" src="/images/languages/tr.png"></a>
                <?php } ?>
               <?php if( $urlend !="en"){?>
               <a href="/tr/index.php?lang=en"><img class="langicon" src="/images/languages/en.png"></a>
               <?php } ?>
               <?php if( $urlend !="de"){?>
               <a href="/tr/index.php?lang=de"><img class="langicon" src="/images/languages/de.png"></a>
               <?php } ?>
               <?php if( $urlend !="es"){?>

               <a href="/tr/index.php?lang=es"><img class="langicon" src="/images/languages/es.png"></a>
               <?php } ?>
               <?php if( $urlend !="fr"){?>
                <a href="/tr/index.php?lang=fr"><img class="langicon" src="/images/languages/fr.png"></a>
               <?php } ?>
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
            <div class="logo"> <a href="/de"><img src="/images/logos/istanbul-teknik-logo.png"
                  alt="İstanbulTeknikLogo" /></a>
            </div>
            <!-- logo end -->
          </div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <!-- menu start -->
            <div class="menu_side">
              <div id="navbar_menu">
                <ul class="first-ul">
                  <li> <a class="homebtn" href="/de">Home</a>
                  </li>
                  <li> <a class="aboutbtn" style="cursor: context-menu">Unternehmen</a>
                    <ul>
                      <li><a href="/<?php echo $urlend;?>/hakkimizda.php">Über Uns</a></li>
                      <li><a href="/<?php echo $urlend;?>/genel-mudurun-mesaji.php">Nachricht vom General Manager</a></li>

                      <li><a href="/<?php echo $urlend;?>/tarihcemiz.php">Unsere Geschichte</a></li>
                      <li><a href="/<?php echo $urlend;?>/ilkelerimiz.php">Unsere Grundsätze</a></li>
                      <li><a href="/<?php echo $urlend;?>/kalitepolitikamiz.php">Unsere Qualitätspolitik</a></li>
                      <li><a href="/<?php echo $urlend;?>/arge.php">F&E-Zentrum</a></li>
                      <li><a href="/<?php echo $urlend;?>/insankaynaklari.php">Humanressourcen</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="productsbtn">Produkte</a>
                  <?php
                    require_once '../config.php'; 
                    // kategoriListe(0); 
                    $query = mysqli_query($db, "SELECT * FROM urunkategorileri WHERE IsActive=1 ");
                    $toplamkayit=mysqli_num_rows($query);

                    while ( $row = mysqli_fetch_array($query) )
                    {
                      if($urlend=='tr'){$kategoriname=$row['kategoriAdi'];}
                      elseif($urlend=='en'){$kategoriname=$row['KategoriAdiEN'];}
                      elseif($urlend=='de'){$kategoriname=$row['KategoriAdiDE'];}
                      elseif($urlend=='fr'){$kategoriname=$row['KategoriAdiFR'];}
                      elseif($urlend=='sp'){$kategoriname=$row['KategoriAdiSP'];}

                      $menu_array[$row['id']] = array('id' => $row['id'],'name' => $kategoriname,'parent' => $row['pid'], 'resim' => $row['KategoriIkonResim'],'anakategorislug' => $row['slug']);
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
                   <li><a class="solutionsbtn" style="cursor: context-menu">Anwendungen</a>
                    <ul>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=2&name=geosentetik&iliski=uygulamalar">Geokunststoffanwendungen</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=3&name=yapikoruma&iliski=uygulamalar">Isolierungsanwendungen</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=4&name=yesilcati&iliski=uygulamalar">Gründachanwendungen</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=5&name=yolbakim&iliski=uygulamalar">Asphaltanwendungen</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=6&name=beton&iliski=uygulamalar">Konkrete Anwendungen</a></li>
                      <li><a href="/<?php echo $urlend;?>/cozumler.php?id=7&name=mermer&iliski=uygulamalar">Marmoranwendungen</a></li>
                    </ul>
                  </li>
                  <li><a class="sectorbtn" style="cursor: context-menu">Industries</a>
                    <ul>
                      <?php
                      require_once '../config.php'; 
                      $query = mysqli_query($db, "SELECT * FROM sektorler ORDER BY sequence");
                      $toplamkayit=mysqli_num_rows($query);

                      while ( $row = mysqli_fetch_array($query) )
                      {

                      if($urlend=='tr'){$kategoriname=$row['SektorAdi'];}
                      elseif($urlend=='en'){$kategoriname=$row['SektorAdiEN'];}
                      elseif($urlend=='de'){$kategoriname=$row['SektorAdiDE'];}

                        $sektorID = $row['id'];
                        $sektorAdi = $kategoriname;
                        $slugsektor=seo2($sektorAdi);
                        /* href='/".$urlend."/sektorlerdetay.php?id=" . $sektorID . "&slug=".$slugsektor."' */
                        echo "<li><a>" . $sektorAdi . "</a></li>";
                      }
                    ?>
                    </ul>
                  </li>
                  <li> <a class="refbtn" href="/<?php echo $urlend; ?>/referanslar.php">Verweise</a>
                  </li>
                  <li> <a class="contactbtn" href="/<?php echo $urlend; ?>/iletisim.php">KONTAKT</a>
                  </li>
                  <li style="display: block; width:50px;">
                    <img style="display:inline-block; width: 100%;" src="/tr/images/blue.png" alt="İstanbulTeknik Blue"><a
                      style="margin: -40px 0px;" href="https://www.istanbulteknik.blue/"></a>
                  </li>
                      </ul>
                  <!-- menu end -->
              </div>

            </div>
          </div>
        </div>
        </div>
        </div>
        <!-- header bottom end -->
  </header>
        <!-- end header -->
   <?php 
$ip_address =$_SERVER['REMOTE_ADDR'];
$url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$allurl="https://istanbulteknik.com".$url;
$word="https://www.istanbulteknik.com/img/";
if(strpos($url, $word) == false){
if($url != "https://istanbulteknik.com/autodiscover/autodiscover.xml"){
$sql = mysqli_query($db, "INSERT INTO pageviews (ipaddress,pageurl) VALUES ('$ip_address','$url')");
}
}
?> 

  <script>
    $('title').text();
    function SonucGoruntule($id) {
      $.ajax({
        url: "ajax/Liste/UrunlerListe.php",
        type: "get",
        data: {
          ID: $id,
        },
        success: function (response) {
          document.location.href = document.location.origin + "/istanbulteknik-new/tr/urunler.php";
          //Do Something
          $("#urunler").empty();
          cevap = jQuery.parseJSON(response);
          $("#urunler").prepend(cevap.ok);
        },
        error: function (xhr) {
          document.location.href = document.location.origin + "/istanbulteknik-new/tr/urunler.php";
          //Do Something to handle error
          $("#urunler").empty();
          $("#urunler").prepend(xhr);
        }
      });
    }
  </script>
<script>
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

</body>