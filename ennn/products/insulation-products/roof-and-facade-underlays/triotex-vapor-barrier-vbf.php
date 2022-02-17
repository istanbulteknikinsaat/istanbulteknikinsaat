<?php

  $title = "TrioTex Vapor Barrier VBF";
  $description = "TrioTex Vapor Barrier VBF, is a three layer vapor barrier underlay reflecting heat energy and providing extra insulation. It consists of polyethylene foil, polypropylene bearing mesh and polyethylene layers. With self-adhesive overlapping parts TrioTex VBF Plus it provides easy and economical application opportunity.";

 $breadcrumpTitle1 = "Insulation Products";
  $breadcrumpLink1 = "insulation-products";

  $breadcrumpTitle2 = "Roof and Facade Underlays";
  $breadcrumpLink2 = "roof-and-facade-underlays";

        
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
    <p><b><?php echo $title ?>,</b> is a three layer vapor barrier underlay reflecting heat energy and providing extra insulation. It consists of polyethylene foil, polypropylene bearing mesh and polyethylene layers. With self-adhesive overlapping parts TrioTex VBF Plus it provides easy and economical application opportunity.</p>



<h3>Fields of Application and Usage</h3>
<p>While it may vary according to vertical and horizontal applications for roof and facade it should be laid by being stretched with at least 10 cm overlapping and overlaps should be surely sealed. It should be fasten on the surface with mastic at the starting and end of the covering application. If the product is not PLUS type, TrioTex DS 38 tape should be applied to underlay overlaps in between or TrioTex SP AL folio tape should be applied to the overlaps top. Repairing of small damages or rips is made by patching with a product part or with a folio tape. Rolls have underlay surface of 75 m2 and area to be covered is 70 m2 at ideal conditions. The surface of product should be protected from dust and water once it is unpacked. Application of tapes and mastic requires clean surfaces.</p>

<ul class="subpage-full-list">
    <li>It can be used in all roofs with or without air ventilation.</li>
    <li>When used in attic on the interior of the roof, it prevents heat loss through convection. It provides appropriate climate conditions.</li>
    <li>It is applied over trapeze coating in clamped metal roofs.</li>
</ul>

<h3>Advantages</h3>
<ul class="subpage-full-list">
    <li>It is resistant to water vapor. It provides extra vapor and wind insulation.</li>
    <li>It forms an insulation wall against water, moisture and wind.</li>
    <li>It is designed for living spaces in attic.</li>
    <li>It is pliable and easy to apply.</li>
    <li>It prevents heat loss caused by free air circulation.</li>
    <li>It has high tearing strength by its bearing layer in the middle.</li>
    <li>High strength and ability to use for a long time with single application, makes TrioTex Vapor Barrier an environment friendly product.</li>
</ul>

<h3>Packing and Storage</h3>
<p>
It is delivered in rolls and in polyethylene packaging.<br>
Roll dimensions: 1.5 x 50 m<br><br>

Rolls should be kept on a clean surface in the storage facility either vertically or horizontally and particularly protected from sunlight.
</p>






<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
