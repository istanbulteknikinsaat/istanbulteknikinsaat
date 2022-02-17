<?php

  $title = "FluxerA Cold Asphalt Patch Additive";
  $description = "The FluxerA Cold Asphalt Patch Additive represents an additive material that allows an asphalt mixture, which is manufactured as a bitumen hot mixture, to be stored inside bags or in bulk without degenerating for months after it is cooled.";

 $breadcrumpTitle1 = "Asphalt Products";
  $breadcrumpLink1 = "asphalt-products";

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
    <p><b><?php echo $title ?>,</b> represents an additive material that allows an asphalt mixture, which is manufactured as a bitumen hot mixture, to be stored inside bags or in bulk without degenerating for months after it is cooled.
</p>


<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>Following asphalt production, the gluing of aggregate particles, which are coated with bitumen throughout the stocking period, with each other is prevented by oils. But when the asphalt is discharged into coves, it perfectly hardens in a short time due to the special prescription of the additive.</li>
    <li>Asphalt manufactured with FluxerA  is resistant against cracks.</li>
    <li>The asphalt patch manufactured with the FluxerA additive allows application under cold and humid weather conditions.</li>
    <li>No additional equipment is needed for patching. Its application is quite easy.</li>
    <li>The road can be opened to traffic immediately following application.</li>
</ul>


<h3>Application</h3>
<ul class="subpage-full-list">
      <li>It is made of materials that do not include tar and kerosene. It provides perfect machinability and plasticity properties to the cold asphalt mixture. The manufactured asphalt can be stored in bulks or in airtight bags.</li>
      <li><b>FluxerA</b> is directly added to the plant mixer immediately after the addition of bitumen.</li>
      <li>The recommended bitumen penetration should be 70/100 dmm and %4,0 - %4,5 of the aggregate weight.</li>
      <li><b>FluxerA</b>  is used between %20 - %30 of the bitumen weight. Dosage may vary depending on the desired plasticity of the patch, storage duration, bitumen type & quantity and the aggregate gradation.</li>
      <li>We recommend washed and dried aggregate between 3-6 mm.</li>
      <li>The plentte aggregate temperature should be maximum 110 °C.</li>
</ul>



<h3>Packaging and Storage</h3>
<p>
 Protect from weather conditions such as rain and snow and keep away from sources of heat during storage.<br>
It is supplied in 180 kg barrels or in 900 kg IBC.
</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
