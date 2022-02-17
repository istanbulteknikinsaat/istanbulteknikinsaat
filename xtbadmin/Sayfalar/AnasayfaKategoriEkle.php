<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
    $KategoriAdi= " ";
    $SayfaResim= " ";
    $lang= " ";	
    $IsActive= " ";	
    if($_GET)
	{
		 if ($_SERVER['REQUEST_METHOD'] === 'GET') 
		 {
			if($_GET['islem']=="Duzenle")
			{ 
                $ID=$_GET['ID'];
				$Query=$db->prepare("SELECT * FROM anasayfakategori WHERE ID=$ID");
				$Query->execute(array($ID));
				$Row = $Query->fetch(PDO::FETCH_ASSOC);
				if($Row)
				{
                    $KategoriAdi= $Row["KategoriAdi"];
                    $SayfaResim= $Row["SayfaResim"];
                    $lang= $Row["lang"];
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
                        <h3 class="box-title">Anasayfa Kategori Ekle
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
                                            <label class="col-sm-4 control-label">Kategori Adı</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="KategoriAdi" class="form-control input-sm "
                                                    value="<?= $KategoriAdi ?>" placeholder="<?= $KategoriAdi ?>">
                                            </div>
                                        </div>
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
                                            <label class="col-sm-4 control-label">Dil</label>
                                            <div class="col-sm-8">
                                                <select id="lang" type="text" name="lang" class="form-control input-sm">
                                                    <?php $sql= $db->prepare("SELECT lname,slug FROM languages WHERE is_active=1");	
                                                    $sql->execute();
                                                    if($_GET){if($_GET['islem']=="Duzenle") { 
                                                        $lang=$lang;
                                                       }
                                                       else{
                                                        $lang="";
                                                       }
                                                    }
                                                    while($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <option <?php if($lang==$row['slug']){echo "selected";
                                                            }else{echo "";} ?> value="<?php echo $row['slug'] ?>"><?php echo $row['lname'] ?></option>                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Kategori Resim </label>
                                            <div class="col-sm-6">
                                                <label id="ResimSec"
                                                    class="btn btn-success btn-block btn-sm fileinput-button">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <span>Resim Seç...</span>
                                                    <input id="SayfaResim" type="file" name="files[]" value="<?= $SayfaResim ?>" style="display: none;"
                                                        multiple>
                                                    <input id="SayfaResimAdi"  name="SayfaResim" value="<?= $SayfaResim ?>" style="display:none">
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


    var ResimLink;
    var ID; <?php
    if ($_GET) {
        ?>
        ID = <?= $ID ?>;
        <?php
        
    } ?>
    
SayfaResimAdi="<?=$SayfaResim?>";	


if(SayfaResimAdi){
	$("#ResimFiles").append('<img src="/images/anasayfakategori/'+SayfaResimAdi+'"  width="100px"  >');
}

function Form1Kaydet() {
                    var Form1 = document.getElementById('Form1');
                   
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/AnasayfaKategoriEkle.php",
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
                                            window.location="AnasayfaKategoriListe.php";
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
     
        var FormPost = $("#Form1").serialize();
        $.ajax({
            url: "ajax/Kayit/AnasayfaKategoriEkle.php",
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
                            window.location = "AnasayfaKategoriListe.php";
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
        Form1Guncelle();
    });
    $("#Kaydet").click(function () {
            Form1Kaydet();
    });
    
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = 'ajax/AnasayfaKategoriUpload/index.php',
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
            //Bayi Resim İcon Değiştirme		
            $('#SayfaResim').fileupload({
                url: url,
                dataType: 'json',
                autoUpload: false,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 999000,
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
                    SayfaResimAdi = file.name;
                    ResimLink = file.url;
                    $("#SayfaResimAdi").val(SayfaResimAdi);
                    if (file.url) {
                        var link = $('<a>')
                            .attr('target', '_blank')
                            .prop('href', file.url);
                        $(data.context.children()[index])
                            .wrap(link);
                        $("#ResimSec").hide();
                        $("#ResimProgress").hide();
                    }   else if (file.error) {
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
