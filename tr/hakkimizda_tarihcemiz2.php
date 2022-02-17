<?php
require_once '../config.php'; 
require_once 'inc/header.php';
$nowurl=$_SERVER['REQUEST_URI'];
$url = parse_url($nowurl);
$url['sections'] = explode('/', $url['path']);
$lang = $url['sections'][1];
?>
<style>
  *, *::before, *::after {
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
}
@media only screen and (min-width: 768px){
.cd-horizontal-timeline .events-content h2 {
  font-size:25px;
}}
   .timeline {
	 font: normal 10.6666666667px 'Titillium Web', sans-serif;
/* 	 background: linear-gradient(54deg, #9164ff, #8bfff4);*/
   background: linear-gradient(54deg, rgb(249 250 252), rgb(249 250 252))
	 color: #3c3f64;
	 overflow-x: hidden;
	 padding-bottom: 50px;
   padding-top: 50px;
} 
 .timeline ul li {
	 list-style-type: none;
	 position: relative;
	 width: 6px;
	 margin: 0 auto;
	 padding-top: 50px;
	 background: #039ee3;
}
 .timeline ul li::after {
  content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%) rotate(45deg);
    width: 20px;
    height: 20px;
    z-index: 2;
    background: #039ee3;
}
 .timeline ul li div {
  position: relative;
    bottom: 0;
    width: 400px;
    padding: 20px;
    background: rgb(249 250 252);
    box-shadow: 4px 13px 30px 1px #a2b4c5;
    border-radius: 5px;
	 display: flex;
	 align-items: center;
}
 .timeline ul li div time {
	 position: absolute;
	 background: #f5af19;
	 width: 80px;
	 height: 30px;
	 top: -15px;
	 border-radius: 5px;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 letter-spacing: 2px;
}
 .timeline ul li div div {
	 height: 100px;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
}
 .timeline ul li div div p {
	 text-align: center;
}
 .timeline ul li div .discovery {
	 margin-right: 10px;
}
 .timeline ul li:nth-of-type(odd) > div {
	 left: 45px;
}
 .timeline ul li:nth-of-type(even) > div {
	 left: -439px;
}
 .timeline ul li div {
	 visibility: hidden;
	 opacity: 0;
	 transition: all 0.5s ease-in-out;
}
 .timeline ul li:nth-of-type(odd) div {
	 transform: translate3d(100px, -10px, 0) rotate(10deg);
}
 .timeline ul li:nth-of-type(even) div {
	 transform: translate3d(-100px, -10px, 0) rotate(10deg);
}
 .timeline ul li.in-view div {
	 transform: none;
	 visibility: visible;
	 opacity: 1;
   height:100%;
}
 @media screen and (max-width: 900px) {
	 .timeline ul li div {
		 width: 250px;
		 flex-direction: column;
	}
	 .timeline ul li div div {
		 width: 80%;
		 margin: 10px;
	}
	 .timeline ul li:nth-of-type(even) > div {
		 left: -289px;
	}
}
 @media screen and (max-width: 600px) {
	 body {
		 background: #8bfff4;
	}
	 .timeline ul li {
		 margin-left: 20px;
	}
	 .timeline ul li div {
		 width: calc(100vw - 91px);
	}
	 .timeline ul li:nth-of-type(even) > div {
		 left: 45px;
	}
}
 
</style>
<link rel="stylesheet" href="../xtbadmin/Sayfalar/dist/css/style.min.css">
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section"> 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Tarihçemiz</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Anasayfa</a></li>
                <li class="active">Hakkımızda</li>
                <li class="active">Tarihçemiz</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<section class="timeline">
      <ul>
        <li class="in-view">
          <div>
            <time>1998</time>
            <div class="discovery">
              <h1>Kuruluş
</h1>
              <p>İstanbul Teknik 1998'de kuruldu.

</p>
            </div>
            
          </div>
        </li>
        <li class="in-view">
          <div>
            <time>1999</time>
            <div class="discovery">
              <h1>İlk İhracat</h1>
              <p>
Çiçeği burnunda bir şirket olan İstanbul Teknik, 1999'da ilk ihracatını gerçekleştirdi.

              </p>
            </div>
            
          </div>
        </li>
        <li class="in-view">
          <div>
            <time>2000</time>
            <div class="discovery">
              <h1>İlk GeoSeal

</h1>
              <p>Takvimler 2000’i gösterdiğinde ilk GeoSeal şantiye uygulamalarına başladı.

</p>
            </div>
            
          </div>
        </li>
        <li class="">
          <div>
            <time>2003</time>
            <div class="discovery">
              <h1>Filetex Sıva Fileleri</h1>
              <p>2003'te FileTex Sıva Fileleri satışına başlandı.

</p>
            </div>
            
          </div>
        </li>
        <li class="">
          <div>
            <time>2004</time>
            <div class="discovery">
              <h1>Filetex Mermer Fileleri</h1>
              <p>2004'te FileTex Mermer Fileleri satışına başlandı.

</p>
            </div>
            
          </div>
        </li>
        <li class="">
          <div>
            <time>2005</time>
            <div class="discovery">
              <h1>GeoArme Şantiyesi Kuruldu
</h1>
              <p>2005 yılında; geosentetik ürünleri alanında mühendislik hizmetleri sunuldu, ilk GeoArme şantiyesi hayata geçirildi, TekDrain Drenaj Levhaları'nın satışına başlandı, Kalite Yöneticisi Pozisyonu oluşturuldu ve ilk yurtdışı şantiye uygulaması gerçekleştirildi.

</p>
            </div>
            
          </div>
        </li>
</ul>
</section>
        
        
        
        
        
      </ul>
    </section>
<!-- End Model search bar -->
<?php require_once 'inc/footer.php'; ?>
<script src="../xtbadmin/Sayfalar/dist/js/timeline.js"></script>
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
          cozumIsim = "&name=geoarme";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Mermer") > 0) {
          cozumIsim = "&name=beton";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
    }
  });

  var items = document.querySelectorAll(".timeline li");

function isElementInViewport(el) {
  var rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function callbackFunc() {
  for (var i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      if(!items[i].classList.contains("in-view")){
        items[i].classList.add("in-view");
      }
    } else if(items[i].classList.contains("in-view")) {
        items[i].classList.remove("in-view");
    }
  }
}
 
window.addEventListener("load", callbackFunc);
window.addEventListener("scroll", callbackFunc);

  </script>
</html>