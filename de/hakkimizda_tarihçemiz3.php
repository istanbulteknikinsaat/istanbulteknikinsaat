<?php 
require_once '../config.php';
require_once 'inc/header.php'; 
?>
<style>
  @media only screen and (min-width: 768px){
    .cd-horizontal-timeline .events-content h2 {
  font-size:23px !important;
}}
.timeline {
	max-width: 800px;
	list-style: none;
	padding: 20px 0 20px;
	position: relative;
}
.main_heading::after{
    width: 60px;
}
	.timeline:before {
		top: 2px;
		bottom: 15px;
		position: absolute;
		content: " ";
		width: 3px;
		background-color: #eeeeee;
		left: 50%;
		margin-left: -1.5px;
	}
		.arrowhead{
			width: 0;
			position: absolute;
			top: 0;
			left: 50%;
			margin-left: -15px;
			
			border-top: 0 solid transparent;
			border-left: 15px solid transparent;
			border-right: 15px solid transparent;
			border-bottom: 15px solid #eeeeee;
		}
	.timeline > li {
		min-height: 250px;
		width: 50%;
		padding-left: 42px;
		padding-right: 42px;		
		margin-bottom: 30px;		
		position: relative;		
		float: left;
		clear: left;
	}

/*Panel*/
	.timeline > li > .timeline-panel {
		width: 92%;
		float: left;
		border: 1px solid #d4d4d4;
		/*border-radius: 2px;*/
		/*padding: 20px;*/
		position: relative;
		-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
		box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
	}
		.timeline > li > .timeline-panel:before {
			position: absolute;
			top: 26px;
			right: -15px;
			display: inline-block;
			border-top: 15px solid transparent;
			border-left: 15px solid #ccc;
			border-right: 0 solid #ccc;
			border-bottom: 15px solid transparent;
			content: " ";
		}
		.timeline > li > .timeline-panel:after {
			position: absolute;
			top: 27px;
			right: -14px;
			display: inline-block;
			border-top: 14px solid transparent;
			border-left: 14px solid #fff;
			border-right: 0 solid #fff;
			border-bottom: 14px solid transparent;
			content: " ";		
		}

		.timeline-panel img {
			width: 100%;
			padding: 10px 10px 0 10px;
		}


/*Inverted panel*/
	.timeline > li.timeline-inverted > .timeline-panel {
		float: right;
	}
		.timeline > li.timeline-inverted > .timeline-panel:before {
			border-left-width: 0;
			border-right-width: 15px;
			left: -15px;
			right: auto;
		}
		.timeline > li.timeline-inverted > .timeline-panel:after {
			border-left-width: 0;
			border-right-width: 14px;
			left: -14px;
			right: auto;
		}

	.timeline > li.timeline-inverted{
		float: right; 
		clear: right;
		margin-top: 0px;
		margin-bottom: 30px;
	}
		.timeline > li:nth-child(3) {
			margin-top: 100px;
		}


	/*Last panel*/
	@media (min-width: 850px) {
		.timeline .last{
			margin-top: -40px;
		}
			.timeline .last .timeline-panel{
          margin-top: 75px;
          left: calc(50% + 60px);
			}
			.timeline .last .timeline-panel:before{
				top: -15px;
				right: calc(50% - 7px);
				border-top: 0 solid transparent;
				border-left: 15px solid transparent;
				border-right: 15px solid transparent;
				border-bottom: 15px solid #ccc;
			}
			.timeline .last .timeline-panel:after{
				top: -14px;
				right: calc(50% - 6.5px);
				border-top: 0 solid transparent;
				border-left: 14px solid transparent;
				border-right: 14px solid transparent;
				border-bottom: 14px solid #fff;
			}
	}


/*Badge*/
	.timeline > li > .timeline-badge {   
		width: 50px;
		height: 50px;
		line-height: 50px;
		font-size: 1.2em;
		text-align: center;
		position: absolute;
		top: 16px;
		right: 5px;
		z-index: 100; 
		border-top-right-radius: 50%;
		border-top-left-radius: 50%;
		border-bottom-right-radius: 50%;
		border-bottom-left-radius: 50%; 
		cursor: default;
	}
		.timeline > li.timeline-inverted > .timeline-badge{
			left: 5px;
		}

	.timeline > li > .timeline-badge:before{
		position: absolute;
		top: 58%;
		right: -11px;
		content: ' ';
		display: block;
		width: 12px;
		height: 12px;
		margin-top: -10px;
		background: #fff;
		border-radius: 10px;
		border:4px solid rgb(3 158 227);
		z-index: 10;
	}
		.timeline > li.timeline-inverted > .timeline-badge:before{
			left: -11px;
		}




/*Content*/
	.timeline-title {
	  margin-top: 0;
	  padding: 20px 20px 0px 20px;
	  color: inherit;
	}

    h3 {
        font-size: 19px;
    }

	.timeline-body > p,
	.timeline-body > ul {
		padding:0 20px 20px 20px;
		margin-bottom: 0;
	}
		.timeline-body > p + p {
		  margin-top: 5px;
		}

	.timeline-footer{
		background-color:#f4f4f4;
		padding: 10px;
		text-align: center;		
	}
		.timeline-footer > a{
			padding:20px;
			cursor: pointer;
			text-decoration: none;
		}

