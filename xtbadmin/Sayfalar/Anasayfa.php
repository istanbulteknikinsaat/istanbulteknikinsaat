<?php require_once 'SayfaUst.php'; ?>
<?php require_once 'SolMenu.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $UrunSonuc?></h3>

              <p>Ürünler</p>
            </div>
            <div class="icon">
              <i class="fa fa-object-group "></i>
            </div>
            <a href="UrunListe.php" class="small-box-footer">Devamı <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$MailSonuc?></h3>

              <p>Mail Listesi</p>
            </div>
            <div class="icon">
              <i class="fa fa-comment-o"></i>
            </div>
            <a href="Mail.php" class="small-box-footer">Devamı <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$SektorSonuc?></h3>

              <p>Sektörler</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users "></i>
            </div>
            <a href="SektorListe.php" class="small-box-footer">Devamı <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
            <h3><?= $HakkimizdaSonuc?></h3>
              <p>Hakkımızda</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
            <a href="HakkimizdaListe.php" class="small-box-footer">Devamı <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $UrunKatSonuc ?></h3>

              <p>Ürün Kategorileri</p>
            </div>
            <div class="icon">
              <i class="fa fa-image "></i>
            </div>
            <a href="UrunKatListe.php" class="small-box-footer">Devamı <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$KullSonuc?></h3>

              <p>Kullanıcılar</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users "></i>
            </div>
            <a href="KullaniciListe.php" class="small-box-footer">Devamı <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php   require_once 'SayfaAlt.php'; 
		require_once 'SagMenu.php'; 
		require_once 'SayfaJs.php'; ?>

</body>
</html>