<?php

require_once('config.php');
require 'connection.php';
require_once('classes/PHPExcel.php');
//ini_set('memory_limit', '2000M'); //for 2GB
// ini_set('memory_limit', -1); //For no limits

$mainArr = array();

readMainList();






function readMainList() {
      global $mainArr;

   
       $mainFile = "numaralandirma.xls";
      global $excelDataDir;
      global $con;
      global $checkCompare;

      $objReader = PHPExcel_IOFactory::createReader('Excel5');
      $objReader->setReadDataOnly(true);

      $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/dilatasyon-profilleri/'.$mainFile);


 

      foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
          $worksheetTitle     = $worksheet->getTitle();
          $highestRow         = $worksheet->getHighestRow(); // e.g. 10
          $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
          $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
          
          for ($row = 2; $row <= $highestRow; ++ $row) {
           //   for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                  $cell = $worksheet->getCellByColumnAndRow(2, $row);
                  $val = $cell->getValue();
                 $mainArr[] = $val;
          //  }
          }
      }

  //  print_r($mainArr);
compareProducts($mainArr);


}





function compareProducts($mainArr) {
      global $dilatasyonProductsFile;
      global $excelDataDir;
      global $con;

      $objReader = PHPExcel_IOFactory::createReader('Excel5');
      $objReader->setReadDataOnly(true);

      $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/dilatasyon-profilleri/'.$dilatasyonProductsFile);


      $dataArr = array();

      foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
          $worksheetTitle     = $worksheet->getTitle();
          $highestRow         = $worksheet->getHighestRow(); // e.g. 10
          $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
          $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
          
          for ($row = 1; $row <= $highestRow; ++ $row) {
             for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                  $cell = $worksheet->getCellByColumnAndRow($col, $row);
                  $val = $cell->getValue();
                   $dataArr[$row][$col] = $val;
             }
          }
      }



echo "Aşağıdaki ürünler web listesi exceli olan dilataston-profiller-tr.xls'de olup ana liste olan Numaralandirma.xls dosyasında bulunamadı.";
echo "</br>";

echo "<table border='1'>";
echo "<tr><td>".$dataArr[1][0]."</td><td>".$dataArr[1][1]."</td><td>".$dataArr[1][2]."</td><td>".$dataArr[1][3]."</td><td>".$dataArr[1][4]."</td><td>Compare</td></tr>";

 for ($x = 2; $x <= sizeof($dataArr); $x++) {
       $cat_1 = $dataArr[$x][0];
       $cat_2 = $dataArr[$x][1];
       $cat_3 = $dataArr[$x][2];
       $name = $dataArr[$x][3];

       $specification = $dataArr[$x][5];

       if (in_array($name, $mainArr)) {

             //   echo "<tr><td>".$cat_1."</td><td>".$cat_2."</td><td>".$cat_3."</td><td>".$name."</td><td>".$description."</td><td>".$specification."</td></tr>";
      
       }else {
             echo "<tr><td>".$cat_1."</td><td>".$cat_2."</td><td>".$cat_3."</td><td>".$name."</td><td>".$description."</td><td style=\"background-color: #FF0000; color: #FFF\">Ana listede bulunamadı</td></tr>";       
       }

     

   
   }

echo "</table>";    
    
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

$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/dilatasyon-profilleri/'.$dilatasyonSpecificationFile);

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
                 
          $fileType = PHPExcel_IOFactory::identify($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/dilatasyon-profilleri/'.$dilatasyonSpecificationFile);
          $objReader = PHPExcel_IOFactory::createReader($fileType);
          $objReader->setLoadSheetsOnly($productFindingSheet); 
          $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/dilatasyon-profilleri/'.$dilatasyonSpecificationFile);
          $excelSelectedData = $objPHPExcel->setActiveSheetIndex(0)->rangeToArray($productCellStart.":B".substr($productCellEnd, 1));
      }else {
          $excelSelectedData = '';
      }

    return $excelSelectedData;


}

















?>


