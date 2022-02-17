<?php


  $title = "İzoTeknik 4000 Protector and Moisture Keeper Geotextile";
  $description = "İzoTeknik 4000 Protector and Moisture Keeper Geotextile, is a non-woven textile product which is manufactured in dark color by method of knitting of pure polyester-based fibers much thinner than a millimeter and implementation of heat treatment for protection.";

  $breadcrumpTitle1 = "GeoGreen Green Roof Systems";
  $breadcrumpLink1 = "geogreen-green-roof-systems";

  $breadcrumpTitle2 = "Non-Woven Geotextiles";
  $breadcrumpLink2 = "non-woven-geotextiles";

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
    <p><b><?php echo $title ?>,</b> is a non-woven textile product which is manufactured in dark color by method of knitting of pure polyester-based fibers much thinner than a millimeter and implementation of heat treatment for protection.



</p>



<h3>Fields of Application and Use</h3>
<ul class="subpage-full-list">
    <li>Thanks to its high puncture resistance; it protects the underlying materials against impacts by being used on thermal insulating boards for terrace roof applications and has moisture retention properties within itself. It allows different operations of the materials and prevents the flow of cement slurry down.</li>
    <li>It is used on the building foundations to preserve water insulation applications thanks to its pressure distribution effect.</li>
    <li>It protects the geo-membranes used on open lands against any tear or impairment arising from puncture and excessive friction.</li>
    <li>The geotextile brought on the treated surface in roll should be spread on the stretch for complete contact with the surface. In order to prevent slippage of the geotextile during the filling process, it should be applied under the previous geotextile with an overlap of 20 cm minimum.</li>
</ul>


<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is produced by pure fiber.</li>
    <li>It has such a structure as to ensure homogenous distribution of the fibers thanks to tight knitting and superior production technology.</li>
    <li>It ensures fast application advantage by ensuring savings on material and labor with minimum overlap in large areas by means of the opportunity of manufacturing up to a width of 6 m.</li>
</ul>





<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
