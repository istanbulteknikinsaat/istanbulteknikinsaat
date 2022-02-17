<?php

  $title = "CoverEx, PU based, Single Component, Elastomeric Joint Mastic";
  $description = "CoverEx is an elastic joint paste mastic which is single component, getting cured with moisture, polyurethane based and with high mechanical resistant.
It can be used indoor or outdoor.";

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
    



<p>CoverEx is an elastic joint paste mastic which is single component, getting cured with moisture, polyurethane based and with high mechanical resistant. <br>
It can be used indoor or outdoor.</p>


<h3>Areas of Use</h3>
<ul class="subpage-full-list">
    <li>Vertical and horizontal, indoor and outdoor expansion joints of structures,</li>
    <li>Junction and movement joints,</li>
    <li>Corner junctions of roof and terrace paraphets,</li>
    <li>Junction details of prefabricated elements,</li>
    <li>Moving joints up to %25,</li>
    <li>Roof grooves and paraphet joints,</li>
    <li>Window and door edges,</li>
</ul>


<h3>Advantages</h3>
<ul class="subpage-full-list">


<li>It is elastic. It keeps its elasticity between temperatures -40° C and +70° C .</li>
<li>Easy and fast to apply.</li>
<li>Single component.</li>
<li>Ready to use, cold applied.</li>
<li>Gets cured with air moisture.</li>
<li>It has high elasticity.</li>
<li>Ensures perfect adherence with concrete, metal, hardwood and other construction materials.</li>
<li>Applicable without undercoat to various surfaces. It’s adherence is very high to the applied surface.</li>
<li>Gets cured bubble-free.</li>
<li>Chemical resistant.</li>



</ul>



<h3>Consumption</h3>
<p>1,40 kg/dm³</p>


<h3>Packaging
</h3>
<p>600 ml sausage</p>






<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
