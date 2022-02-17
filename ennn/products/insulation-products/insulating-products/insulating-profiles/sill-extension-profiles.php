<?php

  $title = "ProfilEx Sill Extension Profiles";
  $description = "ProfilEx Denizlik Profilleri, ısı yalıtımı (mantolama) ve sıva uygulamalarında yapıların; pencere, kenar, köşe, yatay veya düşey düzgün boşluklar (fuga) gerektiğinde kullanılan ve sistemi tamamlayan profil çeşitleri markasıdır.";

  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Insulating Products";
  $breadcrumpLink2 = "insulating-products";

  $breadcrumpTitle3 = "Insulating Profiles";
  $breadcrumpLink3 = "insulating-profiles";

  $onePicture = true;   
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




<h3>PVC Sill Extension Profiles</h3>

<h4>PVC Sill Extension Profiles</h4>
<img src="<?php echo $imgDir?>profilex-pvc-sill-extension-profiles.png" alt="PVC Sill Extension Profiles, window or parapet sills<?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>PVC Profiles which are used in the locations where window or parapet sills does not cover the insulation boards in thermal insulation applications.<br><br>

PVC 55 Sill Extension Profile<br>
PVC 75 Sill Extension Profile<br>
PVC 95 Sill Extension Profile<br>
PVC 110 Sill Extension Profile
</p>

<h4>PVC 55 Sill Extension Profile</h4>
<p>Profile Length: 3 m<br>
Number Profiles in the package: 50 pieces</p>

<h4>PVC 75 Sill Extension Profile</h4>
<p>Profile Length: 3 m<br>
Number Profiles in the package: 50 pieces</p>

<h4>PVC 95 Sill Extension Profile</h4>
<p>Profile Length: 3 m<br>
Number Profiles in the package: 40 pieces</p>

<h4>PVC 110 Sill Extension Profile</h4>
<p>Profile Length: 3 m<br>
Number Profiles in the package: 40 pieces</p>


<h4>Aluminum Sill Extension Profile</h4>

<img src="<?php echo $imgDir?>profilex-aluminum-sill-extension-profile.png" alt="Profilex Aluminum Sill Extension Profile window or parapet sills <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>Aluminum Profiles which are used in the locations where window or parapet sills does not cover the insulation boards in thermal insulation applications.<br><br>

AL 55 Sill Extension Profile<br>
AL 75 Sill Extension Profile<br>
AL 95 Sill Extension Profile<br>
Profil Boyu: 3 m<br>
Number Profiles in the package: 20 pieces
</p>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
