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
    $urunurl = $worksheet->getCellByColumnAndRow(26, $row)->getValue();
    $pdfurl = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
    if(!empty($urunurl) || !empty($pdfurl) ){
    $urlpdf= substr( $pdfurl, 84);
    $urlpdfall="https://www.istanbulteknik.blue/".$urlpdf;
    $urlpdfall =str_replace('"></embed></p>','',$urlpdfall);
    $urlsectionspdf = explode('/', $urlpdfall);
    $namepdf = $urlsectionspdf[8];
    $namepdfsectionendsec=explode('.', $namepdf);
    $uzantipdf=end($namepdfsectionendsec);
    $pdfname=$namepdfsectionendsec[0].".".$uzantipdf; 

    $urlsections = explode('/', $urunurl);
    $nameimage = $urlsections[6];
    /* $nameimagesection=explode('_', $nameimage);
    $nameimagesectionend=end($nameimagesection); */
    $nameimagesectionendsec=explode('.', $nameimage);
    $uzanti=end($nameimagesectionendsec);
    $imagename=$nameimagesectionendsec[0].".".$uzanti;
   


   if(!empty($urunurl)) 
        {
        file_put_contents("resimler/".$imagename, file_get_contents($urunurl));
        echo "Başarılı IMG";
        }
        else
        {
            echo "Başarısız IMG";
        }
        if(!empty($pdfurl)) 
        {
        file_put_contents("pdf/".$pdfname, file_get_contents($urlpdfall));
        echo "Başarılı PDF";
        }
        else
        {
            echo "Başarısız PDF";
        } 
   }
}
  } 
/*   header( "refresh:1;url=../../Resimindir.php?status=basarili" );
 */  }
}
}

 ?>