<?php

  $title = "ProfilEx Dripstone Console Profiles";
  $description = "ProfilEx Dripstone Console Profiles, PVC Mesh Dripstone Console Profiles, Aluminum Dripstone Console Profilesallow the water to flow out from balconies, window";

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


<h3>Dripstone Console Profiles</h3>

<h4>PVC Dripstone Console Profiles</h4>

<img src="<?php echo $imgDir?>profilex-pvc-dripstone-console-profile.png" alt="PVC Dripstone Console Profiles, from balconies, window, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>PVC profiles which allow the water to flow out from balconies, window upper corners and parapet underneath without leaking to the wall.<br><br>

Profile Length: 2,5 m <br>
Number Profiles in the package: 25 pieces
</p>


<h4>PVC Mesh Dripstone Console Profiles</h4>
<img src="<?php echo $imgDir?>profilex-pvc-mesh-dripstone-console-profile.png" alt="PVC Mesh Dripstone Console Profiles, from balconies, window, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>PVC meshprofiles whichallow the water to flow out from balconies, window upper corners and parapet underneath without leaking to the wall.<br><br>

ProfileLength: 2,5 m<br>
Number Profiles in the package: 25 pieces
</p>


<h4>Aluminum Dripstone Console Profiles</h4>
<img src="<?php echo $imgDir?>profilex-aluminum-dripstone-console-profile.png" alt="Aluminum Dripstone Console Profiles, from balconies, window, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">


<p>Aluminum profiles which allow the water to flow out from balconies, window upper corners and parapet underneath without leaking to the wall.<br><br>

Profile Length without mesh: 2,5 m<br>
Number Profiles in the package : 30 pieces<br>
Profile Length with mesh : 2,5 m<br>
Number Profiles in the package: 50 pieces
</p>





<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
