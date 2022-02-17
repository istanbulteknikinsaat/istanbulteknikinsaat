<?php

  $title = "GeoTorba Coast Retaining Structure Element";
  $description = "GeoTorba Coast Retaining Structure Elements are special bags formed by sewing the high strength polypropylene fabrics with high strength yarns for the use of pipeline paddings, filtering at coasts and mechanical filtration";


 $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Environmental Protection Products";
  $breadcrumpLink2 = "environmental-protection-products";

    
  $onePicture = true; 
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
    <p><b>GeoTorba Coast Retaining Structure Elements</b> are special bags formed by sewing the high strength polypropylene fabrics with high strength yarns for the use of pipeline paddings, filtering at coasts and mechanical filtration. After filling with the proper materials, the bags become water resistant and compatible shaped retaining elements,. 
  </p>


<h3>Fields of Application and Usage Area</h3>
<ul class="subpage-full-list">
  <li>Coastal retaining structures</li>
  <li>In groins and pipeline paddings</li>
  <li>Water filtration in the sea or liver</li>
  <li>Preventing scours in riverbanks</li>
  <li>As reinforcement for the coastal dunes</li>
  <li>Breakwater structures</li> 
</ul>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<h3>Advantages</h3>
<ul class="subpage-full-list">
  <li>Execution time is much shorter than conventional methods.</li> 
  <li>Costs can be considered regardless the site location..</li> 
  <li>It is convenient finding the appropriate material and transporting..</li> 
  <li>Flexible and high strength material.</li> 
  <li>Environmentally friendly, requires less labor and machine power.</li> 
</ul>

<?php include $dirPosition.'technical.php'; ?>
<h3>Packing and Storage</h3>
<p>
Bags prepared in reference to project details should be dispatch in packages fit to its dimensions
<br><br>
<b>GeoTorba,</b> must be packed and stored on smooth surface. The stored products must be kept away from direct sunlight, heat and combustible sources.

</p>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
