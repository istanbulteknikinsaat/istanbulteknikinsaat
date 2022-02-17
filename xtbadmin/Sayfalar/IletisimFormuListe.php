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
              <h3 class="box-title">İletişim Formu</h3>
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
					<div class="col-sm-2">
          </div>
                <div class="col-sm-3 pull-right">
                    <div class="input-group custom-search-form">
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
                       <div class="col-sm-3  pull-right">
                           <span class=" pull-right"id="ListeToplamKalan"></span><br />
                       </div>
				</div>
				</div>
                   <div class="table-responsive">
                   <div id="SonucListeLoad"></div>
                  <table id="Tablo" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Konu</th>
                        <th>Adı Soyadı</th>
                        <th>Telefon</th>
                        <th>E-Mail</th>
                        <th>Firma</th>
                        <th>Görev</th>
                        <th>Mesaj</th>
                        <th>Tarih</th>
                      </tr>
                    </thead>
                    <tbody id="SonucListe">

                    </tbody>
                    
                  </table>
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
	 $(function () {

$('#Tablo').DataTable({
  "paging": false,
  "lengthChange": false,
  "searching": false,
  "ordering": false,
  "info": false,
  "autoWidth": false
});
});

function SonucListele() {
  $("#SonucListe").empty();
$("#SonucListe").load("ajax/Liste/IletisimFormuListe.php", function (cevap,durum) {
if(durum =="success")
{
  cevap=jQuery.parseJSON(cevap);
          $("#SonucListe").empty();
          $("#SonucListe").prepend(cevap.ok);
  $("#ListeToplamKalan").empty();
  $("#ListeToplamKalan").prepend(cevap.say);
 
}  
});
}
SonucListele();

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
function AramaIslemi(){
  PostLoad.show();
  if($("#TxtArama").val().length<=0)
  {
      if(PostRequest!=undefined)
      {
          PostRequest.abort();
      }
      SonucListele();
      PostLoad.hide();
  }
  else{

      if(PostRequest!=undefined)
      {
          PostRequest.abort();
      }
          PostRequest= $.post("ajax/Liste/IletisimFormuListe.php",{Like:$("#TxtArama").val()},function (cevap) {
          cevap=jQuery.parseJSON(cevap);
          $("#SonucListe").empty();
          $("#SonucListe").prepend(cevap.ok);
          $("#ListeToplamKalan").empty();
          $("#ListeToplamKalan").prepend(cevap.say);
          PostLoad.hide();
      });
  }

}
$("#TxtArama").keyup(function () {
AramaIslemi();  
});
$("#AramaBTN").click(function(){
AramaIslemi();
});  
</script>
    </script>
</body>
</html>
<?php } ?>