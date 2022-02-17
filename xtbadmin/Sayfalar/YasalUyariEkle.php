<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
    $SayfaAdi  = " ";
    $SayfaBaslik  = " ";
    $SayfaAciklama= " ";
    $lang= " ";	
    $IsActive= " ";	
	if($_GET)
	{
		 if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		 {
			if($_GET['islem']=="Duzenle")
			{
				$ID=$_GET['ID'];
				$Query=$db->prepare("SELECT * FROM pageyasaluyari WHERE ID=?");
				$Query->execute(array($ID));
				$Row = $Query->fetch(PDO::FETCH_ASSOC);
				if($Row)
				{
                    $SayfaAdi= $Row['SayfaAdi'];
					$SayfaBaslik= $Row['SayfaBaslik'];
                    $SayfaAciklama= $Row['SayfaAciklama'];
                    $lang= $Row['lang'];
                    $IsActive = $Row['IsActive'];
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
              <h3 class="box-title">Yasal Uyarı
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
                                <label class="col-sm-4 control-label">Sayfa Adı
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="SayfaAdi"
                                           class="form-control input-sm "
                                           value="<?= $SayfaAdi ?>"
                                           placeholder="<?= $SayfaAdi ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Sayfa Başlık
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="SayfaBaslik"
                                           class="form-control input-sm "
                                           value="<?= $SayfaBaslik ?>"
                                           placeholder="<?= $SayfaBaslik ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Sayfa Açıklama</label>
                                <div class="col-sm-8">
                                    <textarea class="ckeditor" id="SayfaAciklama"
                                        name="SayfaAciklama"><?= $SayfaAciklama ?></textarea>
                                </div>
                            </div>
                        </div>
						<div class="col-xs-6">
                            <div class="form-group" >
									<label class="col-sm-4 control-label">Durumu
                                    <span class="text-red"> *</span></label>
									<div class="col-sm-8">
										<select id="IsActive" type="text"
											name="IsActive" class="form-control input-sm">
											<option <?php if($IsActive==0){echo "selected";} else{echo "";} ?> value="0">Pasif</option>
                                            <option <?php if($IsActive==1){echo "selected";} else{echo "";} ?> value="1">Aktif</option>
										</select>
									</div>
								</div>
                                <div class="form-group">
                                        <label class="col-sm-4 control-label">Dil
                                        <span class="text-red"> *</span></label>
                                        <div class="col-sm-8">
                                            <select id="lang" type="text" name="lang" value="" class="form-control input-sm">
                                                <?php $sql= $db->prepare("SELECT lname,slug FROM languages WHERE is_active=1");	
                                                $sql->execute();
                                               if($_GET){if($_GET['islem']=="Duzenle") { 
                                                $lang=$lang;
                                               }
                                               else{
                                                $lang="";
                                               }
                                            }
                                                while($row=$sql->fetch(PDO::FETCH_ASSOC)) {                                              
                                                    ?>
                                                <option  <?php if($row['slug']==$lang){echo "selected";
                                                    }else{echo "";} ?> value="<?php echo $row['slug'] ?>"><?php echo $row['lname'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
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
        <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

	<script>
 
 
	var ID;
	<?php if($_GET){	?>
		ID="<?=$ID?>";
	<?php } ?>		

    CKEDITOR.replace('SayfaAciklama');

				function Form1Kaydet() {
                    var Form1 = document.getElementById('Form1');
                    if (Form1.SayfaBaslik.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Başlık Bölümünü Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.SayfaAciklama.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Açıklama Bölümünü Boş Bırakmayın..!"
                        });
                        return;
                    }
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/YasalUyariEkle.php",
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
                                            window.location="YasalUyariListe.php";
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
					if (Form1.SayfaBaslik.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Başlık Bölümünü Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.SayfaAciklama.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Açıklama Bölümünü Boş Bırakmayın..!"
                        });
                        return;
                    }
                    
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/YasalUyariEkle.php",
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
                                            window.location="YasalUyariListe.php";
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
                
    $("#Duzenle").click(function () {
        for (var SayfaAciklamaCK in CKEDITOR.instances)
		        CKEDITOR.instances[SayfaAciklamaCK].updateElement();
        Form1Guncelle();
    });

    $("#Kaydet").click(function () {
        for (var SayfaAciklamaCK in CKEDITOR.instances)
		        CKEDITOR.instances[SayfaAciklamaCK].updateElement();
        Form1Kaydet();
    });

		
	</script>
</body>
</html>
<?php } ?>