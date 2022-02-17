<?php

  $title = "ForTex Uni-Axial Geogrid";
  $description = "ForTex Uni-Axial Geogrids, are high strength geogrids, specifically developed for uniaxial requirements in various civil engineering applications.";


  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Geogrid";
  $breadcrumpLink2 = "geogrid";




  $technicalData = true;  
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
    <p><b>ForTex Uni-Axial Geogrids,</b> are high strength geogrids, specifically developed for uniaxial requirements in various civil engineering applications. These geogrids are manufactured with the method of weaving polyester micro yarns in rectangular shape and coating with PVC. They provide high performance through a sewing method specially designed to be more resistant at the node points. <br><br>
    <b>ForTex Uni-Axial Geogrids,</b> are woven type geogrids having significantly higher tensile stress in one direction compared to the tensile stress in the opposite direction.

</p>



<h3>Fields of Application and Usage</h3>
<p>ForTex Uni-Axial Geogrids are used in the applications such as retaining structure systems (GeoArme) equipped with slope stabilization requiring the strength in one direction.<br><br>

Reinforced retaining structure systems <b>(GeoArme Retaining Structure Systems)</b> having the fast and economical application possibilities, secure seismic behavior, flexible structure, resistant to subsidence and aesthetic appearance are generally used in the following areas:
</p>

<ul class="subpage-full-list">
    <li>Expanding works in divided roads</li>
    <li>Approach walls of the crossover roads</li>
    <li>Expropriation areas</li>
    <li>Works for saving space</li>
    <li>Bridge-edge foot walls</li>
    <li>Bridge elevation walls</li>
    <li>Park and garden walls</li>
</ul>





<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<h3>Advantages</h3>
<p><b>ForTex Uni-Axial Geogrids</b> are durable, long-lasting, reliable, cost-effective and resistant to seismic and dynamic loads. When fillings or granular material are spread over the geogrid, the grains of the filling material fully interlock with the openings of the geogrid. <br><br>

<b>ForTex Uni-Axial Geogrids</b> form a unity with filling material by ensuring that the stress is met within the pores. Thus the tensile and shear stresses to the ground are met by the geogrid and a reinforced platform is formed.
</p>
<ul>
      <li>ForTex GG 40/20 P (40 kN/m / 20 kN/m)</li>
      <li>ForTex GG 60/20 P (60 kN/m / 20 kN/m)</li>
      <li>ForTex GG 80/30 P (80 kN/m / 30 kN/m)</li>
      <li>ForTex GG 100/30 P (100 kN/m / 30 kN/m)</li>
      <li>ForTex GG 120/30 P (120 kN/m / 30 kN/m)</li>
      <li>ForTex GG 150/30 P (150 kN/m / 30 kN/m)</li>
      <li>ForTex GG 150/50 P (150 kN/m / 50 kN/m)</li>
      <li>ForTex GG 200/50 P (200 kN/m / 50 kN/m)</li>
</ul>



<h3>Packaging and Storage</h3>
<p>ForTex Uni-Axial Geogrids are manufactured as rolls with a maximum width of 6 m and a length of 100 m usually. Each roll is shipped wrapped in UV resistant packaging.<br><br>
It is recommended not to stack up more than 6 rolls on top of each other and when rolls with a smaller width (up to 2 m) the rolls should be transported and stored in the vertical position.</p>



<?php include $dirPosition.'technical.php'; ?>



</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
