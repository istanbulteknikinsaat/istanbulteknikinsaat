<?php

  $title = "Polymer Modified Bitumen (PmB) Additive";
  $description = "The Polymer Modified Bitumen (PmB) Additive,is a functional polyolefin that is used in asphalt modification. The Polymer Modified Bitumen (PmB) Additive, is used in bitumen hot mixtures (BSK) as well as in binder and corrosion coatings.";

  $breadcrumpTitle1 = "Asphalt Products";
  $breadcrumpLink1 = "asphalt-products";

  $breadcrumpTitle2 = "";
  $breadcrumpLink2 = "";

      
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
    <p><b><?php echo $title ?>,</b> is a functional polyolefin that is used in asphalt modification. <b>The Polymer Modified Bitumen (PmB) Additive,</b> is used in bitumen hot mixtures (BSK) as well as in binder and corrosion coatings. <br><br>
    The Polymer Modified Bitumen (PmB) Additiveis used for preventing permanent wheel tracks and cracks on roads. It should be supplied as power for easy mixture with bitumen.
    </p>


<h3>Advantages</h3>
<ul class="subpage-full-list">
      <li>It gives the best results according to the <b>AASTHO M320 / EN 14023,</b> standards in terms of softening point and wheel track settlement performance if used as an “hybrid” with the SBS polymer.</li>
      <li>It has a low melting point. <b>The Polymer Modified Bitumen (PmB) Additive</b> can easily melt within bitumen under 130-140 °C. Only with a basic mixture, it can rapidly melt within bitumen and distribute homogeneously.</li>
      <li><b>With the Polymer Modified Bitumen (PmB) Additive,</b> the machinability of modified asphalt does not become difficult as in asphalt modified with SBS. The machinability of asphalt is much easier compared to SBS modification.</li>
      <li>It increases values such as the elastic module of the asphalt, indirect tensile strength, material fatigue and Marshall stability.</li>
      <li>It increases the cohesiveness and peeling strength of asphalt.</li>
      <li>It is compatible with bitumen of different characteristics.</li>
      <li>It is more economic and has a more stable price when compared to SBS.</li>
      <li>It is the most efficient solution that prevents wheel tracks even under high environmental temperatures.</li>
      <li>Its storage stability is perfect.</li>
      <li>No decomposition of polymers occur during storage.</li>
      <li>It increases asphalt resistance against fuels and solvents.</li>
</ul>

<h3>Application</h3>
<ul class="subpage-full-list">
    <li>It can be used by mixing with bitumen in prior or directly adding to the plant mixer.</li>
    <li>Dosage varies between 3% - 5% of the bitumen weight according to asphalt design calculation.</li>
    <li>It is mixed with bitumen under 150 °C. It can easily melt and distribute within bitumen.</li>
    <li>It is especially recommended for use in crossways, bus lines and bus stops, runways, airport taxi ways, industrial facilities and container storage areas.</li>
</ul>

<h3>Packaging and Storage</h3>
<p>
It is available in 25 kg craft paper or 500 kg big bags.
</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>


       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
