<style>

.contact-box3 {
    padding: 35px 50px 45px 50px;
    background-color: #f7f7f7;
    position: relative;
    border-radius: 4px;
  }
  @media only screen and (max-width: 575px) {
    .contact-box3 {
      padding: 20px 30px 30px 30px;
    }
  }
  .contact-box3 .contact-bg-image {
    position: absolute;
    bottom: 0;
    right: 0;
  }
  .contact-box3 .item-heading .item-title {
    font-size: 20px;
    font-weight: 700;
    color: #000;
    margin-bottom: 0px;
  }
  @media only screen and (max-width: 575px) {
    .contact-box3 .item-heading .item-title {
      font-size: 24px;
    }
  }
  .contact-box3 p {
    color: #646464;
    margin-bottom: 25px;
    width: 76%;
  }
  @media only screen and (max-width: 479px) {
    .contact-box3 p {
      width: 100%;
    }
  }
  .contact-box3 .message-box .form-group {
    margin-bottom: 10px;
  }
  .contact-box3 .message-box .form-group .form-control {
    color: #111;
    font-size: 14px;
    border: 1px solid #dcdcdc;
  }
  .contact-box3 .message-box .form-group .form-control:focus {
    box-shadow: none;
    border-color: #dcdcdc;
  }
  .contact-box3 .message-box .form-group input {
    height: 50px;
  }
  .contact-box3 .message-box .form-group .item-btn {
    margin-top: 10px;
    display: inline-block;
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    background: #fa360a;
    padding: 13px 40px;
    border: none;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
  }
  @media only screen and (max-width: 320px) {
    .contact-box3 .message-box .form-group .item-btn {
      padding: 13px 30px;
    }
  }
  .contact-box3 .message-box .form-group .item-btn:hover {
    color: #fa360a;
    background-color: #fff;
    box-shadow: 0px 6px 27px 0px rgba(0, 0, 0, 0.1);
  }
</style>
 <div class="modal fade istanbulteknikform" id="bize-ulasin-pop-up" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color:#f7f7f7;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body" style="background-color:#f7f7f7;">
      <div class="col-lg-12">
            <div class="contact-box3">
                <div class="item-heading">
                    <h2 class="item-title">Bize Yaz??n</h2>
                    <p></p>
                </div>
                <form class="message-box" id="contact-form">
                    <div class="row gutters-10">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="bname" id="bname" placeholder="Ad??n??z Soyad??n??z*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="bfirma" id="bfirma" placeholder="Firma Ad??*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="bgorev" id="bgorev" placeholder="G??rev*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="bemail" id="bemail" placeholder="Email*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="btelefon"  id="btelefon" placeholder="Telefon*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <textarea name="mesaj" id="bmesaj" class="form-control" placeholder="Mesaj" cols="30" rows="6" data-error="Bu alan Zorunludur" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <a id="gonder-mail" class="item-btn">G??nder</a>
                        </div>
                    </div>
                    <div class="form-response"></div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- <div class="modal fade" id="bize-ulasin-pop-up22" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Bize Yaz??n
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
            <div class="form-group">
              <label for="bname">Ad??n??z Soyad??n??z *</label>
              <input type="text" class="form-control" id="bname" placeholder="Ad??n??z Soyad??n??z">
            </div>
            <div class="form-group">
              <label for="bfirma">Firma Ad??</label>
              <input type="text" class="form-control" id="bfirma" placeholder="Firma Ad??">
            </div>
            <div class="form-group">
              <label for="bgorev">G??reviniz</label>
              <input type="text" class="form-control" id="bgorev" placeholder="G??reviniz">
            </div>
            <div class="form-group">
              <label for="btelefon">Telefon</label>
              <input type="tel" class="form-control" id="btelefon" placeholder="Telefon">
            </div>
            <div class="form-group">
              <label for="bemail">Email *</label>
              <input type="email" class="form-control" id="bemail" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="bmesaj">Mesaj??n??z *</label>
              <textarea class="form-control" id="bmesaj" rows="3"></textarea>
            </div>
            <div class="form-group">
              <input type="checkbox" id="kvkkkonaybizeyaz??n" name="kvkkkonaybizeyaz??n" value="Onaylad??m">
              <span class="kayitolmetin"> <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalkvkkmetni">KVKK metnini</a> okudum onayl??yorum.</span><br>
            </div>
            <div class="mt-3 mb-5">
            <button id="bizeulas??ngonderbtn" class="btn btn-primary">
              G??nder
            </button>
          </div>
      </div>
    </div>
  </div>
