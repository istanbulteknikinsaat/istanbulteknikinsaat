<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
	$QueryKat=$db->query("SELECT * FROM urunkategorileri WHERE IsActive=1");
	$QueryTip=$db->query("SELECT * FROM urunler WHERE IsActive=1");
	$QueryRenk=$db->query("SELECT * FROM urunuygulamalari WHERE IsActive=1");
    $ID="";
    $UrunKatID= " ";
    // $UrunUygID= " ";
	$UrunAdi= " ";
	$UrunResmi= " ";
	$UrunKisaAciklama= " ";
    $UrunAciklama= " ";
	$UrunVideoUrl= " ";
	$UrunSatinAlmaUrl= " ";
	$IsActive= " ";
	if($_GET)
	{
		 if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		 {
			if($_GET['islem']=="Duzenle")
			{
				$ID=$_GET['ID'];
				$Query=$db->prepare("SELECT * FROM urunler as u left join urunkategorileri as uk on u.UrunKatID=uk.ID  WHERE u.IsActive=1 AND u.ID=?");
				$Query->execute(array($ID));
				$Row = $Query->fetch(PDO::FETCH_ASSOC);
				if($Row)
				{
                    $UrunKatID= $Row["UrunKatID"];
                    $UrunKatName= $Row["kategoriAdi"];
                    $UrunUygID= $Row["UrunUygID"];
                    $UrunAdi= $Row["UrunAdi"];
                    $UrunResmi= $Row["UrunResmi"];
                    $UrunKisaAciklama= $Row["UrunKisaAciklama"];
                    $UrunAciklama= $Row["UrunAciklama"];
                    $UrunVideoUrl= $Row["UrunVideoUrl"];
                    $UrunSatinAlmaUrl= $Row["UrunSatinAlmaUrl"];
                    $IsActive= $Row["IsActive"];
				}
			}
		}
	}
    ?>
