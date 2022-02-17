<?php

  $title = "FiberCon FF Concrete Reinforcement Fiber";
  $description = "The FiberCon FF Concrete Reinforcement Fiber is a polymer based concrete fiber that reduces the retreat and shrinkage related cracks of cement based products and improves their resistance against freezing-dissolution, fires, impacts and corrosion. And with its net shaped tissue,";

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
    <p><b><?php echo $title ?>,</b> is a polymer based concrete fiber that reduces the retreat and shrinkage related cracks of cement based products and improves their resistance against freezing-dissolution, fires, impacts and corrosion. And with its net shaped tissue, it also reduces cracks that result from deflection, settlement and grounding.and  The FiberCon FF Concrete Reinforcement Fiber, which distributes homogeneously in concrete mixture and which is 100% composed of polypropylene fibers, does not decay or dissolve in water. It is highly alkali resistant and also resistant against the impact of acids and bases.</p>


<img src="<?php echo $imgDir?>fibercon-ff-concrete-reinforcement-fiber-1.png" alt="<?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<h3>Areas of Application and Use</h3>
<p><b>The FiberCon FF Concrete Reinforcement Fiberis</b> a universal product that is used in concretes, screeds, precast coating components and special concrete applications</p>

<ul class="subpage-full-list">
    <li>In field concretes,</li>
    <li>In concretes of factories, warehouses and industrial floors,</li>
    <li>In mezzanine, hollow floor and pan slab form systems,</li>
    <li>In concrete road and slipform barriers,</li>
    <li>In concrete channel, canalette and irrigation structures,</li>
    <li>In light prefabricated components that don’t have bearing feature,</li>
    <li>In thin floating screeds floorings,</li>
    <li>In concretes of parking lots and ramps,</li>
    <li>In light concrete (CLC – Cellular Light Concrete) applications,</li>
    <li>In precast and prefabricated components,</li>
    <li>In wet blast concretes,</li>
    <li>In water tanks, swimming pools and seashore buildings,</li>
    <li>And for non-bearing reinforcement purposes in concretes that will be subjected to thermal tensions.</li>
</ul>



<p>It is consumption quantity varies between 750 – 1800 g/m³..<br><br>
<b>Note:</b> The main reinforcement density of reinforced concrete systems may not be reduced by using synthetic fiber or steel fiber.
</p>
<img src="<?php echo $imgDir?>fibercon-ff-concrete-reinforcement-fiber-2.png" alt="<?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It reduces the retreat and shrinkage cracks of plastic concrete.</li>
    <li>It reduces segregation in vertical concrete castings (such as wall curtain, column, etc.).</li>
    <li>It increases concrete’s resistance against impacts.</li>
    <li>It enables concrete to absorb energy and therefore delays the disintegration and fragmentation of concrete in the face of excessive and unexpected loadings.</li>
    <li>It gives a ductile structure to the brittle  concrete.</li>
    <li>It increases concrete’s durability.</li>
    <li>It increases the breaking & friability resistance of edges - corners in joints and concrete ends.</li>
    <li>It reduces the permeability of concrete as it prevents the emergence of capillary gaps.</li>
    <li>It increases concrete’s resistance against freezing - dissolution.</li>
    <li>It delays the corrosion of the reinforcement.</li>
    <li>There is no need to change the design properties of the concrete mixture.</li>
</ul>


<h3>Packaging and Storage</h3>
<p>
It shipped as 900 grams in water soluble paper bags.<br>
It should be store in well ventilated spaces that are free from moisture. It should be protected against the impact of freezing.<br>
It becomes brittle Tg < - 18 °C.<br>
Products within open packages can be used again if the box is closed tightly.<br>
It shelf life is 24 months following the date of production.
</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
