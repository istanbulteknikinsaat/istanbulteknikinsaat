<?php


  $title = "TrioTexFire Retardant Roof and Facade Underlays";
  $description = "TrioTexFire Retardant Roof and Facade Underlays, is waterproof breathing facade membrane that has improved reaction against fire and consists of two layers of polyester for underside and functional polyurethane for top layer.";

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
    <p><b><?php echo $title ?>,</b> is waterproof breathing facade membrane that has improved reaction against fire and consists of two layers of polyester for underside and functional polyurethane for top layer. TrioTex Plus type products provide easy application and price advantage with self-adhesive overlapping.</p>



<h3>Fields of Application and Usage</h3>
<p>Underlay should be laid by being stretched with at least 10 cm overlapping and overlaps should be stuck with sticky tape. It should be fasten on the surface with mastic or butyl tape at the starting and end of the covering application. If the product is not PLUS type, TrioTex SP UNI tape or TrioTex X Fire tape for high UV resistance should be applied to overlaps top. TrioTex SP UNI tape should be used for repairing small damages or rips and sealing the connection to brackets, ventilation shafts. TrioTex Fire Retardant Roof and Facade Underlays should be fixed with corrosion resistant flat-headed nails or staple metal profiles only on overlaps.There should be an air gap (minimum 40mm) between the underlay and cover panels.Rolls have a physical surface of 75 m2 and area to be covered is 70 m2 at ideal conditions.The surface of product should be protected from dust and water once it is unpacked. Application of tapes and mastic requires clean surfaces. It can be used in;
</p>

<ul class="subpage-full-list">
    <li>Wooden curtain wall application</li>
    <li>Terra cotta, granite, basalt, ceramic facade applications</li>
    <li>Glass facade applications</li>
    <li>Aluminum composite panel applications</li>
    <li>All facade applications requiring high UV resistance like open joint facade systems</li>
    <li>All curtain walling system applications requiring UV resistant.</li>
</ul>



<h4>Advantages</h4>
<ul class="subpage-full-list">

<li>It is the product with the highest level of fire performance in its class.Its fire class is B s1 d0 according to EN 13501-1 & 11925-2. Fire reaction of the TrioTex Fire Retardant Roof and Facade Underlays is superior to other products at least two levels, it burns by being reduced to ash during a likely fire and it ceases to burn when the source of fire is removed. However, other products burns by dripping and continues to burn even after the fire source is removed.</li>
<li>It is designed especially for open joint ventilated facade systems which opening area is up to %30 of total surface.</li>
<li>It has a design with particularly high mechanical properties (tensile and tearing strength)</li>
<li>Effectively transmits the moisture out that is contained in the building by its breathing feature.</li>
<li>Increases efficiency of the cold and warm air in the building by means of its wind barrier effect. It also prevents erosion of the heat insulation.</li>
<li>It is completely water proof. It protects the outer surface of heat insulation from rain and snow.</li>
<li>Based on the results of aging tests, it is a durable and long-life product against UV and heat impacts received from open joints. It is exposed to UV for 5000 hours during the aging test.</li>
<li>High strength, possibility to use for a long period of time after a single application and heat loss prevention properties make TrioTex Fire Retardant Roof and Facade Underlays an environment friendly product.</li>
<li>It is equipped with a coating that prevents disturbing reflections.</li>




</ul>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<h3>Packing and Storage</h3>
<p>
It is delivered as rolls in polyethylene packaging.<br>
Roll dimensions: 1.5 x 50 m (or 3 x 50 m)<br><br>

Rolls should be kept on a clean surface in storage facility either vertically or horizontally protected from sunlight.<br>
</p>

 
<?php include $dirPosition.'technical.php'; ?>
</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
