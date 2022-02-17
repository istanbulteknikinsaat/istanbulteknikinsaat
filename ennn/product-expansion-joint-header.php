<?php



echo '<style type="text/css">
	   .product-logo {
	  	   background-position: 0px -700px;
	    }
	     @media screen and (min-width:500px) and (max-width:960px) {
		   .product-logo {
			    background-position: 0px -700px;
			 }
	     }
	    @media screen and (min-width:375px) and (max-width:500px) {
			  .product-logo {
			   	   background-position: 0px -700px;
			 }
	     }
	     @media screen and (min-width:320px) and (max-width:375px) {
			   .product-logo {
			   	   background-position: 0px -700px;
			  }
	     }
	    .product-mobile-logo {
	  	   background-position: 0px -700px;
	    }
	     @media screen and (min-width:500px) and (max-width:960px) {
		   .product-mobile-logo {
			    background-position: 0px -700px;
			 }
	     }
	    @media screen and (min-width:375px) and (max-width:500px) {
			  .product-mobile-logo {
			   	   background-position: 0px -700px;
			 }
	     }
	     @media screen and (min-width:320px) and (max-width:375px) {
			   .product-mobile-logo {
			   	   background-position: 0px -700px;
			  }
	     }
	</style>';




if(isset($dilatasyonHeaderBackgroundStyle)) {
	  $defaultHeaderBkgStyle = $dilatasyonHeaderBackgroundStyle;
}else {
	 $defaultHeaderBkgStyle = "lefttoright";
}

  $pageName = basename($_SERVER['PHP_SELF'], ".php"); 



 if ($breadcrumpLink3 == "wall-and-ceiling-cover-profiles" || $breadcrumpLink3 == "wall-and-ceiling-corner-cover-profiles"  || $breadcrumpLink3 == "floor-cover-profiles" || $breadcrumpLink3 == "hinged-wall-and-ceiling-cover-profiles" || $breadcrumpLink3 == "hinged-floor-cover-profiles") {
 	  $kapak = true;
 }else {
	  $kapak = false;
 }


 if ($kapak) {
     $imageFilePos = $dirPosition.'/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$product['name'].'.png';
 }else {
    $imageFilePos = $dirPosition.'/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'.png';

}




if (file_exists($imageFilePos)) {


 if ($kapak) {


	    $productImageFile = '<img src="/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$product['name'].'.png" alt="'.$title.' '.$breadcrumpTitle1.'">';

		echo '<div class="product-dilatasyon-details-header '.$defaultHeaderBkgStyle.'">
		<div class="wrapper-dilatasyon">'.$productImageFile.'</div>
		</div>';


	 }else {
	  
	     $productImageFile = '<img src="/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'.png" alt="'.$title.' '.$breadcrumpTitle1.'">';

		echo '<div class="product-dilatasyon-details-header '.$defaultHeaderBkgStyle.'">
		<div class="wrapper-dilatasyon">'.$productImageFile.'</div>
		</div>';


	}








} else {

  if ($kapak) {

	
				$imageFilePos2 = $dirPosition.'/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$product['name'].'-technical-drawing.jpg';

				if (file_exists($imageFilePos2)) {
				
					    $productImageFile = '<img src="/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$product['name'].'-technical-drawing.jpg" alt="'.$title.' '.$breadcrumpTitle1.'">';
					
						echo '<div class="product-dilatasyon-details-header-teknik bkg <?php echo $defaultHeaderBkgStyle ?>">
						<div class="wrapper-dilatasyon">'.$productImageFile.'</div>
						</div>';
				}else {
				
						echo '<div class="product-dilatasyon-details-header-teknik bkg <?php echo $defaultHeaderBkgStyle ?>">
						<div class="wrapper-dilatasyon"></div>
						</div>';

				}



	  }else {

				$imageFilePos2 = $dirPosition.'/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'-technical-drawing.jpg';
	    
				if (file_exists($imageFilePos2)) {
	
					    $productImageFile = '<img src="/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'-technical-drawing.jpg" alt="'.$title.' '.$breadcrumpTitle1.'">';
					
					  
						echo '<div class="product-dilatasyon-details-header-teknik bkg <?php echo $defaultHeaderBkgStyle ?>">
						<div class="wrapper-dilatasyon">'.$productImageFile.'</div>
						</div>';
				}else {
				
						echo '<div class="product-dilatasyon-details-header-teknik bkg <?php echo $defaultHeaderBkgStyle ?>">
						<div class="wrapper-dilatasyon"></div></div>
						</div>';

				}


	  }







}

?>


