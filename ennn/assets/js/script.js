$(document).ready(function() {


    if (!document.implementation.hasFeature("https://www.w3.org/TR/SVG11/feature#Image", "1.1")) {
        $('img[src*="svg"]').attr('src', function() {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }
    var menuStatus = 'close';
    var mobileStatus = false;
    var MOBILE_SITE = '/mobile/index.html',
        NO_REDIRECT = 'noredirect';
    (function(i) {
        var e = /iPhone/i,
            n = /iPod/i,
            o = /iPad/i,
            t = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,
            r = /Android/i,
            d = /BlackBerry/i,
            s = /Opera Mini/i,
            a = /IEMobile/i,
            b = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,
            h = RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"),
            c = function(i, e) {
                return i.test(e)
            },
            l = function(i) {
                var l = i || navigator.userAgent;
                this.apple = { phone: c(e, l), ipod: c(n, l), tablet: c(o, l), device: c(e, l) || c(n, l) || c(o, l) }, this.android = { phone: c(t, l), tablet: !c(t, l) && c(r, l), device: c(t, l) || c(r, l) }, this.other = { blackberry: c(d, l), opera: c(s, l), windows: c(a, l), firefox: c(b, l), device: c(d, l) || c(s, l) || c(a, l) || c(b, l) }, this.seven_inch = c(h, l), this.any = this.apple.device || this.android.device || this.other.device || this.seven_inch
            },
            v = i.isMobile = new l;
        v.Class = l
    })(window);
    if (isMobile.apple.phone || isMobile.apple.tablet || isMobile.android.phone || isMobile.seven_inch) {
        if (document.cookie.indexOf(NO_REDIRECT) === -1) {
            mobileStatus = true;
            FastClick.attach(document.body);
        }
    }
    $("#navbar").bind("click", toggleMenu);
    if ($("body .referanslar-accordion").length) { accordion(".referanslar-accordion") }



    if ($(".company").length) {
        if ($(".notification").length) {
            $(".notification").delay(2500).slideDown("slow");


            $(".notification-close").bind("click", closeNotification);



        }
    }


    if ($(".product-buy").length) {
         
            var myposition = $("footer").position();

            $(window).on("scroll", function () {

                 if ($(window).scrollTop() < 130 ) {
                     //  console.log("a");
                       $(".product-buy").addClass("inmypage");

                 } else if ($(window).scrollTop() > myposition.top-1130) {
                    //   console.log("b");
                       $(".product-buy").addClass("inmypage");

                 } else if ($(window).scrollTop() > 130 & $(window).scrollTop() < myposition.top-1130 )  {
                   //   console.log("c");
                      $(".product-buy").removeClass("inmypage");

                 } 
            });
    }





    function closeNotification() {
        $(".notification").slideUp("ease");
        $(".notification-close").unbind("click", closeNotification);

    }

    function toggleMenu() {
        if (menuStatus == 'close') {
            $('.nav-icon-open').removeClass().addClass('nav-icon-close');
            nowFrezee('body');
            $("#mobile-nav").hide().slideDown("ease", function() {});
            for (var i = 0; i < 5; i++) { $('#mobile-nav ul li:eq(' + i + ')').delay(60 * i).queue(function() { $(this).removeClass().addClass('animated fadeIn').clearQueue(); }); }
            menuStatus = 'open';
           //   console.log("a1");
        } else if (menuStatus == 'open') {
            $('.nav-icon-close').removeClass().addClass('nav-icon-open');
            nowUnFrezee('body');
            $("#mobile-nav").slideUp("ease", function() {});
            for (var i = 0; i < 5; i++) { $('#mobile-nav ul li:eq(' + i + ')').delay(60 * i).queue(function() { $(this).removeClass().addClass('animated fadeOut').clearQueue(); }); }
            menuStatus = 'close';
         //  console.log("a2");
        }
    }

    function nowFrezee(myObj) {
        $(myObj).addClass('freeze');
        return true;
         //  console.log("b");
    }

    function nowUnFrezee(myObj) {
        $(myObj).removeClass('freeze');
        return true;
        //   console.log("c");
    }
    if ($("body .contact-tabs").length) {
        $(".contact-tabs a").click(function(event) {
            event.preventDefault();
            $(this).addClass("current");
            $(this).parent().siblings().children().removeClass("current");
            var tab = $(this).attr("href");
            $(".tab-content").css("display", "none");
            $(tab).fadeIn();
        });
    }
    if ($("body .news").length) {
            //  console.log("t");
        $("#main-slider").royalSlider({ arrowsNav: true, loop: false, keyboardNavEnabled: true, controlsInside: true, imageScaleMode: 'fill', arrowsNavAutoHide: false, controlNavigation: 'bullets', thumbsFitInViewport: false, navigateByClick: false, startSlideId: 0, autoPlay: true, slidesSpacing: 0, transitionType: 'move', globalCaption: false, autoPlay: { enabled: true, pauseOnHover: false, delay: 8000 }, imgWidth: 2000, imgHeight: 555 });
        $('.rsNav').wrap('<div id="istanbul-teknik-pager"><div class="wrapper">').parent().append($('.rsArrow'));
        $('#main-slider').append($('.rsArrow'));
        $('.owl-news').owlCarousel({ loop: true, margin: 30, autoplay: true, autoplayTimeout: 3400, autoplayHoverPause: true, navText: ['<i class="arrow-left icon" aria-hidden="true"></i>', '<i class="arrow-right icon" aria-hidden="true"></i>'], responsiveClass: true, responsive: { 0: { items: 1, nav: false }, 500: { items: 2, nav: false }, 960: { items: 3, nav: true } } })
    }





 var merkez = '<iframe id="haritam" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.0015859626756!2d28.862821315370304!3d41.06895797929464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab003be342aab%3A0x55d7f0f64310d0cf!2sistanbul+teknik+in%C5%9Faat!5e0!3m2!1str!2str!4v1470125641684" width="100%" height="65%" frameborder="0" style="border:0" allowfullscreen></iframe>';
  var depo  = '<iframe id="haritam" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.7918212316567!2d28.83106791897406!3d41.13907032825528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDA4JzIwLjYiTiAyOMKwNDknNTYuNCJF!5e0!3m2!1str!2s!4v1507882708572" width="100%" height="65%" frameborder="0" style="border:0" allowfullscreen></iframe>';
var fabrika = '<iframe id="haritam" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12003.563644633996!2d27.8818714!3d41.2241477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b4defdbb12cf81%3A0x7092d39230cfdfb4!2zxLBzdGFuYnVsIFRla25payDEsG7Fn2FhdCBGYWJyaWth!5e0!3m2!1str!2str!4v1507882745292" width="100%" height="65%" frameborder="0" style="border:0" allowfullscreen></iframe>';

 if ($("body .contact-tabs").length) { 
          $(".map-close").bind( "click", function() {
              $( ".map-container" ).fadeOut("slow");
          });




            $(".google-map1").bind( "click", function() {
                 $('#haritam').remove();

                $('.map-container h1').text('HEAD OFFICE');   
          


                 $( ".map-container" ).fadeIn("slow");
                 $(merkez).insertAfter('.map-close');
            });
    
            $(".google-map2").bind( "click", function() {
                     $('#haritam').remove();
                                  $('.map-container h1').text('WAREHOUSE');   
                  $( ".map-container" ).fadeIn("slow");
                 $ (depo).insertAfter('.map-close');

            });


            $(".google-map3").bind( "click", function() {
                     $('#haritam').remove();
                  $('.map-container h1').text('FACTORY');   
                  $( ".map-container" ).fadeIn("slow");
                 $(fabrika).insertAfter('.map-close');  // $(fabrika).insertAfter('.map-close');  
               

            });



          $(document).keyup(function(e) {
               if (e.keyCode == 27) { // escape key maps to keycode `27`
                 $( ".map-container" ).fadeOut("slow");
              }
          });


 // function initMap() {
 //        var myLatLng = {lat: -25.363, lng: 131.044};

 //        // Create a map object and specify the DOM element for display.
 //        var map = new google.maps.Map(document.getElementById('map'), {
 //          center: myLatLng,
 //          scrollwheel: false,
 //          zoom: 4
 //        });

 //        // Create a marker and set its position.
 //        var marker = new google.maps.Marker({
 //          map: map,
 //          position: myLatLng,
 //          title: 'Hello World!'
 //        });
 //      }

}





    if ($("body .product-page").length) {
           console.log("d");
        selectedMenu();
        $(".product-navigation>nav>ul>li>a").bind("click", function() {
            $(this).next("ul").slideToggle(300);
            $(this).parent().siblings("li").children("ul").slideUp('slow');
       
        });
        $(".product-navigation>nav>ul>li>ul>li>a:not(.not-open)").bind("click", function() {
            var selectedColorClass = $(this).parent().parent().parent().attr('data-color');
            $(this).next("ul").slideToggle(400);
            $(this).parent().siblings("li").removeClass(selectedColorClass);
            $(this).parent().toggleClass(selectedColorClass);
            $(this).parent().siblings("li").children("ul").slideUp(400);
            $(this).parent().parent().parent().siblings("li").children("ul").children("li").children("ul").slideUp('slow');
            $(this).parent().parent().parent().siblings("li").children("ul").children("li").removeClass();
            
        });
        $(".product-navigation>nav>ul>li>ul>li>ul>li>a").bind("click", function() {
           // console.log("ffff");
            $(this).next("ul").slideToggle(400);
            $(this).toggleClass('opacityView');
                             console.log('cc');
        });
        $(".product-navigation>nav>ul>li>ul>li>ul>li>ul>li>a").bind("click", function() {
           // console.log("ggg");
            $(this).next("ul").slideToggle(400);

        });
    }


    if ($("body .mobile-nav-new").length) {
        selectedMenu();
        //   console.log("e3");
        $(".mobile-nav-new>nav>ul>li>a").bind("click", function() {
            $(this).next("ul").slideToggle(300);
            $(this).parent().siblings("li").children("ul").slideUp('slow');
   
           // console.log("e5");

        });


        $(".mobile-nav-new>nav>ul>li>ul>li>a").bind("click", function() {
            $(this).next("ul").slideToggle(300);
            $(this).parent().siblings("li").children("ul").slideUp('slow');


        });
        $(".mobile-nav-new>nav>ul>li>ul>li>ul>li>a:not(.not-open)").bind("click", function() {
            var selectedColorClass = $(this).parent().parent().parent().attr('data-color');
         // console.log('renk:'+selectedColorClass);
            $(this).next("ul").slideToggle(400);
            $(this).parent().siblings("li").removeClass(selectedColorClass);
            $(this).parent().toggleClass(selectedColorClass);
            $(this).parent().siblings("li").children("ul").slideUp(400);
            $(this).parent().parent().parent().siblings("li").children("ul").children("li").children("ul").slideUp('slow');
            $(this).parent().parent().parent().siblings("li").children("ul").children("li").removeClass();
        });
        $(".mobile-nav-new>nav>ul>li>ul>li>ul>li>ul>li>a").bind("click", function() {
         //  console.log("ffff");
            $(this).next("ul").slideToggle(400);
            $(this).toggleClass('opacityView');
        });
        $(".mobile-nav-new>nav>ul>li>ul>li>ul>li>ul>li>ul>li>a").bind("click", function() {
           // console.log("ggg");
            $(this).next("ul").slideToggle(400);
        });
    }









function selectedMenu() {
 //  console.log("e");
        var pageUrl = $('.product-page>.wrapper>h2').attr('data-url');

        var pathname = window.location.pathname;  
      

        var asphaltProducts = pathname.search("asphalt-products");
        var concreteProducts = pathname.search("concrete-products");
        
       
        if( asphaltProducts >= 1) {
             

                        $("[page-id=" + pageUrl + "]").addClass("tekliactive");


        }else if( asphaltProducts == -1 ) {
           
    
             if( concreteProducts >= 1) {
             
                            $("[page-id=" + pageUrl + "]").addClass("tekliactive");
             }
           
        }

 



 
        if (pageUrl != "expansion-joint") {
            $("[page-id=" + pageUrl + "]").addClass("active");
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().addClass("open");
            $("[page-id=" + pageUrl + "]").parent().parent().css("display", "block");
            var selectedColorClass = $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().attr('data-color');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().addClass(selectedColorClass);
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().parent().addClass('open');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().children("ul").addClass('open');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().addClass('turkuaz');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().children("ul").css("display", "block");
        }
        if (pageUrl == "expansion-joint") {
            pageUrl = $('.product-page>.wrapper>h2').attr('data-expansion-joint-url');
            $("[page-id=" + pageUrl + "]").addClass("active");
            $("[page-id=" + pageUrl + "]").parent().parent().parent().children("ul").addClass('open');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().children("ul").css("display", "block");
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().parent().addClass('open');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().children("ul").addClass('open');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().addClass('turkuaz');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().children("ul").css("display", "block");
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().parent().parent().parent().css("display", "block");
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().parent().css("display", "block");
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().parent().parent().addClass('purple');
            $("[page-id=" + pageUrl + "]").parent().parent().parent().parent().parent().parent().children("ul").addClass('open');
        }
    }




    if ($(".search-results").length) {
         $("#q").tipuesearch();
    }



      // myLocations: myReferencesMap,  
    if ($(".referencesMap").length) {

            var mapStyle = [{"stylers":[{"hue":"#2c3e50"},{"saturation":250}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}];

           var easyLocatorPlugin = $('.referencesMap').easyLocator({
                spreadsheetId: '1OxN-zjg_iJeOMCTnPb9YIRWhhlPbYVYgXzoDXqh-ePA',
                apiKey: 'AIzaSyC4wNii5IMyI4RZIcAEFP78keumQ91H5nY',
                mapOptions: { //all options that do not need google maps loaded, you can load google map first and use them later
                     zoom: 5,
                     center: { lat: 38.397, lng: 41.644 },
                     styles: mapStyle
                },
                centerMapOnLocation: false         
            });


       easyLocatorPlugin.onEvents.progress(function(locationClicked){
     
        });
    }





        if (isMobile) {
            $(document).on("click", function(n) {
                $(".hizli-basvuru").removeClass("hover");
                n.stopPropagation()
            });
            $(".hizli-basvuru-hover").on("click", function(n) { n.stopPropagation() });
            $(".hizli-basvuru-btn").on("click", function(n) {
                $(".hizli-basvuru").addClass("hover");
                n.stopPropagation()
            });
            $(".hizli-basvuru-close").on("click", function() { $(".hizli-basvuru").removeClass("hover") })
        } else $(".hizli-basvuru").hover(function() { $(this).addClass("hover") }, function() { $(this).removeClass("hover") });


  















    if ($("body .contact-form").length) {
        $('#gonder-mail').bind("click", mailGonder);
        $('#gonder-bayi').bind("click", bayiBasvurusu);
        $('#gonder-musteri').bind("click", musteri);
    }

    function mailGonder() {
        var advesoyad = $('#contact-form-email input[name=advesoyad]').val();
        var firma = $('#contact-form-email input[name=firma]').val();
        var gorev = $('#contact-form-email input[name=gorev]').val();
        var telefon = $('#contact-form-email input[name=telefon]').val();
        var email = $('#contact-form-email input[name=email]').val();
        var konu = $('#contact-form-email input[name=konu]').val();
        var mesaj = $('#contact-form-email textarea[name=mesaj]').val();
        var mailData = 'advesoyad=' + advesoyad + '&firma=' + firma + '&gorev=' + gorev + '&telefon=' + telefon + '&email=' + email + '&konu=' + konu + '&mesaj=' + mesaj;
       // console.log('mailData::' + mailData);
        contactServer(mailData, 'mailgonder');
    }

    function bayiBasvurusu() {
        var firmaadi = $('#contact-form-bayi input[name=firmaadi]').val();
        var yetkilikisiadivegorevi = $('#contact-form-bayi input[name=yetkilikisiadivegorevi]').val();
        var firmaadresi = $('#contact-form-bayi input[name=firmaadresi]').val();
        var telefon = $('#contact-form-bayi input[name=telefon]').val();
        var fax = $('#contact-form-bayi input[name=fax]').val();
        var ceptelefonu = $('#contact-form-bayi input[name=ceptelefonu]').val();
        var email = $('#contact-form-bayi input[name=email]').val();
        var firmawebsiteadresi = $('#contact-form-bayi input[name=firmawebsiteadresi]').val();
        var vergidairesino = $('#contact-form-bayi input[name=vergidairesino]').val();
        var ticsicno = $('#contact-form-bayi input[name=ticsicno]').val();
        var oncekiyilcirosu = $('#contact-form-bayi input[name=oncekiyilcirosu]').val();
        var toplampersonalsayisi = $('#contact-form-bayi input[name=toplampersonalsayisi]').val();
        var aktifolaraksatisyapilaniller = $('#contact-form-bayi textarea[name=aktifolaraksatisyapilaniller]').val();
        var bayiliginiyapmaktaoldugunuzdigermarkalar = $('textarea[name=bayiliginiyapmaktaoldugunuzdigermarkalar]').val();
        var bayiData = 'firmaadi=' + firmaadi + '&yetkilikisiadivegorevi=' + yetkilikisiadivegorevi + '&firmaadresi=' + firmaadresi + '&telefon=' + telefon + '&fax=' + fax + '&ceptelefonu=' + ceptelefonu + '&email=' + email + '&firmawebsiteadresi=' + firmawebsiteadresi + '&vergidairesino=' + vergidairesino + '&ticsicno=' + ticsicno + '&oncekiyilcirosu=' + oncekiyilcirosu + '&toplampersonalsayisi=' + toplampersonalsayisi + '&aktifolaraksatisyapilaniller=' + aktifolaraksatisyapilaniller + '&bayiliginiyapmaktaoldugunuzdigermarkalar=' + bayiliginiyapmaktaoldugunuzdigermarkalar;
        contactServer(bayiData, 'bayibasvurusu');
    }

    function musteri() {
        var firmaadi = $('#contact-form-musteri input[name=firmaadi]').val();
        var yetkilikisiadivegorevi = $('#contact-form-musteri input[name=yetkilikisiadivegorevi]').val();
        var memnuniyetsikayetkonusu = $('#contact-form-musteri select[name=memnuniyet-sikayet-konusu').val();
        var memnuniyetveyasikayet = $('#contact-form-musteri textarea[name=memnuniyetveyasikayet]').val();
        var email = $('#contact-form-musteri input[name=email]').val();
        var telefon = $('#contact-form-musteri input[name=telefon]').val();
        var musteriData = 'firmaadi=' + firmaadi + '&yetkilikisiadivegorevi=' + yetkilikisiadivegorevi + '&memnuniyetsikayetkonusu=' + memnuniyetsikayetkonusu + '&telefon=' + telefon + '&memnuniyetveyasikayet=' + memnuniyetveyasikayet + '&email=' + email;
       // console.log(musteriData);
        contactServer(musteriData, 'musteri');
    }

    function contactServer(data, operation) {
        var postData = data + '&operation=' + operation;
        $.ajax({
            type: 'POST',
            data: postData,
            cache: false,
            dataType: "json",
            url: 'system/service.php',
            beforeSend: function() {
                $('.contact-form-inner').addClass('animated500 fadeOut');
                window.setTimeout(function() {
                    $('.contact-form-inner').hide();
                    $(".preload").fadeIn('slow');
                    $(".preload").css("display", "inline-block");
                }, 500);
            },
            success: function(data) {
                if (operation == 'mailgonder') {
                    if (data.jStatus == true) {
                        window.setTimeout(function() {
                            $(".preload").hide();
                            $('.contact-form-answer').fadeIn('slow');
                            visibleOne('#contact-form-email .contact-form-answer .contact-form-send-icon', 'fadeInUp', '0.6', '0.5');
                            visibleOne('#contact-form-email .contact-form-answer h5', 'fadeInUp', '0.6', '0.5');
                            visibleOne('#contact-form-email .contact-form-answer p', 'fadeInUp', '0.8', '0.7');
                        }, 500);
                    } else if (data.jStatus == false) { //console.log('Sorunuz gönderilemedi');
                      }
                } else if (operation == 'bayibasvurusu') {
                    if (data.jStatus == true) {
                        window.setTimeout(function() {
                            $(".preload").hide();
                            $('.contact-form-answer').fadeIn('slow');
                            visibleOne('#contact-form-bayi .contact-form-answer .contact-form-send-icon', 'fadeInUp', '0.6', '0.5');
                            visibleOne('#contact-form-bayi .contact-form-answer h5', 'fadeInUp', '0.6', '0.5');
                            visibleOne('#contact-form-bayi .contact-form-answer p', 'fadeInUp', '0.8', '0.7');
                        }, 500);
                    } else if (data.jStatus == false) { // console.log('Sorunuz gönderilemedi'); 
                    }
                } else if (operation == 'musteri') {
                    if (data.jStatus == true) {
                        window.setTimeout(function() {
                            $(".preload").hide();
                            $('.contact-form-answer').fadeIn('slow');
                            visibleOne('#contact-form-musteri .contact-form-answer .contact-form-send-icon', 'fadeInUp', '0.6', '0.5');
                            visibleOne('#contact-form-musteri .contact-form-answer h5', 'fadeInUp', '0.6', '0.5');
                            visibleOne('#contact-form-musteri .contact-form-answer p', 'fadeInUp', '0.8', '0.7');
                        }, 500);
                    } else if (data.jStatus == false) { 
                     // console.log('Sorunuz gönderilemedi'); 
                      }
                }
            },
            error: function(data) { // console.log(data.responseText); 
            }
        });
    }

    function visibleOne(argument, effectType, speed, myDelay) { $(argument).attr('style', "-webkit-animation: " + effectType + " " + speed + "s " + myDelay + "s normal both; -ms-animation: " + effectType + " " + speed + "s; -o-animation: " + effectType + " " + speed + "s; animation: " + effectType + " " + speed + "s;"); }

    function accordion(w) {
        $(w + " h3").toggleClass("inactive-header");
        $(w + " h3").first().toggleClass("active-header").toggleClass("inactive-header");
        $(w + " .accordion-content").first().slideDown().toggleClass("open-content");
        $(w + " h3").click(function() {
            if ($(this).is(".inactive-header")) {
                $(w + " .active-header").toggleClass("active-header").toggleClass("inactive-header").next().slideToggle().toggleClass("open-content");
                $(this).toggleClass("active-header").toggleClass("inactive-header");
                $(this).next().slideToggle().toggleClass("open-content");
            } else {
                $(this).toggleClass("active-header").toggleClass("inactive-header");
                $(this).next().slideToggle().toggleClass("open-content");
            }
        })
    }
    $('.referanslar-slider').slick({ dots: true, dotsClass: 'referanslar-dots', infinite: false, speed: 500, fade: true, cssEase: 'linear', slidesToShow: 1, slidesToScroll: 1, responsive: [{ breakpoint: 1024, settings: { slidesToShow: 1, slidesToScroll: 1, infinite: true } }, { breakpoint: 600, settings: { slidesToShow: 1, slidesToScroll: 1 } }, { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } }] });
    if ($("body .social-share").length) {
        var myTitle = $(document).attr('title');
        var myUrl = window.location.href;
        var shareGroup = '<a class="email" title="Share with E-Mail" href="mailto:bilgi@istanbulteknik.com?subject=' + myTitle + '&body=I suggest reading this page. ' + myUrl + ' "></a><a href="#" class="linkedin" data-social=\'{"type":"linkedin", "url":"' + myUrl + '", "text": "' + myTitle + '"}\' title="Share on Linkedin"></a><a href="#" class="google-plus" data-social=\'{"type":"plusone", "url":"' + myUrl + '", "text": "' + myTitle + '"}\' title="Share on Google+"></a><a href="#" class="twitter" data-social=\'{"type":"twitter", "url":"' + myUrl + '", "text": "' + myTitle + '"}\' title="Share on Twitter" ></a><a href="#" class="facebook" data-social=\'{"type":"facebook", "url":"' + myUrl + '", "text": "' + myTitle + '"}\' title="Share on Facebook"></a>';
        $('.social-share').append(shareGroup);
        $(".social-share a").jqSocialSharer();
    }
    if ($("body .subpage").length) {
        $('.responsive').slick({ dots: false, infinite: true, speed: 300, arrows: false, slidesToShow: 3, slidesToScroll: 3, responsive: [{ breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 2, infinite: true, dots: true } }, { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2, } }, { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1, dots: true } }] });
        $('.product-picture-swipebox').swipebox({ useCSS: true, useSVG: true });
    }
    if ($("body .product-page").length) {
        $('.responsive').slick({ dots: false, infinite: true, speed: 300, arrows: false, slidesToShow: 3, slidesToScroll: 3, responsive: [{ breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 2, infinite: true, dots: true } }, { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 2, } }, { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1, dots: true } }] });
        $('.product-picture-swipebox').swipebox({ useCSS: true, useSVG: true });
    }
});
!(function($) {
    $["fn"]["jqSocialSharer"] = function(options) {
        var settings = $["extend"]({ "popUpWidth": 550, "popUpHeight": 450, "popUpTop": 100, "useCurrentLocation": false }, options);
        return this["each"](function(index, value) {
            $(this)["bind"]("click", function(evt) {
                evt["preventDefault"]();
                var social = $(this)["data"]("social"),
                    width = settings["popUpWidth"],
                    height = settings["popUpHeight"],
                    sHeight = screen["height"],
                    sWidth = screen["width"],
                    left = Math["round"]((sWidth / 2) - (width / 2)),
                    top = settings["popUpTop"],
                    url, useCurrentLoc = settings["useCurrentLocation"],
                    socialURL = (useCurrentLoc) ? window["location"] : encodeURIComponent(social["url"]),
                    socialText = social["text"],
                    socialImage = encodeURIComponent(social["image"]);
                switch (social["type"]) {
                    case "facebook":
                        url = "https://www.facebook.com/sharer/sharer.php?s=100\x26p[url]=" + socialURL + "\x26p[images][0]=" + socialImage + "\x26p[title]=" + socialText + "\x26p[summary]=" + socialText;
                        break;;
                    case "twitter":
                        url = "https://twitter.com/share?url=" + socialURL + "\x26text=" + socialText;
                        break;;
                    case "linkedin":
                        url = "https://www.linkedin.com/shareArticle?mini=true&url=" + socialURL + "&title=" + socialText + "&summary=" + socialText + "&source=" + socialText + "";
                        break;;
                    case "plusone":
                        url = "https://plusone.google.com/_/+1/confirm?hl=en\x26url=" + socialURL;
                        break;;
                    case "pinterest":
                        url = "https://pinterest.com/pin/create/button/?url=" + socialURL + "\x26media=" + socialImage + "\x26description=" + socialText;
                        break;;
                };
                window["open"](url, "", "left=" + left + " , top=" + top + ", width=" + width + ", height=" + height + ", personalbar=0, toolbar=0, scrollbars=1, resizable=1");
            });
        });
    };
}(jQuery));
