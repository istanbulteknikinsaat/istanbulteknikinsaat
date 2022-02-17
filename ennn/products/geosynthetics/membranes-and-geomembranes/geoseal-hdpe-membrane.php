<?php

  $title = "GeoSeal HDPE Membrane";
  $description = "GeoSeal HDPE Membrane is a geomembrane material which is made of high density polyethylene and provides impermeability in the projects such as solid waste landfills, mine dump storage areas , acid pools, tank areas, ponds and irrigation channels. Thanks to the special resin mixture of antioxidant and carbon black used in the production, it is produced as resistant to the chemical, biological and mechanical effects and UV.";


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
    <p><b>GeoSeal HDPE Membrane</b> is a geomembrane material which is made of high density polyethylene and provides impermeability in the projects such as solid waste landfills, mine dump storage areas , acid pools, tank areas, ponds and irrigation channels. Thanks to the special resin mixture of antioxidant and carbon black used in the production, it is produced as resistant to the chemical, biological and mechanical effects and UV.

  </p>


<h3>Fields of Application and Usage</h3>
<p><b>GeoSeal HDPE Membrane</b> can be used quickly and safely in the projects with large areas requiring resistance to chemical, biological, mechanical effects and UV thanks to larger roll sizes. It can be used in the following areas:</p>
<ul class="subpage-full-list">
    <li>Solid waste landfills</li>
    <li>Mining waste deposit areas</li>
    <li>Acid pools</li>
    <li>Tank areas</li>
    <li>Wastewater treatment plants</li>
    <li>Irrigation channels</li>
    <li>Pond projects</li>
</ul>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is durable by virtue of the special resin comprising of antioxidant and carbon black mixture.</li>
    <li>It features high resistance and elongation values.</li>
    <li>It is resistant against chemical impacts.</li>
    <li>It features high UV resistance by virtue of the carbon black content.</li>
    <li>By virtue of the special welding method, it enables performance of air pressure, abrasion and peeling tests from its joints.</li>
    <li>The large roll size enables rapid and practical implementation opportunity for large-scale projects.</li>
    <li>It is applicable at high oblique areas with products having rough surfaces on single side or both sides.</li>
    <li>Materials with lower density (LLDPE, VLDPE) can also be produced for utilization options at different applications.</li>
</ul>


<h3>Packing and Storage</h3>
<p>The materials are dispatched in the form of roils with 7m - 9,5m width and 100m – 200m length. <br><br>
The materials must be stored on smooth surface. The stored products must be kept away from direct sunlight, heat and combustible sources. In case the rolls must be stored outdoors for long duration, then the rolls must be covered for protection against sunlight. Absolutely no smoking in the storage yard.</p>

</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
