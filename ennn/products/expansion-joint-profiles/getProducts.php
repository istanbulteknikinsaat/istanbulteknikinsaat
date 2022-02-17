<?php

include $_SERVER['DOCUMENT_ROOT'] . '/en/system/config.php';

include $_SERVER['DOCUMENT_ROOT'] . '/en/system/connection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/en/system/classes/PHPExcel.php';
include $_SERVER['DOCUMENT_ROOT'] . '/en/system/url-slug.php';

//ini_set('memory_limit', '2000M'); //for 2GB
// ini_set('memory_limit', -1); //For no limits


function productLogoRequest($selectedProduct)
{
    global $con;

   $sql = "SELECT product_logo_en.product_number , product_logo_en.product_color_change , product_logo_en.product_page , product_logo_en.product_blue_link FROM product_logo_en WHERE product_logo_en.product_page = '$selectedProduct'";

  $result = mysqli_query($con, $sql);

  $prdt = mysqli_fetch_assoc($result);
  return array($prdt["product_number"], $prdt["product_color_change"]);
}





function getBlueLink ($selectedProduct) {
    global $con;

    $sql = 'SELECT `product_tr_blue_link`.`blue_url` FROM `product_logo_tr` JOIN `product_tr_blue_link` ON `product_logo_tr`.`product_page` = `product_tr_blue_link`.`com_page_name` WHERE `product_logo_tr`.`product_number` = "'.$selectedProduct.'"';
    $result = mysqli_query($con, $sql);

     while ($row=mysqli_fetch_row($result))
        {
        $sonuc = $row[0];
     }

    return $sonuc;
}


function getDilatasyonBlueLink ($selectedProduct) {
    global $con;

    $sql = "SELECT `dilatasyon_tr_blue_link`.`stok_adi` , `dilatasyon_tr_blue_link`.`stok_id` , `dilatasyon_tr_blue_link`.`id` , `dilatasyon_tr_blue_link`.`stok_kodu` , `dilatasyon_tr_blue_link`.`blue_url` FROM `dilatasyon_tr_blue_link` WHERE `dilatasyon_tr_blue_link`.`stok_adi` = '$selectedProduct'";
   
    $result = mysqli_query($con, $sql);
   
     while ($row=mysqli_fetch_row($result))
        {
  
        $sonuc = $row[4];
     }
 
    return $sonuc;
}




function getProduct ($selectedProduct) {
    global $con;


	  $sql =  "SELECT expansion_joint_profiles_en.id, expansion_joint_profiles_en.cat_1, expansion_joint_profiles_en.cat_2, expansion_joint_profiles_en.cat_3, expansion_joint_profiles_en.`name`, expansion_joint_profiles_en.description, expansion_joint_profiles_en.specification FROM expansion_joint_profiles_en WHERE expansion_joint_profiles_en.`name` = '$selectedProduct'";
	$result = mysqli_query($con, $sql);
	return mysqli_fetch_assoc($result);
}



function personelList ($selectedDepartment) {

    global $con;

     $sql = "SELECT `personeller_en`.`name_surname` , `personeller_en`.`title_turkish` , `personeller_en`.`order_no` , `personeller_en`.`department_turkish` FROM `personeller_en` WHERE personeller_en.`department_turkish` = '$selectedDepartment' ORDER BY `personeller_en`.`order_no` ASC";
     $result = mysqli_query($con, $sql);


    while ($row =  mysqli_fetch_array($result)) {
           $data[] = $row;

                 
    }



    // while ($row =  mysqli_fetch_array($result)) {
    //               $menuArray['name_surname'] = $row['name_surname'];
                      
    // }

    return $data;


}







