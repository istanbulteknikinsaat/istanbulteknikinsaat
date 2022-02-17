<?php 

    $gelen = $_GET['Tip'];
    $adres[0] = "/en/news";
 
     header("HTTP/1.1 301 Moved Permanently");
     header('Location: http://www.istanbulteknik.com'.$adres[0]);
     exit();

?>