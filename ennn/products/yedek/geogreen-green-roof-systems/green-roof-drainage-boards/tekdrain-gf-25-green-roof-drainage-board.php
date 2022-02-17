<?php

  $title = "TekDrain GF 25/420 Green Roof Drainage Board";
  $description = "TekDrain GF 25/420 Green Roof Drainage Board;after İzoTeknik 5000 or İzoTeknik 6500 is laid over the root retainer folio TekDrain GF 25/420 Green Roof Drainage Board is laid side by side in plates without overlapping on  these two layers.
";

  $breadcrumpTitle1 = "GeoGreen Green Roof Systems";
  $breadcrumpLink1 = "geogreen-green-roof-systems";
  
  $breadcrumpTitle2 = "Green Roof Drainage Boards";
  $breadcrumpLink2 = "green-roof-drainage-boards";

    
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
    <p><b><?php echo $title ?>,</b> after <b>İzoTeknik 5000</b> or <b>İzoTeknik 6500</b> is laid over the root retainer folio TekDrain GF 25/420 Green Roof Drainage Board is laid side by side in plates without overlapping on  these two layers. <br><br>

Following this operation GeoTeknik 1100 PP is laid over theTekDrain GF 25 Green Roof Drainage Board.The main purpose of this is to allow the plant roots to reach the main water reservoir by going through the thin layers.Excess of rain water is directed to the parapet by flowing from the joints of the TekDrain GF 25 Green Roof Drainage Board plates and discharged from there.TekDrain GF 25 Green Roof Drainage Board is preferred in green roof applications since it is a durable product made of HDPE polyethylene.By means of its water retaining capacity in its reservoir, it helps the plants to grow without requiring any extra watering expense. 
<br><br>
<b>TekDrain GF 25 Green Roof Drainage Boards</b> are delivered in plates of 2 x 1 m size.
</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

       
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