function productSpecifications ($selectedProduct) {

$urunbulundumu = false;
$productFindingSheet;
$productCellStart;
$productCellEnd;
$bulmabittimi = false;


global $dilatasyonSpecificationFile;
global $excelDataDir;



$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objReader->setReadDataOnly(true);

$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/expansion-joint-profiles/'.$dilatasyonSpecificationFile);

$foundInCells = array();
$searchValue = 'CoverEx '.$selectedProduct;
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $findingSheetName = $worksheet->getTitle();
    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(true);
        foreach ($cellIterator as $cell) {
            if ($cell->getValue() == $searchValue) {
             
               // $foundInCells[] = $findingSheetName . '------' . $cell->getCoordinate();
               //echo $findingSheetName."----".$cell->getCoordinate();
               $productFindingSheet = $findingSheetName;
               $productCellStart = $cell->getCoordinate();
               $urunbulundumu = true;    			
            }

           if ($cell->getValue() === "END" && $urunbulundumu == true ) {
                 $productCellEnd = $cell->getCoordinate(); 
                 $urunbulundumu = false; 
                 $bulmabittimi = true;

           }	


        }
    }
}
 
       if ($bulmabittimi == true ) {  
                 
          $fileType = PHPExcel_IOFactory::identify($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/expansion-joint-profiles/'.$dilatasyonSpecificationFile);
          $objReader = PHPExcel_IOFactory::createReader($fileType);
          $objReader->setLoadSheetsOnly($productFindingSheet); 
          $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/expansion-joint-profiles/'.$dilatasyonSpecificationFile);
          $excelSelectedData = $objPHPExcel->setActiveSheetIndex(0)->rangeToArray($productCellStart.":B".substr($productCellEnd, 1));
      }else {
          $excelSelectedData = '';
      }

    return $excelSelectedData;


}

function referansList($selectedList) {

 
      global $referanslarFile;
       global $excelDataDir;

          $objReader = PHPExcel_IOFactory::createReader('Excel5');
          $objReader->setReadDataOnly(true);
                    $objReader->setLoadSheetsOnly($selectedList); 
          $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/'.$referanslarFile);


         
          $getHighestColumn = $objPHPExcel->setActiveSheetIndex()->getHighestColumn(); // Get Highest Column
          $getHighestRow = $objPHPExcel->setActiveSheetIndex()->getHighestRow(); // Get Highest Row
          $excelSelectedData = $objPHPExcel->setActiveSheetIndex(0)->rangeToArray("A1:".$getHighestColumn.$getHighestRow);
          return $excelSelectedData;


          // echo 'aa'.$excelSelectedData[0][0];  
          //    echo 'aa'.$excelSelectedData[0][1];

          // for ($x = 1; $x <= sizeof($excelSelectedData)-1; $x++) {
                    
          //          echo  $excelSelectedData[$x][0].' - '.$excelSelectedData[$x][1].' - '.$excelSelectedData[$x][2] .' - '.$excelSelectedData[$x][3];
          //          echo "<br>";
          // } 
}



