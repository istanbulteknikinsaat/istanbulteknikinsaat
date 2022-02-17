<?php
try {

    $db = new PDO('mysql:host=localhost;dbname=istanbulteknik;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_TO_STRING);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
} catch (PDOException $e) {

    echo 'Hata: ' . $e->getMessage();

}
?>