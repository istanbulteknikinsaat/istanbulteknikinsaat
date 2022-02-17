<?php

  $title = "TekDrain GDL 500/150 Drainage Board";
  $description = "TekDrain GDL 500/150 Drainage Board, is a drainage board with protective geotextile and filter layer manufactured from high density polyethylene (HDPE), resistant to plant roots thus protecting the curtain wall against water and humidity by assuring draining of water by means of geotextile.";

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
    <p><b><?php echo $title ?>,</b> is a drainage board with protective geotextile and filter layer manufactured from high density polyethylene (HDPE), resistant to plant roots thus protecting the curtain wall against water and humidity by assuring draining of water by means of geotextile.</p>



<h3>Fields of Application and Advantages</h3>
<p>It is recommended to use the product in order to protect the waterproofing and thermal insulation systems applied at curtain wall insulations of the buildings, and also assuring drainage of water from the drainage pipe by draining the water from the curtain wall surface by means of geotextile. It protects the waterproofing and thermal insulation system during the earth filling. The air between the bubbles enables the curtain wall to breathe. The product assures equal distribution of the pressure acted by the earth load, distributes the load that can act to a single point and also ensures drainage of water.
</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
