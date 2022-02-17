<?php

  $title = "TrioTex Breathable Waterproof Facade Underlays";
  $description = "TrioTex Breathing Waterproof Facade Underlays, is a flexible and breathable membrane that is manufactured by binding a micro porous film layer between two polypropylene nonwoven textile (PP spunbond) layers with thermal process.TrioTex 120 Plus provides easy application and price advantage with self-adhesive overlapping.";

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
    <p><b><?php echo $title ?>,</b> is a flexible and breathable membrane that is manufactured by binding a micro porous film layer between two polypropylene nonwoven textile (PP spunbond) layers with thermal process.TrioTex 120 Plus provides easy application and price advantage with self-adhesive overlapping.</p>



<h3>Fields of Application and Usage</h3>
<p>While overlapping width can vary according to vertical and horizontal applications for roof and facade, the cover should be laid by being stretched with at least 10 cm overlapping and overlaps should be taped. The cover should be sealed with paste to the surface at starting and ending points of the cover application. At the underlay joints, TrioTex DS 38 Tape should be applied between two covers or TrioTex SP UNI Tape from the top. Non-shrinking and UV-resistant TrioTex SP UNI should be used as repairing tape for damages or rips and for connection to brackets, ventilation shafts with the cover.Rolls have a covering surface of 75 m2 and area to be covered is 70 m2 at ideal conditions.The surface of product should be protected from dust and water once it is unpacked.Application of tapes and mastic requires clean surfaces.The underlay should be covered within maximum 4 months.It is an element of system on curtain wall and siding applications.
</p>



<h3>Advantages</h3>
<ul class="subpage-full-list">
      <li>Effectively transmits the moisture out that is contained in the building by its breathing property.</li>
      <li>Increases efficiency of the cold and warm air in the building by means of its wind barrier effect. It also protects heat insulation against corrosion.</li>
      <li>It is completely water proof. It protects the outer surface of heat insulation from rain and snow.</li>
      <li>Based on the results of aging tests, it is a durable and long-life product against UV and temperature changes which the building is exposed to.</li>
      <li>High strength, possibility to use for a long period of time after a single application and heat loss prevention properties make <b>TrioTex Breathing Waterproof Facade Underlays</b> an environment friendly product.</li>
      <li>It is equipped with a coating that prevents disturbing reflections.</li>
</ul>

<h3>Packing and Storage</h3>
<p>
It is delivered in rolls in polyethylene packaging<br>
Roll dimensions: 1.5 x 50 m <br><br>

Rolls should be kept on a clean surface in thestorage facility either vertically or horizontallyprotected from sunlight.
</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>  
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
