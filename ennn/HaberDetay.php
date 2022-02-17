<?php 

    $id = $_GET['ID'];
    $adres[36] = "/en/news";
    $adres[37] = "/en/news/coverex-expansion-joint-profiles-are-at-vodafone-stadium-istanbul";
    $adres[38] = "/en/news/10-million-sqm-of-geogrid-production-in-5-years";
    $adres[39] = "/en/news/250000-sqm-of-asfalttex-asphalt-reinforcement-at-tbilisi-airport-georgia";
    $adres[51] = "/en/news";

     header("HTTP/1.1 301 Moved Permanently");
     header('Location: http://www.istanbulteknik.com'.$adres[$id]);
     exit();

?>