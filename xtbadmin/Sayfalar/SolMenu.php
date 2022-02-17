  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menüler</li>
        <li><a href="index.php"><i class="fa fa-home"></i> <span>Anasayfa</span></a></li>



        <li class="treeview">
          
          <a href="#">
            <i class="fa  fa-info"></i>
            <span>Kurumsal</span>
            <span class="pull-right-container">
              <i class="label bg-green pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="KHakkimizdaListe.php"><i class="fa fa-plus"></i> Hakkımızda</a></li>
            <li><a href="GenelMudurListe.php"><i class="fa fa-plus"></i> Genel Müdürün Mesajı</a></li>
            <li><a href="TarihceListe.php"><i class="fa fa-plus"></i> Tarihçe</a></li>
            <li><a href="IlkelerimizListe.php"><i class="fa fa-plus"></i> İlkelerimiz</a></li>
            <li><a href="KalitePolitikasiListe.php"><i class="fa fa-plus"></i> Kalite Politikamız</a></li>
            <li><a href="ArgeEkle.php"><i class="fa fa-plus"></i> Arge</a></li>
            <li><a href="InsanKaynaklariListe.php"><i class="fa fa-plus"></i> İnsan Kaynakları</a></li>
            <li><a href="YasalUyariEkle.php"><i class="fa fa-plus"></i> Yasal Uyarı</a></li>
          </ul>
        </li>

      <!--   <li class="treeview">
          <?php $HakkimizdaQuery=$db->query("SELECT count(1) AS Sonuc FROM kurumsal_yazilar WHERE id");
				$HakkimizdaRow = $HakkimizdaQuery->fetch(PDO::FETCH_ASSOC);
				$HakkimizdaSonuc=$HakkimizdaRow['Sonuc']; ?>
          <a href="#">
            <i class="fa  fa-info"></i>
            <span>Hakkımızda</span>
            <span class="pull-right-container">
              <i class="label bg-green pull-right"><?= $HakkimizdaSonuc?></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="HakkimizdaEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="HakkimizdaListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li> -->
        


        <li class="treeview">
          <?php $SliderQuery=$db->query("SELECT count(1) AS Sonuc FROM sliders");
				$SliderRow = $SliderQuery->fetch(PDO::FETCH_ASSOC);
				$SliderSonuc=$SliderRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-image "></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$SliderSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="SliderEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="SliderListe.php"><i class="fa fa-reorder"></i> Liste</a></li>

          </ul>
        </li>
        <li class="treeview">
          <?php $VideoQuery=$db->query("SELECT count(1) AS Sonuc FROM videolar");
				$VideoRow = $VideoQuery->fetch(PDO::FETCH_ASSOC);
				$VideoSonuc=$VideoRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Haberler/Duyurular</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$VideoSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="HaberEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="HaberListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li>
        <li><a href="Iletisim.php"><i class="fa fa-send-o"></i> <span>İletişim</span></a></li>
        
        <li><?php $MailQuery=$db->query("SELECT count(1) AS Sonuc FROM mailtoplama");
				$MailRow = $MailQuery->fetch(PDO::FETCH_ASSOC);
				$MailSonuc=$MailRow['Sonuc']; ?><a href="Mail.php"><i class="fa fa-send-o"></i> <span>E-Posta</span><span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$MailSonuc?></span>
            </span></a></li>
        <li class="treeview">
          <?php $UrunQuery=$db->query("SELECT count(1) AS Sonuc FROM urunler");
				$UrunRow = $UrunQuery->fetch(PDO::FETCH_ASSOC);
				$UrunSonuc=$UrunRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-object-group "></i>
            <span>Ürünler</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$UrunSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="UrunEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="UrunListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
            <li class="">
              <?php $UrunKatQuery=$db->query("SELECT count(1) AS Sonuc FROM urunkategorileri");
                    $UrunKatRow = $UrunKatQuery->fetch(PDO::FETCH_ASSOC);
                    $UrunKatSonuc=$UrunKatRow['Sonuc']; ?>
              <a href="#">
                <i class="fa fa-th-large"></i>
                <span>Kategoriler</span>
                <span class="pull-right-container">
                  <span class="label bg-green pull-right"><?=$UrunKatSonuc?></span>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="UrunKatEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
                <li><a href="UrunKatListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
              </ul>
            </li>
            <li class="">
              <?php $SektorQuery=$db->query("SELECT count(1) AS Sonuc FROM sektorler");
                    $SektorRow = $SektorQuery->fetch(PDO::FETCH_ASSOC);
                    $SektorSonuc=$SektorRow['Sonuc']; ?>
              <a href="#">
                <i class="fa fa-th-large"></i>
                <span>Sektörler</span>
                <span class="pull-right-container">
                  <span class="label bg-green pull-right"><?=$SektorSonuc?></span>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="SektorEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
                <li><a href="SektorListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
              </ul>
            </li>
            <li class="">
              <?php $UygulamaQuery=$db->query("SELECT count(1) AS Sonuc FROM urunuygulamalari");
                    $UygulamaRow = $UygulamaQuery->fetch(PDO::FETCH_ASSOC);
                    $UygulamaSonuc=$UygulamaRow['Sonuc']; ?>
              <a href="#">
                <i class="fa fa-th-large"></i>
                <span>Uygulamalar</span>
                <span class="pull-right-container">
                  <span class="label bg-green pull-right"><?=$UygulamaSonuc?></span>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="UygulamaEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
                <li><a href="UygulamaListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <?php $ResimQuery=$db->query("SELECT count(1) AS Sonuc FROM resimler");
			  	$ResimRow = $ResimQuery->fetch(PDO::FETCH_ASSOC);
				  $ResimSonuc=$ResimRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-image "></i>
            <span>Resimler</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$ResimSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ResimEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="ResimListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
            <li class="">
              <a href="#"><i class="fa fa-th-large"></i> Kategoriler
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="ResimKatEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
                <li><a href="ResimKatListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <?php $VideoQuery=$db->query("SELECT count(1) AS Sonuc FROM videolar");
				  $VideoRow = $VideoQuery->fetch(PDO::FETCH_ASSOC);
				  $VideoSonuc=$VideoRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-video-camera "></i>
            <span>Videolar</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$VideoSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="VideoEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="VideoListe.php"><i class="fa fa-reorder"></i> Liste</a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope-o"></i>
            <span>Formlar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="IletisimFormuListe.php"><i class="fa fa-reorder"></i> İletişim Formu</a></li>
            <li><a href="BayiBasvuruListe.php"><i class="fa fa-reorder"></i> Bayi Başvuru Formu</a></li>
            <li><a href="MemnuniyetSikayetListe.php"><i class="fa fa-reorder"></i> Memnuniyet / Şikayet Formu</a></li>
            <li><a href="TalepListe.php"><i class="fa fa-reorder"></i> Ürün Destek Talepleri</a></li>
            <li><a href="BizeYazinListe.php"><i class="fa fa-reorder"></i> Bize Yazın </a></li>

            

          </ul>
        </li>
        <li class="treeview">
          <?php $KullQuery=$db->query("SELECT count(1) AS Sonuc FROM kullanicilar");
				  $KullRow = $KullQuery->fetch(PDO::FETCH_ASSOC);
				  $KullSonuc=$KullRow['Sonuc']; ?>
          <a href="#">
            <i class="fa  fa-users "></i>
            <span>Kullanıcılar</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$KullSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="KullaniciEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="KullaniciListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li>
        <li class="treeview">
          <?php $DilQuery=$db->query("SELECT count(1) AS Sonuc FROM languages");
				  $DilRow = $DilQuery->fetch(PDO::FETCH_ASSOC);
				  $DilSonuc=$DilRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-language"></i>
            <span>Diller</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$DilSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="DilEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="DilListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li>
        <li class="treeview">
          <?php $RefQuery=$db->query("SELECT count(1) AS Sonuc FROM referanslar");
				  $RefRow = $RefQuery->fetch(PDO::FETCH_ASSOC);
				  $RefSonuc=$RefRow['Sonuc']; ?>
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Referanslar</span>
            <span class="pull-right-container">
              <span class="label bg-green pull-right"><?=$RefSonuc?></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ReferansEkle.php"><i class="fa fa-plus"></i> Ekle</a></li>
            <li><a href="ReferansListe.php"><i class="fa fa-reorder"></i> Liste</a></li>
          </ul>
        </li>
        
        <li><a href="Resimindir.php"><i class="fa fa-send-o"></i>  <span>Resim İndir</span><span class="pull-right-container">
          <span class="label bg-green pull-right"></span>
          </span></a>
        </li>    
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cogs"></i>
            <span>Site Ayarları</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="AnasayfaKategoriListe.php"><i class="fa fa-cog"></i>Anasayfa</a></li>
            <li><a href="AyarGenel.php"><i class="fa fa-cog"></i> Genel Ayarlar</a></li>
            <li><a href="AyarMail.php"><i class="fa fa-envelope-o"></i> Mail Ayarları</a></li>
            <li><a href="AyarSosyalMedya.php"><i class="fa fa-share-alt"></i> Sosyal Medya</a></li>
            <li><a href="AyarAltBilgi.php"><i class="fa fa-pencil-square-o"></i> Alt Bilgi</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>