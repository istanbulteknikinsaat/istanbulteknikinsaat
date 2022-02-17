<?php

  $title = "TeraGrip Anti Stripping Agents";
  $description = "Additives also known as DOP, increases peeling resistance and provides a strong bond occurs between the bitumen and the aggregate. Using  TeraGrip  prolongs the life of the asphalt road with a very reasonable additional cost to the total cost of asphalt materials. İstanbul Teknik has always been innovative and creative on the subject of asphalt chemicals. We attach importance to human & environmental and we therefore develop innovative products for creating more economical and firmer bitumen road coatings.";

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
    <p>Additives also known as DOP, increases peeling resistance and provides a strong bond occurs between the bitumen and the aggregate. Using  TeraGrip  prolongs the life of the asphalt road with a very reasonable additional cost to the total cost of asphalt materials. İstanbul Teknik has always been innovative and creative on the subject of asphalt chemicals. We attach importance to human & environmental and we therefore develop innovative products for creating more economical and firmer bitumen road coatings.</p>



<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>YThe reason for major degenerations that occur on the surface such as reveling, detachment, holes and cracks is the peeling of bitumen from the surface and insufficient levels of peeling resistance and adhesion.</li>
    <li>YThe adhesion between the aggregate and bitumen is effected by the physical, chemical and mineralogical properties of the aggregate in the asphalt concrete and the chemical properties of bitumen.</li>
    <li>YIn order that the water-loving aggregate can warp the bitumen, the surface tension of bitumen should be close or equal to the aggregate in terms of greatness. TeraGrip effect the surface tension and allows it to wrap the aggregate better. It prevents the bitumen from peeling off the aggregate and prolongs the life of the asphalt coating.</li>
    <li>YIt increases the adhesion between the bitumen and the aggregate and corrects the indirect pulling strength (ICM) of asphalt. TeraGrip is manufactured from poliphosphoric acid. It does not have a irritating smell like amino additives. TeraGrip yields perfect results with limestone and with miscellaneous aggregates such as basalt and granite that have high silica ratios.</li>
</ul>


<h3>Application</h3>
<ul class="subpage-full-list">
  <li>Peeling-preventive additives are generally used in bitumen hot mixtures (BSK) and surface dressing applications.</li>
  <li>The peeling-preventive additive should be mixed with bitumen in servicing tanks.</li>
  <li>It is mixed in the bitumen tank between ratios of %0.1 and %0.4.</li>
  <li>They can be solid or liquid in different active groups.</li>
  <li>Its physical shape has no effect on the dosage quantity.</li>
  <li>The dosage quantity is determined by the activeness degree of the additive used.</li>
  <li>TeraGrip can be used within hot bitumen for long time without degradation in its stability.</li>
</ul>

<h3>Packaging and Storage</h3>
<p>
It should be stored away from sun and moisture.
It is supplied in 20 kg cans, 20 kg paper craft bags, 180 kg barrels or 1000 kg IBC’s.
</p>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
