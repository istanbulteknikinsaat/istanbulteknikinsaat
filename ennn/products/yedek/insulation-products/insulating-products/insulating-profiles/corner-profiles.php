<?php

  $title = "ProfilEx Corner Profiles";
  $description = "PVC S Corner Profiles, Aluminum Corner Profiles, Aluminum Mesh Corner Profiles, Galvanized Corner Profiles 110 g mesh profiles produced from PVC and used for creating a smooth corner at all corner details of the building facades.";

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


<h3>Corner Profiles</h3>

<h4>PVC S Corner Profiles</h4>
<img src="<?php echo $imgDir?>profilex-pvc-s-corner-profiles.png" alt="PVC S Corner Profiles, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>110 g mesh profiles produced from PVC and used for creating a smooth corner at all corner details of the building facades. 
<br><br> 

PVC S 10 Corner Profile<br>
PVC S 8 Corner Profile<br>
Profile Length: 2,5 m<br>
Number Profiles in the package: 100 pieces<br>
</p>







<h4>Aluminum Corner Profiles AL25</h4>
<img src="<?php echo $imgDir?>profilex-aluminum-corner-profiles-al-25.png" alt="Aluminum Corner Profiles AL25, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>Profiles, without mesh, produced from aluminum and used for creating a smooth corner at all corner details of the building interiors.<br><br>

AL 25 x 25 x 0,40 Corner Profile<br>
AL 23 x 23 x 0,35 Corner Profile<br>
AL 21 x 21 x 0,30 Corner Profile<br><br>  

Profile Length: 2,7 m<br>
Number Profiles in the package: 50 pieces</p>






<h4>Aluminum Corner Profiles AL38</h4>
<img src="<?php echo $imgDir?>profilex-aluminum-corner-profiles-al-38.png" alt="Aluminum Corner Profiles AL38<, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>It is used in interior rough plaster and roughcast application and produced from aluminum material optionally.<br><br>

AL 38 x 38 x 0,45 Corner Profile<br><br>

Profile Length: 2,7 - 3 m<br>
Number Profiles in the package: 25 pieces
</p>




<h4>Aluminum Corner Profiles AL135</h4>
<img src="<?php echo $imgDir?>profilex-aluminum-corner-profiles-al-135.png" alt="Aluminum Corner Profiles AL135, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>Profiles, without mesh, produced from aluminum and used for creating a smooth corner at all corner details of the buildings.<br><br>

AL 135 Corner Profile<br><br>

Profile Length: 2,7-3 m<br>
Number Profiles in the package: 50 pieces
</p>



<h4>Aluminum Mesh Corner Profiles</h4>
<img src="<?php echo $imgDir?>profilex-aluminum-mesh-corner-profiles.png" alt="Aluminum Mesh Corner Profiles, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>110 g mesh profiles produced from aluminum and used for creating a smooth corner at all corner details of the building interior surfaces.<br><br>

AL 20/20/0,35 F 8/110 Corner Profile<br><br>

Profile Length: 2,5 m<br>
Number Profiles in the package: 25 pieces
</p>




<h4>Galvanized Corner Profiles</h4>
<img src="<?php echo $imgDir?>profilex-galvanized-corner-profiles.png" alt="Galvanized Corner Profiles, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>Galvanized profiles produced for getting a smooth corner in plaster applications in building's interior surfaces.<br><br>

GV 21/21/0,30 Corner Profile<br>
GV 38/38/0,35 Corner Profile<br>

Profile Length: 2,7 m<br>
Number Profiles in the package: 50 pieces
</p>








<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