function readTeknik($productDir) {
   $tableHeader = '';
 global $excelDataDir;
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        //  $objReader = PHPExcel_IOFactory::createReader('Excel5');
          $objReader->setReadDataOnly(true);
          
         // echo $_SERVER['DOCUMENT_ROOT'] .$excelDataDir.$productDir. '.xlsx';
          


          $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.$productDir. '.xlsx');

          $getHighestColumn = $objPHPExcel->setActiveSheetIndex()->getHighestColumn(); // Get Highest Column
          $getHighestRow = $objPHPExcel->setActiveSheetIndex()->getHighestRow(); // Get Highest Row
    	  $sheetData = $objPHPExcel->getActiveSheet();
	      $readingTableStyle = getCell($sheetData,'B', 1)->getValue();

         //Table Row
	     $excelSelectedData = $objPHPExcel->setActiveSheetIndex(0)->rangeToArray("A".calculateTableStart($readingTableStyle).":".$getHighestColumn.$getHighestRow);
		
		$maxColumnNumber = ord(strtoupper($getHighestColumn)) - ord('A')+1;
        $maxRowNumber = sizeof($excelSelectedData)-1;
		 $letters = array_combine(range(1,26), range('A', 'Z'));




	    $teknikTable = '<h3>Technical Specifications</h3></div><div class="wrapper-ignore"><div class="widetable"><table>';
        
         if($readingTableStyle == 0){


         }else if($readingTableStyle == 1){
		         
			         $tableHeader .= ' <thead><tr class="darkBlue tableHeaderFont18">';
			          for ($y = 1; $y <= $maxColumnNumber; $y++) {
		               
			               $tableHeader .= ' <th>'.getCell($sheetData,$letters[$y], 2)->getValue().'</th>';  
			          } 
			         $tableHeader .= '</tr></thead>';
         }else if($readingTableStyle == 2){
         
                $tableHeader = '<thead><tr class="lightBlue50 tableHeaderBorderBottom tableHeaderFont12">
				  <th class="darkBlue tableHeaderFont18 columnExtraLeftRightPadding" rowspan=3>'.getCell($sheetData,'A', 2)->getValue().'</th>
				  <th colspan=4>'.getCell($sheetData,'B', 2)->getValue().'</th>
				 </tr>
				 <tr class="lightBlue50 tableHeaderFont14">
				  <th class="tableHeaderBorderRight" colspan=2>'.getCell($sheetData,'B', 3)->getValue().'</th>
				  <th colspan=2>'.getCell($sheetData,'D', 3)->getValue().'</th>
				 </tr>
				 <tr class="lightBlue100 tableHeaderFont14">
				  <th class="tableHeaderBorderRight">'.getCell($sheetData,'B', 4)->getValue().'</th>
				  <th class="tableHeaderBorderRight">'.getCell($sheetData,'C', 4)->getValue().'</th>
				  <th class="tableHeaderBorderRight">'.getCell($sheetData,'D', 4)->getValue().'</th>
				  <th>'.getCell($sheetData,'E', 4)->getValue().'</th>
				 </tr></thead>';

         }else if($readingTableStyle == 3){

			    $tableHeader = '<thead><tr class="lightBlue50 tableHeaderBorderBottom tableHeaderFont12"> 
				 <th class="darkBlue tableHeaderFont18 columnExtraLeftRightPaddingMin textAlignLeft" rowspan=3>'.getCell($sheetData,'A', 2)->getValue().'</th><th colspan=6>'.getCell($sheetData,'B', 2)->getValue().'</th>
					</tr>

					<tr class="lightBlue50 tableHeaderFont12">
						 <th class="tableHeaderBorderRight" colspan=2>'.getCell($sheetData,'B', 3)->getValue().'</th><th class="tableHeaderBorderRight" colspan=2>'.getCell($sheetData,'D', 3)->getValue().'</th><th colspan=2>'.getCell($sheetData,'F', 3)->getValue().'</th>
					</tr>

					<tr class="lightBlue100 tableHeaderFont14">
						 <th class="tableHeaderBorderRight">'.getCell($sheetData,'B', 4)->getValue().'</th><th class="tableHeaderBorderRight">'.getCell($sheetData,'C', 4)->getValue().'</th><th class="tableHeaderBorderRight">'.getCell($sheetData,'D', 4)->getValue().'</th><th class="tableHeaderBorderRight">'.getCell($sheetData,'E', 4)->getValue().'</th><th class="tableHeaderBorderRight">'.getCell($sheetData,'F', 4)->getValue().'</th><th>'.getCell($sheetData,'G', 4)->getValue().'</th>
					</tr></thead>';



         }else if($readingTableStyle == 4){
     
			    $tableHeader = '<thead><tr>
				          <th  class="darkBlue tableHeaderFont18" colspan='.$maxColumnNumber.'>'.getCell($sheetData,'A', 2)->getValue().'</th>
                      </tr>   </thead>';


         }else if($readingTableStyle == 5){
  				 $tableHeader .= '<thead><tr class="darkBlue tableHeaderFont18">';
		          for ($y = 1; $y <= $maxColumnNumber; $y++) {
	                    if ($y == 1) {
	                    	   $tableHeader .= ' <th class="textAlignLeft columnExtraLeftRightPadding"><b>'.getCell($sheetData,$letters[$y], 2)->getValue().'</b></th>'; 
	                    } else {
	                    	   $tableHeader .= ' <th class="lightBlue100">'.getCell($sheetData,$letters[$y], 2)->getValue().'</th>'; 
	                    }
		             
		          } 
		         $tableHeader .= '</tr></thead>';
         }else if($readingTableStyle == 6){





         }

       

          $teknikTable .= $tableHeader;
           $baslasin = calculateTableStart($readingTableStyle);
             $teknikTable .= ' <tbody>';


        	      for ($x = 0; $x <= $maxRowNumber; $x++) {
        	      	  
                     if($x == $maxRowNumber) {
                           $teknikTable .= '<tr>';
                     }else {
                           $teknikTable .= '<tr class="tableRowBorderBottom">';
                     } 

                  

                	          for ($y = 0; $y <= $maxColumnNumber-1; $y++) {
                                 if($y == $maxColumnNumber-1) {
                                       
                                        if($excelSelectedData[$x][$y] == "0.07099999999999999") {
                                                        $teknikTable .= '<td>0,071</td>'; 
                                        }else {
                                                        $teknikTable .= '<td>'.$excelSelectedData[$x][$y].'</td>'; 
                                        }

                      
                                }else if($y == 0) {
                                       if($readingTableStyle == 1 || $readingTableStyle == 4  ) {
                                                 $teknikTable .= '<td class="tableRowBorderRight">'.$excelSelectedData[$x][$y].'</td>'; 
                                             }else{
                                                 $teknikTable .= '<td class="tableRowBorderRight textAlignLeft">'.$excelSelectedData[$x][$y].'</td>';  // ikj sütün eğer table style 1 değilse
                                             }
         
                                }else {
                                      $teknikTable .= '<td class="tableRowBorderRight">'.$excelSelectedData[$x][$y].'</td>';  

                                }
                            }

                       $teknikTable .= '</tr>';
                     
        	        } 

                 $teknikTable .= '  </tbody></table></div>';
	
	      return $teknikTable;

}

