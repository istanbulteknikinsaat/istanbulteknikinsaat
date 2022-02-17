<?php

  $title = "HiperCell Cellulosic Fiber";
  $description = "The HiperCell Cellulosic Fiber  is a high performance cellulosic fiber that supports bitumen and increases stability in open and semi-open mixtures (such as SMA and porous asphalt).";

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
    <p><b><?php echo $title ?>,</b> is a high performance cellulosic fiber that supports bitumen and increases stability in open and semi-open mixtures (such as SMA and porous asphalt). The bitumen percolation becomes a problem as during the stone mastic asphalt (SMA) application, the asphalt quantity is more.The HiperCell Cellulosic Fiber prevents percolation and prevents desorption in the coating. In addition, it is used for increasing asphalt’s mechanical strength, reducing the peeling of bitumen from the aggregate and adding further positive attributes to the mixture.
</p>


<h3>Advantages</h3>
<p>Using HiperCell Cellulosic Fiber in SMA and porous asphalt applications:</p>
<ul class="subpage-full-list">
      <li>It prevents bitumen percolation in the asphalt mixture.</li>
      <li>As it is manufactured in pellets, it does not cause dust during packaging.</li>
      <li>It increases resistance against cracking.</li>
      <li>It reduces ducting and wheel tracks.</li>
      <li>It increases mechanical stability.</li>
      <li>It delays exhaustion cracks.</li>
      <li>It reduces reflection cracks.</li>
      <li>It creates a three dimensional reinforcement within asphalt.</li>
      <li>It elevates the elasticity module.</li>
      <li>The pellets do not glue to each other during the storage process as it does not contain bitumen.</li>
      <li>It includes more quantities of fiber due to its low dust ratio.</li>
</ul>

<h3>Application</h3>

<p>
   <b>The HiperCell Cellulosic Fiber</b> is directly added to the plant mixer by hand or by a dosing pump. The cellulose fiber has been packaged in order to prevent the spread of dust to the environment. <br>
    <b>The HiperCell Cellulosic Fiber</b> is used in quantities between %0.25 – 0.35 of the aggregate weight depending on the thickness  of the coating, the gradation of the aggregate and whether the bitumen is modified.<br>
    It is designed so as to easily distribute in the asphalt plant mixer.
</p>

<h3>Packaging and Storage</h3>
<p>It should be kept without opening its package and away from moisture. <br>
450 ± 20 kg big bag
</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
