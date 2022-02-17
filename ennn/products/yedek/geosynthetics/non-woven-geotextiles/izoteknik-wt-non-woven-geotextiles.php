<?php

  $title = "İzoTeknik WT Non-Woven Geotextiles";
  $description = "İzoTeknik WT Non-Woven Geotextiles are non-woven textile product in white color which is manufactured by the method of knitting the pure polyester-based fibers much thinner than millimeter.";

  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

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
    <p><b>İzoTeknik WT Non-Woven Geotextiles</b> are non-woven textile product in white color which is manufactured by the method of knitting the pure polyester-based fibers much thinner than millimeter.</p>



<h3>Fields of Application and Usage</h3>
<h4>For filtering</h4> 
<p>It is used as in-between filter material to prevent the fine material from blocking pores of other material or avoid formation of washing phenomenon in the cases where coarse and fine materials are used together for the engineering applications.<br><br>

İzoTeknik WT Non-Woven Geotextiles which are recommended as filtering and bearing material for control and direction of the water effectively is used in the following areas.
</p>

<ul class="subpage-full-list">
    <li>French drainage channel</li>
    <li>Perforated pipe coverings</li>
    <li>Vertical applications such as tunnel and retaining wall</li>
    <li>Seaside buildings</li>
</ul>


<h4>For Separation</h4>
<ul class="subpage-full-list">
<li>In the buildings considered to be constructed on the poor grounds, it is used under the foundation and stabilizes the ground and reduces the various unexpected subsidence.</li>
<li>In coastal buildings, it is used as filter and bedding material in order to prevent the displacement of filler due to the wave action. It effectively separates the coarse and fine filter material used in filler.</li>
</ul>


<h4>For Protection</h4>
<p>Thanks to its high puncture resistance; it protects the underlying materials against impacts by being used on thermal insulating boards for terrace roof applications, allows different operations of the materials and prevents the flow of cement slurry down.</p>

<ul class="subpage-full-list">
  <li>It is used on the building foundations to preserve water insulation applications thanks to its pressure distribution effect.</li>
  <li>It protects the geo-membranes used on open lands against any tear or impairment arising from puncture and excessive friction.</li>
  <li>It is used as insulation protective, water and moisture retention in green roof systems.</li>
</ul>

<p>
The geotextile brought on the treated surface in roll should be spread on the stretch for complete contact with the surface. In order to prevent slippage of the geotextile during the filling process, it should be applied under the previous geotextile with an overlap of 25 cm minimum.
</p>



<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is produced by use of polyester fiber.</li>
    <li>It has such a structure as to ensure homogenous distribution of the fibers thanks to tight knitting and superior production technology</li>
    <li>It ensures fast application advantage by ensuring savings on material and labor with minimum overlap in large areas by means of the opportunity of manufacturing up to a width of 6 m.</li>
    <li>Due to the heat treatment applied during production, it is more resistant than standard geotextiles.</li>
</ul>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<h3>Packing and Storage</h3>
<p>
The materials are dispatched in the form of rolls with 1 m – 6 m width and 30m – 200m length.<br>
The materials must be stored on smooth surface and indoor space.<br>
Absolutely no smoking in the storage yard.<br>
The stored products must be kept away from direct sunlight, heat and combustible sources.<br>
</p>


<?php include $dirPosition.'technical.php'; ?>

</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
