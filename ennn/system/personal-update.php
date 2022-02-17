<?php

require_once('config.php');
require 'connection.php';
require_once('classes/PHPExcel.php');
include('url-slug.php');
ini_set('memory_limit', '2000M'); //for 2GB
ini_set('memory_limit', -1); //For no limits


updatePersonals();

function updatePersonals() {
global $personelListFile;
global $excelDataDir;
global $con;

     $objReader = PHPExcel_IOFactory::createReader('Excel2007');
       
$objReader->setReadDataOnly(true);
echo $_SERVER['DOCUMENT_ROOT'];
$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'].$excelDataDir.'/'.$personelListFile);


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


mysqli_query($con,"TRUNCATE TABLE personeller_en");


echo "Aşağıdaki personeller_en veritabanında güncellendi<br>";
echo "</br>";

echo "<table border='1'>";
echo "<tr><td>".$dataArr[1][0]."</td><td>".$dataArr[1][1]."</td><td>".$dataArr[1][2]."</td><td>".$dataArr[1][3]."</td></tr>";

 for ($x = 2; $x <= sizeof($dataArr); $x++) {
       $order_no = mysqli_real_escape_string($con,$dataArr[$x][0]);
       $name_surname = mysqli_real_escape_string($con,$dataArr[$x][1]);
       $title_turkish = mysqli_real_escape_string($con,$dataArr[$x][2]);
       
       $department_turkish = mysqli_real_escape_string($con,$dataArr[$x][3]);

     //  $title_turkish = str_replace("(","<br>(",$title_turkish );

      // $photoName = url_slug($name_surname).'.jpg';
       //  $photoName = 'personel-default.jpg';
     
     

      mysqli_query($con,"INSERT INTO personeller_en (name_surname,title_turkish,department_turkish,order_no) 
      VALUES ('$name_surname','$title_turkish','$department_turkish','$order_no')");
       echo "<tr><td>".$order_no."</td><td>".$name_surname."</td><td>".$title_turkish."</td><td>".$department_turkish."</td></tr>";
   
}




echo "</table>";    


mysqli_close($con);



}





?>


