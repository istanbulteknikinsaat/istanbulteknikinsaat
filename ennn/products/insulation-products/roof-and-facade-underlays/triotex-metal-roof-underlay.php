<?php

  $title = "TrioTex Metal Roof Underlay";
  $description = "TrioTex Metal Roof Underlay, is a high performance metal roof underlay with separation layer that has high vapor transmission, drainage, insulation and acoustic properties. It is designed for stainless steel, copper, titanium and zinc alloy metal roofs and facades.";

  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Roof and Facade Underlays";
  $breadcrumpLink2 = "roof-and-facade-underlays";
  
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
    <p><b><?php echo $title ?>,</b> is a high performance metal roof underlay with separation layer that has high vapor transmission, drainage, insulation and acoustic properties. It is designed for stainless steel, copper, titanium and zinc alloy metal roofs and facades.</p>

<h3>Fields of Application and Usage</h3>
 
<p>While it may vary according to vertical and horizontal applications for metal roof and facade it should be laid by being stretched with at least 10 cm overlapping and overlaps should be sealed. According to surface details overlap width should be provided with breathing waterproofing underlay by cutting separation layer for all joints. It should be fasten on the surface with mastic or butyl tape at the starting and end of the covering application. If the product is not PLUS type, <b>TrioTex DS 38 Tape</b> should be applied to underlay overlaps in between or <b>Prima Butyl Tape</b> should be applied to the overlaps top. Rolls have underlay surface of 37.5m² and area to be covered is 35 m2 at ideal conditions. Application of tapes and mastic requires clean surfaces. The underlay must be covered within a maximum of 4 months.
</p>

<ul class="subpage-full-list">
    <li>Titanium alloyed clamped metal roofs and facades,</li>
    <li>Zinc alloyed clamped metal roofs and facades,</li>
    <li>Copper alloyed clamped metal roofs and facades,</li>
    <li>Aluminum alloyed clamped metal roofs and facades,</li>
    <li>Stainless Steel clamped metal roofs and facades,</li>
    <li>Painted galvanized clamped metal roofs and facades.</li>
</ul>



<h3>Advantages</h3>
<p><b>It prolongs the life of the system:</b> In metal roofs, top coating transfers heating and cooling to lower layers quickly. In cases where the clamped roof is in direct contact with the underlay, heat fluctuations between night and day or overheating causes the breathing membrane aging faster. In roofs where <b>TrioTex Metal Roof Underlay</b> is used, the moist in the building is thrown out effectively with the 8 mm air circulation gap gained. Thus metal coating is prevented from damage by corrosion.</p>

<p><b>Disturbing noises are absorbed:</b> Unwanted noises such as heavy rains, hailstorms and jet engine noises are absorbed to a certain level and thus assist sound insulation.</p>

<p><b>It’s easy to apply:</b> It is a highly pliable construction material. This enables easy application despite irregularities in wooden plates or heat insulation plates.</p>


<h3>Packaging and Storage</h3>
<p>
It is delivered in rolls in polyethylene packaging.<br>
Roll dimensions for TrioTex Separator: 1.5 x 25 m<br><br>

Rolls should be kept on a clean surface in the storage facility either vertically or horizontally and particularly protected from sunlight in the warehouses.
</p>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
