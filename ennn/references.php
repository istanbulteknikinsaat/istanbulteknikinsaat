<?php
  $title = "References";
  $description = "As Istanbul Teknik, we continue our activities based on ‘ready to improve your construction’ motto and pleased to share our references of green roofing, heat insulation, waterproofing, ground  stabilization and geogrid reinforced  retaining walls with our valued customers since were founded.";
require_once($_SERVER['DOCUMENT_ROOT'] .'/en/products/expansion-joint-profiles/getProducts.php');

  include 'header.php'; 
?>
 

    <section class="subpage">

    <div class="referanslar-slider">
         <div class="referanslar-header" style="background-image: url(/en/img/insulation-products-references.jpg);"></div>
         <div class="referanslar-header" style="background-image: url(/en/img/geogreen-green-roof-systems-references.jpg);"></div>
         <div class="referanslar-header" style="background-image: url(/en/img/drainage-board-references.jpg);"></div>
    </div>



        <div class="wrapper">
            <ol class="breadcrumb">
                <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                    <a href="/en" itemprop="url">
                        <span itemprop="title">Home Page</span> /&nbsp;
                    </a>
                </li>
                <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                    <a href="references" itemprop="url">
                        <span itemprop="title">References</span>
                    </a>
                </li>
            </ol>
            
            <h2 title="References" data-url="references">References</h2>
            <p>As Istanbul Teknik, we continue our activities based on ‘ready to improve your construction’ motto and pleased to share our references of green roofing, heat insulation, waterproofing, ground  stabilization and geogrid reinforced  retaining walls with our valued customers since were founded.</p>



<!--   <div class="referencesMap">  </div>


        </div>



 -->

        <div class="referanslar-accordion">

                        <h3><div class="wrapper">ForTex Geogrid<span class="icon"></span></div></h3>
                        

                        <div class="accordion-content">
                              <div class="wrapper">
                               <ul class="rlist">

<li class="rlist-header">
<?php $refData1 = referansList("Fortex Geogrid"); 
     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div>  <div class="rlist-header-col-2">'.$refData1[0][1].'</div>  <div class="rlist-header-col-2">'.$refData1[0][2].'</div>  <div class="rlist-header-col-2">'.$refData1[0][3].'</div>'; ?>
</li>

  <?php             
   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
            echo  '<li class="rlist-row"><div class="rlist-col-1">'.$refData1[$x][0].'</div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div>  <div class="rlist-col-2">'.$refData1[$x][2].'</div>  <div class="rlist-col-2">'.$refData1[$x][3].'</div></li>';
    } 

  ?>


                                </ul>

                                </div>
                        </div>



                        <h3><div class="wrapper">Geotechnical Non-Woven Geotextiles<span class="icon"></span></div></h3>
                        
                        <div class="accordion-content">
                 <div class="wrapper">
<ul class="rlist">
<li class="rlist-header">
<?php $refData1 = referansList("GeoTeknik"); 
     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div>  <div class="rlist-header-col-2">'.$refData1[0][1].'</div>  <div class="rlist-header-col-2">'.$refData1[0][2].'</div>  <div class="rlist-header-col-2">'.$refData1[0][3].'</div>'; ?>
</li>
  <?php             
   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
            echo  '<li class="rlist-row"><div class="rlist-col-1">'.$refData1[$x][0].'</div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div>  <div class="rlist-col-2">'.$refData1[$x][2].'</div>  <div class="rlist-col-2">'.$refData1[$x][3].'</div></li>';
    } 

  ?>

            </ul>

                                </div>
                        </div>















                        <h3><div class="wrapper">GeoArme Geosynthetic Reinforced Wall<span class="icon"></span></div></h3>
                        
                        <div class="accordion-content">
                                   <div class="wrapper">
<ul class="rlist">
<li class="rlist-header">
<?php $refData1 = referansList("GeoArme"); 
     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div>  <div class="rlist-header-col-2">'.$refData1[0][1].'</div>  <div class="rlist-header-col-2">'.$refData1[0][2].'</div>  <div class="rlist-header-col-2">'.$refData1[0][3].'</div>'; ?>
</li>
  <?php             
   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
            echo  '<li class="rlist-row"><div class="rlist-col-1">'.$refData1[$x][0].'</div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div>  <div class="rlist-col-2">'.$refData1[$x][2].'</div>  <div class="rlist-col-2">'.$refData1[$x][3].'</div></li>';
    } 

  ?>

            </ul>

                                </div>
                        </div>










                        <h3><div class="wrapper">GeoSeal Membrane<span class="icon"></span></div></h3>
                        
                        <div class="accordion-content">
                                   <div class="wrapper">
