<?php

  $title = "Expansion Joint Tape";
  $description = "CoverEx TPE tape is a thermoplastic elastomer based dilatation tape which is used for insulation and closure of wall-floor junctions and all types of structure and expansion joints.";

  $breadcrumpTitle1 = "Expansion Joint Profiles";
  $breadcrumpLink1 = "expansion-joint-profiles";

  $breadcrumpTitle2 = "Auxiliaries";
  $breadcrumpLink2 = "auxiliaries";


  $onePicture = true;
  $pictureSlider = false;    


  $countDir =  substr_count($_SERVER['PHP_SELF'], '/') - 1;   $dirPosition = ''; for ($x = 1; $x <= $countDir; $x++) { $dirPosition .= "../"; }
    $dirPosition = $dirPosition.'en/';
  include $dirPosition.'header.php'; 
?>

 <section class="product-page">
  <?php  include $dirPosition.'product-expansion-joint-auxiliaries-header.php';  ?>
<div class="wrapper">

  <?php 
     include $dirPosition.'left-product-navigation.php';
     include $dirPosition.'product-breadcrumb.php';
   ?>
       
       
<!-- PRODUCT PAGE START -->
                  
    <h2 data-url="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>"><?php echo $title ?></h2>
    



<p>CoverEx TPE tape is a thermoplastic elastomer based dilatation tape which is used for insulation and closure of wall-floor junctions and all types of structure and expansion joints.
</p>


<h3>Kullanım Yerleri</h3>
<ul class="subpage-full-list">
    <li>Under ground applications,</li>
    <li>Foundations and curtains,</li>
    <li>Pools,</li>
    <li>Treatment plants,</li>
    <li>Tunnel segments,</li>
    <li>Balconies and paraphets,</li>
    <li>Terraces and roof edges,</li>
    <li>Ensuring safe insulation at dilatation joints , together with mastics.</li>
    <li>Water insulation and compensation of movements on dynamic cracks and cold joints of floors and curtains</li> 
</ul>


<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>Easy to apply.</li>
    <li>Suitable for welding by heat.</li>
    <li>Provides permanent insulation</li>
    <li>It has high elasticity.</li>
    <li>Does not lose its elasticity because of cold.</li>
    <li>High resistant to tearing.</li>
    <li>Resistant to bacterial attacks and chemical breaking.</li>
    <li>High resistance against environmental factors and aggressive mediums.</li>
    <li>Resistant to ozone and UV.</li>
</ul>



<h3>Material Specifications</h3>
<ul class="subpage-full-list">
   <li>Color: Gray</li>
   <li>Width: 15 - 20 - 25 - 30 - 35 - 40 cm TPE</li>
   <li>Appearance : Gray colored, Sides with holes or without holes</li>
   <li>Thickness: 1 - 1,25 -1,5 mm</li>
   <li>Weight: 1,4 g/cm²</li>
   <li>Shore A hardness: 70</li>
   <li>Explosion pressure: 4 bar</li>
   <li>Water pressure strenght: 3 bar</li>
   <li>Widthwise rupture: % 1050</li>
   <li>Lenghtwise rupture: % 460</li>
   <li>Rupture strenght: 14 N/mm²</li>
   <li>Heat resistance : -50°C / +90°C</li>
   <li>Packaging: 25 m , one roll</li>
   <li>Shelf life: No limit from production date under suitable storing conditions.</li>





</ul>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
