<?php

  $title = "TekDrain GFC 100 Pyramid Pitched Roof Soil Cell";
  $description = "TekDrain GFC 100 Pyramid Pitched Roof Soil Cell made from recycled polyethylene is used as protector against the shear force in the pitched green roofs and as a reinforcing element in paths.";

  $breadcrumpTitle1 = "GeoGreen Green Roof Systems";
  $breadcrumpLink1 = "geogreen-green-roof-systems";

  $breadcrumpTitle2 = "TekDrain";
  $breadcrumpLink2 = "tekdrain";

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
    <p>TekDrain GFC 100 Pyramid Pitched Roof Soil Cell made from recycled polyethylene is used as protector against the shear force in the pitched green roofs and as a reinforcing element in paths.</p>



<h3>Areas of Use</h3>
<ul class="subpage-full-list">
    <li>It is used as a protector against the shear force in the pitched green roofs,</li>
    <li>as a reinforcing element in roads,</li>
    <li>to provide resistance to slide and as an additional sliding barrier by connecting with fixed eaves in green pitched roofs,</li>
    <li>as a reinforcing element in gravel and grass paths.</li>
</ul>


<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is used in roofs pitched until 40 degrees.</li>
    <li>Although it’s lightweight, it has a high load carrying capacity and shear strength.</li>
    <li>Thanks to its T-shaped latches, it offers a possibility of complete strengthening in the area where the application is made.</li>
    <li>It allows comfortable walking on it.</li>
    <li>After the installation of the system and covering with soil car can be driven easily on it.</li>
    <li>It has a water permeability.</li>
    <li>It is an eco-friendly product in terms of providing large root zone.</li>
    <li>It has different applications.</li>
</ul>

<h3>Packaging and Storage</h3>
<p>1 square meter 4,16; Dispatched on pallet of 96 units. The items should be stored protected from UV.;<br>
  100 square meter is 480 units. 
</p>

<h3>Installation and Instructions</h3>
<ul class="subpage-full-list">

    <li>Install the TekDrain GFC 100 Pyramid to protection layer by taking into account the mounting direction.</li>
    <li>Connect the units each other with T-shaped connection latches.</li>
    <li>Cut the drain element in roof depth and along the sides. Cut the drainage member at the application area alongside the corners and at the depth of the roof.</li>
    <li>TekDrain GFC 100 Pyramid should be stored not to exposure to UV rays and installation should be performed.</li>
    <li>5 units of GFC 100 covers an area of 1,042 sqm. So, in an application area of 100 sqm., 480 units are used.</li>
</ul>



<h3>Warnings</h3>
<p>
<b>If TekDrain GFC 100 Pyramid</b> is used within the above-mentioned instructions, it does not create any health and safety hazards.
</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
     
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
