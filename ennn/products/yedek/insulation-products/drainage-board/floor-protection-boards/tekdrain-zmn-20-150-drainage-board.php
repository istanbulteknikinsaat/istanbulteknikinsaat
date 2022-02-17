<?php

  $title = "TekDrain ZMN 20/200 Drainage Board";
  $description = "TekDrain ZMN 20/150 Drainage Board, is the protective layer manufactured from high density polyethylene (HDPE), resistant to plant roots and corrosion, separating the curtain wall from the earth, thus protecting the curtain wall and base concrete against water and humidity.";


  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Drainage Board";
  $breadcrumpLink2 = "drainage-board";


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
    <p><b><?php echo $title ?>,</b> is the protective layer manufactured from high density polyethylene (HDPE), resistant to plant roots and corrosion, separating the curtain wall from the earth, thus protecting the curtain wall and base concrete against water and humidity.
</p>


<h3>Fields of Usage</h3>
<ul class="subpage-full-list">
    <li>Prevents water pooling in building foundations from moving up.</li>
    <li>Protects insulation in curtain walls and resistant to high pressure soil load.</li>
    <li>Resistant to plant roots, rainwater and alkalis</li>
</ul>

<h3>Advantages</h3>
<p>It protects the foundation concrete against water and moisture climbing up from the ground. It is a multi-functional product that can also be applied on the curtain walls and protects insulation by eliminating soil load.</p>


<h3>Packaging and Storage</h3>
<p>Produced in 2 x 20 m rolls and 2,5 x 1,2 m plates.<br>
The rolls are stored in upright position; plates in horizontal position.

</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
  
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
