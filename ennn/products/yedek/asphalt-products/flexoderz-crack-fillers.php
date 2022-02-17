<?php

  $title = "FlexoDerz Crack Fillers";
  $description = "FlexoDerz Crack Filler, represent bitumen - rubber based filling putties that are used for filling surface cracks that occur in asphalt coatings and concrete joints.";

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
    <p><b><?php echo $title ?>,</b> represent bitumen - rubber based filling putties that are used for filling surface cracks that occur in asphalt coatings and concrete joints.
</p>



<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is very elastic. It preserves is elasticity between temperatures of -20 °C and +120 °C.</li>
    <li>It can be heated on double walled special boilers or directly in ovens.</li>
    <li>Warnings for use in 5000 kg and above</li>
</ul>

<h3>Warnings</h3>
<ul class="subpage-full-list">
     <li>Volatile substances like gasoline and gas are never mixed with hot asphalt.</li>
     <li>Special protective equipment should be used when working with hot asphalt.</li>
     <li>Vapor of boiling FlexoDerz shouldn’t be breathed.</li>
     <li>Keep away from children.</li>
     <li>Eyes and the skin should be protected during works with all chemicals.</li>
</ul>



<h3>Application</h3>
<ul class="subpage-full-list">
    <li>The surfaces of application should be dry and clean. Joint edges should be cleaned with wire brush, spiral engine or sanding. If possible, air should be sprayed to the joint gap. Lining should be applied prior to application for obtaining better adhesion.</li>
    <li>After FlexoDerz is heated until maximum 180 °C, it is mixed and poured into the joint.</li>
    <li>External surfaces can be sanded in areas that can be subjected to traffic.</li>
    <li>It will be suitable for use approximately 1 hour later.</li>
    <li>The product will lose all its qualities and cannot be reconditioned if 180 °C is exceed or heated and cooled again several times.</li>
</ul>







<h3>Areas of Use</h3>
<ul class="subpage-full-list">
    <li>In dilations and joints</li>
    <li>In junctions of concrete coatings that have wide surfaces</li>
    <li>In dams, channels and canalettes,</li>
    <li>In other areas that have the probability of expansion,</li>
    <li>For water impermeability, filling, repair and adhesion purposes.</li>
</ul>



<h3>Packaging and Storage</h3>
<p>
It is inside an easily separable carton parcel of gross 17 kg.<br><br>
</p>

<h3>Consumption</h3>
<p>
1,17 kg/dm³
</p>









       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
