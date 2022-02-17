<?php

  $title = "GeoTeknik 1100 Non-Woven Filtration Geotextile";
  $description = "GeoTeknik 1100 Non-Woven Filtration Geotextile, is a non-woven textile product in white color which is manufactured by the method of knitting the pure polypropylene-based fibers much thinner than millimeter and implementation of thermal treatment as to be filtration material.";

  $breadcrumpTitle1 = "GeoGreen Green Roof Systems";
  $breadcrumpLink1 = "geogreen-green-roof-systems";

  $breadcrumpTitle2 = "Non-Woven Geotextiles";
  $breadcrumpLink2 = "non-woven-geotextiles";

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
    <p><b><?php echo $title ?>,</b> is a non-woven textile product in white color which is manufactured by the method of knitting the pure polypropylene-based fibers much thinner than millimeter and implementation of thermal treatment as to be filtration material.
</p>



<h3>Fields of Application and Usage</h3>
<p>
  <b>GeoTeknik 1100 Non-Woven Filter Geotextile,</b> is used as in-between filter material to prevent the fine material from blocking pores of other material or avoid formation of washing phenomenon in the cases where coarse and fine materials are used together for the engineering applications. In order to prevent slippage of geotextile during the filling process, it should be applied with an overlap of 20 cm minimum under the previous geotextile. <b>GeoTeknik 1100 Non-Woven Filter Geotextile</b> white and non-woven geotextile material which is recommended as filtering and bearing material for control and direction of the water effectively is used in the following areas.

</p>


<ul class="subpage-full-list">
    <li>Green-roof drainage</li>
    <li>French drains</li>
    <li>Perforated pipe coverings</li>
    <li>Vertical applications such as tunnel and retaining wall</li>
    <li>Seaside buildings</li>
</ul>


<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is produced by using pure polypropylene fibers.</li>
    <li>It has a structure with homogeneously distributed fibers by means of tight knitting and advanced production technology</li>
    <li>It ensures fast application advantage by ensuring savings on material and labor with minimum overlap in large areas by means of the opportunity of manufacturing up to a width of 6 m.</li>
</ul>

<h3>Packaging and Storage</h3>
<p>The materials are dispatched in the form of rolls with 3 m width and 100 m length.</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
