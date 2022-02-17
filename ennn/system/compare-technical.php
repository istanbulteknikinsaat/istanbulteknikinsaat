<?php

ini_set('max_execution_time', 700);
set_time_limit(720);
ini_set('memory_limit','-1');


require_once('config.php');
require 'connection.php';
require_once('classes/PHPExcel.php');
//ini_set('memory_limit', '2000M'); //for 2GB
// ini_set('memory_limit', -1); //For no limits


compareTechnical();



function compareTechnical() {
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
          
          for ($row = 2; $row <= $highestRow; ++ $row) {
            
                  $cell = $worksheet->getCellByColumnAndRow(3, $row);
                  $val = $cell->getValue();
                //   $dataArr[$row][$col] = $val;
                    $dataArr[] = $val;
           
          }
      }



echo "Aşağıdaki ürünler, dilatasyon-specification-tr.xls dosyasındaki teknik tabloların analizidir.</br></br>";




   for ($x = 0; $x <= sizeof($dataArr)-1; $x++) {
      
       $y = $x+1;
       $tablodurumu = "";
       $kackezmis = teknikVarmi($dataArr[$x]);

        if($kackezmis == 0) {
              $tablodurumu = "isimi ürünün hiç teknik tablosu yok.";
        }else if($kackezmis == 1) {
             $tablodurumu = " isimli ürün tam bir teknik tablosu var. OK";
        }else {
             $tablodurumu = " isimli ürün için " .$kackezmis." kez tablo kaydı girilmiş";
        }
       echo $dataArr[$x]." ".$tablodurumu."<br>";
   }



 
}





function teknikVarmi ($selectedProduct) {

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
$kackez = 0;
$foundInCells = array();
$searchValue = 'CoverEx '.$selectedProduct;
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $findingSheetName = $worksheet->getTitle();
    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(true);
        foreach ($cellIterator as $cell) {
            if ($cell->getValue() == $searchValue) {
                 $kackez++;
            }


        }
    }
}

 return $kackez;

  
}


     

?>


