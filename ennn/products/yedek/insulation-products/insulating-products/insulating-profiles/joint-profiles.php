<?php

  $title = "ProfilEx Joint Profiles";
  $description = "ProfilEx Joint Profiles, PVC Mesh Joint Profiles, Aluminum Joint Profiles, Aluminum Mesh Joint Profiles, Those are the profiles made from PVC produced to facilitate the thermal insulation joint applications.";

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
   


<h4>PVC Joint Profiles</h4>

<p>
Those are the profiles made from PVC produced to facilitate the thermal insulation joint applications. 
<br><br>
PVC 3 Joint Profile<br>
Profile length: 3 m<br>
Number Profiles in the package: 40 pieces<br><br>

PVC 4 Joint Profile<br>
Profile length: 3 m<br>
Number Profiles in the package: 40 pieces<br><br>

PVC 5 Joint Profile<br>
Profile length: 3 m<br>
Number Profiles in the package: 30 pieces
</p>


<h4>PVC Mesh Joint Profiles</h4>
<img src="<?php echo $imgDir?>profilex-pvc-mesh-joint-profiles.png" alt="PVC Mesh Joint Profiles, hot insulation, windows, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>Those are the mesh profiles made from PVC produced to facilitate the thermal insulation joint applications.<br><br>

PVC F 3 Joint Profile<br>
PVC F 4 Joint Profile<br>
PVC F 5 Joint Profile<br><br>

Profile length: 3 m<br>
Number Profiles in the package: 20 pieces
</p>


<h4>Aluminum Joint Profiles</h4>
<img src="<?php echo $imgDir?>profilex-aluminyum-joint-profiles.png" alt="Aluminum Joint Profiles,  hot insulation, windows, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>Those are the profiles made from aluminum produced to facilitate the thermal insulation joint applications.<br><br>

AL 3 Joint Profile<br>
AL 4 Joint Profile<br>
AL 5 Joint Profile<br><br>

Profile length: 3 m<br>
Number Profiles in the package: 20 pieces
</p>


<h4>Aluminum Mesh Joint Profiles</h4>
<img src="<?php echo $imgDir?>profilex-aluminum-mesh-joint-profiles.png" alt="Aluminum Mesh Joint Profiles,  hot insulation, windows, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>
Those are the profiles made from mesh aluminum produced to facilitate the thermal insulation joint applications.<br><br> 

AL F 3 Joint Profile<br>
AL F 4 Joint Profile<br>
AL F 5 Joint Profile<br><br>

Profile length: 3 m<br>
Number Profiles in the package: 20 pieces
</p>







<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
