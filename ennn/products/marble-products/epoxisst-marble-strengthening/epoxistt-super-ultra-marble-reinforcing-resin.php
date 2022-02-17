<?php

  $title = "Epoxİstt Super Ultra Marble Reinforcing Resin";
  $description = "Epoxİstt Super Ultra Marble Reinforcing Resin, It penetrates very well into all capillary cracks with very low viscosity.";

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

<h3>Definition</h3>
<p>
Ultra epoxy based marble strengthening resin
</p>

<h3>Mixture Ratio</h3>
<p>
4 Units Epoxİstt Super Ultra Epoxy Based Resin<br>
1 Unit Epoxİstt Super Ultra Hardener

</p>

<h3>Field of Application</h3>
<p>It can be applied for all marbles which will be used indoor and outdoor. It is suitable for fillings the widthwise and lengthwise cracks less than 2 mm in thin capillary (tension) cracks.
</p>

<h3>Properties</h3>
<ul class="subpage-full-list">
      <li>It does not lose its shine in polishing and finishing processes.</li>
      <li>Light odor.</li>
      <li>It penetrates very well into all capillary cracks with very low viscosity.</li>
      <li>Easy to apply.</li>
      <li>Does not require solvents.</li>
      <li>Adapts to the natural stone view.</li>
      <li>Low viscosity.</li>
      <li>Recommended to use with FileTex Marble Mesh.</li>
</ul>



<h3>Surface Preparation</h3>
<ul class="subpage-full-list">
    <li>Surface of the natural stone on which the strengthening liquid epoxy will be applied should be free from dust, oil, dirt and clay.</li>
    <li>Moisture content of the application surface should be maximum 4%.</li>
    <li>Surface temperatureshould be minimum 25 °C.</li>
    <li>4 units for A component and 1 unit for B component must be weighed and proportioned.</li>
</ul>



<h3>Usage</h3>
<p>The amount of strengthening liquid epoxy to be used should be taken from the package; if there is not recommended mixers (adjustable speed drills, etc.), resin and hardener components should be mixed with spatula or stick homogenously for at least 45 seconds in a plastic container and the product should be used when it comes to transparent consistency.</p>

<h3>Storage</h3>
<p>The product can be stored airtight in the moisture-free and out of exposure to sunlight environments at 15-25 °C for one year.</p>

<h3>Health and Safety</h3>
<ul class="subpage-full-list">
    <li>Provide adequate ventilation during application.</li>
    <li>Use protective equipment such as protective glass and gloves.</li>
    <li>Do not direct contact with the product and inhale the steam.</li>
    <li>Keep away from open flame sources.</li>
    <li>Store in well-ventilated areas.</li>
</ul>
        <?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>   
        <?php include $dirPosition.'technical.php'; ?>
</div>










</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
