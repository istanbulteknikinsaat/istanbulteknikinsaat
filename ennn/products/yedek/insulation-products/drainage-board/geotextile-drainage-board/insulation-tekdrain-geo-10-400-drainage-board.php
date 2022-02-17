<?php

  $title = "TekDrain Geo 10/400 Drainage Board";
  $description = "TekDrain Geo 10/400 Drainage Board prevents blockage of waste gap around the blister with its integrated geotextile cover. It has high drainage capacity. The air gap between the blisters enables safe drainage of flowing water and protection of the structure. Drainage board has high compression strength and important technical specifications for tunnel and infrastructure applications.";

  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Drainage Board";
  $breadcrumpLink2 = "drainage-board";

      
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
    <p><b><?php echo $title ?>,</b> prevents blockage of waste gap around the blister with its integrated geotextile cover. It has high drainage capacity. The air gap between the blisters enables safe drainage of flowing water and protection of the structure. Drainage board has high compression strength and important technical specifications for tunnel and infrastructure applications.<br> <br> <b> TekDrain Geo 10/400 Drainage Board;</b> is preferred for sub roads, parking lots, bridges and garages for its high drainage performance.
</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
