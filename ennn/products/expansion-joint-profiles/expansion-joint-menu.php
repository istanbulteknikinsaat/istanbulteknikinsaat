<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/en/products/expansion-joint-profiles/getProducts.php');
?>

   <li class="this-dilatasyon" data-color="purple" data-url="expansion-joint-profiles"><a>Expansion Joint Profiles<span class="icon"><img src="/en/img/expansion-joint-profiles-icon.png" ></span></a>
         <ul>


            <li><a>Floor Expansion Joint Profiles</a>
                  <ul>
  
                      <li><a>Flush Mounted</a>
                              <ul>
                                 <?php 
                                   $duvarKaplamaAlti = ['25','30','40','50','60','80','100','120','150','200','10-20','100-120','120-140','150-180','170-200','20-30','220-240','30-50','40-50','60-80','80-100'];   
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Floor Expansion Joint Profiles','Flush Mounted',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                                  echo  '<li><a>+ &nbsp; '.$duvarKaplamaAltiItem.'mm</a><ul>';
                                                       foreach($menu as $item) {
                                                           echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/floor-expansion-joint-profiles/flush-mounted/'.$item.'">'.$item.'</a></li>';  
                                                         } 
                                                   echo  '</ul></li>';
                                            }
                                             }
                                    ?>
                              </ul>
                      </li>

      
         <li><a>Surface Mounted</a>
          <ul>
             <?php 
               $duvarKaplamaAlti = ['25','30','40','50','60','80','100','120','150','200','10-20','100-120','120-140','150-180','170-200','20-30','220-240','30-50','40-50','60-80','80-100'];   
               foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {

                        $menu = getMenu('Floor Expansion Joint Profiles','Surface Mounted',$duvarKaplamaAltiItem); 
              

                        if (sizeof($menu) > 0) {
                              echo  '<li><a>+ &nbsp; '.$duvarKaplamaAltiItem.' mm</a><ul>';
                                   foreach($menu as $item) {
                                       echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/floor-expansion-joint-profiles/surface-mounted/'.$item.'">'.$item.'</a></li>';  
                                     } 
                               echo  '</ul></li>';
                        }
                         }
                ?>
          </ul>
      </li>
