<?php

require_once('config.php');
require 'connection.php';
require_once('classes/PHPExcel.php');
//ini_set('memory_limit', '2000M'); //for 2GB
// ini_set('memory_limit', -1); //For no limits



productList();



function productList() {
      global $dilatasyonSpecificationFile;
      global $excelDataDir;
      global $con;

      $objReader = PHPExcel_IOFactory::createReader('Excel5');
      $objReader->setReadDataOnly(true);

      $objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/expansion-joint-profiles/'.$dilatasyonSpecificationFile);


      $dataArr = array();

      foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
          $worksheetTitle     = $worksheet->getTitle();
          $highestRow         = $worksheet->getHighestRow(); // e.g. 10
          $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
          $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
          
          for ($row = 1; $row <= $highestRow; ++ $row) {
            
                  $cell = $worksheet->getCellByColumnAndRow(1, $row);
                  $val = $cell->getValue();
                //   $dataArr[$row][$col] = $val;
                    $dataArr[] = $val;
           
          }
      }


      print_r($dataArr);

   }


// echo "Ürün listesi aşağıdadır";
// echo "</br></br>";

//echo "<table border='1'>";
//echo "<tr><td>".$dataArr[1][0]."</td><td>".$dataArr[1][1]."</td><td>".$dataArr[1][2]."</td><td>".$dataArr[1][3]."</td><td>".$dataArr[1][4]."</td><td>Compare</td></tr>";

//$deger = array_count_values($dataArr);
 //$deger2 = array_count_values($dataArr);
//foreach ($deger as $key => $value) { 
   // if($value != 1) {
   //    echo "<tr><td>$key</td><td> isimli ürün ".$value." kez girilmiş</td></tr>";
      
   // }
//}
//echo "</table>";      
//}








?>


