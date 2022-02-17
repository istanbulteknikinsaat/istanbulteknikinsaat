<?php

  $title = "Epoxİstt MeshAdhesives";
  $description = "EpoxİsttMesh Adhesives, are Polyvinyl Acetate Emulsion. It is used for bonding the marble, travertine and all kinds of natural stone to the mesh.";

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


<p>
<b>EpoxİsttMesh Adhesives</b>, are Polyvinyl Acetate Emulsion.
</p>

<h3>Areas of Use</h3>
<p>
It is used for bonding the marble, travertine and all kinds of natural stone to the mesh.
</p>

<h3>Areas of Application</h3>
<p>It is suitable for all the marbles to be used in both indoor and outdoor. It is ideal for filling the cracks larger than 2 mm in tired oven applications.</p>

<h3>Properties</h3>
<ul class="subpage-full-list">
    <li>Applied easily.</li>
    <li>Provides high quality robust and elastic bonds.</li>
    <li>Its properties are not change in hot work.</li>
    <li>Provides transparent and elastic film when it is dried.</li>
    <li>It does not turn yellow after application.</li>
    <li>It can be mixed with water in any ratio.</li>




</ul>


<h3>Surface Preparation</h3>
<ul class="subpage-full-list">
  <li>Surface of the natural stone on which the strengthening liquid epoxy will be applied should be free from dust, oil, dirt and clay.</li>
  <li>The moisture content on the application surface should be maximum 4%.</li>
  <li>Surface temperature should be minimum 30 °C.</li>
</ul>



<h3>Usage</h3>
<p>The strengthening liquid epoxy should be taken from the packaging at the amount of use, resin and hardener components should be mixed with a spatula or stick homogenously in a plastic container at least 30-60 seconds and the product should be used when it comes to transparent consistency.</p>

<h3>Storage</h3>
<p>The product can be stored unopened in the moisture-free stores out of direct sunlight at 15-25 °C for one year.</p>

<h3>Health and Safety</h3>
<ul class="subpage-full-list">
    <li>Provide adequate ventilation during application.</li>
    <li>Use protective equipment such as protective glass and gloves.</li>
    <li>Do not direct contact with the product and inhale the steam.</li>
    <li>Keep away from open fire sources.</li>
    <li>Do not store in a poor-ventilated area.</li>
</ul>
        <?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>   
        <?php include $dirPosition.'technical.php'; ?>
</div>









<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
