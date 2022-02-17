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
              <h3 class="box-title">EPOSTA Listesi
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
            <div class="box-body">
			   <div class="row">
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
                        <th>ID</th>
                        <!-- <th style="display: none;">Resim</th> -->
                        <th>E-Posta</th>
                        <th>Adı Soyadı</th>

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
	
	<div id="contextMenu" class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px; border-color: #08ae66">
          <li id="DetayGorMenu"><a tabindex="-1"href="#">Düzenle</a></li>
          <li id="SilMenu"><a tabindex="-1" href="#">Sil</a></li>
          <li id="TopluSilMenu"><a tabindex="-1" href="#">Tümünü Sil</a></li>
          <li class="divider" style="background-color:#08ae66"></li>
          <li><h6><center>Menü</center></h6></li>

        </ul>
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
		  $("#SonucListe").load("ajax/Liste/MailListe.php", function (cevap,durum) {
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
        </script>
</body>
</html>
<?php } ?>