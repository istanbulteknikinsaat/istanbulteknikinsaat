<?php

  $title = "Expansion Joint Tape with Mesh";
  $description = "It is a  thermoplastic elastomer based dilatation tape which is used for insulation of walls with polyester net - floor junctions and structural joints.";

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
    



<p>It is a thermoplastic elastomer based dilatation tape which is used for insulation of walls with polyester net - floor junctions and structural joints.
</p>


<h3>Areas of Use</h3>
<ul class="subpage-full-list">
    <li>Wet areas,</li>
    <li>Pools,</li>
    <li>Water reservoirs,</li>
    <li>Treatment plants,</li>
    <li>Balconies and paraphets,</li>
    <li>Terraces and roof edges,</li>
    <li>Water insulation and compensation of movements on dynamic cracks and cold joints of floors and curtains thanks to its elastic form.</li>
</ul>







<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>Easy to apply.</li>
    <li>Provides permanent insulation.</li>
    <li>Resistant against various chemical materials.</li>
    <li>Resistant to ozone and UV.</li>
</ul>



<h3> Corner junction tape with mesh </h3>
<ul class="subpage-full-list">


<li>Dimensions  (total/covering):<br>
120 mm / 70 mm TPE<br>
150 mm / 100 mm TPE</li>
<li>Appearance : Gray colored</li>
<li>Thickness: 0,55 mm</li>
<li>Weight: 32 g/mt</li>
<li>Shore A hardness: 70</li>
<li>Explosion pressure: 3 bar</li>
<li>Water pressure strenght: 1,5 bar</li>
<li>Elongation coefficient: % 25</li>
<li>Rupture elongation:<br>
%130 / %30 (widthwise% / lenghtwise%)</li>
<li>Heat resistance: -50°C / +90°C</li>
<li>Packaging: 50 mt – 1 roll, in white cardboard box <br>
(12 boxes, 600 mt in one package)</li>
<li>Shelf life: No limit from production date under suitable storing conditions. Opened packages can be used along shelf life by keeping their cover closed tightly.</li>


</ul>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
