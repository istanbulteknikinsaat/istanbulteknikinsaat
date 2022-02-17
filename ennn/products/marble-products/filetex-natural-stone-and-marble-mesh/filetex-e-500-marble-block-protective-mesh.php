<?php

  $title = "FileTex E 500 Marble Block Protective Mesh";
  $description = "FileTex E 500 Marble Block Protective Mesh is an E Glass protective mesh made of glass fiber. FileTex E 500 Marble Block Protective Mesh prevents breakings in marble before rock- gangsaw cutting when it is used with epoxy gel.";

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
    <p><b><?php echo $title ?>,</b> is an E Glass protective mesh made of glass fiber.</p>


<p>
  <b>FileTex E 500 Marble Block Protective Mesh</b>, prevents breakings in marble before rock- gangsaw cutting when it is used with epoxy gel.

</p>

<h3>Warnings</h3>
   <ul class="subpage-full-list">
        <li>Store in cool, dry place.</li>
        <li>Provide adequate ventilation during use.</li>
        <li>Use gloves during application.</li>
        <li>Glass fiber particles are irritating to the skin.</li>
        <li>Keep horizontally.</li>
   </ul>


<h3>Packaging</h3>
<p>
Dispatched with the rolls in sizes of 1 - 2 / 50 m on pallets.
</p>


        <?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>   
        <?php include $dirPosition.'technical.php'; ?>

</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
