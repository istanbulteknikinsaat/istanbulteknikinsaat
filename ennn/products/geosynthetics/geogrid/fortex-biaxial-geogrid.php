<?php

  $title = "ForTex Biaxial Geogrid";
  $description = "ForTexBi-Axial Geogrids, are high strength geogrids, specifically developed for biaxial requirements in various civil engineering applications. These geogrids are manufactured with the method of knitting polyester micro yarns in rectangular shape and coating with PVC. They provide high performance through a sewing method specially designed to be more resistant at the node points.";

  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Geogrid";
  $breadcrumpLink2 = "geogrid";

    
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
    <p><b>ForTex Bi-Axial Geogrids,</b> are high strength geogrids, specifically developed for biaxial requirements in various civil engineering applications. These geogrids are manufactured with the method of knitting polyester micro yarns in rectangular shape and coating with PVC. They provide high performance through a sewing method specially designed to be more resistant at the node points.

</p>



<h3>Fields of Application and Usage</h3>
<p>ForTex Bi-Axial Geogrids are high resistant geogrids developed specially for using in the following areas where resistance is necessary in both sides:
</p>

<ul class="subpage-full-list">
    <li>In providing higher bearing capacities in foundations of runways, aprons and taxiways in airports</li>
    <li>In prevention of local subsidence in applications to be made on low bearing surfaces on highways by reducing the base and sub-base filling materials</li>
    <li>At filling works of highway expansion projects</li>
    <li>In ground improvements for reducing the amount of ballast and sub-ballast to avoid potential subsidence in railway applications to be made on weak soil.</li>
    <li>In increasing the bearing capacity of heavy foundations and in prevention of local subsidence in container storage fields and the foundations of industrial buildings.</li>
</ul>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<h3>Advantages</h3>
<p>
  <ul class="subpage-full-list">
        <li>Enables application of a thinner  backfill layer to be laid on poor ground.</li>
        <li>Forms a platform with the fill on weak soils and prevents varied ground subsidences.</li>
        <li>When it is applied in multi layers, it improves the load bearing capacity of the ground.</li>
        <li>It reduces the amount of earthwork excavation when the existing surface has insufficient process quality.</li>
        <li>These are durable, long-lasting, reliable, cost-effective and resistant to seismic and dynamic loads.</li>
  </ul>
</p>






<h3>Range of Products</h3>
<ul>
    <li>ForTex GG 20/20 P (20 kN/m / 20 kN/m)</li>
    <li>ForTex GG 30/30 P (30 kN/m / 30 kN/m)</li>
    <li>ForTex GG 40/40 P (40 kN/m / 40 kN/m)</li>
    <li>ForTex GG 60/60 P (60 kN/m / 60 kN/m)</li>
    <li>ForTex GG 80/80 P (80 kN/m / 80 kN/m)</li>
    <li>ForTex GG 100/100 P (100 kN/m / 100 kN/m)</li>
    <li>ForTex GG 150/150 P (150 kN/m / 150 kN/m)</li>
</ul>







<h3>Packaging and Storage</h3>
<p>
ForTex Bi-Axial Geogrids are manufactured as rolls with a maximum width of 6 m and a length of 100 m usually. Each roll is shipped wrapped in UV resistant packaging. <br><br>

It is recommended not to stack up more than 6 rolls on top of each other horizontally. The rolls with a smaller width (up to 2 m), should be transported and stored in the vertical position.
</p>





</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
