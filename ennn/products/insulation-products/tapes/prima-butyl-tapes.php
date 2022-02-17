<?php

  $title = "Prima Butyl Tapes";
  $description = "Prima Felted Butyl Tapes, Prima Butyl Tapes, Prima Black Butyl Tape, Prima Double-Sided Butyl Tape, Prima AluminumFoil Butyl Tape";


  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";


  $breadcrumpTitle2 = "Tapes";
  $breadcrumpLink2 = "tapes";

  $onePicture = true;  
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
   

<h3>Prima Felted Butyl Tapes 9-10-15-20-30-40-50-100 cm</h3>
<img src="<?php echo $imgDir?>prima-felted-butyl-tapes-9-10-15-20-30-40-50-100-cm.png" alt="Prima Felted Butyl Tapes 9-10-15-20-30-40-50-100 cm, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>
It helps to ensure and fix the waterproofing in the joints in buildings and construction sites.</p>

<h3>Prima 0,3 mm x 15 mm x 10 m Black Butyl Tape</h3>
<img src="<?php echo $imgDir?>prima-03mm-x-15mm-x-10m-black-butyl-tape.png" alt="Prima 0,3 mm x 15 mm x 10 m Black Butyl Tape <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>The product is a double-sided butyl tape which can be applied to many surfaces. It has high UV resistance and resistance to various chemicals. It is used in joints and endings in roof and facade applications.</p>

<h3>Prima 0,7 mm x 100 Double-Sided Butyl Tape</h3>
<img src="<?php echo $imgDir?>prima-07mm-x-100-double-sided-butyl-tape.png" alt="Prima 0,7 mm x 100 Double-Sided Butyl Tape, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>The product is a double-sided butyl tape which can be applied to many surfaces. It has high UV resistance and resistance to various chemicals. It is used in joints and endings in roof and facade applications.It is available in various sizes and lengths in rolls. Its  dimensions are  0,7 mm x 100 cm x 20 m and can be cut in desired dimensions. Its color is black.</p>

<h3>Prima 1 mm x 100 AluminumFoil Butyl Tape</h3>
<img src="<?php echo $imgDir?>prima-1mm-x-100-aluminumFoil-butyl-tape.png" alt="Prima 1 mm x 100 AluminumFoil Butyl Tape, <?php echo $title.', '.$breadcrumpTitle1.', '.$breadcrumpTitle2; ?>">

<p>It is a laminated form of alumunim foil and butyl tape.It has high UV resistance and resistance to various chemicals. It is used in joints and endings in roof and facade applications.It is available in various sizes and lengths in rolls. It is in dimensions of 1 mm x 100 cm x 20 m and can be cut in desired dimensions.</p>











<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>



       
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