</ul>
</li>




            <li><a>Wall Expansion Joint Profiles</a>
                  <ul>

                      <li><a>Flush Mounted</a>
                              <ul>
                                 <?php 
                                   $duvarKaplamaAlti = ['25','30','40','50','60','80','100','120','150','200','10-20','100-120','120-140','150-180','170-200','20-30','220-240','30-50','40-50','60-80','80-100'];   
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Wall Expansion Joint Profiles','Flush Mounted',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                                  echo  '<li><a>+ &nbsp; '.$duvarKaplamaAltiItem.' mm</a><ul>';
                                                   

                                                       foreach($menu as $item) {
                                                           echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/wall-expansion-joint-profiles/flush-mounted/'.$item.'">'.$item.'</a></li>';  
                                                         } 
                                                   echo  '</ul></li>';
                                            }
                                             }
                                    ?>
                              </ul>
                      </li>

                      <li><a>Surface Mounted</a>
                              <ul>
                                 <?php 
                                   $duvarKaplamaAlti = ['25','30','40','50','60','80','100','120','150','200','10-20','100-120','120-140','150-180','170-200','20-30','220-240','30-50','40-50','60-80','80-100'];   
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Wall Expansion Joint Profiles','Surface Mounted',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                                  echo  '<li><a>+ &nbsp; '.$duvarKaplamaAltiItem.' mm</a><ul>';
                                                   

                                                       foreach($menu as $item) {
                                                           echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/wall-expansion-joint-profiles/surface-mounted/'.$item.'">'.$item.'</a></li>';  
                                                         } 
                                                   echo  '</ul></li>';
                                            }
                                             }
                                    ?>
                              </ul>
                      </li>
                 </ul>
             </li>









 <li><a>Cover Expansion Joint Profiles</a>
    <ul>
                      <li><a>Wall and Ceiling Cover Profiles</a>
                              <ul>
                                 <?php 
                                   $duvarKaplamaAlti = ['10-20','20-30','30-50','40-60','60-80','100-120','120-140','170-200','220-240'];   
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Wall and Ceiling Cover Profiles','Cover',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                                  foreach($menu as $item) {
                                                       echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/cover-expansion-joint-profiles/wall-and-ceiling-cover-profiles/'.$item.'">'.$item.'</a></li>';  
                                                   } 
                                               }
                                    }
                                    ?>
                              </ul>
                      </li> 

                      <li><a>Wall and Ceiling Corner Cover Profiles</a>
                              <ul>
                                 <?php 
                                    $duvarKaplamaAlti = ['30-50','40-60','60-80','80-100','100-120','150-180'];    
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Wall and Ceiling Corner Cover Profiles','Cover',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                               

                                                       foreach($menu as $item) {
                                                           echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/cover-expansion-joint-profiles/wall-and-ceiling-corner-cover-profiles/'.$item.'">'.$item.'</a></li>';  
                                                         } 
                                            
                                            }
                                             }
                                    ?>
                              </ul>
                      </li>


                      <li><a>Floor Cover Profiles</a>
                              <ul>
                                 <?php 
                                    $duvarKaplamaAlti = [''];   
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Floor Cover Profiles','Cover',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                           
                                                
                                                       foreach($menu as $item) {
                                                           echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/cover-expansion-joint-profiles/floor-cover-profiles/'.$item.'">'.$item.'</a></li>';  
                                                         } 
                                                 
                                            }
                                             }
                                    ?>
                              </ul>
                      </li>



                      <li><a>Hinged Wall and Ceiling Cover Profiles</a>
                              <ul>
                                 <?php 
                                 $duvarKaplamaAlti = [''];    
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Hinged Wall and Ceiling Cover Profiles','Cover',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                                

                                                       foreach($menu as $item) {
                                                           echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/cover-expansion-joint-profiles/hinged-wall-and-ceiling-cover-profiles/'.$item.'">'.$item.'</a></li>';  
                                                         } 
                                                
                                            }
                                             }
                                    ?>
                              </ul>
                      </li>


                      <li><a>Hinged Floor Cover Profiles</a>
                              <ul>
                                 <?php 
                                   $duvarKaplamaAlti = [''];   
                                   foreach($duvarKaplamaAlti as $duvarKaplamaAltiItem)  {
                                            $menu = getMenu('Hinged Floor Cover Profiles','Cover',$duvarKaplamaAltiItem); 
                                            if (sizeof($menu) > 0) {
                                              
                                                       foreach($menu as $item) {
                                                           echo '<li><a page-id="'.$item.'" href="/en/expansion-joint-profiles/cover-expansion-joint-profiles/hinged-floor-cover-profiles/'.$item.'">'.$item.'</a></li>';  
                                                         } 
                                       
                                            }
                                             }
                                    ?>
                              </ul>
                      </li>
	 </ul>
</li>
		







<li><a>Auxiliaries</a>
<ul>
    <li><a title="CoverEx PU Concrete Undercant" page-id="coverex-pu-concrete-undercant" href="expansion-joint-profiles/auxiliaries/coverex-pu-concrete-undercant">CoverEx PU Concrete Undercant</a></li>
		<li><a title="CoverEx Epoxy Based, Thixotropic Montage and Repair Mortar" page-id="coverex-epoxy-based-thixotropic-montage-and-repairmortar" href="expansion-joint-profiles/auxiliaries/coverex-epoxy-based-thixotropic-montage-and-repairmortar">CoverEx Epoxy Based, Thixotropic Montage and Repair Mortar</a></li>
		<li><a title="CoverEx Expansion Joint Sealant" page-id="coverex-expansion-joint-sealant" href="expansion-joint-profiles/auxiliaries/coverex-expansion-joint-sealant">CoverEx Expansion Joint Sealant</a></li>
		<li><a title="CoverEx PU Based Elastometric Mastic Expansion Joint" page-id="coverex-pu-based-elastometric-mastic-expansion-joint" href="expansion-joint-profiles/auxiliaries/coverex-pu-based-elastometric-mastic-expansion-joint">CoverEx PU Based Elastometric Mastic Expansion Joint</a></li>
		<li><a title="Expansion Joint Tape" page-id="expansion-joint-tape" href="expansion-joint-profiles/auxiliaries/expansion-joint-tape">Expansion Joint Tape</a></li>
		<li><a title="Expansion Joint Tape With Mesh" page-id="expansion-joint-tape-with-mesh" href="expansion-joint-profiles/auxiliaries/expansion-joint-tape-with-mesh">Expansion Joint Tape With Mesh</a></li>
		<li><a title="Expansion Joint Tape With Felt" page-id="expansion-joint-tape-with-felt" href="expansion-joint-profiles/auxiliaries/expansion-joint-tape-with-felt">Expansion Joint Tape With Felt</a></li>
</ul>
</li>











	 </ul>
</li>

<!-- dilatasyon end -->
