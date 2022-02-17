<?php
require_once '../../../../system/guvenlik.php';
if(OturumAktif()==true)
{
require_once '../../../../system/ayar.php';
require_once '../../../../system/fonksiyon.php';

if(isset($_POST["import"]))
{
	$array123 =explode(".", $_FILES["excel"]["name"]);
 $extension = end($array123); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("../../../../excel/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $kategori = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
    $proje = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
	$il = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
	$urun = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
    $uygulama = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
    $miktar = $worksheet->getCellByColumnAndRow(5, $row)->getValue();

    if(!empty($proje) || !empty($kategori)) // if none of the data are empty
    {
      $query = $db->prepare("INSERT INTO referanslar(kategori,projeadi,ili,urun,uygulama,miktar,lang,IsActive) VALUES ('".$kategori."', '".$proje."','".$il."','".$urun."','".$uygulama."','".$miktar."','tr',1)");
    }
	else
	{	
		echo "İnsert Başarısız";
	}
   }
  } 
  $target_dir = "../ReferansFile/"; //file upload folder
  $target_file = $target_dir .time().basename($_FILES["excel"]["name"]); // target file to be uploaded
  if (move_uploaded_file($_FILES["excel"]["tmp_name"], $target_file)) {
	echo "Dosya Yükleme Başarılı";
 } else {
	echo "Dosya Yükleme Başarısız"; }
}
else
 {
	echo "Geçersiz Dosya";
}
}
}
 ?>