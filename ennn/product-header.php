<?php

$defaultHeaderBkgStyle = "";
list($productLogoNumber, $productLogoColorChange) = productLogoRequest(basename($_SERVER['PHP_SELF'], ".php"));


      $productLogoNumber = (int) $productLogoNumber;

if (strlen($productLogoNumber) == 1) {

	$productLogoNumberA = 0;
	$productLogoNumberB = (int) substr($productLogoNumber, 0, 1);


	$logoPositionX = (($productLogoNumberB-1)*300);
	$logoPositionY = ($productLogoNumberA*100);

	$logoPositionYWhite = $logoPositionY + 1000;


	$productLogoPositionBlack = '-'.$logoPositionX.'px '.$logoPositionY.'px';
	$productLogoPositionWhite = '-'.$logoPositionX.'px '.$logoPositionYWhite.'px';


}else {

	$productLogoNumberA = (int) substr($productLogoNumber, 0, 1);
	$productLogoNumberB = (int) substr($productLogoNumber, 1, 1);


	if ($productLogoNumberB == 0) {
			
		if ($productLogoNumberA == 1) {

			 $logoPositionX = 2700;
			 $logoPositionY = ($productLogoNumberA*100)-100;

			$logoPositionYWhite = $logoPositionY + 1000;

			$logoPositionX--;
			$logoPositionY--;

			$productLogoPositionBlack = '-'.$logoPositionX.'px '.$logoPositionY.'px';
			$productLogoPositionWhite = '-'.$logoPositionX.'px '.$logoPositionYWhite.'px';	
		}else {




				 $logoPositionX = 2700;
				 $logoPositionY = ($productLogoNumberA*100)-100;

				$logoPositionYWhite = $logoPositionY + 1000;

				$logoPositionX--;
				$logoPositionY--;

				$productLogoPositionBlack = '-'.$logoPositionX.'px -'.$logoPositionY.'px';
				$productLogoPositionWhite = '-'.$logoPositionX.'px -'.$logoPositionYWhite.'px';	

			}






	}else if ($productLogoNumberB == 1) {
		 $logoPositionX = 0;
	     $logoPositionY = ($productLogoNumberA*100);
	  
			$logoPositionYWhite = $logoPositionY + 1000;

			$logoPositionX--;
			$logoPositionY--;

			$productLogoPositionBlack = ''.$logoPositionX.'px -'.$logoPositionY.'px';
			$productLogoPositionWhite = ''.$logoPositionX.'px -'.$logoPositionYWhite.'px';
	}else{
		$logoPositionX = (($productLogoNumberB-1)*300);
	    $logoPositionY = ($productLogoNumberA*100);

		$logoPositionYWhite = $logoPositionY + 1000;

		$logoPositionX--;
		$logoPositionY--;

		$productLogoPositionBlack = '-'.$logoPositionX.'px -'.$logoPositionY.'px';
		$productLogoPositionWhite = '-'.$logoPositionX.'px -'.$logoPositionYWhite.'px';
	}


}



?>

