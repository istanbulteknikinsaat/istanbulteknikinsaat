
<?php 
  $excelFilePos = $dirPosition.'assets/excel'.substr($_SERVER['PHP_SELF'], 3, -4).'.xlsx';


    if (file_exists($excelFilePos)) {
	
      echo readTeknik(substr( $_SERVER['PHP_SELF'], 3, -4));


    }

?>
</div>

<?php

  include 'certificates.php'; 
?>

<div class="wrapper">

