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

if(isset($onePicture)) {

	if($onePicture == true) {
				  $defaultHeaderBkgStyle = "lefttoright";
				  $pageName = basename($_SERVER['PHP_SELF'], ".php"); 
				  $imageFilePos = $dirPosition.'/en/img/expansion-joint-profiles/'.$breadcrumpLink2.'/'.$pageName.'.png';


				if (file_exists($imageFilePos)) {

				    $productImageFile = '<img src="/en/img/expansion-joint-profiles/'.$breadcrumpLink2.'/'.$pageName.'.png" alt="'.$title.' '.$breadcrumpTitle1.'">';

				} else {
				     $productImageFile = "";

				}

				echo '<div class="my-product-details-header '.$defaultHeaderBkgStyle.'"><div class="wrapper-dilatasyon">'.$productImageFile.'</div></div>';
		}

}else {


}


?>


<!-- 
<div class="my-product-details-header <?php echo $defaultHeaderBkgStyle ?>">
	<div class="wrapper-dilatasyon">
	      <?php  echo $productImageFile; ?>
	</div>



</div>
    -->

