<?php

  $title = "TekDrain GGF 25/200 Green Roof Drainage Board";
  $description = "TekDrain GGF 25/200 Green Roof Drainage Board, is a material made of high density polyethylene HDPE, resistant to plant roots and decay, preventing dehydration of plants on non-rainy days, assisting holding water, with high compression strength and high ";

  $breadcrumpTitle1 = "GeoGreen Green Roof Systems";
  $breadcrumpLink1 = "geogreen-green-roof-systems";
  
  $breadcrumpTitle2 = "Green Roof Drainage Boards";
  $breadcrumpLink2 = "green-roof-drainage-boards";


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
    <p><b><?php echo $title ?>,</b> is a material made of high density polyethylene HDPE, resistant to plant roots and decay, preventing dehydration of plants on non-rainy days, assisting holding water, with high compression strength and high strength.The same situation also applies to new drainage and water reservoir plate ISO DRAIN nature 25 P. It creates an ideal base for comprehensive eco roofs by combining unique 8 l/m2 water storage capacity with excellent flat drainage with the capacity of 10.6 l/s/m.Its design ensuring smooth side flow over the full holes and made for draining the excess water effectively from the perforated reception channels makes possible to build the safe and perfect eco-roof.The support bolts on the up side hold the geotextile mat on the water accumulating in the pit.While the unique octagonal design of the pits provides increased compressive strength, it combines excellent weight-bearing capacity and flexural rigidity.CE certified and environmentally friendly ISO-DRAIN Nature 25 P made from re-ground HDPE resins is resistant to corrosion, chemically inert and resistant to fungus and bacteria attacks.
</p>


<h3>Packaging and Storage</h3>
<p>Stored and dispatched vertically in sizes of 2,425 x 1,237 m (3 m²).</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
