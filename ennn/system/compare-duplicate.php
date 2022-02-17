<?php

require_once('config.php');
require 'connection.php';
require_once('classes/PHPExcel.php');
//ini_set('memory_limit', '2000M'); //for 2GB
// ini_set('memory_limit', -1); //For no limits



duplicateProducts();



function duplicateProducts() {
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




echo "Aşağıdaki ürünler web ürün listesi olan dilatasyon-profilleri-tr.xls dosyasında mükerrer olarak 1 den fazla kayıt tespit edildi";
echo "</br></br>";

echo "<table border='1'>";
//echo "<tr><td>".$dataArr[1][0]."</td><td>".$dataArr[1][1]."</td><td>".$dataArr[1][2]."</td><td>".$dataArr[1][3]."</td><td>".$dataArr[1][4]."</td><td>Compare</td></tr>";

$deger = array_count_values($dataArr);

$deger2 = array_count_values($dataArr);

foreach ($deger as $key => $value) { 
   
    if($value != 1) {

       echo "<tr><td>$key</td><td> isimli ürün ".$value." kez girilmiş</td></tr>";
      
    }
}





echo "</table>";    
    
}








?>


