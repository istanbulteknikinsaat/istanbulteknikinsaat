<?php

  $title = "ForTex Geocomposites";
  $description = "ForTex Geocomposites are materials developed for bi-axial or uni-axial geogrid requirements in a variety of infrastructure applications, providing separation, drainage and strength with a single product. ";


  $breadcrumpTitle1 = "Geosynthetics";
  $breadcrumpLink1 = "geosynthetics";

  $breadcrumpTitle2 = "Geogrid";
  $breadcrumpLink2 = "geogrid";

    
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
    <p><b>ForTex Geocomposites,</b> are materials developed for bi-axial or uni-axial geogrid requirements in a variety of infrastructure applications, providing separation, drainage and strength with a single product. It is formed by combining polyester geogrids which are manufactured with the method of knitting polyester micro yarns in rectangular shape and coating with PVC with geotextile during production. They provide high performance through a sewing method specially designed to be more resistant at the node points. 
</p>



<h3>Fields of Application and Usage</h3>
<p>According to the requirements of the project, ForTex Geocomposites are produced as uni-axial or bi-axial for the purpose of stabilization between filler layers of different grain size or between a weak foundation and granular filler. </p>

<ul class="subpage-full-list">
    <li>Havalimanlarında pist, apron ve taksi yol temelleri,</li>
    <li>Havaalanı projelerinde temel drenaj sistemi yapımında</li> 
    <li>Demiryolu yeni hat yapım uygulamalarında</li>
    <li>Yüksek hızlı tren yolu yapım uygulamalarında</li>
    <li>Karayollarında zayıf zemin üzerinde yapılacak uygulamalar,</li>
    <li>Karayolları genişletme projelerinin dolgu çalışmalarında</li>
    <li>Zemin kazık uygulamalarında tabliye olarak</li>
    <li>Konteyner depolama alanları, liman ve sanayi yapılarının temellerinde kullanılır.</li>

	<li>In foundations of runways, aprons and taxiways in airports,</li>
	<li>In construction of foundation drainage system in airport projects</li>  
	<li>In new railway line construction applications.</li>
	<li>In high-speed railway construction applications</li>
	<li>In highway applications to be made on weak soil,</li>
	<li>At filling works of highway expansion projects</li>
	<li>As floor for soil piling applications.</li>
	<li>In prevention of local subsidence in container storage fields and the foundations of industrial buildings.</li>



</ul>

<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>

<h3>Advantages</h3>
<p>
  <ul class="subpage-full-list">


<li>While providing all the properties of Fortex geogrids, it also works for drainage and separation purposes.</li>
<li>It provides ease of application and low labour cost by combining the performance of two seperate products into one</li>
<li>It is applied on weak soils having water problem, preventing the granular filling from sinking to the bottom layer of the floor..</li>



  </ul>
</p>


<h3>Range of Products</h3>
<h4>Bi–Axial Geocomposites</h4>
<ul>
    <li>ForTex GC BX 20/20 P (20 kN/m / 20 kN/m)</li>
    <li>ForTex GC BX 30/30 P (30 kN/m / 30 kN/m)</li>
    <li>ForTex GC BX 40/40 P (40 kN/m / 40 kN/m)</li>
    <li>ForTex GC BX 60/60 P (60 kN/m / 60 kN/m)</li>
    <li>ForTex GC BX 80/80 P (80 kN/m / 80 kN/m)</li>
    <li>ForTex GC BX 100/100 P (100 kN/m / 100 kN/m)</li>
    <li>ForTex GC BX 120/120 P (120 kN/m / 120 kN/m)</li>
    <li>ForTex GC BX 150/150 P (150 kN/m / 150 kN/m)</li>
</ul>


<h4>Uni-Axial Geocomposites</h4>
<ul>
    <li>ForTex GC UX 20 P (20 kN/m)</li>
    <li>ForTex GC UX 30 P (30 kN/m)</li>
    <li>ForTex GC UX 40 P (40 kN/m)</li>
    <li>ForTex GC UX 60 P (60 kN/m)</li>
    <li>ForTex GC UX 80 P (80 kN/m)</li>
    <li>ForTex GC UX 100 P (100 kN/m)</li>
    <li>ForTex GC UX 120 P (120 kN/m)</li>
    <li>ForTex GC UX 150 P (150 kN/m)</li>
    <li>ForTex GC UX 200 P (200 kN/m)</li>
</ul>


<h3>Packaging and Storage</h3>
<p>
ForTex Geocomposites are manufactured as rolls with a maximum width of 6 m and a length of 50 m usually. Each roll is shipped and wrapped in UV resistant packaging.
<br><br>
It is recommended not to stack up more than 6 rolls on top of each other horizontally. The rolls with a smaller width (up to 2 m), should be transported and stored in the vertical position.

</p>


<?php include $dirPosition.'technical.php'; ?>

</div>





<?php include $dirPosition.'product-buy.php'; ?>
</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