</div> -->
  <footer class="footer_style_2" >
    <div class="container-fuild">
      <div class="row">
        <div class="footer_blog container">
          <div class="row">
              <div class="col-md-3 footercozumler">
                <div class="main-heading left_text">
                  <h2>Uygulamalar</h2>
                </div>
                  <ul class="footer-menu">
                    <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=uygulamalar"><i class="fa fa-angle-right"></i> Geosentetikler</a></li>
                    <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=uygulamalar"><i class="fa fa-angle-right"></i> Ye??il ??at?? Sistemleri</a></li>
                    <li><a href="/tr/cozumler.php?id=6&name=beton&iliski=uygulamalar"><i class="fa fa-angle-right"></i> Beton Uygulamalar??</a></li>
                    <li><a href="/tr/cozumler.php?id=7&name=mermer&iliski=uygulamalar"><i class="fa fa-angle-right"></i> Mermer Uygulamalar??</a></li>
                    <li><a href="/tr/cozumler.php?id=3&name=yalitim&iliski=uygulamalar"><i class="fa fa-angle-right"></i> Yal??t??m Uygulamalar??</a></li>
                    <li><a href="/tr/cozumler.php?id=5&name=asfalt&iliski=uygulamalar"><i class="fa fa-angle-right"></i> Asfalt Uygulamalar??</a></li>
                  </ul>
              </div>
           
            <div class="col-md-3">
              <div class="main-heading left_text">
                <h2>??r??nler</h2>
              </div>
              <ul class="footer-menu">
                <li><a href="/tr/cozumler.php?id=2&name=geosentetik&iliski=urunler"><i class="fa fa-angle-right"></i> Geosentetikler</a></li>
                <li><a href="/tr/cozumler.php?id=3&name=yalitim&iliski=urunler"><i class="fa fa-angle-right"></i> Yal??t??m ??r??nleri</a></li>
                <li><a href="/tr/cozumler.php?id=4&name=yesilcati&iliski=urunler"><i class="fa fa-angle-right"></i> Ye??il ??at?? Sistemleri</a></li>
                <li><a href="/tr/cozumler.php?id=5&name=asfalt&iliski=urunler"><i class="fa fa-angle-right"></i> Asfalt ??r??nleri</a></li>
                <li><a href="/tr/cozumler.php?id=6&name=beton&iliski=urunler"><i class="fa fa-angle-right"></i> Beton ??r??nleri</a></li>
                <li><a href="/tr/cozumler.php?id=7&name=mermer&iliski=urunler"><i class="fa fa-angle-right"></i> Mermer ??r??nleri</a></li>
              </ul>
            </div>
            
            <div class="modal fade" id="modalkvkkmetni" tabindex="-1" role="dialog"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">T??CAR?? ELEKTRON??K ??LET??LERE ??L????K??N A??IK RIZA METN??</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mx-3">
                                ??stanbul Teknik taraf??ndan yeni ??r??nlerden, hizmetlerden, geli??melerden, promosyonlardan haberdar olmam ve bilgi notlar??, newsletter, fiyat listeleri gibi i??erikleri almam amac??yla E-Posta kanal?? ile taraf??ma ticari elektronik ileti g??nderilmesine izin veriyorum.
                              </div>
                            </div>
                        </div>
                    </div>
             <div class="col-md-3 footerebulten">
                      <div class="newsletters ">
                          <div class="main-heading left_text">
                            <h2>E-B??lten</h2>
                          </div>
                            <p>En son geli??melerden ve g??ncellemelerden haberdar olmak i??in kaydolun.</p>
                        </div>
                        <div class="bloq-email mailchimp form-inline">
                            <div class="email">
                            <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="ebultenname" name="name" placeholder="Ad Soyad">
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="ebultenemail" name="email" placeholder="Email">
                            </div>
                            </div>
                                <div class="row kayitbuttonmetin" >
                                <div class="col-md-9">
                                  <input type="checkbox" id="kvkkkonay" name="kvkkkonay" value="Onaylad??m">
                                 <span class="kayitolmetin"> <a style="cursor:pointer; text-decoration:underline !important" class="" data-toggle="modal" data-target="#modalkvkkmetni">KVKK metnini</a> okudum onayl??yorum.</span><br>
                                </div>
                                <div class="col-md-3">
                                  <input class="button_custom" type="submit" value="Kay??t Ol" onclick="ebultenkayit()">
                                </div>
                                </div>
                                <p class="subscription-success"></p>
                            </div>
                    </div>
                    </div>
                    <div class="col-md-3  footer-maps">
              <div class="main-heading left_text">
                <h2>??leti??im</h2>
              </div>
              <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>Tekstilkent Koza Plaza
                B Blok K. 30<br>
                Esenler, ??stanbul<br>
                <i class="fa fa-phone" aria-hidden="true"></i> <span style="font-size:18px;"><a href="tel:+902124381808">+90 212 438 18 08</a></span><br>
                <i class="fab fa-whatsapp" style="color:#039ee3; margin-right:8px; font-size:17px; font-weight:bold;" aria-hidden="true"></i> <span style="font-size:18px;"><a href="https://wa.me/905305229896">+90 530 522 98 96</a></span><br>
                <i class="fa fa-envelope" aria-hidden="true"></i>bilgi@istanbulteknik.com</p>
                <div class="widget widget_socials" style="margin-top: 20px;">
                    <div class="socials">
                        <a target="_blank" href="https://www.facebook.com/istanbulteknikinsaat"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/IstTeknik"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/istanbulteknikinsaat/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/istanbul-teknik-in%C5%9Faat/?originalSubdomain=tr"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                    </div>
                  </div>
          </div>
        </div>
        <div class="cprt3">
          <img style="padding-right: 50px; height:50px;" src="/images/logos/IGS.png">
          <!-- <img style="padding-right: 50px; width: 200px;" src="/images/logos/Kiwa.png">
          <img style="padding-right: 50px; height:50px;" src="/images/logos/IVG.png"> -->
        </div>
        <div class="cprt2">
          <p><a href="/pdf/bilgitoplumuhizmetleri.pdf" target="_blank">Bilgi Toplumu Hizmetleri</a> | <a href="/tr/yasal-uyari-metni.php" target="_blank">Yasal Uyar??</a></p>
        </div>
        <div class="cprt">
          <p>??stanbul Teknik 2021 ?? T??m Haklar?? Sakl??d??r</p>
        </div>
        <div class="bize-yazin-pop-up" data-toggle="modal" data-target="#bize-ulasin-pop-up">
          <i style="color:white; margin-right: 0px;" class="fa fa-envelope"></i>
        <span>
	    	  Bize Yaz??n
				</span>
          </div>
        <div class="cookie-info" style="height: 102px; width: 340px; opacity: 0.8; border-radius: 4px; background-color: rgb(0, 0, 0); z-index: 9999; position: fixed; left: 20px; bottom: 18px;"><img id="cookieclose" src="/images/cookieclose.png" style="position: absolute; top: 0px; right: 0px; padding: 8px; cursor: pointer;"><div class="text" style="font-family: Helvetica; font-size: 12px; line-height: 1.25; text-align: left; color: rgb(255, 255, 255); padding-top: 24px; padding-left: 16px; padding-right: 24px; margin-bottom: 8px;"><span> Size daha iyi hizmet verebilmek i??in yasal d??zenlemelere uygun ??erezler (cookies) kullan??yoruz. Detayl?? bilgiye </span><a class="link" href="/" target="_blank" rel="nofollow" style="font-family: Helvetica; font-size: 11px; font-weight: bold; text-align: left; color: rgb(255, 255, 255); text-decoration: underline;">??erez Politikas?? ve </a><a class="link" href="/" target="_blank" rel="nofollow" style="font-family: Helvetica; font-size: 11px; font-weight: bold; text-align: left; color: rgb(255, 255, 255); text-decoration: underline;">KVKK</a><span> sayfam??zdan eri??ebilirsiniz.</span></div></div>
      </div>    
  </footer>
