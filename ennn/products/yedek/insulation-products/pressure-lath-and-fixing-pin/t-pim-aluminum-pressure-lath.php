<?php

  $title = "T-Pim Aluminum Pressure Lath";
  $description = "T-Pim Aluminum Pressure Lath, made of aluminum, is designed with single lug, ensuring the drainage boards and bitumen membranes in their beginnings and ends downward like a curtain in the curtain insulation; and in addition, applied to prevent water to pass through the wall by leaking between the wall and membrane in the beginnings and ends of the bitumen membranes.";

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
    <p><b><?php echo $title ?>,</b> made of aluminum, is designed with single lug, ensuring the drainage boards and bitumen membranes in their beginnings and ends downward like a curtain in the curtain insulation; and in addition, applied to prevent water to pass through the wall by leaking between the wall and membrane in the beginnings and ends of the bitumen membranes.</p>




<h3>Fields of Usage</h3>
<ul class="subpage-full-list">
  <li>For fixing of drainage board in the curtain insulation,</li>
  <li>At the beginning  and at the end profile in the bitumen membrane applications.</li>
</ul>

<h3>Advantages</h3>
<ul class="subpage-full-list">
  <li>It takes off the filling load on the drainage board.</li>
  <li>It prevents ingress of water flowing on the wall surface through weak points when applied with putty in the bitumen membrane applications.</li>
</ul>

<h3>Technical Specifications</h3>
<p>
<b>Raw material : </b>It is made of aluminum.<br>
<b>Length : </b>3 m <br>
<b>Width : </b>3 cm normal widthand 1 cm of lug width;totally 4 cm.
</p>


<h3>Packing and Storage</h3>
<p>
Press bars in length of 3m are shipped in 50 pieces packages.<br>
They may be stored vertically and horizontally.

</p>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>     
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
