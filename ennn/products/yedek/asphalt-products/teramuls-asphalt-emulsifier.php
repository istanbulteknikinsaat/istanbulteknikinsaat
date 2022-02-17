<?php

  $title = "TeraMuls Asphalt Emulsifier";
  $description = "Bitumen, which is used as a binder in asphalt road construction and repair & maintenance works, is a very solid substance under normal environmental conditions. Bitumen needs to be thin and fluent so that it ";

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
    <p>Bitumen, which is used as a binder in asphalt road construction and repair & maintenance works, is a very solid substance under normal environmental conditions. Bitumen needs to be thin and fluent so that it can be used on asphalt coating road construction works or can be mixed with aggregate and machined thereafter. Bitumen should be heated to high temperatures, be added solvents or turned into solvent with water so that it becomes fluent and machinable. <b>The TeraMuls Asphalt Emulsifier</b> is one important component for turning bitumen into a water emulsion through chemical and mechanical procedures
</p>



<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li><b>TeraMuls</b> entirely surrounds the bitumen particles within water. It therefore prevents the gluing of the bitumen particles hanging within the water and renders the emulsion more durable.</li>
    <li>During application (laying it on the surface, mixing with aggregate, etc.), it allows them to unite again according to optional slow or fast cutting.</li>
    <li>Emulsions so manufactured can be transported to longer distances without degradation, tearing and with their stabilities preserved and their cutting times can be adjusted. It is also resistant against peeling because of emulsifiers.</li>
    <li><b>TeraMuls</b> increases adhesion without the need to use additives that prevent peelings in asphalt emulsions.</li>
    <li>Different emulsions can be manufactured, which suitable for many fields of application and construction techniques.</li>
    <li>It can be applied via known asphalt equipment.</li>
</ul>

<h3>Application</h3>
    <p>Obtaining the following is possible with emulsions manufactured by using <b>TeraMuls</b> in an economical, durable and degradation-resistant manner;
</p>
    <ul>
        <li>Adhesive layer</li>
        <li>Prime coat</li>
        <li>Surface dressing</li>
        <li>Slurry seal</li>
        <li>Micro - surfacing</li> 
    </ul>

<p>Recyclable cold mixtures (recycling) in-place or in plant as well as some other asphalt coating and mixture types.</p>

<h3>Packaging and Storage
</h3>
<p>It should be stored away from sun and moisture. It is supplied in 170 kg barrels.</p>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>   
<?php include $dirPosition.'technical.php'; ?>

</div>






<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
