<!DOCTYPE html>
<html lang="en">
<html>
<?php error_reporting(E_ALL); ?>
<?php date_default_timezone_set('Europe/Istanbul'); 
// header('Cache-Control: no-cache, no-store, must-revalidate');
// header('Pragma: no-cache');
// header('Expires: 0');
?>

<head>
<!--     <base href="https://www.istanbulteknik.com/en/" /> -->    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!--     <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />  
    <meta http-equiv="Set-Cookie" content="name=data; path=path; expires=Thursday, 01-Jan-2015 00:00:00 GMT">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
 -->



<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">

    <title><?php if(isset($title)) { echo substr($title, 0, 70); } else { echo "İstanbul Teknik"; } ?></title>
   

    <?php if(isset($description)) { echo '<meta name="description" content="'.substr($description, 0, 160).'" />'; } ?>
   

    <?php if(isset($keywords)) { echo '<meta name="keywords" content="'.substr($keywords, 0, 160).'" />'; } ?>
   

 
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSS Files -->
<!--     <link rel="stylesheet" type="text/css" href="/en/assets/css/reset.min.css" async="async" /> -->

<style type="text/css">
 /* Eric Meyer's Reset CSS v2.0 (http://meyerweb.com/eric/tools/css/reset/)
--------------------------------------------------------------------------------------- */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}  

 /* owl.carousel.min.css/)
--------------------------------------------------------------------------------------- */
.owl-carousel .animated{-webkit-animation-duration:1000ms;animation-duration:1000ms;-webkit-animation-fill-mode:both;animation-fill-mode:both;}
.owl-carousel .owl-animated-in{z-index:0;}
.owl-carousel .owl-animated-out{z-index:1;}
.owl-carousel .fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut;}
@-webkit-keyframes fadeOut{0%{opacity:1;}
100%{opacity:0;}
}
@keyframes fadeOut{0%{opacity:1;}
100%{opacity:0;}
}
.owl-height{-webkit-transition:height 500ms ease-in-out;-moz-transition:height 500ms ease-in-out;-ms-transition:height 500ms ease-in-out;-o-transition:height 500ms ease-in-out;transition:height 500ms ease-in-out;}
.owl-carousel{display:none;width:100%;-webkit-tap-highlight-color:transparent;position:relative;z-index:1;}
.owl-carousel .owl-stage{position:relative;-ms-touch-action:pan-Y;}
.owl-carousel .owl-stage:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0;}
.owl-carousel .owl-stage-outer{position:relative;overflow:hidden;-webkit-transform:translate3d(0px, 0px, 0px);}
.owl-carousel .owl-controls .owl-nav .owl-prev,
.owl-carousel .owl-controls .owl-nav .owl-next,
.owl-carousel .owl-controls .owl-dot{cursor:pointer;cursor:hand;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.owl-carousel.owl-loaded{display:block;}
.owl-carousel.owl-loading{opacity:0;display:block;}
.owl-carousel.owl-hidden{opacity:0;}
.owl-carousel .owl-refresh .owl-item{display:none;}
.owl-carousel .owl-item{position:relative;min-height:1px;float:left;-webkit-backface-visibility:hidden;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.owl-carousel .owl-item img{display:block;width:100%;-webkit-transform-style:preserve-3d;}
.owl-carousel.owl-text-select-on .owl-item{-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto;}
.owl-carousel .owl-grab{cursor:move;cursor:-webkit-grab;cursor:-o-grab;cursor:-ms-grab;cursor:grab;}
.owl-carousel.owl-rtl{direction:rtl;}
.owl-carousel.owl-rtl .owl-item{float:right;}
.no-js .owl-carousel{display:block;}
.owl-carousel .owl-item .owl-lazy{opacity:0;-webkit-transition:opacity 400ms ease;-moz-transition:opacity 400ms ease;-ms-transition:opacity 400ms ease;-o-transition:opacity 400ms ease;transition:opacity 400ms ease;}
.owl-carousel .owl-item img{transform-style:preserve-3d;}
.owl-carousel .owl-video-wrapper{position:relative;height:100%;background:#000;}
.owl-carousel .owl-video-play-icon{position:absolute;height:80px;width:80px;left:50%;top:50%;margin-left:-40px;margin-top:-40px;background:url("owl.video.play.png") no-repeat;cursor:pointer;z-index:1;-webkit-backface-visibility:hidden;-webkit-transition:scale 100ms ease;-moz-transition:scale 100ms ease;-ms-transition:scale 100ms ease;-o-transition:scale 100ms ease;transition:scale 100ms ease;}
.owl-carousel .owl-video-play-icon:hover{-webkit-transition:scale(1.3, 1.3);-moz-transition:scale(1.3, 1.3);-ms-transition:scale(1.3, 1.3);-o-transition:scale(1.3, 1.3);transition:scale(1.3, 1.3);}
.owl-carousel .owl-video-playing .owl-video-tn,
.owl-carousel .owl-video-playing .owl-video-play-icon{display:none;}
.owl-carousel .owl-video-tn{opacity:0;height:100%;background-position:center center;background-repeat:no-repeat;-webkit-background-size:contain;-moz-background-size:contain;-o-background-size:contain;background-size:contain;-webkit-transition:opacity 400ms ease;-moz-transition:opacity 400ms ease;-ms-transition:opacity 400ms ease;-o-transition:opacity 400ms ease;transition:opacity 400ms ease;}
.owl-carousel .owl-video-frame{position:relative;z-index:1;}

/*notification*/

.notification{background-color:#c9141e;/*background:url('../../img/notification/marble-23-bkg.png');*/text-align:center;height:93px;display:none;text-decoration:none}
.notification a{text-decoration:none}.notification-inner{width:100%;height:93px;position:relative;cursor:pointer;display:table-cell;vertical-align:middle;text-decoration:none}
.notification p{color:#FFF;text-align:center;font-size:22px;text-decoration:none;padding-left:400px;padding-right:100px;font-weight:400;font-family:'Roboto-Thin',Arial,serif;width:auto}
.notification p span{font-weight:200;font-family:'Roboto-Regular',Arial,serif}.notification-close{float:right;position:absolute;right:0;color:#000;top:36px;font-size:34px;background:url('/en/img/close-icon.png');background-repeat:no-repeat;width:23px;height:23px;display:inline-block;cursor:pointer}
.notification-picture{position:absolute;left:0;z-index:53;bottom:20px;display:inline-block}@media screen and (min-width:960px) and (max-width:1260px){.notification p{font-size:18px;padding-left:380px;padding-right:100px}
.notification-close{right:40px}}@media screen and (min-width:500px) and (max-width:960px){.notification p{font-size:18px;padding-left:380px;padding-right:100px}
.notification-close{right:35px}}@media screen and (min-width:375px) and (max-width:500px){.notification{height:70px}.notification-inner{height:70px}.notification p{font-size:15px;padding:10px 0;padding-left:50px;padding-right:50px;width:100%;line-height:18px;display:none}
.notification-close{transform-origin:-11px -11px;-ms-transform:scale(0.7,0.7);-webkit-transform:scale(0.7,0.7);transform:scale(0.7,0.7);right:16px;top:28px}
.notification-picture{left:-180px;bottom:17px;-ms-transform:scale(0.7,0.7);-webkit-transform:scale(0.7,0.7);transform:scale(0.7,0.7);transform-origin:bottom}
}@media screen and (min-width:320px) and (max-width:375px){.notification{height:70px}.notification-inner{height:70px}.notification p{font-size:17px;padding:18px 0;width:100%;padding-left:50px;padding-right:50px;line-height:23px;display:inline-block;display:none}
.notification-close{transform-origin:-11px -11px;-ms-transform:scale(0.7,0.7);-webkit-transform:scale(0.7,0.7);transform:scale(0.7,0.7);right:13px;top:28px}


</style>




    <link rel="stylesheet" href="/en/assets/css/style.min.css">
<!--     <link rel="stylesheet" href="/en/assets/css/print.min.css" media="print"> --> 
    <link rel="stylesheet" class="rs-file" href="/en/assets/css/slider.min.css">
    <link class="rs-file" href="/en/assets/css/skins/minimal-white/rs-minimal-white.min.css" rel="stylesheet">
    <!--  Fav and Touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <![endif]-->
    <link rel="canonical" href="<?php echo "https://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI'].""; ?>" />


    


    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
  
  <script>

 var OneSignal = OneSignal || [];


      OneSignal.push( function() {

        OneSignal.SERVICE_WORKER_UPDATER_PATH = "OneSignalSDKUpdaterWorker.js.php";
        OneSignal.SERVICE_WORKER_PATH = "OneSignalSDKWorker.js.php";
        OneSignal.SERVICE_WORKER_PARAM = { scope: '/' };


        OneSignal.setDefaultNotificationUrl("http://istanbulteknik.com");
        var oneSignal_options = {};

oneSignal_options['appId'] = '5aa333dc-48a8-43c0-995a-cecc001c8635';
oneSignal_options['autoRegister'] = true;
oneSignal_options['welcomeNotification'] = { };
oneSignal_options['welcomeNotification']['title'] = "İstanbul Teknik";
oneSignal_options['welcomeNotification']['message'] = "Bildirim izniniz için teşekkür ederiz.";
oneSignal_options['welcomeNotification']['url'] = "http://istanbulteknik.com";
oneSignal_options['subdomainName'] = "istanbulteknik";
oneSignal_options['safari_web_id'] = "web.onesignal.auto.2b467c5d-2ccd-4e09-a57b-cb7ab9efd0c0";
oneSignal_options['promptOptions'] = { };
oneSignal_options['promptOptions']['actionMessage'] = 'İstanbul Teknik ile ilgili yeniliklerden Anında Haberdar Olmak ister misin?';
oneSignal_options['promptOptions']['exampleNotificationTitleDesktop'] = 'İstanbul Teknik';
oneSignal_options['promptOptions']['exampleNotificationMessageDesktop'] = 'İstanbul Teknik ile ilgili yeniliklerden Anında Haberdar Olmak ister misin?';
oneSignal_options['promptOptions']['exampleNotificationTitleMobile'] = 'İstanbul Teknik';
oneSignal_options['promptOptions']['exampleNotificationMessageMobile'] = 'İstanbul Teknik ile ilgili yeniliklerden Anında Haberdar Olmak ister misin?';
oneSignal_options['promptOptions']['exampleNotificationCaption'] = 'İstediğin zaman bildirimleri geri kapatabilirsin.';
oneSignal_options['promptOptions']['acceptButtonText'] = 'Evet';
oneSignal_options['promptOptions']['cancelButtonText'] = 'Daha Sonra';
oneSignal_options['notifyButton'] = { };
oneSignal_options['notifyButton']['enable'] = false;
oneSignal_options['notifyButton']['position'] = 'bottom-right';
oneSignal_options['notifyButton']['theme'] = 'inverse';
oneSignal_options['notifyButton']['size'] = 'medium';
oneSignal_options['notifyButton']['prenotify'] = true;
oneSignal_options['notifyButton']['displayPredicate'] = function() {
              return OneSignal.isPushNotificationsEnabled()
                      .then(function(isPushEnabled) {
                          return !isPushEnabled;
                      });
            };
   oneSignal_options['notifyButton']['showCredit'] = true;

        OneSignal.init(oneSignal_options);
      });


      function documentInitOneSignal() {
        var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

        var oneSignalLinkClickHandler = function(event) { OneSignal.push(['registerForPushNotifications']); event.preventDefault(); };        for(var i = 0; i < oneSignal_elements.length; i++)
          oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
      }

      if (document.readyState === 'complete') {
           documentInitOneSignal();
      }else {
           window.addEventListener("load", function(event){
               documentInitOneSignal();
          });
      }
  </script>






</head>
<body>

<header>



   <div class="wrapper">
			<h1 title="İstanbul Teknik"><a href="/en" title="İstanbul Teknik">İstanbul Teknik</a></h1>
			  	
			  <div id="navbar">

                <div class="controls">
                    <a class="open-nav">
                        <span class="nav-icon-open"></span>
                    </a>
                </div>
            </div>

            <?php $pageName = basename($_SERVER['PHP_SELF'], ".php"); ?>

   	      <div class="search-wrap">

              <a class="lang" title="İstanbul Teknik Turkish" href="/">Turkish</a>

			


					 <form action="search" autocomplete="on">
					      <input id="q" class="search-box"  name="q" type="text" placeholder="What are you looking for?">

					     <input id="search_submit" class="search-btn"  value="Search" type="submit">
					  </form>


			</div>


			<nav id="main-nav" class="main-nav">
        <ul>
          <li><a title="İstanbul Teknik" href="/en">Home</a></li> 
          <li><a <?php if ($pageName == "about") {echo 'class="menu-nav-active';} ?> href="about" title="About">About</a></li>  
          <li><a <?php if ($pageName == "references") {echo 'class="menu-nav-active';} ?> href="references" title="References">References</a></li>  
          <li><a <?php if ($pageName == "contact") {echo 'class="menu-nav-active';}  ?> href="contact" title="Contact">Contact</a></li> 
          <li><a class="blue" title="İstanbul Teknik Blue" href="https://www.istanbulteknik.blue"><img src="/en/img/istanbul-teknik-blue-logo.png" alt="İstanbul Teknik Blue"></a></li>  
        </ul>

     
			</nav>
     



			<div id="mobile-nav" class="mobile-nav-new">
      <nav>


   	  <div class="search-wrap-mobile">

					 <form action="search" autocomplete="on">
					       <input class="search-box-mobile" name="q" type="text" placeholder="What are you looking for?">
					      <input id="search_submit" class="search-btn-mobile"  value="Search" type="submit">
					  </form>


			</div>


 				<ul>
          <li><a title="İstanbul Teknik" href="/en">Home</a></li> 

          <li><a title="Products">Products</a>

                <?php 
                  include 'menu.php'; 
                ?>


          </li>  



          <li><a href="/en/about" title="About of İstanbul Teknik">About</a></li>  
          <li><a href="/en/references" title="References">References</a></li>  
          <li><a href="/en/contact" title="Contact">Contact</a></li> 
          <li><a class="blue" title="İstanbul Teknik .blue" href="https://www.istanbulteknik.blue"><img src="/en/img/istanbul-teknik-blue-logo.png" alt="İstanbul Teknik Blue"></a></li> 

           <a class="lang_mobile" title="İstanbul Teknik Turkish" href="/">Turkish</a>
        </ul>



</nav>
			</div>
	</div>


</header>