<ul class="rlist">
<li class="rlist-header">
<?php $refData1 = referansList("GeoSeal"); 
     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div>  <div class="rlist-header-col-2">'.$refData1[0][1].'</div>  <div class="rlist-header-col-2">'.$refData1[0][2].'</div>  <div class="rlist-header-col-2">'.$refData1[0][3].'</div>'; ?>
</li>
  <?php             
   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
            echo  '<li class="rlist-row"><div class="rlist-col-1">'.$refData1[$x][0].'</div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div>  <div class="rlist-col-2">'.$refData1[$x][2].'</div>  <div class="rlist-col-2">'.$refData1[$x][3].'</div></li>';
    } 

  ?>

            </ul>

                                </div>
                        </div>
















        <h3><div class="wrapper">TeraGrip Anti Stripping Agents<span class="icon"></span></div></h3>
        <div class="accordion-content">
                   <div class="wrapper">
                <ul class="rlist">
                <li class="rlist-header">
                <?php $refData1 = referansList("TeraGrip"); 
                     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div><div class="rlist-header-col-2">&nbsp;</div> <div class="rlist-header-col-2">&nbsp;</div><div class="rlist-header-col-2">Bölge</div>'; ?>
                </li>
                  <?php             
                   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
                            echo  '<li class="rlist-row"><div class="rlist-col-1">'.$refData1[$x][0].'</div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div>  <div class="rlist-col-2">'.$refData1[$x][2].'</div>  <div class="rlist-col-2">'.$refData1[$x][3].'</div></li>';
                    } 

                  ?>
                            </ul>
                </div>
        </div>


















        <h3><div class="wrapper">Asphalt Products<span class="icon"></span></div></h3>
        <div class="accordion-content">
                   <div class="wrapper">
                <ul class="rlist">
                <li class="rlist-header"> 
                <?php $refData1 = referansList("Asfalt Ürünleri"); 
                     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div><div class="rlist-header-col-2">&nbsp;</div> <div class="rlist-header-col-2">&nbsp;</div><div class="rlist-header-col-2">'.$refData1[0][1].'</div>'; ?>
                </li>
                  <?php             
                   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
                            echo  '<li class="rlist-row"><div class="rlist-col-1  ">'.$refData1[$x][0].'</div>  <div class="rlist-col-2"> </div>  <div class="rlist-col-2"> </div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div></li>';
                    } 

                  ?>
                            </ul>
                </div>
        </div>













                        <h3><div class="wrapper">TrioTex Roof and Facade Underlays<span class="icon"></span></div></h3>
                        
                        <div class="accordion-content">
                                   <div class="wrapper">
<ul class="rlist">
<li class="rlist-header">
<?php $refData1 = referansList("TrioTex Çatı ve Cephe Örtüleri"); 
     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div>  <div class="rlist-header-col-2">'.$refData1[0][1].'</div>  <div class="rlist-header-col-2">'.$refData1[0][2].'</div>  <div class="rlist-header-col-2">'.$refData1[0][3].'</div>'; ?>
</li>
  <?php             
   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
            echo  '<li class="rlist-row"><div class="rlist-col-1">'.$refData1[$x][0].'</div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div>  <div class="rlist-col-2">'.$refData1[$x][2].'</div>  <div class="rlist-col-2">'.$refData1[$x][3].'</div></li>';
    } 

  ?>

            </ul>

                                </div>
                        </div>









                        <h3><div class="wrapper">GeoGreen Green Roof Systems<span class="icon"></span></div></h3>
                        
                        <div class="accordion-content">
                                   <div class="wrapper">
<ul class="rlist">
<li class="rlist-header">
<?php $refData1 = referansList("Yeşil Çatı Sistemleri"); 
     echo '<div class="rlist-header-col-1">'.$refData1[0][0].'</div>  <div class="rlist-header-col-2">'.$refData1[0][1].'</div>  <div class="rlist-header-col-2">'.$refData1[0][2].'</div>  <div class="rlist-header-col-2">'.$refData1[0][3].'</div>'; ?>
</li>
  <?php             
   for ($x = 1; $x <= sizeof($refData1)-1; $x++) {
            echo  '<li class="rlist-row"><div class="rlist-col-1">'.$refData1[$x][0].'</div>  <div class="rlist-col-2">'.$refData1[$x][1].'</div>  <div class="rlist-col-2">'.$refData1[$x][2].'</div>  <div class="rlist-col-2">'.$refData1[$x][3].'</div></li>';
    } 

  ?>

            </ul>

                                </div>
                        </div>










        </div> 







</section><!-- SubPage END -->






<?php include 'footer.php'; ?>