<script>

   function ebultenkayit() {
     if($('#kvkkkonay').is(':checked')){
      var name=$("#ebultenname").val();
      var email=$("#ebultenemail").val();
      var kvkkonay=$("#kvkkkonay").val();
        $.ajax({
          url: "/tr/ajax/Kayit/MailToplama.php",
          type: "post",
          data: {
            name:name,
            email:email,
            kvkkonay:kvkkonay,
          },
          success: function (response) {
            cevap = JSON.parse(response);
            console.log(cevap);
            $("#modalkvkkmetni .close").click();
            Swal.fire("Ba??ar??l??", "E-B??ltenimize kay??t i??leminiz ba??ar??l?? bir ??ekilde ger??ekle??mi??tir.", "success");
            $("#ebultenname").val('');
            $("#ebultenemail").val('');
            $("#kvkkkonay").val('');
            //alert("En k??sa zamanda sizinle ileti??ime ge??ilecektir.");
          },
          error: function (xhr) {
            Swal.fire("Ba??ar??s??z", "L??tfen tekrar deneyiniz.", "error");
          }
        });
      }
      else{
        Swal.fire("Ba??ar??s??z", "L??tfen KVKK Metnini onaylay??n??z.", "error");
      }
    }

		$('#bizeulas??ngonderbtn').click(function(e) {
			e.preventDefault();			
				if ($('#bname').val().length < 2) {
					Swal.fire("Ba??ar??s??z", "L??tfen Ad??n??z?? Giriniz", "error");
				}
        else if ($('#bemail').val().length < 2) {
					Swal.fire("Ba??ar??s??z", "L??tfen Mail Adresinizi Giriniz", "error");
				}
        
         else {
          if($('#kvkkkonaybizeyaz??n').is(':checked')){
         
					iletisimformugonderiliyor = true;
					$.ajax({
						url : '/system/bizeyazin.php',
						type : 'POST',
						data : {
							bname : $('#bname').val(),							
							bemail : $('#bemail').val(),							
							bmesaj : $('#bmesaj').val(),
              bfirma : $('#bfirma').val(),
              bgorev : $('#bgorev').val(),
              btelefon : $('#btelefon').val(),
						},
						success : function(msg) {
							iletisimformugonderiliyor = false;
							if (msg == 'Mesaj??n??z ba??ar??yla teslim edildi') {
                $("#bize-ulasin-pop-up .close").click();								
								$('#bname').val('');
								$('#bemail').val('');
								$('#bmesaj').val('');
                $('#bfirma').val('');
                $('#bgorev').val('');
                $('#btelefon').val('');

                Swal.fire("Form Ba??ar??yla ??letildi", "Doldurmu?? oldu??unuz form taraf??m??za ula??m????t??r.En k??sa s??rde sizinle irtibat kurulacakt??r. ", "success");

							} else {
                Swal.fire("Ba??ar??s??z", "L??tfen Tekrar Deneyiniz", "error");
							}
						}
					});
					//ajax kapand??
				}
        else{ Swal.fire("Ba??ar??s??z", "L??tfen KVKK Metnini Onaylay??n??z", "error");}
      }
      
		});   	
  //cookiesesioncontrol=0;

  $("#cookieclose").click(function(){
    var $this = $(this);
      cookiesesion ='<?php $_SESSION['closeclick']=1; setcookie("closeclick", $_SESSION['closeclick'],time()+3000); ?>';
      sessioncookie ='<?php $ipadress=$_SERVER['REMOTE_ADDR']; $_SESSION['ipadres']=$ipadress; setcookie("cookies", $_SESSION['ipadres'],time()+3600);?>';
    $(".cookie-info").hide();
  });
    
