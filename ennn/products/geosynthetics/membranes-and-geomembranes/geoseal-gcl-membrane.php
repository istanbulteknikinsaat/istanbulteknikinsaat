<?php

  $title = "GeoSeal GCL Membrane";
  $description = "GeoSeal GCL Membrane is an impermeability material formed by the wrapped natural bentonite material with rugged geotextiles.Thanks to the geotextiles wrapping the bentonite, as a result of contact of the confined bentonite with water an impermeable gel is formed. In this process the natural bentonite expands about ";


  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Membranes and Geomembranes";
  $breadcrumpLink2 = "membranes-and-geomembranes";




    
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
    <p><b>GeoSeal GCL Membrane</b> is an impermeability material formed by the wrapped natural bentonite material with rugged geotextiles.Thanks to the geotextiles wrapping the bentonite, as a result of contact of the confined bentonite with water an impermeable gel is formed. In this process the natural bentonite expands about 16 - 18 times its dry weight and creates an impermeable layer. When the mineral medium is dehydrated, natural bentonite returns its original state. This cycle is continuously repeated and does not affect the waterproofing properties of the material.</p>


<h3>Fields of Application and Usage</h3>
<p><b>GeoSeal GCL Membrane</b> is applied at least 10 cm thick on the compressed soil or gravel and at least 30 cm under the concrete or concrete layer under the soil or gravel layer. It should be applied on flat, void-free and dry surfaces. In flat areas, it is applied by rolling or by the help of an engineering vehicle by overlapping the joints at least 30 cm. It should be laid by overlapping the roll joints at least 30 cm. In vertical surfaces, it should be fixed mechanically.
</p>

<ul class="subpage-full-list">
    <li>Solid waste storage yards</li>  
    <li>Mining waste storage yards</li>
    <li>Irrigation, fire and golf course ponds</li>
    <li>Irrigation channels</li>
    <li>Water reservoirs</li>
    <li>Building foundation insulation projects</li>

</ul>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<h3>Advantages</h3>
<ul class="subpage-full-list">
      <li>When compared to compressed clay layer application it provides significant cost effectiveness.</li> 
      <li>When compared with the clay layer with identical permeability, it fulfills the impermeability function better with a volume 100-150 times less than the clay layer. It also provides a significant saving from costs such as storage and transportation.</li> 
      <li>It has superior hydraulic and mechanical properties thanks to the natural bentonite and surrounding woven and non-woven geotextiles.
      <li>No special equipment is needed for placing the rolls.</li> 
      <li>Transportation and application is easier and faster when compared to the compressed clay layer forming larger volume</li> 
</ul>


<h3>Packing and Storage</h3>
<p>
The Materials are dispatched in form of rolls with 4 m – 5 m width and 40 m – 50 m length.<br><br>
It must be stored in a well-drained storage yard with smooth and dry surface and the products must be covered with tarpaulin. Contact with humidity and water must be avoided during storage.

</p>

</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
