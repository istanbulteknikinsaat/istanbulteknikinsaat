<?php


  $title = "TrioTex High Tensile Strength Roof and Facade Underlays";
  $description = "TrioTex High Tensile Strength Roof and Facade Underlays, are flexible and breathing membranes which are manufactured by binding a micro porous film layer between two polypropylene (PP spunbond) nonwoven textile and bearing mesh layers with thermal process. Self-adhesive overlapping TrioTex Plus products provide easy application and price advantage.";

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
    <p><b><?php echo $title ?>,</b> are flexible and breathing membranes which are manufactured by binding a micro porous film layer between two polypropylene (PP spunbond) nonwoven textile and bearing mesh layers with thermal process. Self-adhesive overlapping TrioTex Plus products provide easy application and price advantage.</p>



<h3>Fields of Application and Usage</h3>
<p>
While it may vary according to vertical and horizontal applications for roof and facade it should be laid by being stretched with at least 10 cm overlapping and overlaps should be sealed. It should be fasten on the surface with mastic or butyl tape at the starting and end of the covering application. If the product is not PLUS type, <b>TrioTex DS 38 Tape</b> should be applied to underlay overlaps in between or <b>TrioTex SP UNI Tape</b> should be applied to the overlaps top. Tensile strength and UV-resistant <b>TrioTex SP UNI Tape</b> should be used for repairing of damages and rips, for connection of the brackets and ventilation shafts with the underlay. Rolls have underlay surface of 75 m2 and area to be covered is 70 m2 at ideal conditions.
<br><br>

The surface of product should be protected from dust and water once it is unpacked. Application of tapes and mastic requires clean surfaces. The underlay must be covered within a maximum of 4 months.
</p>

<ul class="subpage-full-list">
    <li>It is an element of the system on air spaced and heat insulated curtain wall applications.</li>
    <li>It is the modern roof underlay for supported or unsupported roofs with or without ventilation.</li>
    <li>It is used as membrane under shingles.</li>
    <li>It is applied as underlay under clamped metal roofs.</li>
    <li>It should be selected according to required technical specifications.</li>
</ul>


<h3>Advantages</h3>
<ul class="subpage-full-list">
        <li>Effectively transmits the moisture out that is contained in the building by its breathing feature.</li>
        <li>Increases efficiency of the cold and warm air in the building by means of its wind barrier effect. It also protects heat insulation against erosion.</li>
        <li>It is completely water proof. It protects the outer surface of heat insulation from rain and snow.</li>
        <li>Based on the results of aging tests, it is a durable and long-life product against UV and temperature effects which the building is exposed to.</li>
        <li>High strength, possibility to use for a long period of time after a single application and heat loss prevention properties make TrioTex High Tensile Strength Roof and Facade Underlays an environment friendly product.</li>
        <li>It is equipped with a coating that prevents disturbing reflections.</li>
        <li>Bearing mesh gives extra tensile strength to underlay</li>
</ul>

<h3>Packaging and Storage</h3>
<p>
It is delivered in rolls in polyethylene packaging<br>
Roll dimensions: 1.5 x 50 m<br><br>

Rolls should be kept on a clean surface in the storage facility either vertically or horizontally and particularly protected from sunlight in the warehouses.
</p>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>
<?php include $dirPosition.'technical.php'; ?>


</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