<link rel="stylesheet" href="plugins/filesupload/css/jquery.fileupload.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Ürün Ekle
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
                        <form action="#" method="post" id="Form1" class="form-horizontal">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Kategorisi</label>
                                            <div class="col-sm-8">
                                                <select id="UrunKatID" type="text" name="UrunKatID" value="" class="form-control input-sm">
                                                    <?php $sql= $db->prepare("SELECT ID,kategoriAdi FROM urunkategorileri ORDER BY kategoriAdi ");	
                                                    $sql->execute();
                                                    while($row=$sql->fetch(PDO::FETCH_ASSOC)) { if(isset($Row["UrunKatID"])){$Row["UrunKatID"]=$Row["UrunKatID"];}else{$Row["UrunKatID"]="";}?>
                                                    
                                                    <option <?php if($row['ID']==$Row["UrunKatID"]){ echo "selected";}else {echo "";} ?> value="<?php echo $row['ID'] ?>"><?php echo $row['kategoriAdi'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Uygulaması</label>
                                            <div class="col-sm-8">
                                                <select id="UrunUygID" type="text" name="UrunUygID" value="" class="form-control input-sm">
                                                    <?php $sql= $db->prepare("SELECT ID,UrunTipiAdi FROM urunuygulamalari  ORDER BY UrunTipiAdi ");	
                                                    $sql->execute();
                                                    while($row=$sql->fetch(PDO::FETCH_ASSOC)) { if(isset($Row["UrunUygID"])){$Row["UrunUygID"]=$Row["UrunUygID"];}else{$Row["UrunUygID"]="";}?>
                                                    
                                                    <option <?php if($row['ID']==$Row["UrunUygID"]){ echo "selected";}else {echo "";} ?> value="<?php echo $row['ID'] ?>"><?php echo $row['UrunTipiAdi'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Uygulama ID</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UrunUygID" class="form-control input-sm "
                                                    value="<?= $UrunUygID ?>" placeholder="<?= $UrunUygID ?>">
                                            </div>
                                        </div> -->

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Adı</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UrunAdi" class="form-control input-sm "
                                                    value="<?= $UrunAdi ?>" placeholder="<?= $UrunAdi ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Kisa Aciklama</label>
                                            <div class="col-sm-8">
                                            <input type="text" name="UrunKisaAciklama" class="form-control input-sm "
                                                    value="<?= $UrunKisaAciklama ?>" placeholder="<?= $UrunKisaAciklama ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Aciklama</label>
                                            <div class="col-sm-8">
                                                <textarea class="ckeditor" id="UrunAciklamasiCK"
                                                    name="UrunAciklama"><?= $UrunAciklama ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Video URL</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UrunVideoUrl" class="form-control input-sm "
                                                    value="<?= $UrunVideoUrl ?>" placeholder="<?= $UrunVideoUrl ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Satin Alma URL</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="UrunSatinAlmaURL"
                                                    class="form-control input-sm " value="<?= $UrunSatinAlmaUrl ?>"
                                                    placeholder="<?= $UrunSatinAlmaUrl ?>">
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <label class="col-sm-4 control-label">Durumu</label>
                                            <div class="col-sm-8">
                                                <select id="UrunIsActive" type="text"
                                                    name="UrunIsActive" class="form-control input-sm">
                                                     <option <?php if($IsActive==0){echo "selected";} else{echo "";} ?> value="0">Pasif</option>
                                                     <option <?php if($IsActive==1){echo "selected";} else{echo "";} ?> value="1">Aktif</option>

                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Dil</label>
                                            <div class="col-sm-8">
                                                <select id="lang" type="text" name="lang" value="" class="form-control input-sm">
                                                    <?php $sql= $db->prepare("SELECT lname,slug FROM languages WHERE is_active=1");	
                                                    $sql->execute();
                                                    while($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <option value="<?php echo $row['slug'] ?>"><?php echo $row['lname'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Ürün Resmi </label>
                                            <div class="col-sm-6">
                                                <label id="ResimSec"
                                                    class="btn btn-success btn-block btn-sm fileinput-button">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <span>Resim Seç...</span>
                                                    <input id="Resim" type="file" name="files[]" style="display: none;"
                                                        multiple>
                                                    <input id="ResimAdi" value="" name="Resim" style="display:none">
                                                </label>
                                                <br>
                                                <br>
                                                <div id="ResimProgress" class="progress">
                                                    <div class="progress-bar progress-bar-success"></div>
                                                </div>
                                                <div id="ResimFiles" class="files"></div>
                                                <br>
                                                <br>
                                            </div>
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
                                                <span id="Duzenle" class="btn btn-block btn-sm btn-info">Düzenle</span>
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
                <div id="showSubCatInfo" style="border: 1px solid #000" class="col-sm-3  pull-left">
                
                </div>

                <div id="showCatInfo" style="border: 1px solid #000" class="col-sm-3  pull-right">
                
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

<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="plugins/filesupload/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="plugins/filesupload/js/canvas-to-blob.min.js"></script>


<script src="plugins/filesupload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="plugins/filesupload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="plugins/filesupload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="plugins/filesupload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="plugins/filesupload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="plugins/filesupload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="plugins/filesupload/js/jquery.fileupload-validate.js"></script>
<script>
window.onload = function() {
    document.getElementById("showCatInfo").innerHTML = anakat();      
    document.getElementById("showSubCatInfo").innerHTML = altkat();     
  }
  function anakat(){
    $("#showCatInfo").empty();
		  $("#showCatInfo").load("ajax/Kayit/UrunEkleKategoriBilgisi.php", function (cevap,durum) {
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
		  $("#showSubCatInfo").load("ajax/Kayit/UrunEkleAltKategoriBilgisi.php", function (cevap,durum) {
			  if(durum =="success")
				{
                    $("#showSubCatInfo").empty();
                    cevap=jQuery.parseJSON(cevap);
                    $("#showSubCatInfo").append(cevap.baslik,cevap.ok);
				}  
          });
  }
    var ResimAdi = "";
    var ResimLink;
    var ID; <?php
    if ($_GET) {
        ?>
        ID = "<?=$ID?>";
        ResimAdi="<?= $UrunResmi ?>";	
            if(ResimAdi){
                $("#ResimFiles").append('<img src="/images/products/'+ResimAdi+'"  width="100px"  >');
            }
console.log(ResimAdi);



        var UrunKatID = "<?=$UrunKatID?>";
        $("#UrunKatID").val(UrunKatID);

        <?php
    } ?>
    
    CKEDITOR.replace('UrunAciklamasiCK');

    function Form1Kaydet() {
        var Form1 = document.getElementById('Form1');
        if (Form1.UrunAciklama.value == "") {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: "Uyarı",
                message: "Lütfen İçeriği Boş Bırakmayın..!"

            });
            return;
        }
        if (Form1.UrunAdi.value == "") {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: "Uyarı",
                message: "Lütfen Ürün Adını Boş Bırakmayın..!"

            });
            return;
        }
        if (Form1.UrunKatID.value == "") {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: "Uyarı",
                message: "Lütfen Kategori Alanını Boş Bırakmayın..!"

            });
            return;
        }
        /*if (ResimAdi == "") {
                        BootstrapDialog.show({
                            type: BootstrapDialog.TYPE_WARNING,
                            title: "Uyarı",
                            message: "Lütfen Resim Alanını Boş Bırakmayın..!"
                        });
                        return;
                    }*/
        var FormPost = $("#Form1").serialize();
        $.ajax({
            url: "ajax/Kayit/UrunEkle.php",
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
                            window.location = "UrunListe.php";
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
        if (Form1.UrunAciklama.value == "") {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: "Uyarı",
                message: "Lütfen Ürünün Kısa Açıklamasını Boş Bırakmayın..!"

            });
            return;
        }
        if (Form1.UrunKatID.value == "") {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: "Uyarı",
                message: "Lütfen Kategori Alanını Boş Bırakmayın..!"

            });
            return;
        }
        // if (ResimAdi == "") {
        //     BootstrapDialog.show({
        //         type: BootstrapDialog.TYPE_WARNING,
        //         title: "Uyarı",
        //         message: "Lütfen Resim Alanını Boş Bırakmayın..!"

        //     });
        //     return;
        // }
        var FormPost = $("#Form1").serialize();
        $.ajax({
            url: "ajax/Kayit/UrunEkle.php",
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
                            window.location = "UrunListe.php";
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
        for (var UrunAciklamasiCK in CKEDITOR.instances)
		        CKEDITOR.instances[UrunAciklamasiCK].updateElement();
        Form1Kaydet();
    });
    $("#Duzenle").click(function () {
        Form1Guncelle();
    });

    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = 'ajax/UrunUpload/index.php',
            uploadButton = $('<label/>')
            .addClass('btn btn-primary btn-block btn-sm')
            .prop('disabled', true)
            .text('Yükleniyor...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('İptal')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
        //Üst Logo İçin			
        $('#Resim').fileupload({
                url: url,
                dataType: 'json',
                autoUpload: false,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 99900000,
                // Enable image resizing, except for Android and Opera,
                // which actually support image resizing, but fail to
                // send Blob objects via XHR requests:
                disableImageResize: /Android(?!.*Chrome)|Opera/
                    .test(window.navigator.userAgent),
                previewMaxWidth: 100,
                previewMaxHeight: 100,
                previewCrop: true
            }).on('fileuploadadd', function (e, data) {
                $("#ResimFiles img").hide();
                data.context = $('<div/>').appendTo('#ResimFiles');
                $.each(data.files, function (index, file) {
                    var node = $('<p/>')
                        .append($('<span/>').text(file.name));
                    if (!index) {
                        node
                            .append('<br>')
                            .append(uploadButton.clone(true).data(data));
                    }
                    node.appendTo(data.context);
                });
            }).on('fileuploadprocessalways', function (e, data) {
                var index = data.index,
                    file = data.files[index],
                    node = $(data.context.children()[index]);
                if (file.preview) {
                    node
                        .prepend('<br>')
                        .prepend(file.preview);
                }
                if (file.error) {
                    node
                        .append('<br>')
                        .append($('<span class="text-danger"/>').text(file.error));
                }
                if (index + 1 === data.files.length) {
                    data.context.find('label')
                        .text('Yükle')
                        .prop('disabled', !!data.files.error);
                }
            }).on('fileuploadprogressall', function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#ResimProgress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }).on('fileuploaddone', function (e, data) {
                $.each(data.result.files, function (index, file) {
                    ResimAdi = file.name;
                    ResimLink = file.url;
                    $("#ResimAdi").val(ResimAdi);
                    if (file.url) {
                        var link = $('<a>')
                            .attr('target', '_blank')
                            .prop('href', file.url);
                        $(data.context.children()[index])
                            .wrap(link);
                        $("#ResimSec").hide();
                        $("#ResimProgress").hide();
                    } else if (file.error) {
                        var error = $('<span class="text-danger"/>').text(file.error);
                        $(data.context.children()[index])
                            .append('<br>')
                            .append(error);
                    }
                });
            }).on('fileuploadfail', function (e, data) {
                $.each(data.files, function (index) {
                    var error = $('<span class="text-danger"/>').text('Yüklenirken Hata Oluştu.');
                    $(data.context.children()[index])
                        .append('<br>')
                        .append(error);
                });
            }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');

    });
</script>
</body>

</html>
<?php } ?>