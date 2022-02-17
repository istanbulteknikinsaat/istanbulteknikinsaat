<?php

  $title = "ForTex GT Woven Geotextile";
  $description = "ForTex GT Woven Geotextile is a woven geotextile produced by knitting process using of pure polypropylene yarn one in the direction of production and the other in the direction perpendicular to the production.";


  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Geogrid";
  $breadcrumpLink2 = "geogrid";

    
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
    <p><b>ForTex GT Woven Geotextile</b> is a woven geotextile produced by knitting process using of pure polypropylene yarn one in the direction of production and the other in the direction perpendicular to the production.
</p>


<h3>Fields of Application and Usage</h3>
<ul class="subpage-full-list">
    <li>Increases the ground bearing strength of the buildings to be built on soft and poor grounds.</li>
    <li>Since it creates low elongation under high tensile strength, it is used as a reinforcing layer in the roads. It minimizes the deformations such as undermining caused by uniform subsidence and vehicle wheels.</li>
    <li>It prevents interference of the sub-base materials with the ground, keeps the load-carrying capacity and minimizes the loss of material used in the filling.</li>
    <li>By absorbing a portion of the load and creating a force in the opposite direction at the edge of the area where a local collapse has been occurred, prevents the degradation of the ground especially in road constructions.</li>
    <li>While geogrid-reinforced GeoArme structures are recommended especially in slope stability, woven geotextiles can also be used. This application prevents the loss of soil in case of flooding.</li>
</ul>
<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
</div>

<div class="wrapper">
  <h3>Packaging and Storage</h3>
  <p>
  The products are dispatched as rolls with the width between 5.0 – 5.25 m and length of 100 m.<br>
  Materials should be stored in a flat ground.<br>
  Stored products should be kept away from heat and ignition sources.
  </p>
</div>




</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
