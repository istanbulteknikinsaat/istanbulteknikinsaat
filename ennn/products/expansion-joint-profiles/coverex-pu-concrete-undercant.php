<?php

  $title = "CoverEx Polyurethane Concrete Primer";
  $description = "Polyurethane based, single component, high solid rated , transparent coating liquid.";

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
    

<p>Polyurethane based, single component, high solid rated , transparent coating liquid.</p>

<h3>Areas of Use</h3>
<p>It is used for preparation of concrete and similar dusty surfaces, before the application of PU based floor paints, PU based parquet adhesives and all types of PU based floorings.
</p>

<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is a single component liquid and contains solvent. By chemical reaction with moisture gets cured and fills the pores.</li>
    <li>Easy to use, strong and  hard after curing.</li>
    <li>Resistant to water and other chemicals.</li>
    <li>Preparation of surface for application of PU based materials ensures perfect adherence.</li>
</ul>


<h3>Consumption</h3>
<p>It is about 0,100 – 0,250 kg/m²  based on absorptivity of application surface.</p>

<h3>Ambalaj</h3>
<p>Net 15 kg metal bucket</p>






<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