function allReadTeknik($productDir,$selectedProduct) {



$urunbulundumu = false;
$productFindingSheet;
$productCellStart;
$productCellEnd;
$bulmabittimi = false;



global $excelDataDir;


        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        //  $objReader = PHPExcel_IOFactory::createReader('Excel5');
          $objReader->setReadDataOnly(true);
          // echo $_SERVER['DOCUMENT_ROOT'] .$excelDataDir.$productDir. '.xlsx';
          $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.$productDir. '.xlsx');
        


        $getHighestColumn = $objPHPExcel->setActiveSheetIndex()->getHighestColumn(); // Get Highest Column
        $getHighestRow = $objPHPExcel->setActiveSheetIndex()->getHighestRow(); // Get Highest Row
        $sheetData = $objPHPExcel->getActiveSheet();
      $maxColumnNumber = ord(strtoupper($getHighestColumn)) - ord('A')+1;

        $excelSelectedData = $objPHPExcel->setActiveSheetIndex(0)->rangeToArray("A".calculateTableStart($readingTableStyle).":".$getHighestColumn.$getHighestRow);
    
        $maxRowNumber = sizeof($excelSelectedData)-1;
     $letters = array_combine(range(1,26), range('A', 'Z'));


$foundInCells = array();
$searchValue = $selectedProduct;
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $findingSheetName = $worksheet->getTitle();
    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(true);
        foreach ($cellIterator as $cell) {
            if ($cell->getValue() == $searchValue) {
          
               // $foundInCells[] = $findingSheetName . '------' . $cell->getCoordinate();
               //echo $findingSheetName."----".$cell->getCoordinate();
               $productFindingSheet = $findingSheetName;
               $productCellStart = $cell->getCoordinate();
               $urunbulundumu = true;  
                           
            }

           if ($cell->getValue() === "END" && $urunbulundumu == true ) {
                 $productCellEnd = $cell->getCoordinate(); 
                 $urunbulundumu = false; 
                 $bulmabittimi = true;
            
           }  


        }
    }
}
 
       if ($bulmabittimi == true ) {  
               //  echo $productCellStart.':B'.$productCellEnd.'<br>';
 
          $excelSelectedData = $objPHPExcel->setActiveSheetIndex(0)->rangeToArray($productCellStart.":D".substr($productCellEnd, 1));
      }else {
          $excelSelectedData = '';
      }



       $teknikTable = '<table>';
        $tableHeader = '';
        $tableHeader .= '<thead><tr class="darkBlue tableHeaderFont18">';
              for ($y = 1; $y <= $maxColumnNumber; $y++) {
                      if ($y == 1) {
                           $tableHeader .= ' <th class="textAlignLeft columnExtraLeftRightPadding"><b>'.getCell($sheetData,$letters[$y],  substr($productCellStart, 1))->getValue().'</b></th>'; 
                      } else {
                           $tableHeader .= ' <th class="lightBlue100">'.getCell($sheetData,$letters[$y], substr($productCellStart, 1))->getValue().'</th>'; 
                      }     
                 
              } 
            
             $tableHeader .= '</tr></thead>';

                  $teknikTable .= $tableHeader;
                  $baslasin = calculateTableStart($readingTableStyle);
                 $teknikTable .= ' <tbody>';



                      $baslasin = '';
                      $bitsin = '';
                      $baslasin  = substr($productCellStart, 1)+1;
                      $bitsin  = substr($productCellEnd, 1)-1;
                      $sayac = 1;
          

                      for ($x = $baslasin; $x <= $bitsin; $x++) {
             
                               if($sayac == $bitsin) {
                                      $teknikTable .= '<tr>';
                                 }else {
                                       $teknikTable .= '<tr class="tableRowBorderBottom">';
                               } 


                                    for ($y = 0; $y <= $maxColumnNumber-1; $y++) {
                                         if($y == $maxColumnNumber-1) {
                                           $teknikTable .= '<td>'.$excelSelectedData[$sayac][$y].'</td>';  
                                        }else if($y == 0) {
                                               
                                                $teknikTable .= '<td class="tableRowBorderRight textAlignLeft">'.$excelSelectedData[$sayac][$y].'</td>';  // ikj sütün eğer table style 1 
                 
                                        }else {
                                              $teknikTable .= '<td class="tableRowBorderRight">'.$excelSelectedData[$sayac][$y].'</td>';  

                                        }
                                    }

                               $teknikTable .= '</tr>';
                                $sayac++;
                          } 

                         $teknikTable .= '  </tbody></table>';



  echo $teknikTable;






}

