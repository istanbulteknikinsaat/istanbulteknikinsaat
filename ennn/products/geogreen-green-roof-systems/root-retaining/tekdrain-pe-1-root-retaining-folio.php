<?php

  $title = "TekDrain PE 1 Root Retaining Folio";
  $description = "TekDrain PE 1 Root Retaining Folio is manufactured of low density polyethylene (LDPE) in black or different colors, creating a cover resistant against plant roots in black or colorful.";

  $breadcrumpTitle1 = "GeoGreen Green Roof Systems";
  $breadcrumpLink1 = "geogreen-green-roof-systems";

  $breadcrumpTitle2 = "Root Retaining";
  $breadcrumpLink2 = "root-retaining";

     
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
    <p><b><?php echo $title ?>,</b> is manufactured of low density polyethylene (LDPE) in black or different colors, creating a cover resistant against plant roots in black or colorful.
<br><br>

By 10 cm overlapping and by means of machine welding, all points the roots may pass through are closed.<br><br>

It prevents the insulation damaged by the roots of the plants and trees in green roofs.<br><br>

<h3>Packing</h3>
<p>
The materials are dispatched in the form of rolls with 8 m width  and 100 m length
</p>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
