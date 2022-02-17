<?php

  $title = "ProfilEx Subbasement Profiles";
  $description = "ProfilEx Subbasement Profiles, Aluminum Subbasement Profiles The starting profile that allows the fastening of insulation plates to the building surface firmly and in scale. ";

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



<h3>Subbasement Profiles</h3>
<h4>Aluminum Subbasement Profiles</h4>
<img src="<?php echo $imgDir?>profilex-aluminium-subbasement-profiles.png" alt=" Aluminum Subbasement Profile <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>The starting profile that allows the fastening of insulation plates to the building surface firmly and in scale.<br><br>

AL 33 Subbasement Profile<br>
AL 43 Subbasement Profile<br>
AL 53 Subbasement Profile<br>
AL 63 Subbasement Profile<br>
AL 73 Subbasement Profile<br>
AL 83 Subbasement Profile<br><br>

Profile Length: 2,5 m<br>
Number of Profiles in the Package: 10 pieces
</p>





<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
