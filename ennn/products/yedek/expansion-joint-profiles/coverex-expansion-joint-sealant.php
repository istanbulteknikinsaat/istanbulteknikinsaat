<?php

  $title = "CoverEx Expansion Joint Selant";
  $description = "It is two component dilatation and joint filling mastic with high mechanical and chemical resistance which is polyurethane bitumen based, cold applied and self levelling.
";

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
    



<p>It is two component CoverEx Expansion Joint Selant with high mechanical and chemical resistance which is polyurethane bitumen based, cold applied and self levelling.</p>


<h3>Areas of use</h3>
<p>It is used for water proofing and filling of horizontal moving dilatations and joints.</p>


<h3>Avantajları</h3>
<ul class="subpage-full-list">
  <li>It is elastic. It keeps its elasticity between temperatures -20° C and +120° C .</li>
  <li>It is cold applied.</li>
  <li>Resistant to abrasions.</li>
  <li>Easy and fast usage because of self levelling form.</li>
  <li>Very high adherence to applied surface.</li>
  <li>Resistant to ageing.</li>
</ul>


<h3>Consumption</h3>
<p>1,30 kg/dm3</p>

<h3>Packaging</h3>
<p>Net: 4 kg resin + 1 kg set hardener</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
