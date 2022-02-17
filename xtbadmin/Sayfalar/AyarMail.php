<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
    ?>
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Mail Ayarları
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn bg-green btn-sm" data-widget="collapse" data-toggle="tooltip" title="Gizle">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn bg-green btn-sm" data-widget="remove" data-toggle="tooltip" title="Kaldır">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <form action="#" method="post" id="Form1" class="form-horizontal">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mail Sunucusu</label>
                                <div class="col-sm-9">
                                    <input type="text" name="SmtpHost"
                                           class="form-control input-sm "
                                           value="<?= $SmtpHost ?>"
                                           placeholder="mail.topalhafriyat.net">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-2 control-label">Mail Adresi</label>
                                <div class="col-sm-9">
                                    <input id="SmtpUser" type="text"
                                           name="SmtpUser"
                                           class="form-control input-sm "
                                           value="<?= $SmtpUser ?>"
                                           placeholder="bilgi@topalhafriyat.net">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-2 control-label">Mail Şifresi</label>
                                <div class="col-sm-9">
                                    <input id="SmtpPassword" type="password"
                                           name="SmtpPassword"
                                           class="form-control input-sm "
                                           value="<?= $SmtpPassword ?>"
                                           placeholder="123456">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-2 control-label">Mail Port</label>
                                <div class="col-sm-9">
                                    <input id="SmtpPort" type="text"
                                           name="SmtpPort"
                                           class="form-control input-sm "
                                           value="<?= $SmtpPort ?>"
                                           placeholder="587">
                                </div>
                            </div>
                        
                        </div>
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<div class="form-group ">
								<div class="col-sm-3 margin"></div>
										<div class="col-sm-3 margin">
											<button type="reset" class="btn btn-block btn-sm  btn-default">Temizle</button>
										</div>
										<div class="col-sm-3 margin">
											<span id="Kaydet" class="btn btn-block btn-sm btn-info">Kaydet</span><br />
										</div>
							</div>
						</div>
                    </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
<?php   require_once 'SayfaAlt.php'; 
		require_once 'SagMenu.php'; 
		require_once 'SayfaJs.php'; ?>
	<script>
		
		
				function Form1Kaydet() {
                    var Form1 = document.getElementById('Form1');
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/AyarMail.php",
                            type: "POST",
                            dataType: "JSON",
                            data: FormPost+"&islem=Kayit",
                            success: function (cevap) {
                                var hatavar = cevap.hata;
                                var hatayok = cevap.ok;
                                if (hatavar) {
                                    BootstrapDialog.show({
                                        type: BootstrapDialog.TYPE_DANGER,
                                        title: "Sonuç",
                                        message: hatavar
                                    });
                                } else {
                                    BootstrapDialog.show({
                                        title: "Sonuç",
                                        message: hatayok,
                                        onhidden: function (dialogRef) {
                                            window.location="Anasayfa.php";
                                        }
                                    });
                                }
                            },
                            error: function (cevap) {
                                BootstrapDialog.show({
                                    type: BootstrapDialog.TYPE_DANGER,
                                    title: "Hata",
                                    message: "Kayıt sırasında hata oluştu..!"
                                });
                                console.log(cevap);
                            }
                        });
                }
		$("#Kaydet").click(function(){
			
			Form1Kaydet();
		});		
	</script>
</body>
</html>
<?php } ?>