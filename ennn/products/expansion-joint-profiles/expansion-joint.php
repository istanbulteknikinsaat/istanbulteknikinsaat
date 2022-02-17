<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/en/products/expansion-joint-profiles/getProducts.php');

  $secilenUrun = $_GET["name"];
  $product = getProduct($secilenUrun); 

  $description = $product['description'];

  $breadcrumpTitle1 = "Expansion Joint Profiles";
  $breadcrumpLink1 = "expansion-joint-profiles";

  $breadcrumpTitle2 = $product['cat_1'];
  $breadcrumpLink2 = $_GET['cat1'];

  $breadcrumpTitle3 = $product['cat_2'];
  $breadcrumpLink3 = $_GET['cat2'];


  $breadcrumpTitle4 = $product['cat_3'];

  
  if(isset($_GET['cat3'])) {
       $breadcrumpLink4 = $_GET['cat3'];
  }else{

      $breadcrumpLink4 = "";
  }

    
  


 if ($breadcrumpLink3 == "wall-and-ceiling-cover-profiles" || $breadcrumpLink3 == "wall-and-ceiling-corner-cover-profiles"  || $breadcrumpLink3 == "floor-cover-profiles" || $breadcrumpLink3 == "hinged-wall-and-ceiling-cover-profiles" || $breadcrumpLink3 == "hinged-floor-cover-profiles") {
    $kapak = true;
 }else {
    $kapak = false;
 }


  $breadcrumpTitle5 = $secilenUrun;
  $breadcrumpLink5 = $secilenUrun ;


  if ($breadcrumpTitle2 == "Hinged Floor Cover Profiles" || $breadcrumpTitle2 == "Hinged Wall and Ceiling Cover Profiles" || $breadcrumpTitle2 == "Floor Cover Profiles") {
        $mmexten = '';
  }else {
      $mmexten = ' ('.$breadcrumpTitle4.'mm)';
  }
  





if ($kapak) {
     $title = $product['name'].' '.str_replace("Profiles", "Profile", $breadcrumpTitle2).''.$mmexten;

}else{
  $title = $product['name'].' '.$breadcrumpTitle3.' '.str_replace("Profiles", "Profile", $breadcrumpTitle2).' ('.$breadcrumpTitle4.'mm)';
}



  $technicalData = false;  
  $pictureSlider = false;    

  $countDir =  substr_count($_SERVER['PHP_SELF'], '/') - 1;   $dirPosition = ''; for ($x = 1; $x <= $countDir; $x++) { $dirPosition .= "../"; }
    $dirPosition = $dirPosition.'en/';
  include $dirPosition.'header.php'; 



?>

 <section class="product-page">

  <?php  include $dirPosition.'product-expansion-joint-header.php';  ?>
<div class="wrapper">

  <?php 
    include $dirPosition.'left-product-navigation.php';
     include $dirPosition.'product-breadcrumb-expansion-joint.php';
   ?>
       
       






<!-- PRODUCT PAGE START -->
                  
    <h2 data-url="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>" data-expansion-joint-url="<?php echo $secilenUrun; ?>"><?php echo $title; ?></h2>
       
<?php





 if ($breadcrumpTitle2 == "Hinged Floor Cover Profiles" || $breadcrumpTitle2 == "Hinged Wall and Ceiling Cover Profiles" ||      $breadcrumpTitle2 == "Floor Cover Profiles") {
  
         $mmexten = '-Technical-Catalog.pdf';
    
  }else {
       
          $mmexten = '-('.$breadcrumpTitle4.'mm)-Technical-Catalog.pdf';
   
  }


