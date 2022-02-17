<?php

  $title = "AquaLay Wet Area Membrane";
  $description = "AquaLay Wet Area Membrane is a flexible, easy to implement, four-layer new generation water-proof membrane. It consists of two layers of EVAC two side-coated with non-woven geotextile. The geotextile surfaces  provides excellent adhesion and cohesion for tile adhesives in both horizontal ground surfaces and vertical walls.";

  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Wet Area Membrane";
  $breadcrumpLink2 = "wet-area-membrane";

    
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
    <p><b><?php echo $title ?>,</b> is a flexible, easy to implement, four-layer new generation water-proof membrane. It consists of two layers of EVAC two side-coated with non-woven geotextile. The geotextile surfaces  provides excellent adhesion and cohesion for tile adhesives in both horizontal ground surfaces and vertical walls.</p>


<!--<img src="<?php echo $imgDir?>aqualay-wet-area-membrane-2.png" alt="<?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">-->
<h3>Fields of Application and Usage</h3>
<p>It is used as an impermeable layer under the new constructed wet surfaces covered with the materials such as tile, floor tile and marble.
</p>
<ul class="subpage-full-list">
      <li>The application surface must be firm, smooth and cleaned and the slope must be set.</li>
      <li>In pipe connections and critical connections WS sealant and butyl tape are used for impermeability.</li>
      <li>According to the area to be covered, it is cut easily and measures are adjusted. WS chamfer tape provided 30 tape practical application solutions.</li>
      <li>It should be laid in overlapped form. The overlays should be 5-10 cm on the ground, and 10-15 cm on the wall. There are 7,5 cm overlapping line on the rolls..</li>
      <li>C2 cement-based tile to be applied on the leveling screed is laid on the adhesives.</li>
      <li>Butyl tape, mastic or elastic cement-based adhesive can be used respectively as safety for impermeability of the overlapping.</li>
      <li>In wall-ground joints, a chamfer should be applied with WS chamfer tape 14 or WS chamfer tape 30 as the tape is centered on the corner. WS inner corner or WS outer corner elements are applied again with an appropriate adhesive on the chamfer tape in the corners. For the pipe outs, WS Pipe Flange is passes around the pipe tightly and sealed with mastic.</li>
      <li>Especially sealed joints of the critical points especially the locations combined with other materials and corners should be checked.</li>
      <li>C2 tile adhesive is applied over the membrane again and top coat is laid down.</li>
      <li>In renovation works, the appropriate adhesive that can hold on the present surface can be applied. With its excellent structure, insulation problem is solved by being covered again without increasing the total thickness.</li>
      <li>The bonding method to be used in combination should be selected according to the movement character of the structure and its interiority and exteriority.</li>
</ul>


 <h3>Fields of Usage</h3>
<ul class="subpage-full-list">
    <li>Wet areas such as bathrooms, toilets, baths</li>
    <li>Terrace roofs and balconies to be covered with tile</li>
    <li>Existing terraces or pools with leakage problem</li>
    <li>Intense moisture areas</li>
    <li>In wet areas with prefabricated structures or plasterboard partitions where can move differently in the working life.</li>
    <li>In quick repair from the top of the old coating that leaks water.</li>
</ul>


 <h3>Advantages</h3>
<ul class="subpage-full-list">
      <li>It is very thin. It does not create extra thickness on the surface when it is applied.</li>
      <li>It is very elastic. It is formed easily during application and adapts to the shape of the surface.</li>
      <li>It is water impermeable. Material itself has special waterproof structure and provides excellent sealing with the special combination solutions to the locations where it is applied and correct implementation in connection points.</li>
      <li>It requires very little extra work on the basis of the insulation benefits provided.</li>
      <li>It is applied very easily and quickly thanks to its elastic structure, special roll measures and auxiliary products. Ideal for rapid covering of large areas.
      <li>Shipping and labor is easy since the unit weight is considerably low.</li>
      <li>It is long-lasting.</li>
      <li>Application method is quiet, clean and harmless to the environment.</li>
      <li>It remains unaffected from the small cracks from combination and building movements and keeps the water impermeability.</li>
      <li>It is resistant to the effects of temperature changes.</li>
      <li>It is a product that has proven itself by certificate and quality management.</li>
</ul>

<h3>Packing and Storage</h3>
<p>
It is delivered as rolls and in polyethylene bags<br>
Roll dimensions: 1 x 5 m, 1 x 30 m, 2 x 20 m<br><br>

The rolls should be stored in the storage area on a clean surface in a horizontal or vertical position and especially protected from the sun.
</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
