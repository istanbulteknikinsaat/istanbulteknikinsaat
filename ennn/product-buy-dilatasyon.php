
<div class="product-mobile-wrapper">
	 	<div class="product-mobile-logo"></div>
</div>






 <div class="product-buy inmypage">

     <div class="wrapper"> 
      <?php
        $urunUrl = basename($_SERVER['PHP_SELF'], ".php");


include $_SERVER['DOCUMENT_ROOT'] . '/system/connection.php';


           if ( $breadcrumpLink2 == "duvar-dilatasyon-profilleri"){

  					$yeni = str_replace("duvar-dilatasyon-profilleri", "duvar-tavan", $breadcrumpLink2);
	 			  $adres = "coverex-".$secilenUrun.'-'.$yeni.'-'.$breadcrumpLink3.'-dilatasyon-profili';
			}else if( $breadcrumpLink2 == "zemin-dilatasyon-profilleri"){
			       $yeni = str_replace("zemin-dilatasyon-profilleri", "zemin", $breadcrumpLink2);
					$adres = "coverex-".$secilenUrun.'-'.$yeni.'-'.$breadcrumpLink3.'-dilatasyon-profili';
			}else if( $breadcrumpLink3 == "zemin-kapak-profilleri"){
		
			     $yeni = str_replace("zemin-kapak-profilleri", "zemin-kapak", $breadcrumpLink3);
			      $adres = "coverex-".$secilenUrun.'-'.$yeni.'-dilatasyon-profili';
			   
			}

	

	

       ?>    

			<div class="product-buy-title"><a target="_blank"  title="<?php echo $title ?>" ><?php echo $title ?></a></div>

            <a target="_blank" title="<?php echo $title ?> buy from İstanbulTeknik.blue">SATIN AL / <span class="buy-blue-logo"></span> <i class="arrow-right-big icon" aria-hidden="true"></i></a>
      
       </div>
 </div>  