function getCell( 

	PHPExcel_Worksheet $sheet, /* string */ $x = 'A', /* int */ $y = 1 ) {
    return $sheet->getCell( $x . $y );
}



function calculateTableStart($selectedTableStyle)
{
	
	if ($selectedTableStyle == 0) {
		$tableStartRow = 2;
	}else if($selectedTableStyle == 1) {
        $tableStartRow = 3;
	}else if($selectedTableStyle == 2) {
         $tableStartRow = 5;
	}else if($selectedTableStyle == 3) {
         $tableStartRow = 5;
	}else if($selectedTableStyle == 4) {
        $tableStartRow = 3;
    }else if($selectedTableStyle == 5) {
         $tableStartRow = 3;
    }else if($selectedTableStyle == 6) {
         $tableStartRow = 1;
    }else if($selectedTableStyle == 7) {
         $tableStartRow = 1;
    }
    return $tableStartRow;
}





function getMenu($cat_1a,$cat_2a,$cat_3a) {
    global $con;

     $sql =  "SELECT expansion_joint_profiles_en.`name` FROM expansion_joint_profiles_en WHERE expansion_joint_profiles_en.cat_1 = '$cat_1a' AND expansion_joint_profiles_en.cat_2 = '$cat_2a' AND expansion_joint_profiles_en.cat_3 = '$cat_3a' ORDER BY expansion_joint_profiles_en.cat_3 = '$cat_3a' ASC";
    $result = mysqli_query($con, $sql);
    

 $menuArray = array(); 
    while ($row =  mysqli_fetch_array($result)) {
      //    echo $row['name']."<br>";
                  $menuArray[] = $row['name'];
                asort($menuArray);
                 
    }

    return $menuArray;



       //  // Close result set
      //  mysqli_free_result($result);


}



?>