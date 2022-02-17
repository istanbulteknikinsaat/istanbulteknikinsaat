<?php

  $title = "TekDrain ZMN 20/200 Drenaj Levhası";
  $description = "TekDrain ZMN 20/200 Drenaj Levhası, bitki köklerine ve çürümeye karşı dayanıklı, perde duvarını ve temel betonunu sudan ve rutubetten koruyarak topraktan ayıran, yüksek yoğunluklu polietilenden üretilmiş (HPDE) koruyucu tabakadır.";

  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Drainage Board";
  $breadcrumpLink2 = "drainage-board";
    
  $pictureSlider = false;     


  $countDir =  substr_count($_SERVER['PHP_SELF'], '/') - 1;   $dirPosition = ''; for ($x = 1; $x <= $countDir; $x++) { $dirPosition .= "../"; }
    $dirPosition = $dirPosition.'en/';
  include $dirPosition.'header.php'; 
?>

 <section class="product-page">
  <?php  include $dirPosition.'product-header.php';  ?>
<div class="wrapper">

  <?php 
     include $dirPosition.'left-product-navigation.php';
     include $dirPosition.'product-breadcrumb.php';
   ?>
       
       
<!-- PRODUCT PAGE START -->
                  
    <h2 data-url="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>"><?php echo $title ?></h2>
    <p><b><?php echo $title ?>,</b> bitki köklerine ve çürümeye karşı dayanıklı, perde duvarını ve temel betonunu sudan ve rutubetten koruyarak topraktan ayıran, yüksek yoğunluklu polietilenden üretilmiş (HPDE) koruyucu tabakadır.</p>



<h3>Kullanım alanları</h3>

<ul class="subpage-full-list">
   <li>Bina temellerinde oluşan suyun yukarı çıkmasını engeller.</li>
  <li>Perde duvarlarındaki yalıtımı korur ve yüksek basınçlı toprak yüküne dayanıklıdır.</li>
  <li>Bitki köklerine, yağmur suyuna ve alkaliye karşı dayanımlıdır.</li>
</ul>


<h3>Avantajları</h3>
<p>Temel betonunu zeminden yükselen suya ve rutubete karşı korur. Perde duvarlarında da uygulanabilen ve toprak yükünü alarak yatılımı koruyan çok yönlü bir üründür.</p>

<h3>Ambalaj ve Depolama</h3>
<p>2 x 20 m rulolar ve 2,5 x 1,2 m plakalar halinde üretilir. <br>
Rulolar dik halde, plakalar yatay halde depolanır.
</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
