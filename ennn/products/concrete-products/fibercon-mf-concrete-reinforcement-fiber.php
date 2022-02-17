<?php

  $title = "FiberCon MF Concrete Reinforcement Fiber";
  $description = "FiberCon MF Concrete Reinforcement Fiber is a reinforcement fiber with superior chemical and physical properties that is designed for non-structural reinforcement duties. Its ribbed surface structure gives a ballistic feature to concrete and increases its energy absorption capability.";

  $breadcrumpTitle1 = "Concrete Products";
  $breadcrumpLink1 = "concrete-products";

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
    <p><b><?php echo $title ?>,</b> is a reinforcement fiber with superior chemical and physical properties that is designed for non-structural reinforcement duties. Its ribbed surface structure gives a ballistic feature to concrete and increases its energy absorption capability. It also provides increase in the bending, pulling and pressure strength of the concrete it is used in. It distributes homogeneously in concrete mixture, it composed of polypropylene composite polymer fibers, and it does not decay or dissolve in water. It is highly alkali resistant and also resistant against the impact of acids and bases.
</p>

<img src="<?php echo $imgDir?>fibercon-mf-concrete-reinforcement-fiber-1.png" alt="<?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">


<h3>Areas of Application and Usage</h3>
<p><b>FiberCon MF Concrete Reinforcement Fiberis</b> the newest technical product used in concrete fiber reinforcement systems.</p>

<ul class="subpage-full-list">
        <li>In concretes of factories, warehouses and industrial floors,</li>
        <li>In wet and dry shtotcrete,</li>
        <li>In subterranean structures, tunnels and gallery concretes,</li>
        <li>In military structures, shelters and ammunition depots,</li>
        <li>In concrete road and slipform barriers,</li>
        <li>In precast and prefabricated components,</li>
        <li>In concretes of parking lots and ramps,</li>
        <li>In concrete channel, canalette and irrigation structures,</li>
        <li>In water tanks, swimming pools and seashore buildings,</li>
        <li>In all places where it is needed as an auxiliary reinforcement,</li>
        <li>And also recommended for use in field concretes.</li>
</ul>
<p>
Its consumption quantity is between 3 - 9 kg/m³. 
<br><br>
<b>Not:</b> The main reinforcement density of reinforced concrete systems may not be reduced by using synthetic fiber or steel fiber.
</p>


<h3>Advantages</h3>
<ul class="subpage-full-list">
          <li>It increases concrete’s resistance against impacts.</li>
          <li>It enables concrete to absorb energy and therefore delays the disintegration and fragmentation of concrete in the face of excessive and unexpected loadings.</li>
          <li>It is an efficient alternative in place of mat iron in field concretes and coatings.</li>
          <li>It reduces bouncing and rebounding problems in Shotcrete applications.</li>
          <li>It reduces segregation in vertical concrete castings (such as wall curtain).</li>
          <li>It increases the breaking & friability resistance of edges - corners in joints and concrete ends.</li>
          <li>It reduces the retreat and shrinkage cracks of plastic concrete.</li>
          <li>There is no need to change the design properties of the concrete mixture.</li>
          <li>It gives a ductile structure to the crispy concrete.</li>
          <li>It does not damage machinery, equipment and devices during application.</li>
          <li>Its logistics, supply and implementation phases are short and economical.</li>
          <li>It increases concrete’s durability.</li>
</ul>


<h3>Packaging and Storage</h3>
<p>It is shipped in carton parcels in 4 kg.<br>
It should be stored in well ventilated spaces that are free from moisture. It should be protected against the impact of freezing.<br>
It becomes brittle Tg < - 18 °C. Products within open packages can be used again if the box is closed tightly. It shelf life is 24 months following the date of production.
</p>






<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
