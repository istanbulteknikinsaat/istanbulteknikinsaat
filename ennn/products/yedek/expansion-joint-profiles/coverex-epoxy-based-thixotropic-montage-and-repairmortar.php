<?php

  $title = "CoverEx Epoxy Based, Thixotropic Montage and Repair Mortar";
  $description = "CoverEx epoxy resin based, without solvent, two component, thixotropic montage and repair mortar.";

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
    



<p>CoverEx epoxy resin based, without solvent, two component, thixotropic montage and repair mortar.</p>


<h3>Areas of Use</h3>
<ul class="subpage-full-list">
    <li>Installation of dilatation tapes</li>
    <li>Filling of drill holes</li>
    <li>Repairing of concrete column, curtain and beams.</li>
    <li>Pasting, installation , filling , grout and levelling of joint insulation works</li>
    <li>Repairing of concrete cracks and insulation of cracks.</li>
    <li>Repairing of all types of structural concrete</li>
    <li>Fixing and pasting of all types of metal equipment to all types of concrete and steel equipment.</li>
</ul>


<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>Exremely resistant to corrosion, abrasion and chemicals.</li>
    <li>Resistant to vibration</li>
    <li>Not shrinkable.</li>
    <li>Does not conduct water and gas</li>
    <li>Allows for loading in a short time since it gets cured very fast.</li>
    <li>It has high adherence.</li>
    <li>Does not contain solvent</li>
    <li>Easy to mix and to use</li>
    <li>Perfectly sticks to concrete, steel and lots of construction material</li>
    <li>Does not sag in vertical and inverse applications since it is thixotropic.</li>
</ul>


<h3>Consumption</h3>
<p>1,6 kg/dm3 <br>
About 1 kg / 1 m for installation of dilatation tapes.
</p>

<h3>Packaging</h3>
<p>5 kg set (4 kg Epoxy resin + 1 kg hardener )</p>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
