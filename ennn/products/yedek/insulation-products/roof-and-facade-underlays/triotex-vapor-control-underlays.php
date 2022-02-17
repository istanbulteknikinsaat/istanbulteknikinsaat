<?php


  $title = "TrioTex Vapor Control Underlays";
  $description = "TrioTex Vapor Control Underlays, is a two layer underlay that is made of a special film layer covers a  nonwoven polypropylene (Spunbond) layer and allowing limited vapor transition under heat insulation. This product has vapor barrier property compared with breathing underlays and limited breathing property compared with vapor barriers.  For that reason they are defined as vapor breaker or vapor control underlays. It can be used only in combination with breathable underlay.";

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
    <p><b><?php echo $title ?>,</b> is a two layer underlay that is made of a special film layer covers a  nonwoven polypropylene (Spunbond) layer and allowing limited vapor transition under heat insulation. This product has vapor barrier property compared with breathing underlays and limited breathing property compared with vapor barriers.  For that reason they are defined as vapor breaker or vapor control underlays. It can be used only in combination with breathable underlay.</p>



<h3>Fields of Application and Usage</h3>
<p>While it may vary according to vertical and horizontal applications for roof and facade it should be laid by being stretched with at least 10 cm overlapping and overlaps should be surely sealed. It should be fasten on the surface with mastic and butyl tape at the starting and end of the covering application. TrioTex DS 38 Tape or TrioTex SP UNI Tape should be applied on the underlay. Repairing of damages or rips is made with TrioTex SP UNI tape. Rolls have a covering surface of 75 m2 and area to be covered is 70 m2 at ideal conditions. The surface of product should be protected from dust and water once it is unpacked. A clean surface is required for tape and mastic applications. It must be used together with breathing underlay.
</p>

<ul class="subpage-full-list">
    <li>It can be used in all roofs with or without air ventilation.</li>
    <li>When used in attic on the interior of the roof, it prevents heat loss through convection. It provides appropriate climate conditions.</li>
</ul>

<h3>Advantages</h3>

<ul class="subpage-full-list">
    <li>It reduces vapor arriving in the insulation.</li>
    <li>It keeps the humidity of the internal environment at limited level.</li>
    <li>It can be used as an alternative to vapor barriers where vapor release is not excessive.</li>
    <li>It has been designed for living spaces in attic.</li>
</ul>

<h3>Packing and Storage</h3>
<p>
It is delivered in rolls and in polyethylene packaging.<br>
Roll dimensions: 1.5 x 50 m <br><br>

Rolls should be kept on a clean surface in the storage facility either vertically or horizontally and particularly protected from sunlight.
</p>








<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
