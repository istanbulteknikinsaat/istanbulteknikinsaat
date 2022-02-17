<?php

  $title = "AsfaltTex Asphalt Reinforcement Grid";
  $description = "AsfaltTexAsphalt Reinforcement Grid is a woven type geogrid material produced with the method of knitting the glass fiber strands in square or rectangular-shaped and coating with polymer bitumen.";

 
  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Asphalt Reinforcement Grid";
  $breadcrumpLink2 = "asphalt-reinforcement-grid";

    
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
    <p><b>AsfaltTexAsphalt Reinforcement Grid</b> is a woven type geogrid material produced with the method of knitting the glass fiber strands in square or rectangular-shaped and coating with polymer bitumen. To be more resistant at the node points it is produced by using a specially designed sewing method. This method provides higher performance at the node points.<br><br>

  <b>AsfaltTex Asphalt Reinforcement Grid</b> is produced biaxial (having equal tensile stress in production direction and vertical direction to manufacturing direction) or uniaxial (having tensile stress in one direction more than in the opposite direction).
  </p>


<h3>Fields of Application and Usage</h3>
<ul class="subpage-full-list">
    <li>After the application surface is grided, the cracks on the surface should be filled and the required surface repair should be performed.</li>
    <li>The application surface must be free from asphalt particles, dust and foreign matters.</li>
    <li>The application surfaces must be completely free from moisture and water.</li>
    <li>The temperature of the application surface must be higher than + 5 °C and lower than 55 °C.</li>
</ul>



<p>In the <b>AsphaltTex applications</b>, the quantity of emulsion to be used as a bonding layer must be correctly determined in accordance with the type and application surface. In case of less emulsion it will be difficult to adhere to each other with the layer of asphalt concrete. In case of much emulsion, adhesion of the machines acting on it and thus, formation of pots in the application will be inevitable. <br><br>

<b>AsfaltTex Asphalt Reinforcement Grid</b> must be laid properly on the application surface by means of specially designed apparatus.<br><br>

If the apparatus are not being used, after opening the materials by hand on the application surface and necessary stretches are done, wheeled roller must be carried on it.
</p>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>Improves the tensile strength of the asphalt concrete by forming reinforcement layer. The laboratory and field tests conducted to this effect demonstrated that the fiberglass geogrids improve the service life of the superstructure coatings at 80%.</li>
    <li>Compensates the tensile stresses arising from thermal effects, thus it prevents the cracks at the overlay.</li>
    <li>Compensates the reflective crack tensions acting from the substructure and prevents transition of the same to the superstructure and minimizes crack formation thus improves the durability and service life of the superstructure.
</li>
    <li>Performs reinforcement task between two layers and thus composite asphalt coating layer with improved strength properties is obtained.</li>
</ul>


<h3>Range of Products</h3>
<ul>
  <li>AsfaltTex 50/50 (50 kN/m / 50 kN/m)</li>
  <li>AsfaltTex 100/50 (100 kN/m / 50 kN/m)</li>
  <li>AsfaltTex 100/100 (100 kN/m / 100 kN/m)</li>
  <li>AsfaltTex 150/100 (150 kN/m / 100 kN/m)</li>
  <li>AsfaltTex 150/150 (150 kN/m / 150 kN/m)</li>
</ul>



<h3>Packaging and Storage</h3>
<p>
<b>AsfaltTex-Asphalt Reinforcement Grid,</b> is manufactured as rolls with a maximum width of 6,20m and a length of 100m usually. Each roll is shipped wrapped in UV resistant packaging. It is recommended not to stack up more than 6 rolls on top of each other and when rolls with a smaller width (up to 2 m) the rolls should be transported and stored in the vertical position.
</p>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
