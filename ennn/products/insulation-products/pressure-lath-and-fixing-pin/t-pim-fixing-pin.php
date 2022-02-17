<?php

  $title = "T-Pim Fixing Pin";
  $description = "T-Pim Fixing Pin, is a fixing element which ensures the drainage boards and thermal insulation boards used in the curtain wall insulation for protection purpose to remain on the wall more safely during filling.";


  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Pressure Lath and Fixing Pin";
  $breadcrumpLink2 = "pressure-lath-and-fixing-pin";


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
    <p><b><?php echo $title ?>,</b> is a fixing element which ensures the drainage boards and thermal insulation boards used in the curtain wall insulation for protection purpose to remain on the wall more safely during filling.</p>

<h3>Fields of Usage and Advantages</h3>
<p>
It ensures fixing of the drainage boards and thermal insulation materials on the wall. 
It is also used as fixing element for insulation of the vent pipes.
</p>

<ul class="subpage-full-list">
    <li>It is adhered on the membrane to keep the thermal insulation plates on the board during the curtain insulation,</li>
    <li>It ensures to keep the drainage board on the surface under the applied load with the filling  6 fixing  pins/m² used on the unit area.</li>
</ul>

<h3>Technical Specifications</h3>
<ul class="subpage-full-list">
    <li>Fixing pins are produced in length of4, 6, 8, 10 cm.</li>
    <li>It has 4-cm adhesive metal surface film.</li>
    <li>Those 4, 6, 8 cm are galvanized. The nails of 10cm fixing pins are made of aluminum.</li>
    <li>The nails of 4, 6, 8 bitumen self-adhesive fixing pins are made of PVC.</li>
</ul>

<h3>Packing and Storage</h3>
<p>Fixing pins in length of 4, 6, 8 are shipped in 500’s cartons and fixing pins of 10 cm in 400’s cartons.</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>   
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
