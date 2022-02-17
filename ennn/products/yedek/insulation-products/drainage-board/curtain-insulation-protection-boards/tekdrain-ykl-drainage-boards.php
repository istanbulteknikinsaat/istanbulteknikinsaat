<?php
 require_once($_SERVER['DOCUMENT_ROOT'] .'/en/products/expansion-joint-profiles/getProducts.php');

  $title = "TekDrain YKL Drainage Boards";
  $description = "TekDrain YKL Drainage Boards, are protective layers manufactured from high density polyethylene (HDPE), resistant to plant roots, separating the curtain wall from the earth, thus protecting the wall against water and humidity.";

  $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Drainage Board";
  $breadcrumpLink2 = "drainage-board";

        
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
    <p><b><?php echo $title ?>,</b> are protective layers manufactured from high density polyethylene (HDPE), resistant to plant roots, separating the curtain wall from the earth, thus protecting the wall against water and humidity.</p>


<h3>Fields of Usage</h3>
<p>Binaların perde yalıtımında uygulanan su ve ısı yalıtımlarını korumak için kullanılması önerilir</p>

<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>Protects the waterproofing system from the damages that may occur during earth fill.</li>
    <li>The air between the bubbles enables the curtain wall to breathe.</li>
    <li>Assures equal distribution of the pressure acted by the earth load.</li>
    <li>Distributes the load that can act to a single point.</li>
</ul>

<h3>Packaging and Storage</h3>
<p>The product is manufactured in the form of 2mx20m or 2mx30m rolls and stored vertically and outdoors in mandatory cases.</p>


<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<h3>Technical Specifications</h3></div>

<div class="wrapper-ignore"><div class="widetable">
<?php allReadTeknik(substr( $_SERVER['PHP_SELF'], 3, -4),'TekDrain YKL Drainage Boards 400'); ?>
</div> </div>
<div class="wrapper-ignore"><div class="widetable">
<?php allReadTeknik(substr( $_SERVER['PHP_SELF'], 3, -4),'TekDrain YKL Drainage Boards 500'); ?>
</div> </div>
<div class="wrapper-ignore"><div class="widetable">
<?php allReadTeknik(substr( $_SERVER['PHP_SELF'], 3, -4),'TekDrain YKL Drainage Boards 600'); ?>
</div> </div>
<div class="wrapper-ignore"><div class="widetable">
<?php allReadTeknik(substr( $_SERVER['PHP_SELF'], 3, -4),'TekDrain YKL Drainage Boards 700'); ?>
</div> </div>








<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
