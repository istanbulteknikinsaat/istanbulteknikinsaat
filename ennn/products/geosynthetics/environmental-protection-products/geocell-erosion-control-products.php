<?php

  $title = "GeoCell Erosion Control Products";
  $description = "GeoCell Erosion Control Products are manufactured from polyethylene and used for preventing surface erosion that wind and water might cause before plantation at slope lands.";


 $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Environmental Protection Products";
  $breadcrumpLink2 = "environmental-protection-products";

    
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
    <p><b>GeoCell Erosion Control Products</b> are manufactured from polyethylene and used for preventing surface erosion that wind and water might cause before plantation at slope lands. GeoCell is an erosion control product formed by extrusion of high density polyethylene and having a honey-comb geometry. The joints of the bands have an integrated structure which allows for hydraulic flow between the adjacent cells.

  </p>


<h3>Fields of Application and Usage Area</h3>
<p>These products are secured with U-shaped fasteners on the smooth grounds (not rough and prominent) properly compacted in slopes. The materials are fixed to the ground with the anchor ditches formed.</p>

<ul class="subpage-full-list">
  <li>Highway and railroad side slopes</li>
  <li>Pond and channel shore slopes</li>
  <li>Dry channel bottoms and side slopes</li>
</ul>





<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<h3>Advantages</h3>
<ul class="subpage-full-list">
  <li>Because there is no need for expert implementation team, it ensures savings from the labour.</li>
  <li>By means of the raw materials used and production technology, it is long lasting.</li>
  <li>It contributes to environmental protection by preventing erosion and creating infrastructure for greening.</li>
  <li>It also looks good aesthetically because it provides opportunities for greening.</li>
</ul>






<h3>Packing and Storage</h3>
<p>
<b>GeoCell Erosion Control Products,</b> dispatch on pallets.
The materials must be stored on smooth surface. The stored products must be kept away from direct sunlight, heat and combustible sources.

</p>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