<?php

	 if ($productLogoColorChange == "bb") {
			echo '<style type="text/css">
				   .product-logo {
				  	   background-position: '.$productLogoPositionBlack.';
				    }
				     @media screen and (min-width:500px) and (max-width:960px) {
					   .product-logo {
						    background-position: '.$productLogoPositionBlack.';
						 }
				     }
				    @media screen and (min-width:375px) and (max-width:500px) {
						  .product-logo {
						   	   background-position: '.$productLogoPositionBlack.';
						 }
				     }
				     @media screen and (min-width:320px) and (max-width:375px) {
						   .product-logo {
						   	   background-position: '.$productLogoPositionBlack.';
						  }
				     }
				   .product-mobile-logo {
				  	   background-position: '.$productLogoPositionBlack.';
				    }
				     @media screen and (min-width:500px) and (max-width:960px) {
					   .product-mobile-logo {
						    background-position: '.$productLogoPositionBlack.';
						 }
				     }
				    @media screen and (min-width:375px) and (max-width:500px) {
						  .product-mobile-logo {
						   	   background-position: '.$productLogoPositionBlack.';
						 }
				     }
				     @media screen and (min-width:320px) and (max-width:375px) {
						   .product-mobile-logo {
						   	   background-position: '.$productLogoPositionBlack.';
						  }
				     }
				</style>';

	}else if ($productLogoColorChange == "ww") {
			echo '<style type="text/css">
		   .product-logo {
		  	   background-position: '.$productLogoPositionWhite.';
		    }
		     @media screen and (min-width:500px) and (max-width:960px) {
			   .product-logo {
				    background-position: '.$productLogoPositionWhite.';
				 }
		     }
		    @media screen and (min-width:375px) and (max-width:500px) {
				  .product-logo {
				   	   background-position: '.$productLogoPositionWhite.';
				 }
		     }
		     @media screen and (min-width:320px) and (max-width:375px) {
				   .product-logo {
				   	   background-position: '.$productLogoPositionWhite.';
				  }
		     }
		</style>';

	}else if ($productLogoColorChange == "wb") {
			echo '<style type="text/css">
		   .product-logo {
		  	   background-position: '.$productLogoPositionWhite.';
		    }
		     @media screen and (min-width:500px) and (max-width:960px) {
			   .product-logo {
				    background-position: '.$productLogoPositionBlack.';
				 }
		     }
		    @media screen and (min-width:375px) and (max-width:500px) {
				  .product-logo {
				   	   background-position: '.$productLogoPositionBlack.';
				 }
		     }
		     @media screen and (min-width:320px) and (max-width:375px) {
				   .product-logo {
				   	   background-position: '.$productLogoPositionBlack.';
				  }
		     }
		</style>';

	}else if ($productLogoColorChange == "bw") {
			echo '<style type="text/css">
		   .product-logo {
		  	   background-position: '.$productLogoPositionBlack.';
		    }
		     @media screen and (min-width:500px) and (max-width:960px) {
			   .product-logo {
				    background-position: '.$productLogoPositionWhite.';
				 }
		     }
		    @media screen and (min-width:375px) and (max-width:500px) {
				  .product-logo {
				   	   background-position: '.$productLogoPositionWhite.';
				 }
		     }
		     @media screen and (min-width:320px) and (max-width:375px) {
				   .product-logo {
				   	   background-position: '.$productLogoPositionWhite.';
				  }
		     }
		</style>';

	}
?>












<?php

if(isset($onePicture)) {
	$imgDir = 'img'.substr($_SERVER['PHP_SELF'], 12, -4).'/';
	


		if($onePicture == true) {

		
			 	 $defaultHeaderBkgStyle = "lefttoright";

				  $pageName = basename($_SERVER['PHP_SELF'], ".php"); 
				  $imageFilePos = $dirPosition.'img'.substr($_SERVER['PHP_SELF'], 12, -4).'/'.$pageName.'.png';

		

				if (file_exists($imageFilePos)) {
				   $productImageFile = '<img src="/en/img'.substr($_SERVER['PHP_SELF'], 12, -4).'/'.$pageName.'.png" alt="'.$title.' '.$breadcrumpTitle1.'">';

				} else {

				     $productImageFile = "";
				}

				echo '<div class="my-product-details-header '.$defaultHeaderBkgStyle.'"><div class="wrapper-dilatasyon">'.$productImageFile.'</div></div>';
		}


}else {

	$imgDir = 'img'.substr($_SERVER['PHP_SELF'], 12, -4).'/';
	     $pageName = basename($_SERVER['PHP_SELF'], ".php"); 
		  $imageFilePos = $dirPosition.'img'.substr($_SERVER['PHP_SELF'], 12, -4).'/'.$pageName.'.png';

		if (file_exists($imageFilePos)) {
		   $productImageFile = '<img src="/en/img'.substr($_SERVER['PHP_SELF'], 12, -4).'/'.$pageName.'.png" alt="'.$title.' '.$breadcrumpTitle1.'">';

		} else {

		     $productImageFile = "";
		}

echo '<div class="product-details-header '.$defaultHeaderBkgStyle.'"><div class="wrapper-dilatasyon"></div>
'.$productImageFile.'
</div>';
   



}

?>




   
