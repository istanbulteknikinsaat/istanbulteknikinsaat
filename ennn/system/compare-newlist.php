<?php

require_once('config.php');
require 'connection.php';
require_once('classes/PHPExcel.php');
ini_set('memory_limit', '2000M'); //for 2GB
ini_set('memory_limit', -1); //For no limits
set_time_limit(0);
$mainArr = array();
$bulunanlarArr = array();


productSpecifications();


function productSpecifications () {

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
          $searchValue = 'Teknik Özellikler';

          foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

              $findingSheetName = $worksheet->getTitle();
              foreach ($worksheet->getRowIterator() as $row) {

                  $cellIterator = $row->getCellIterator();
                  $cellIterator->setIterateOnlyExistingCells(true);
                  foreach ($cellIterator as $cell) {
                      if ($cell->getValue() == $searchValue) {
                           $productFindingSheet = $findingSheetName;
                           $productCellStart = $cell->getCoordinate();
                           $deger1 = substr($productCellStart, 1)-3; 
                           $mainArr[] = $deger1;    
                             }
                        }
                    }
                }
       $kacadet = 1;
       foreach ($mainArr as $degernew) {
            $sheetData = $objPHPExcel->getActiveSheet();
            $readingProductName = getCell($sheetData,'A', $degernew)->getValue();

             $readingProductName = trim($readingProductName);
             $sonucumuz = listedeVarmi($readingProductName);

              if($sonucumuz) {
                   echo $kacadet.' - '.$readingProductName."<- Bulundu";
                   $bulunanlarArr[] = $readingProductName;
              }else {
                  echo $kacadet.' - '.$readingProductName;
              }

            $kacadet++;
            echo "<br>";
      }
    
     echo "------------------------------<br>";
     $kacadet2 = 1;
     foreach ($bulunanlarArr as $liste) {
          echo $kacadet2.' - '.$liste;
          echo "<br>";
          $kacadet2++;
      }
    


}


function getCell(PHPExcel_Worksheet $sheet, $x = 'A', /* int */ $y = 1 ) {
    return $sheet->getCell( $x . $y );
}



function listedeVarmi($bulunacak) {
  
          $urunbulundumu = false;
          $productFindingSheet;
          $productCellStart;
          $productCellEnd;
          $bulmabittimi = false;
           $sonuc;
          $dilatasyonSpecificationOldFile = "dilatasyon-profilleri-specification-tr-old.xls";


          global $excelDataDir;






               $sonuc = false; 

$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objReader->setReadDataOnly(true);

$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/dilatasyon-profilleri/'.$dilatasyonSpecificationOldFile);

$foundInCells = array();
$searchValue = $bulunacak;
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $findingSheetName = $worksheet->getTitle();
    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(true);
        foreach ($cellIterator as $cell) {
            if ($cell->getValue() == $searchValue) {
             

               $sonuc = true;         
            }



        }
    }
}








         return $sonuc;
}








?>