if( str_replace("Profiles", "Profile", $breadcrumpTitle2) == "Floor Expansion Joint Profile") {
    if( $breadcrumpTitle3 == "Flush Mounted") {
        $breadcrumpTitle3New = "Flush-Mounted";
    }else if ( $breadcrumpTitle3 == "Surface Mounted") {
        $breadcrumpTitle3New = "Surface-Mounted";
    }

    $breadcrumpTitle2New =  $breadcrumpTitle3New."-Floor-Expansion-Joint-Profile";


}else if ( str_replace("Profiles", "Profile", $breadcrumpTitle2)  == "Wall Expansion Joint Profile") {
      if( $breadcrumpTitle3 == "Flush Mounted") {
        $breadcrumpTitle3New = "Flush-Mounted";
    }else if ( $breadcrumpTitle3 == "Surface Mounted") {
        $breadcrumpTitle3New = "Surface-Mounted";
    }
    $breadcrumpTitle2New =  $breadcrumpTitle3New."-Wall-Expansion-Joint-Profile";



}else if ( str_replace("Profiles", "Profile", $breadcrumpTitle2)  == "Wall and Ceiling Cover Profile") {
    $breadcrumpTitle2New = "Wall-and-Ceiling-Cover-Profile";

}else if ( str_replace("Profiles", "Profile", $breadcrumpTitle2)  == "Wall and Ceiling Corner Cover Profile") {
    $breadcrumpTitle2New = "Wall-and-Ceiling-Corner-Cover-Profile";
 
}else if ( str_replace("Profiles", "Profile", $breadcrumpTitle2)  == "Floor Cover Profile") {
    $breadcrumpTitle2New = "Floor-Cover-Profile";

}else if ( str_replace("Profiles", "Profile", $breadcrumpTitle2)  == "Hinged Wall and Ceiling Cover Profile") {
    $breadcrumpTitle2New = "Hinged-Wall-and-Ceiling-Cover-Profile";

}else if ( str_replace("Profiles", "Profile", $breadcrumpTitle2)  == "Hinged Floor Cover Profile") {
    $breadcrumpTitle2New = "Hinged-Floor-Cover-Profile";

}



  $pdfFileName = $product['name'].'-'.$breadcrumpTitle2New.''.$mmexten;
  $pdfFilePos = $dirPosition.'pdf/expansion-joint-profiles/'.$pdfFileName;





if (file_exists($pdfFilePos)) {
   $pdfBtn = '<br><br><a class="pdf-indir-btn" href="en/pdf/expansion-joint-profiles/'.$pdfFileName.'">'.$product['name'].' Technical Catalog </a>'; 
}else {
    $pdfBtn = ""; 
}
    // $pdfBtn = ""; 
echo '<p>'.$product['description'].''.$pdfBtn.'</p>'; ?>






<br> <br>
<?php
  $pageName = basename($_SERVER['PHP_SELF'], ".php"); 




 if ($kapak) {

     $imageFilePos = $dirPosition.'img/expansion-joint-profiles/'.$breadcrumpLink2.'-'.$product['name'].'.png';


 }else {

     $imageFilePos = $dirPosition.'img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'.png';


}


if (file_exists($imageFilePos)) {

        if ($kapak) {
               
             $imageFilePos = $dirPosition.'img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$product['name'].'-technical-drawing.jpg';



                if (file_exists($imageFilePos)) {
                     $productImageFile = '<img src="/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$product['name'].'-technical-drawing.jpg" alt="'.$title.'Technical Drawing">';
              

                } else {
                     $productImageFile = "";
                }
               
                echo $productImageFile;



          }else {
        
              $imageFilePos3 = $dirPosition.'img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'-technical-drawing.jpg';
         
              if (file_exists($imageFilePos3)) {
                
                  $productImageFile = '<img src="/en/img/expansion-joint-profiles/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'-technical-drawing.jpg" alt="'.$title.'Technical Drawing">';

              } else {
            
                   $productImageFile = "";
                      
              }
              
              echo $productImageFile;
          }





} else {
     

} 




          $productSpecificationData = productSpecifications($secilenUrun);



         if ( sizeof($productSpecificationData) > 1 ) {
               //echo "<br><b>".$productSpecificationData[0][0]."</b><br><br>".$productSpecificationData[2][0]."<br><br>";
                // List specifications
                echo '<h3>Technical Specifications</h3></div><div class="wrapper-ignore"><div class="widetable"><table>';

           
              echo '<thead><tr class="darkBlue tableHeaderFont18"><th>'.$productSpecificationData[4][0].'</th><th>'.$productSpecificationData[4][1].'</tr></thead><tbody>';
              for ($x = 5; $x <= sizeof($productSpecificationData)-2; $x++) {
                        
                       echo '<tr class="tableRowBorderBottom"><td class="tableRowBorderRight">'.$productSpecificationData[$x][0].'</td><td>'.$productSpecificationData[$x][1].'</td></tr>';
              } 
            echo "</tbody></table></div></div>";    

         
         }
       
     mysqli_close($con);


    ?>



<?php if($pictureSlider) {include $dirPosition.'product-picture.php';}  ?>



       



</div>






</section> <!-- Product Page END -->
<?php include $dirPosition.'footer.php'; ?>
