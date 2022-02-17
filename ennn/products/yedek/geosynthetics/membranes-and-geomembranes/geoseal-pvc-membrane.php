<?php

  $title = "GeoSeal PVC Membrane";
  $description = "GeoSeal PVC Membrane is a geomembrane material produced from polyvinyl chloride and providing water tightness in foundations, roofs, ponds and tunnel projects. It is produced as chemical resistant, UV resistant or signal layer specially developed for applications in different projects.";



  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Membranes and Geomembranes";
  $breadcrumpLink2 = "membranes-and-geomembranes";



    
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
    <p><b>GeoSeal PVC Membrane</b> is a geomembrane material produced from polyvinyl chloride and providing water tightness in foundations, roofs, ponds and tunnel projects. It is produced as chemical resistant, UV resistant or signal layer specially developed for applications in different projects.

  </p>


<h3>Areas of Application and Usage</h3>
<p>Joints can be combined by welding machine with minimum labor. Thanks to the welding machines manufactured with the latest technology and making single or double raw welding, a safe and manageable insulation is possible.
</p>

<ul class="subpage-full-list">
      <li>Building foundation and retaining concrete wall insulations</li>
      <li>Terrace and garden-terrace roofs</li>
      <li>Potable water tanks</li>
      <li>Water reservoirs</li>
      <li>Light metal roofs</li>
      <li>Irrigation channels</li>
      <li>Ponds</li>
      <li>Metro stations</li>
      <li>Railway, subway and highway tunnels projects</li>
</ul>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is durable.</li>
    <li>It has high resistance against chemical and mechanical impacts.</li>
    <li>It features plant root resistance.</li>
    <li>It is UV resistant and features high resistance to external conditions through its carrier types.</li>
    <li>The products with signal layer enable visual control.</li>
    <li>It is applied easily and quickly with special welding machinery.</li>
    <li>It is possible to control the sealing at the joints with double row joint weld.</li>
</ul>









<h3>Packing and Storage</h3>
<p>The materials are dispatched in the form of rolls with 1.6 m – 2.1 m width and 20m – 25m length.<br><br>
The materials must be stored on smooth surface and indoor space. The stored products must be kept away from direct sunlight, heat and combustible sources. In case the PVC cover rolls must be stored outdoors for long duration, then the rolls must be covered for protection against sunlight. Absolutely no smoking in the storage yard.</p>

<?php include $dirPosition.'technical.php'; ?>
</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
