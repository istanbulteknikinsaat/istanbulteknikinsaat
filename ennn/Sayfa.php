<?php 


    $id = $_GET['url'];

   // Sayfa.aspx?url=transportation-solutions
    $adres["transportation-solutions"] = "/en/geosynthetics/asphalt-reinforcement-grid/asfalttex-asphalt-reinforcement-grid";
    $adres["enviroment-soluitons"] = "/en/geosynthetics/environmental-protection-products/geomat-erosion-control-products";
    $adres["tunnel-solutions"] = "/en/geosynthetics/membranes-and-geomembranes/geoseal-gcl-membrane";
    $adres["geoarme-wall"] = "/en/geosynthetics/wall-solutions/geoarme-geosynthetic-reinforced-wall";
    $adres["AboutUs"] = "/en/about";
    $adres["quality-policy"] = "/en/about";



    header("HTTP/1.1 301 Moved Permanently");
    header('Location: http://www.istanbulteknik.com'.$adres[$id]);
    exit();

?>