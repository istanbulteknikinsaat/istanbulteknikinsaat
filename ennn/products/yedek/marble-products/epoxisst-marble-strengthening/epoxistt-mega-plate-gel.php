<?php

  $title = "Epoxİstt Mega Plate Gel";
  $description = "Epoxİstt Mega Plate Gel, It is produced in two different types for cold climates and warm climates depending on the regional weather conditions";

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
Epoxy resin filling gel & Gel hardener
</p>

<h3>Mixture Ratio</h3>
<p>
4 Part Epoxİstt Mega Epoxy Block Filling Gel <br>
1 Part Epoxİstt Mega Gel Hardener
</p>

<h3>Fields of Application</h3>
<p>It used for filling the holes and cracks in the structure of natural stone.</p>

<h3>View</h3>
<p>Ice White</p>



<h3>Properties</h3>
<ul class="subpage-full-list">
        <li>Easy to apply.</li>
        <li>Does not collapse.</li>
        <li>In general, it is sufficient for single layer implementation.</li>
        <li>It is produced in two different types for cold climates and warm climates depending on the regional weather conditions.</li>
        <li>Does not require solvents.</li>
        <li>Light odor.</li>
        <li>Adapts to the natural stone view.</li>
        <li>Can be colored with Epoxİstt paint pigments.</li>
</ul>


<h3>Surface Preparation</h3>
<p>Surface of the natural stone on which the filling gel will be applied should be free from dust, oil, dirt and clay.</p>


<h3>Usage</h3>
<p>The amount of filling gel to be used should be taken from 4 units of A and 1 unit of B components and should be mixed homogenously on the surfaces, preferably on the shiny polished surfaces such as tiles, at least 90 seconds and the product should be applied when it comes to transparent consistency.
</p>


<h3>Storage</h3>
<p>The product can be stored artight in the moisture-free and out of of exposure to direct sunlight environment at 15-25 °C for one year.</p>

<h3>Health and Safety</h3>
<ul class="subpage-full-list">
      <li>Provide adequate ventilation during application.</li>
      <li>Use protective equipment such as protective glass and gloves.</li>
      <li>Do not direct contact with the product and inhale the steam.</li>
      <li>Keep away from any flame source.</li>
      <li>Store in a well-ventilated area.</li>
</ul>
        <?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>   
        <?php include $dirPosition.'technical.php'; ?>
</div>









<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
