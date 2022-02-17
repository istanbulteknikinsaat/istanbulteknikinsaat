<?php

  $title = "FileTex 75 Natural Stone and Marble Fitting Mesh";
  $description = "FileTex 75 Natural Stone and Marble Fitting Mesh, is a protective mesh made of glass fiber. strengthens the marble and natural stones and prevents breaks  during handling and cutting when it is used with epoxy resin.";

  $breadcrumpTitle1 = "Marble Products";
  $breadcrumpLink1 = "marble-products";

  $breadcrumpTitle2 = "";
  $breadcrumpLink2 = "";

    
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
    <p><b><?php echo $title ?>,</b> is a protective mesh made of glass fiber.</p>

<h3>Fields of Usage</h3>
<p><b>FileTex 75 Natural Stone and Marble Protective Mesh,</b> strengthens the marble and natural stones and prevents breaks  during handling and cutting when it is used with epoxy resin.
</p>


<h3>Warnings</h3>
<ul class="subpage-full-list">
    <li>Keep in a cool and dry environment.</li>
    <li>Provide adequate ventilation during use.</li>
    <li>Use gloves during application.</li>
    <li>Glass fiber particles are irritating to the skin.</li>
    <li>Keep vertically.</li>
</ul>

<h3>Packaging</h3>
<p>Dispatched with the rolls in sizes of 1 - 1,8 / 300 m on pallets.<br>
1 pallet consists of 16 rolls.
</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
