<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
    $KategoriPid  = 0;
    $KategoriAdiTR= " ";
    $KategoriAdiEN= " ";
    $KategoriAdiDE= " ";
    $KategoriAdiFR= " ";
    $KategoriAdiSP= " ";
	$Aciklama= " ";
	if($_GET)
	{
		 if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		 {
			if($_GET['islem']=="Duzenle")
			{
				$ID=$_GET['ID'];
				$Query=$db->prepare("SELECT * FROM urunkategorileri WHERE ID=?");
				$Query->execute(array($ID));
				$Row = $Query->fetch(PDO::FETCH_ASSOC);
				if($Row)
				{
                    $KategoriPid= $Row['pid'];
					$KategoriAdiTR= $Row['kategoriAdi'];
					$KategoriAdiEN= $Row['KategoriAdiEN'];
					$KategoriAdiDE= $Row['KategoriAdiDE'];
					$KategoriAdiFR= $Row['KategoriAdiFR'];
					$KategoriAdiSP= $Row['KategoriAdiSP'];
					$IsActive= $Row['IsActive'];
					$Aciklama= $Row["Aciklama"];
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
              <h3 class="box-title">Ürün Kategori
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
                        <div class="col-xs-6">
                        <div class="form-group">
                                <label class="col-sm-4 control-label">PID
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="PID"
                                           class="form-control input-sm "
                                           value="<?= $KategoriPid ?>"
                                           placeholder="<?= $KategoriPid ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Adı TR
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="KategoriAdiTR"
                                           class="form-control input-sm "
                                           value="<?= $KategoriAdiTR ?>"
                                           placeholder="<?= $KategoriAdiTR ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Adı EN
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="KategoriAdiEN"
                                           class="form-control input-sm "
                                           value="<?= $KategoriAdiEN ?>"
                                           placeholder="<?= $KategoriAdiEN ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Adı DE
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="KategoriAdiDE"
                                           class="form-control input-sm "
                                           value="<?= $KategoriAdiDE ?>"
                                           placeholder="<?= $KategoriAdiDE ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Adı FR
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="KategoriAdiFR"
                                           class="form-control input-sm "
                                           value="<?= $KategoriAdiFR ?>"
                                           placeholder="<?= $KategoriAdiFR ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Adı SP
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="KategoriAdiSP"
                                           class="form-control input-sm "
                                           value="<?= $KategoriAdiSP ?>"
                                           placeholder="<?= $KategoriAdiSP ?>">
                                </div>
                            </div>
                        </div>
						<div class="col-xs-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Açıklaması
                                    </label>
                                <div class="col-sm-7">
                                    <textarea type="text" name="Aciklama"
                                           class="form-control input-sm "
                                           rows="3" cols="80"><?= $Aciklama ?></textarea>
                                </div>
                            </div>
                            <div class="form-group" >
									<label class="col-sm-4 control-label">Durumu</label>
									<div class="col-sm-8">
										<select id="IsActive" type="text"
											name="IsActive" class="form-control input-sm">
											<option <?php if($IsActive==0){echo "selected";} else{echo "";} ?> value="0">Pasif</option>
                                            <option <?php if($IsActive==1){echo "selected";} else{echo "";} ?> value="1">Aktif</option>
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
          <div id="showSubCatInfo" style="border: 1px solid #000" class="col-sm-3  pull-left">
                
                </div>

                <div id="showCatInfo" style="border: 1px solid #000" class="col-sm-3  pull-right">
                
                </div>
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
    window.onload = function() {
    document.getElementById("showCatInfo").innerHTML = anakat();      
    document.getElementById("showSubCatInfo").innerHTML = altkat();     
  }
  function anakat(){
    $("#showCatInfo").empty();
		  $("#showCatInfo").load("ajax/Kayit/UrunKatEkleKategoriBilgisi.php", function (cevap,durum) {
			  if(durum =="success")
				{
                    $("#showCatInfo").empty();
                    cevap=jQuery.parseJSON(cevap);
                    $("#showCatInfo").append(cevap.baslik,cevap.ok);
				}  
          });
  }
  function altkat(){
    $("#showSubCatInfo").empty();
		  $("#showSubCatInfo").load("ajax/Kayit/UrunKatEkleAltKategoriBilgisi.php", function (cevap,durum) {
			  if(durum =="success")
				{
                    $("#showSubCatInfo").empty();
                    cevap=jQuery.parseJSON(cevap);
                    $("#showSubCatInfo").append(cevap.baslik,cevap.ok);
				}  
          });
  }
	var ID;
	<?php if($_GET){	?>
		ID="<?=$ID?>";
	<?php } ?>		
		
				function Form1Kaydet() {
                    var Form1 = document.getElementById('Form1');
                    if (Form1.KategoriAdiTR.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Türkçe Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiEN.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen İngilizce Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiDE.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Almanca Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiFR.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Fransızca Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiSP.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen İspanyolca Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/UrunKatEkle.php",
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
                                            window.location="UrunKatListe.php";
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
					if (Form1.KategoriAdiTR.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Türkçe Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiEN.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen İngilizce Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiDE.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Almanca Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiFR.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Fransızca Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    if (Form1.KategoriAdiSP.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen İspanyolca Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/UrunKatEkle.php",
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
                                            window.location="UrunKatListe.php";
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