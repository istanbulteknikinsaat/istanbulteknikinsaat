<?php

  $title = "PrimaFlexWater Retainer Tape";
  $description = "PrimaFlexWater Retainer Tape, is sodium bentonite and butyl rubber based water retainer tape. It swells when in contact with waterand fills all cracks, pores and capillary gaps in the concrete. It makes the concrete joints waterproof.";

  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";
  
  $breadcrumpTitle2 = "Tapes";
  $breadcrumpLink2 = "tapes";
      
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
    <p><b><?php echo $title ?>,</b> is sodium bentonite and butyl rubber based water retainer tape. It swells when in contact with waterand fills all cracks, pores and capillary gaps in the concrete. It makes the concrete joints waterproof.</p>



<h3>Fields of Usage</h3>
<ul class="subpage-full-list">
    <li>Pool</li>
    <li>Water tank</li>
    <li>Water treatment plant</li>
    <li>Retaining wall</li>
    <li>Manhole</li>
    <li>Foundation and curtain concrete joints in garage constructions.</li>
    <li>Tunnel segments</li>
    <li>It is used as water retaining tape in cold joints of the old and new concretes.</li>
    <li>In the joints of steel profiles and pipes with the concrete</li>
    <li>It is used as water retaining flange in PVC pipe inputs and outputs.</li>
</ul>



<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>The application  is extremely easy. Frequently seen application  errors are not encountered in PVC water retaining tapes.</li>
<li>One person can apply up to 130 meters per hour.</li>
<li>It can easily applied even in more reinforced layers.</li>
<li>Combination of the joints is simply to lay together and suppress.</li>
<li>The product is packed into 7 meters of rolls that one person can apply it easily.</li>
<li>Because it swells controlled ideally, it does not swell suddenly in unset concrete.</li>
</ul>





<h3>Surface Preparation</h3>
<ul class="subpage-full-list">
  <li>The surface must be clean and dry.</li>
  <li>It should not be applied in wet, icy, oily, muddy and dusty surface and rainy weather conditions.</li>
  <li>Minimum concrete thickness should be 12 cm.</li>
</ul>


<h3>Application</h3>
<ul class="subpage-full-list">
    <li>Unwind the sufficient length of Prima Flex from the roll.</li>
    <li>Stick the exposed surface of the Prima Flex to the concrete. In vertical and upside-down applications, press for at least 15 seconds to ensure good adhesion.</li>
    <li>Set the joints side by side in 10 cm; do not overlap.</li>
    <li>In the surfaces which are not properly shaped, take care to touch the tape to every point of the surface.</li>
    <li>Remove the silicone paper by slipping and pour the concrete in controlled manner.</li>
</ul>



<h3>Packing and Storage</h3>
   <ul>
      <li>5 mm x 20 mm x 15 m</li>
      <li>5 mm x 10 mm x 15 m</li>
      <li>10 mm x 15 mm x 15 m</li>
      <li>7 mm x 20 mm x 15 m</li>
      <li>10 mm x 20 mm x 12 m</li>
      <li>15 mm x 20 mm x 5 m</li>
      <li>20 mm x 25 mm x 5 m</li>
      <li>Ø 20 mm x 5 m</li>
    </ul>

  <p>
   In dry and cool conditions, one year after the date of manufacture.<br>
   Do not expose to direct sunlight and heat.<br>
   Do not leave open the box cover.
  </p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