<?php if(isset($_COOKIE["closeclick"])){$cookiesesioncontrol=$_COOKIE["closeclick"];}else{$cookiesesioncontrol=0;} ?>
<?php if(isset($_COOKIE["cookies"])){$cookieipcontrol=$_COOKIE["cookies"];}else{$cookieipcontrol=0;} ?>
    
    var cookiesesioncontrol = '<?php echo $cookiesesioncontrol; ?>';
    var sessionip = '<?php echo $ipadress; ?>';
    var sessioncookie = '<?php echo $cookieipcontrol; ?>';
    /* console.log(cookiesesioncontrol+'-'+sessionip+'-'+sessioncookie); */
    if(cookiesesioncontrol == 1 && sessionip==sessioncookie){
      $(".cookie-info").hide();
    }else{
      $(".cookie-info").show();
    }
    //$(".cookie-info").show();
<?php ob_end_flush();?>
</script>
<script src="/js/cookie.js"></script>
<script src="/tr/js/sweetalert2.all.min.js"></script>
<script src="/js/jquery.min.js"></script>
<!-- <script src="../../js/hizoom.js"></script> -->
<script src="/js/bootstrap.min.js"></script>
<script src="/tr/js/jquery.ztree.core.js"></script>
<!-- menu js -->
<script src="/js/menumaker.js"></script>
<!-- wow animation -->
<script src="/js/wow.js"></script>
<!-- custom js -->
<script src="/tr/js/custom.js"></script>


