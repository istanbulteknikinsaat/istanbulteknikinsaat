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
				$Query=$db->prepare("SELECT * FROM referanslar WHERE ID=?");
				$Query->execute(array($ID));
				$Row = $Query->fetch(PDO::FETCH_ASSOC);
				if($Row)
				{
                    $KategoriPid= $Row['kategori'];
					$ProjeAdi= $Row['projeadi'];
                    $İli= $Row['ili'];
                    $Ürün= $Row['urun'];
                    $Uygulama= $Row['uygulama'];
                    $Miktar= $Row['miktar'];
                    $IsActive= $Row['IsActive'];
                    $lang= $Row['lang'];
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
              <h3 class="box-title">Referans Ekle
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
                                <label class="col-sm-4 control-label">Kategori
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <select id="lang" type="text" name="PID" value="" class="form-control input-sm" onchange="kategorisec(this)">
                                        <?php $sql= $db->prepare("SELECT pid,kategoriAdi FROM urunkategorileri WHERE pid=0");	
                                        $sql->execute();
                                        if($_GET){if($_GET['islem']=="Duzenle") { 
                                            $KategoriPid=$KategoriPid;
                                        }
                                        else{
                                            $KategoriPid="";
                                            }
                                        }
                                        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {                                              
                                            ?>
                                        <option  <?php if($row['kategoriAdi']==$KategoriPid){ echo "selected";
                                            } else {echo "";} ?> value="<?php echo $row['kategoriAdi'] ?>"><?php echo $row['kategoriAdi'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Proje Adı
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" id="ProjeAdi" name="ProjeAdi"
                                           class="form-control input-sm "
                                           value="<?= $ProjeAdi ?>"
                                           placeholder="<?= $ProjeAdi ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">İli
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" id="İli" name="İli"
                                           class="form-control input-sm "
                                           value="<?= $İli ?>"
                                           placeholder="<?= $İli ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Ürün
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Ürün" name="Ürün"
                                           class="form-control input-sm "
                                           value="<?= $Ürün ?>"
                                           placeholder="<?= $Ürün ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Uygulama
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Uygulama" name="Uygulama"
                                           class="form-control input-sm "
                                           value="<?= $Uygulama ?>"
                                           placeholder="<?= $Uygulama ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Miktar
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" id="Miktar" name="Miktar"
                                           class="form-control input-sm "
                                           value="<?= $Miktar ?>"
                                           placeholder="<?= $Miktar ?>">
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
                                                <option  <?php if($row['slug']==$row['slug']){echo "selected";
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
	<script>
     function kategorisec(element) {
   if(element.options[element.selectedIndex].value==" Geosentetikler"){
     $('#ProjeAdi').css('display','block');
     $('#İli').css('display','block');
     $('#Ürün').css('display','block');
     $('#Uygulama').css('display','block');
     $('#Miktar').css('display','block');
   }
   else if(element.options[element.selectedIndex].value==" Yalıtım Ürünleri"){
     $('#ProjeAdi').css('display','block');
     $('#İli').css('display','block');
     $('#Ürün').css('display','block');
     $('#Uygulama').css('display','block');
     $('#Miktar').css('display','block');
   }
   else if(element.options[element.selectedIndex].value==" Yeşil Çatı Sistemleri"){
     $('#ProjeAdi').css('display','block');
     $('#İli').css('display','block');
     $('#Ürün').css('display','block');
     $('#Uygulama').css('display','block');
     $('#Miktar').css('display','block');
   }
   else if(element.options[element.selectedIndex].value==" Asfalt Ürünleri"){
     $('#ProjeAdi').css('display','block');
     $('#İli').css('display','block');
     $('#Ürün').css('display','block');
     $('#Uygulama').css('display','block');
     $('#Miktar').css('display','block');
   }
   else if(element.options[element.selectedIndex].value=="Beton Ürünleri"){
     $('#ProjeAdi').css('display','block');
     $('#İli').css('display','block');
     $('#Ürün').css('display','block');
     $('#Uygulama').css('display','block');
     $('#Miktar').css('display','block');
   }
   else if(element.options[element.selectedIndex].value=="Mermer Ürünleri"){
     $('#ProjeAdi').css('display','block');
     $('#İli').css('display','block');
     $('#Ürün').css('display','block');
     $('#Uygulama').css('display','block');
     $('#Miktar').css('display','block');
   }
   }
 
	var ID;
	<?php if($_GET){	?>
		ID="<?=$ID?>";
	<?php } ?>		
				function Form1Kaydet() {
                    var Form1 = document.getElementById('Form1');
                    if (Form1.ProjeAdi.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Proje Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/ReferansEkle.php",
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
                                            window.location="ReferansListe.php";
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
					if (Form1.ProjeAdi.value == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Türkçe Kategori Adını Boş Bırakmayın..!"
                        });
                        return;
                    }
                    
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/ReferansEkle.php",
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
                                            window.location="ReferansListe.php";
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