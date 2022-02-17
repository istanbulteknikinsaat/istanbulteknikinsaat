<?php

  $title = "Epoxİstt Ultra Block Gel";
  $description = "Epoxİstt Ultra Block Gel, In general, single layer implementation is sufficient with its specially developed formulation. It is produced in two different types for cold climates and warm climates depending on the regional weather conditions.";

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
Epoxy filling gel and gel hardener
</p>

<h3>Mixture Ratio</h3>
<p>
4 Unit Epoxİstt Ultra Block Filling Gel / 1 Part Epoxİstt Ultra Block Gel Hardener
</p>

<h3>Fields of Application</h3>
<p>It can be used safely to strengthen the plates to be obtained by wrapping the crushing cracks with bundling method and reducing the cutting loses, by applying with the reinforcement mesh before gang saw of the marble blocks.
</p>

<h3>View</h3>
<p>Ice White</p>



<h3>Properties</h3>
<ul class="subpage-full-list">
      <li>Easy to apply.</li>
      <li>Does not collapse.</li>
      <li>In general, single layer implementation is sufficient with its specially developed formulation. It is produced in two different types for cold climates and warm climates depending on the regional weather conditions.</li>
      <li>Does not require solvents.</li>
      <li>Odorless.</li>
      <li>Closer.</li>
      <li>Adapts to the block view.</li>
      <li>Can be colored with Epoxİstt paint pigments.</li>      
</ul>


<h3>Surface Preparation</h3>
<p>Surface of the natural stone on which the block gel will be applied should be free from dust, oil, dirt and clay.</p>


<h3>Usage</h3>
<ul class="subpage-full-list">
  <li>The amount of block filling gel to be used consists of 4 parts of gel and 1 part of hardener. The components, should be mixed homogenously on the surfaces, preferably on the shiny polished surfaces such as tiles, at least 90 seconds and the product should be used when it comes to transparent consistency.</li>
  <li>Using materials like metal spatula or trowel is recommended for implementation.</li>
</ul>



<h3>Storage</h3>
<p>The product can be stored airtight in the moisture-free out of exposure of sunlight environment at 15-25 °C for one year.</p>

<h3>Health and Safety</h3>
<ul class="subpage-full-list">
    <li>Provide adequate ventilation during application.</li>
    <li>Use protective equipment such as protective glass and gloves.</li>
    <li>Do not direct contact with the product and inhale the steam.</li>
    <li>Keep away from open flame sources.</li>
    <li>Do not store in a poor-ventilated area.</li>
</ul>
        <?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>   
        <?php include $dirPosition.'technical.php'; ?>
</div>









<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