/*Placement small devices*/
@media (max-width: 850px) {
     ul.timeline:before { 
 		    bottom: -15px;
  }
    ul.timeline:before, .arrowhead {
        left: 10px;    
    }
  
    ul.timeline > li {
	  min-height: 50px;
      margin-bottom: 20px;
      padding-right: 5px;
      position: relative;
      width:100%;
      float: left;
      clear: left;
    }
    ul.timeline > li > .timeline-panel {
        width: calc(100% - 40px);
        width: -moz-calc(100% - 40px);
        width: -webkit-calc(100% - 40px);
    }


    ul.timeline > li > .timeline-panel {
        float: right;
    }

        ul.timeline > li > .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        ul.timeline > li > .timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }
    
	.timeline > li.timeline-inverted{
		float: left; 
		clear: left;
		margin-top: 0;
		margin-bottom: 20px;
	}

    ul.timeline > li > .timeline-badge, ul.timeline > li.timeline-inverted > .timeline-badge{
        left: 15.5px;
    }   
	ul.timeline > li > .timeline-badge:before, ul.timeline > li.timeline-inverted > .timeline-badge:before{
    left: -11.5px;
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
              <h1 class="page-title">Tarih??emiz</h1>
              <ol class="breadcrumb">
                <li><a href="anasayfa.php">Anasayfa</a></li>
                <li class="active">Hakk??m??zda</li>
                <li class="active">Tarih??emiz</li>
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
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
                <ul id="timeline" class="timeline">
                    <div class="arrowhead"></div>
                        <li class=" ">
                        <div class="timeline-badge">2019 </div>
                        <div class="timeline-panel">  
                            <div class="timeline-heading">
                                <h3 class="timeline-title">IVG Sertifikas?? al??nd?? ve Almanya'ya Geogrid sat?????? ba??lad??.</h3>
                            </div>
                            <div class="timeline-body">

                            </div>
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2018 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Fortex ve Asfalt Geogrid ??retimi 20 milyon m2 yi a??t??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2016 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">??stanbul Teknik Anonim ??irket Oldu.</h3>
                            </div>
                            <div class="timeline-body">
                                <p>???? hayat??na Limited ??irket olarak ba??layan ??stanbul Teknik, k??sa zaman i??inde b??y??yerek 2016 y??l??nda Anonim ??irket oldu.</p>
                            </div>
                            
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2015 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">??hracat Yap??lan ??lke Say??s?? 5 k??tay?? ve 50 ??lkeyi a??t??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2015 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">CoverEx Dilatasyon Sistemleri ??retimine ba??land??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2014 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Fortex Geogrid ??retimi</h3>
                            </div>
                                
                            <div class="timeline-body">
                                <p>ForTex Geogrid ??retimi 6 milyon metrekareye ula????rken, Epox??stt Mermer Sa??lamla??t??r??c??lar?? ??retimine ba??land??.</p>
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2013 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">GeoGreen Ye??il ??at?? Sistemleri sat??????na ve asfalt kimyasallar?? ??retimine ba??land??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2011 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">ForTex Geogrid ve TekFix Sabitleme Elemanlar?? ??retimine ba??land??. </h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2011 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">AR-GE Laboratuvar?? ??al????ma faaliyetlerine ba??lad?? ve AR-GE merkezi Kuruldu.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2009 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Geoseal PVC ilk t??nel yal??t??m uygulamas?? yap??ld??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2008 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Asfalt katk?? ??r??nleri sat??????na 2008 y??l??nda ba??land??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2006 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">ISO 9001 Kalite Y??netim Sistemi'ne ge??ilirken, TrioTex ??at?? ve Cephe ??rt??leri'nin sat??????na ba??land??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2005 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Geosentetik ??r??nleri alan??nda m??hendislik hizmetleri sunuldu.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2005 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">??lk GeoArme ??antiyesi hayata ge??irildi ve TekDrain Drenaj Levhalar??'n??n sat??????na ba??land??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2005 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title"> ??lk yurtd?????? ??antiye uygulamas?? ger??ekle??tirildi.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2004 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">FileTex Mermer Fileleri sat??????na ba??land??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">2003 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title"> FileTex S??va Fileleri sat??????na ba??land??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">2000 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">??lk GeoSeal ??antiye uygulamalar??na ba??lad??.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class=" ">
                        <div class="timeline-badge">1999 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">??stanbul Teknik, 1999'da ilk ihracat??n?? ger??ekle??tirdi.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        <li class="timeline-inverted ">
                        <div class="timeline-badge">1998 </div>
                        <div class="timeline-panel">  
                        
                            <div class="timeline-heading">
                                <h3 class="timeline-title">??stanbul Teknik 1998'de kuruldu.</h3>
                            </div>
                                
                            <div class="timeline-body">
                                
                            </div>
                                
                        </div>
                        </li>
                        
                <div style="clear: both"></div>
                        
                </ul>


                </div>
                </div>
        </div>
      </div>
    </div>
  </div>

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
          cozumIsim = "&name=geoarme";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
        if (arr[i].text.indexOf("Mermer") > 0) {
          cozumIsim = "&name=beton";
          arr[i].href = arr[i].href.concat(cozumIsim);
        }
    }
  });
  </script>
</html>