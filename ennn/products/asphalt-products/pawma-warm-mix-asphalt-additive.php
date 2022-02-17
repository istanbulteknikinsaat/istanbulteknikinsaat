<?php

  $title = "Pawma Warm Mix Asphalt Additive";
  $description = "The Pawma Warm Mix Asphalt Additive provides ease of application by increasing the workability of the mixture during asphalt production. If provides that asphalt mixture has a longer machinability and that a more efficient compression is obtained";

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
    <p><b><?php echo $title ?>,</b> provides ease of application by increasing the workability of the mixture during asphalt production. If provides that asphalt mixture has a longer machinability and that a more efficient compression is obtained. When asphalt is in a huge mass, it takes longer for it to cool down; but when it is laid onto the road with a thickness of 5-8 mm, cool down occurs rapidly. For this reason, no asphalt is laid below 10 °C. That is because asphalt hardens mostly during compression via cylinders and it is not possible to finalize compression.
<br><br>
<b>Pawma</b> adds functionality to asphalt and allows laying it even under very low environmental temperatures.
    </p>

<h3>No longer working under cloud of smoke.</h3>
<p>
As the temperature of asphalt mixture is low during the production and laying phases, gas emissions and the incense effect in mixtures that are prepared with <b>Pawma</b> are near to zero. The odor and gas emissions to the environment are very low as a result and the discomfort given to the surroundings is considerably reduced especially in interurban use. It protects the health of employees and helps in implementing occupational safety.

</p>



<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It allows operation under cold and adverse weather conditions.</li>
    <li>It provides ease of application and efficient compression.</li>
    <li>It allow savings on energy due to low mixture temperature and permits the efficient of resources.</li>
    <li>Lowered gas emission reduces the negative impact on workers’ health and the environment.</li>
    <li>It does not effect asphalt’s chemical structure.</li>
    <li>Asphalt’s machinability is better during the time between laying and compression.</li>
    <li>It can perform compression in a short time with lesser number of cylinders and therefore reduces operating costs.</li>
    <li>Low operating temperature reduces bitumen ageing.</li>
    <li>Asphalt mixture can be transported to long distances as it remains usable for a long time.</li>
    <li>Low operating temperature reduces accidents as it allows a more comfortable and careful use of the asphalt plant and the machinery.</li>
    <li>No additional high-cost bitumen tanks are needed as it can be added during the mixing procedure directly.</li>
</ul>





<h3>Application</h3>
<ul class="subpage-full-list">
      <li>If provides that asphalt mixture has a longer machinability and that a more efficient compression is obtained.</li>
      <li><b>The aggregate temperature can be lowered by 30 ° with Pawma.</b> Bitumen ageing rate is lowered due to low temperature of application.</li>
      <li>The thermal energy consumed is reduced by 30%, electric energy is reduced by 10% and therefore providing energy savings. The mixing time of asphalt production is not prolonged.</li>
      <li>It has no effect on the softening point of asphalt and does not result in the formation of wheel tracks.</li>
</ul>




<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>




       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
