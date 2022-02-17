<?php

  $title = "Asphalt Chemicals";
  $description = "We recommend using antikerosene protectors to protect the asphalt surface from the solvent effects of hydrocarbons such as gasoline or diesel fuel in areas like airports or petroleum stations.";

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
    


<h3>Antikerosene Protectors</h3>
<img src="<?php echo $imgDir?>antikerosene-protectors.png" alt="Antikerosene Protectors, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>We recommend using antikerosene protectors to protect the asphalt surface from the solvent effects of hydrocarbons such as gasoline or diesel fuel in areas like airports or petroleum stations.</p>

<p>Either of two different products below should be preferred depending on the application:</p>
<ul class="subpage-full-list">
    <li>It's applied as a thin layer over asphalt coating and ensure protection for years. Application is made in the desired color.</li>
    <li>It's added to the mixture during asphalt production. It renders asphalt resistant against fuels and solvents.</li>
</ul>



<h3>Polymer Modified Bitumen (PmB) Stabilizer</h3>
<!-- <img src="<?php echo $imgDir?>polimer-modifiye-bitum-pmb-stabilazoru.png" alt="Polimer Modifiye Bitüm (PmB) Stabilazörü, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>"> -->
<p>
Polymer modified bitumen (PmB) is obtained by homogeneously mixing SBS and bitumen. But this is a physical mixture and storing stability is low as there are no chemical bonds between SBS and bitumen. Chemical additives that create cross bonds are needed for obtaining a more homogeneous mixture through the creation of chemical bonds and for increasing PmB storing stability and polymerization. The PmB stabilizer creates a chemical bond between bitumen and SBS, prevents decomposition and increases the stability for storage and transportation.
</p>



<h3>Asphalt Colorizers</h3>
<img src="<?php echo $imgDir?>asphalt-colorizers.png" alt="Asphalt Colorizers <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>Colorizers are used for colorizing the asphalt road coatings for an esthetic look. The surface of the asphalt coating is covered by a shiny color special dye that does not crack. It is available in yellow, green, blue and red colors.</p>
<ul class="subpage-full-list">
  <li>It has a single component.</li>
  <li>It is applied in 2 mm-thickness.</li>
  <li>With its silicon content, it defies the years.</li>
</ul>


<h3>Transparent Binder (Clear Binder)</h3>
<img src="<?php echo $imgDir?>transparent-clear-binder.png" alt="Transparent Binder (Clear Binder), <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>This product represents a transparent special binder that is used as a replacement for black classic bitumen, which has been developed for manufacturing roads in different colors. Road can be manufactured in desired colors ranging from natural soil color to bright red, or more lively light blue, yellow or green. It allows to manufacture asphalt in desired colors and with the same properties in classical bitumen roads. It is applied in city squares, pedestrian paths, archeological areas, areas with important environmental factors, bicycle and special driving roads and parking areas.</p>


<h3>Rejuvenator for Recycled Bitumen Hot Mixtures</h3>
<img src="<?php echo $imgDir?>rejuvenator-for-recycled-bitumen-hot-mixtures.png" alt="Rejuvenator for Recycled Bitumen Hot Mixtures, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>Rejuvenators for recycled bitumen hot mixtures are used for modifying & improving the chemical and physical properties of the aged bitumen, which is included in the mixture that is obtained by shaving off the road. It provides that the coating relayed, which is manufactured from shaved asphalt, becomes more flexible. It is used in all kinds of hot mixtures, which have been prepared in the plant or in place and for which shaved material is used. It enables a better adhesion between aggregate and the bitumen, it lowers viscosity and with its antioxidant effect, it regains bitumen properties that are lost due to ageing effect.</p>



<h3>Rejuvenator for Recycled Bitumen Cold Mixtures</h3>
<img src="<?php echo $imgDir?>rejuvenator-for-recycled-bitumen-cold-mixtures.png" alt="Rejuvenator for Recycled Bitumen Cold Mixtures, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>
Rejuvenators for recycled bitumen cold mixtures are used for regaining the chemical and physical properties of the aged bitumen, which is shaved off the road. It increases the binding properties of bitumen emulsions.</p>
<ul class="subpage-full-list">
    <li>Onsite cold recycling is applied.</li>
    <li>It increases the adhesion effect between the aggregate and the bitumen emulsion.
</li>
</ul>
<p>
And with its wetting feature, it also increases the usability of the material shaved off the road.
</p>




<h3>Adhesion Preventer and Bitumen Cleaning Materials</h3>
<img src="<?php echo $imgDir?>adhesion-preventer-and-bitumen-cleaning-materials.png" alt="Adhesion Preventer and Bitumen Cleaning Materials, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">
<p>
It is a special adhesion preventive material for bitumen that does not include any dangerous solvents. At sites however, solvents like diesel fuel are generally used but these damage the asphalt. It does not damage the asphalt as its structure does not contain any solvents. 
<br><br>
At the worksite, the bitumen prevents that asphalt glues on materials like the following;
</p>
<ul class="subpage-full-list">
    <li>Truck Dumper</li>
    <li>Cylinder</li>
    <li>Shovel, etc...</li>
</ul>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>


</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
