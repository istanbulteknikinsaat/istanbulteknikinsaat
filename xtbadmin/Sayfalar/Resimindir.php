<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
	
    ?>
	<style>
    p{
    width: 250px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }
    
  </style>
	
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Resim İndir </h3>
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
            <div class="box-body">
			   <div class="row">
				<div class="col-md-12">
					
          <div class="col-sm-2" style="margin-top:-40px;float: left;margin-left: 400px;">
            <form method="post" action="ajax/Kayit/Resimindir.php" id="FormExcel" enctype="multipart/form-data">
            <input type="file" id="excel" name="excel"/>
            <br>
            <input type="submit" name="import" class="btn btn-block btn-success" value="Excel Yükle" style="padding:2px 20px;"/>
            <span style="font-size: 10px;"> <a href="ajax/ReferansFile/OrnekExcel.xlsx">Örnek Excel Dosyasını İndirmek İçin</a></span>
          </form>
          </div>

                    <div class="col-sm-3 pull-right">
                        <div  class="input-group custom-search-form">
                            <input id="TxtArama"   type="text" class="form-control">
                            <span  id="AramaBTN"  class="input-group-btn">
                             <button   class="btn bg-green" type="button">
                             <span   class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </div>
                   <div class="col-md-12">
                       
				</div>
				</div>
                   
                </div><!-- /.box-body -->
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


function SayiTemizle(e) {
var value=e.replace(/[^0-9.,]*/g, '');
value=value.replace(/\s/g, "");
value=value.replace(/\.{2,}/g, '.');
value=value.replace(/\.,/g, ',');
value=value.replace(/\,\./g, ',');
value=value.replace(/\,{2,}/g, ',');
value=value.replace(/\.[0-9]+\./g, '.');
return value;
}

$(function() {
var $contextMenu = $("#contextMenu");
var TiklanilanID;



$("body").on("contextmenu", "table tr", function(e) {
  $contextMenu.css({
    display: "block",
    left: e.pageX,
    top: e.pageY
  });
  ID =$(this)["0"].children[0].innerText;
  TiklanilanID =   SayiTemizle(ID);

  return false;
});

$contextMenu.on("click", "a", function() {
  $contextMenu.hide();
});
$("body").click(function() {
  $contextMenu.hide();
});
});
var PostLoad = $("#SonucListeLoad");
PostLoad.load("ajax/images/loading.html");
PostLoad.hide();
var PostRequest;
  
</script>
    </script>
</body>
</html>
<?php } ?>