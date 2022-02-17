<?php 


    if(isset($_GET['KID'])) {
         $id = $_GET['KID'];
    } else if(isset($_GET['AltKID'])) {
         $id = $_GET['AltKID']  
    }



    // Urunlerimiz.aspx?KID=16;
    $adres[1] = "/en/geosynthetics";
    $adres[11] = "/en/concrete-products";
    $adres[10] = "/en/insulation-products/insulating-products/plaster-and-reinforcement-mesh";
    $adres[8] = "/en/geosynthetics";
    $adres[9] = "/en/insulation-products";
    $adres[13] = "/en/marble-products";
    $adres[14] = "/en/geogreen-green-roof-systems";
    $adres[12] = "/en/asphalt-products";
    $adres[16] = "/en/expansion-joint-profiles";


   // Urunlerimiz.aspx?AltKID=16
    $adres[7] = "/en/geogreen-green-roof-systems/non-woven-geotextiles/izoteknik-3000-non-woven-protector-and-moisture-keeper-geotextile";
    $adres[22] = "/en/asphalt-products/flexoderz-crack-fillers";
    $adres[18] = "/en/geosynthetics/membranes-and-geomembranes/geoseal-hdpe-membrane";
    $adres[15] = "/en/geosynthetics/geogrid/fortex-uni-axial-geogrid";
    $adres[16] = "/en/geogreen-green-roof-systems/non-woven-geotextiles/izoteknik-3000-non-woven-protector-and-moisture-keeper-geotextile";
    $adres[21] = "/en/insulation-products/drainage-board/geotextile-drainage-board/insulation-tekdrain-geo-10-400-drainage-board";
    $adres[17] = "/en/geogreen-green-roof-systems/geotechnical-drainage-boards/tekdrain-geo-10-400-drainage-board";
    $adres[19] = "/en/insulation-products/insulating-products/tekfix-fixing-elements";
    $adres[20] = "/en/insulation-products/roof-and-facade-underlays/triotexfire-retardant-roof-and-facade-underlays";


    header("HTTP/1.1 301 Moved Permanently");
    header('Location: http://www.istanbulteknik.com'.$adres[$id]);
    exit();

?>