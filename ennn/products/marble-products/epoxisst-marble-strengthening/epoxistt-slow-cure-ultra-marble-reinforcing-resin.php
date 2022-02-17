<?php

  $title = "Epoxİstt Slow Cure Ultra Marble Reinforcing Resin";
  $description = "Epoxİstt Slow Cure Ultra Marble Reinforcing Resin,Odorless. It has a transparent appearance. It has thin structure with high viscosity slow liquidity. Less abrasive erosion. Easy to apply.";

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
Slow Cure ultra epoxy based marble reinforcing resin
</p>

<h3>Mixture Ratio</h3>
<p>
4 Units Epoxİstt Ultra Epoxy Based Resin<br>
1 Unit Epoxİstt Ultra Hardener
Resin and hardener should be mixed at least 30-60 seconds.

</p>

<h3>Field of Application</h3>
<p>It is suitable for all marbles which will be used indoor and outdoor. It is ideal for filling the cracks larger than 2 mm for multi storey oven applications.</p>

<h3>Properties</h3>
<ul class="subpage-full-list">
      <li>Odorless. It has a transparent appearance.</li>
      <li>It has thin structure with high viscosity slow liquidity.</li>
      <li>Less abrasive erosion.</li>
      <li>Easy to apply.</li>
      <li>Does not require solvents.</li>
      <li>Adapts to the natural stone view.</li>
      <li>Low viscosity.</li>
      <li>Recommended to use with FileTex Marble Mesh.</li>
</ul>


<h3>Surface Preparation</h3>
<ul class="subpage-full-list">
  <li>Surface of the natural stone on which the strengthening will be applied should be free from dust, oil, dirt and clay.</li>
  <li>Moisture content of the application surface should be maximum 4%.</li>
  <li>Surface temperatureshould be minimum 25 °C.</li>
</ul>





<h3>Usage</h3>
<p>The amount of strengthening liquid epoxy to be used should be taken from the package, resin and hardener components should be mixed with spatula or stick homogenously for at least 30-60 seconds in a plastic container and the product should be used when it comes to transparent consistency.</p>

<h3>Storage</h3>
<p>The product can be stored airtight in the moisture-free and out of exposure to direct sunlight environments at 15-25 °C for one year.</p>

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
