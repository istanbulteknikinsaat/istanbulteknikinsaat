<?php

require_once('config.php');
require 'connection.php';
require_once('classes/PHPExcel.php');
//ini_set('memory_limit', '2000M'); //for 2GB
// ini_set('memory_limit', -1); //For no limits
// 

updateProducts();

function updateProducts() {
global $dilatasyonProductsFile;
global $excelDataDir;
global $con;

$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objReader->setReadDataOnly(true);

$objPHPExcel = $objReader->load($_SERVER['DOCUMENT_ROOT'] .$excelDataDir.'/products/expansion-joint-profiles/'.$dilatasyonProductsFile);


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

mysqli_query($con,"TRUNCATE TABLE expansion_joint_profiles_en");


echo "Aşağıdaki tüm veriler ingilizce veritabanında güncellendi";
echo "</br>";

echo "<table border='1'>";
echo "<tr><td>".$dataArr[1][0]."</td><td>".$dataArr[1][1]."</td><td>".$dataArr[1][2]."</td><td>".$dataArr[1][3]."</td><td>".$dataArr[1][4]."</td><td>".$dataArr[1][5]."</td></tr>";

 for ($x = 2; $x <= sizeof($dataArr); $x++) {
       $cat_1 = $dataArr[$x][0];
       $cat_2 = $dataArr[$x][1];
       $cat_3 = $dataArr[$x][2];
       $name = $dataArr[$x][3];
       $description = mysqli_real_escape_string($con, $dataArr[$x][4]);
       $specification = $dataArr[$x][5];
     
       mysqli_query($con,"INSERT INTO expansion_joint_profiles_en (cat_1,cat_2,cat_3,name,description,specification) 
            VALUES ('$cat_1','$cat_2','$cat_3','$name','$description','$specification')");
       echo "<tr><td>".$cat_1."</td><td>".$cat_2."</td><td>".$cat_3."</td><td>".$name."</td><td>".$description."</td><td>".$specification."</td></tr>";
   
   }

echo "</table>";    


mysqli_close($con);



}
?>


