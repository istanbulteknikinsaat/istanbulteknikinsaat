<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
    $KategoriPid  = 0;
    $ProjeAdi= " ";
    $İli= " ";
    $Ürün= " ";
    $Uygulama= " ";
    $Miktar= " ";
	
	if($_GET)
	{
		 if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		 {
			if($_GET['islem']=="Duzenle")
			{
				$ID=$_GET['ID'];
				$Query=$db->prepare("SELECT * FROM urunpdf WHERE ID=?");
				$Query->execute(array($ID));
				$Row = $Query->fetch(PDO::FETCH_ASSOC);
				if($Row)
				{
                    $kullaniciAdi= $Row['kullaniciAdi'];
					$eposta= $Row['eposta'];
                    $telefon= $Row['telefon'];
                    $urunadi= $Row['urunadi'];
                    $ulkedurumu= $Row['ulkedurumu'];
                    $sehir= $Row['sehir'];
                    $firmaAdi= $Row['firmaAdi'];
                    $gorev= $Row['gorev'];
                    $aksiyon= $Row['aksiyon'];
                    $create_date= $Row['create_date'];

				}
			}
		}
	}
    ?>
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Talep Düzenle
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
                <form action="#" method="POST" id="Form1" class="form-horizontal">
                    <div class="row">
                        <div class="col-xs-6">
                        <div class="form-group">
                                <label class="col-sm-4 control-label">Adı Soyadı
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="kullaniciAdi"
                                           class="form-control input-sm "
                                           value="<?= $kullaniciAdi ?>"
                                           placeholder="<?= $kullaniciAdi ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">E-Posta
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="eposta"
                                           class="form-control input-sm "
                                           value="<?= $eposta ?>"
                                           placeholder="<?= $eposta ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Telefon
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="telefon"
                                           class="form-control input-sm "
                                           value="<?= $telefon ?>"
                                           placeholder="<?= $telefon ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Ürün Adı
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="urunadi"
                                           class="form-control input-sm "
                                           value="<?= $urunadi ?>"
                                           placeholder="<?= $urunadi ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Yurtiçi / Yurtdışı
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="ulkedurumu"
                                           class="form-control input-sm "
                                           value="<?= $ulkedurumu ?>"
                                           placeholder="<?= $ulkedurumu ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Şehir
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="sehir"
                                           class="form-control input-sm "
                                           value="<?= $sehir ?>"
                                           placeholder="<?= $sehir ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Firma Adı
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="firmaAdi"
                                           class="form-control input-sm "
                                           value="<?= $firmaAdi ?>"
                                           placeholder="<?= $firmaAdi ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Görevi
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="gorev"
                                           class="form-control input-sm "
                                           value="<?= $gorev ?>"
                                           placeholder="<?= $gorev ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Talep Türü 
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="aksiyon"
                                           class="form-control input-sm "
                                           value="<?= $aksiyon ?>"
                                           placeholder="<?= $aksiyon ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Tarih
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="create_date"
                                           class="form-control input-sm "
                                           value="<?= $create_date ?>"
                                           placeholder="<?= $create_date ?>">
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
									<?php if($_GET){if($_GET['islem']=="Duzenle") { ?>
										<div class="col-sm-3 margin">
											<span id="Duzenle" class="btn btn-block btn-sm bg-info">Düzenle</span>
										</div>
									<?php }  } else { ?>
										<div class="col-sm-3 margin">
											<span id="Kaydet" class="btn btn-block btn-sm btn-info">Kaydet</span><br />
										</div>
									<?php  } ?>
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
 
 
	var ID;
	<?php if($_GET){	?>
		ID="<?=$ID?>";
	<?php } ?>		
		
				function Form1Kaydet() {
                    var Form1 = document.getElementById('Form1');
                    if (Form1.kullaniciAdi.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Adı Soyadını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/TalepEkle.php",
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
                                            window.location="TalepListe.php";
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
				function Form1Guncelle() {
                    var Form1 = document.getElementById('Form1');
					if (Form1.kullaniciAdi.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Adı Soyadını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/TalepEkle.php",
                            type: "POST",
                            dataType: "JSON",
                            data: FormPost+"&islem=Duzenle&&ID="+ID,
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
                                            window.location="TalepListe.php";
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

		$("#Duzenle").click(function(){
			Form1Guncelle();
		});				
	</script>
</body>
</html>
<?php } ?>