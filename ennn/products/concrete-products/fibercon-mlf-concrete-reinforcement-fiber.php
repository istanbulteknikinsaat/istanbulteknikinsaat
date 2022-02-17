<?php

  $title = "FiberCon MLF Concrete Reinforcement Fiber";
  $description = "The FiberCon MLF Concrete Reinforcement Fiber is a polymer based concrete fiber that reduces the retreat and shrinkage related cracks of cement based products and improves their resistance against freezing-dissolution";

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
    <p><b><?php echo $title ?>,</b> is a polymer based concrete fiber that reduces the retreat and shrinkage related cracks of cement based products and improves their resistance against freezing-dissolution, fires, impacts and corrosion.  The FiberCon MLF Concrete Reinforcement Fiber, which distributes homogeneously in concrete mixture and which is 100% composed of polypropylene fibers, does not decay or dissolve in water. It is highly alkali resistant and also resistance against the impact of acids and bases.</p>

<img src="<?php echo $imgDir?>fibercon-mlf-concrete-reinforcement-fiber-1.png" alt="<?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">


<h3>Areas of Application and Usage</h3>
<p><b>The FiberCon MLF Concrete Reinforcement Fiber</b> is a universal product that is used in concrete, screeds, precast coating components and plaster mortars.
</p>

<ul class="subpage-full-list">
      <li>In field concretes,</li>
      <li>As a passive fire protector for the coating concrete used in tunnels,</li>
      <li>In concrete mortars that are used for repair, plastering, leveling and isolation purposes,</li>
      <li>In thin flooring,</li>
      <li>In precast and prefabricated components,</li>
      <li>In concretes that will be subjected to thermal tensions,</li>
      <li>In concretes of parking lots and ramps,</li>
      <li>In field concretes,</li>
      <li>For preventing cracks in mezzanine, hollow floor and pan slab form systems.</li>
</ul>

<p>
It is consumption quantity varies between 450 – 1200 g/m³.<br><br>

<b>Not:</b> The main reinforcement density of reinforced concrete systems may not be reduced by using synthetic fiber or steel fiber.
</p>

<img src="<?php echo $imgDir?>fibercon-mlf-concrete-reinforcement-fiber-2.png" alt="<?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<h3>Advantages</h3>
<ul class="subpage-full-list">
      <li>It significantly reduces the retreat and shrinkage cracks of plastic concrete.</li>
      <li>Increases adherence for liquids.</li>
      <li>It provides passive fire protection in closed areas like tunnels, in the refractory industry, under high temperatures and in reinforced concrete buildings that pose fire risks.</li>
      <li>It acts as a micro reinforcement by inclusion in black mortars, grout mixtures and premix products.</li>
      <li>It increases the breaking & friability resistance of edges - corners in joints and concrete ends.</li>
      <li>It reduces the permeability of concrete as it prevents the emergence of capillary gaps.</li>
      <li>It increases concrete’s resistance against freezing - dissolution.</li>
      <li>It delays the corrosion of the reinforcement.</li>
</ul>

<h3>Packaging and Storage</h3>
<p>
It shipped as 600 and 900 grams in water soluble paper bags.<br><br>

It should be stored in well ventilated spaces that are free from moisture. It should be protected against the impact of freezing.<br>
It becomes brittle at Tg < - 18°C. Products within open packages can be used again if the box is closed tightly. It shelf life is 24 months following the date of production.
</p>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
