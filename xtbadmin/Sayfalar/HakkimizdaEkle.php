<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
	$QueryKat=$db->query("SELECT * FROM kurumsal_yazilar");
	$ID="";
	$YaziIcerik= " ";
	$YaziDil= " ";
    $YaziSiralama= " ";
	if($_GET)
	{
		 if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		 {
			if($_GET['islem']=="Duzenle")
			{
				$ID=$_GET['ID'];
				$Query=$db->prepare("SELECT icerik,dil,siralama FROM kurumsal_yazilar WHERE id=?");
				$Query->execute(array($ID));
				$Row = $Query->fetch(PDO::FETCH_ASSOC);
				if($Row)
				{
					$YaziID= $Row["id"];
					$YaziIcerik= $Row["icerik"];
					$YaziDil= $Row["dil"];
					$YaziSiralama= $Row["siralama"];
				}
			}
		}
	}
    ?>
<link rel="stylesheet" href="dist/css/custom.css">
<link rel="stylesheet" href="plugins/filesupload/css/jquery.fileupload.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Kurumsal Yazi Ekle
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn bg-green btn-sm" data-widget="collapse"
                                data-toggle="tooltip" title="Gizle">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn bg-green btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Kaldır">
                                <i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <form action="#" method="post" id="FormHakkimizdaEkle" class="form-horizontal">
                            <div class="row">
                                <div class="col-xs-12">
                                <h3 class="control-label content-title">İçerik</h3>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="ckeditor" id="Hakkinda" name="HakkindaIcerik"><?= $YaziIcerik ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Dil</label>
                                            <div class="col-sm-8">
                                            <select id="KurumsalYaziDil" type="text" name="KurumsalDil" value="" class="form-control input-sm">
                                                    <?php $sql= $db->prepare("SELECT lname,slug FROM languages WHERE is_active=1");	
                                                    $sql->execute();
                                                    while($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <option value="<?php echo $row['slug'] ?>"><?php echo $row['lname'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Sıralama</label>
                                            <div class="col-sm-8">
                                                <select id="KurumsalYaziSira" type="text" name="KurumsalSira"
                                                    value="" class="form-control input-sm">
                                                    <option value="7">Hakkımızda</option>
                                                    <option value="1">Kalite Politikamız</option>
                                                    <option value="2">Vizyonumuz & Misyonumuz</option>
                                                    <option value="3">İlkelerimiz</option>
                                                    <option value="4">Tarihçemiz</option>
                                                    <option value="5">İstanbul Teknikliler</option>
                                                    <option value="6">Arge</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-md-12"></div>
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <div class="col-sm-3 margin"></div>
                                                <div class="col-sm-3 margin">
                                                    <button type="reset"
                                                        class="btn btn-block btn-sm  btn-default">Temizle</button>
                                                </div>
                                                <?php if($_GET){if($_GET['islem']=="Duzenle") { ?>
                                                <div class="col-sm-3 margin">
                                                    <span id="Duzenle"
                                                        class="btn btn-block btn-sm btn-info">Düzenle</span>
                                                </div>
                                                <?php }  } else { ?>
                                                <div class="col-sm-3 margin">
                                                    <span id="Kaydet"
                                                        class="btn btn-block btn-sm btn-info">Kaydet</span><br />
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
    CKEDITOR.replace('Hakkinda');
    function Form1Kaydet() {
        var Form1 = document.getElementById('FormHakkimizdaEkle');
        if (Form1.Hakkinda.value == "") {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: "Uyarı",
                message: "Lütfen İçeriği Boş Bırakmayın..!"

            });
            return;
        } 
        var FormPost = $("#FormHakkimizdaEkle").serialize();
        $.ajax({
            url: "ajax/Kayit/HakkimizdaEkle.php",
            type: "POST",
            dataType: "JSON",
            data: FormPost + "&islem=Kayit",
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
                            window.location = "HakkimizdaListe.php";
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
        var Form1 = document.getElementById('FormHakkimizdaEkle');
        var ID = "<?=$ID?>";
        if (Form1.Hakkinda.value == "") {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: "Uyarı",
                message: "Lütfen Ürün Adını Boş Bırakmayın..!"

            });
            return;
        }
        var FormPost = $("#FormHakkimizdaEkle").serialize();
        $.ajax({
            url: "ajax/Kayit/HakkimizdaEkle.php",
            type: "POST",
            dataType: "JSON",
            data: FormPost + "&islem=Duzenle&&ID=" + ID,
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
                            window.location = "HakkimizdaListe.php";
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
    $("#Kaydet").click(function () {
        for (var Hakkinda in CKEDITOR.instances)
		        CKEDITOR.instances[Hakkinda].updateElement();
	    Form1Kaydet();
    });
    $("#Duzenle").click(function () {
        for (var Hakkinda in CKEDITOR.instances)
		        CKEDITOR.instances[Hakkinda].updateElement();
        Form1Guncelle();
    });

</script>
</body>

</html>
<?php } ?>