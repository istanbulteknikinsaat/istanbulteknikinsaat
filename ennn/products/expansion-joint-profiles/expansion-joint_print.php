<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/products/dilatasyon-profilleri/getProducts.php');

  $secilenUrun = $_GET["name"];
  $product = getProduct($secilenUrun); 

  $description = $product['description'];

  $breadcrumpTitle1 = "Dilatasyon Profilleri";
  $breadcrumpLink1 = "dilatasyon-profilleri";

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









  $breadcrumpTitle5 = $secilenUrun;
  $breadcrumpLink5 = $secilenUrun ;


  // echo $breadcrumpTitle1 = "Dilatasyon Profilleri";
  // echo $breadcrumpLink1 = "dilatasyon-profilleri";
  // echo $breadcrumpTitle2 = $product['cat_1'];
  // echo $breadcrumpLink2 = $_GET['cat1'];
  // echo $breadcrumpTitle3 = $product['cat_2'];
  // echo $breadcrumpLink3 = $_GET['cat2'];
  // echo $breadcrumpTitle4 = $product['cat_3'];
  // echo $breadcrumpLink4 = $_GET['cat3'];


  $title = $product['name'].' '.$breadcrumpTitle3.' '.str_replace("Profilleri", "Profili", $breadcrumpTitle2).' ('.$breadcrumpTitle4.'mm)';
  $technicalData = false;  
  $pictureSlider = false;    

  $countDir =  substr_count($_SERVER['PHP_SELF'], '/') - 1;   $dirPosition = ''; for ($x = 1; $x <= $countDir; $x++) { $dirPosition .= "../"; }
    $dirPosition = $dirPosition.'en/';
  include $dirPosition.'header.php'; 
?>

 <section class="product-page">
  <?php  include $dirPosition.'product-dilatasyon-header.php';  ?>

<div class="wrapper">

  <?php 
    include $dirPosition.'left-product-navigation.php';
     include $dirPosition.'product-breadcrumb-dilatasyon.php';
   ?>
       
       
<!-- PRODUCT PAGE START -->
                  
 
<div class="dilatasyon-print-header">
     <h2><?php echo $product['name']; ?></h2>
     <h7><?php echo $breadcrumpTitle3.' '.str_replace("Profilleri", "Profili", $breadcrumpTitle2).' ('.$breadcrumpTitle4.'mm)'; ?></h7>
     <img class="coverex-logo" src="img/coverex-logo.svg" alt="">
       
<img class="disi-logo" src="img/istanbul-teknik-logo-disi.svg">

</div>


<?php

  $pdfFilePos = $dirPosition.'svg/dilatasyon-profilleri/'.$product['name'].'-teknik-katalog.svg';


if (file_exists($pdfFilePos)) {


   $pdfBtn = '<br><br><img class="svg-print-image" src="svg/dilatasyon-profilleri/'.$product['name'].'-teknik-katalog.svg">'; 
}else {
    $pdfBtn = ""; 
}

echo $pdfBtn; ?>






<br> <br>

<?php
  $pageName = basename($_SERVER['PHP_SELF'], ".php"); 



  $pageName = basename($_SERVER['PHP_SELF'], ".php"); 

 if ($breadcrumpLink2 == "kapak-duvar-dilatasyon-profilleri") {

     $imageFilePos = $dirPosition.'img/dilatasyon-profilleri/'.$breadcrumpLink2.'-'.$product['name'].'.png';
  
 }else if ($breadcrumpLink2 == "kapak-zemin-dilatasyon-profilleri") {
     $imageFilePos = $dirPosition.'img/dilatasyon-profilleri/'.$breadcrumpLink2.'-'.$product['name'].'.png';


 }else {

  $imageFilePos = $dirPosition.'img/dilatasyon-profilleri/'.$breadcrumpLink3.'-'.$breadcrumpLink2.'-'.$product['name'].'.png';


}


          $productSpecificationData = productSpecifications($secilenUrun);






         if ( sizeof($productSpecificationData) > 1 ) {
               //echo "<br><b>".$productSpecificationData[0][0]."</b><br><br>".$productSpecificationData[2][0]."<br><br>";
                // List specifications
                echo '<h3>Teknik Özellikleri</h3></div><div class="wrapper-ignore"><div class="widetable"><table>';

           
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
