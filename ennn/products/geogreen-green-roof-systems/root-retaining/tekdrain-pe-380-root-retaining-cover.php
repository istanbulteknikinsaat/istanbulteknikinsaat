<?php

  $title = "TekDrain PE 380 Root Retaining Cover";
  $description = "TekDrain PE 380 Root Retaining Cover, is manufactured of low density polyethylene in black or different colors, creates a cover resistant against plant roots.";

  $breadcrumpTitle1 = "GeoGreen Green Roof Systems";
  $breadcrumpLink1 = "geogreen-green-roof-systems";

  $breadcrumpTitle2 = "Root Retaining";
  $breadcrumpLink2 = "root-retaining";

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
    <p><b><?php echo $title ?>,</b> is manufactured of low density polyethylene in black or different colors, creates a cover resistant against plant roots.<br><br> 

</p>

<h3>Areas of Use and Advantages</h3>
  <p>It is a versatile material that is used to avoid damaging the insulation of plant and tree roots in green roofs and also used as a vapor barrier between two concrete sets.<br><br>

  The rolls should be laid in overlapping a minimum of 1 m.<br>
  It prevents damaging the insulation of the plant roots.<br>
  By using between two concretes it prevents the ascent of moisture and vapor from the bottom.
</p>




<h3>Packing and Storage</h3>
<p>The materials are dispatched in the form of rolls with 5 m – 8 m width and 30m length.<br>
Should be stored in horizontal way.<br><br>
</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
