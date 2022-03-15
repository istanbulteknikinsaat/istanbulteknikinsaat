<?php

ob_start();
@session_start();


#SERVER SETTINGS
date_default_timezone_set('Europe/Istanbul');
ini_set('memory_limit', '128M');

#IMAGE UPLOAD SETTINGS
define("FILE_MAX_SIZE", "10048576"); /* 1MB */
define("FILE_MAX_SIZE2", "6048576"); /* 1MB */

#DB
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'istanbulcom3');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

#DIRECTORIES
define("BASE", "http://localhost/istanbulteknik-new");
define("LOGO", BASE . "/images/logos/istanbul-teknik-logo.png");


define("URL", BASE);
define("CONTENT", BASE . "/uploads");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION["auth"])) {
    $uauth = $_SESSION["auth"];
}

if (!$db->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $db->error);
    exit();
 }

function seo($tr1) {
    $turkce = array("ş", "Ş", "ı", "ü", "Ü", "ö", "Ö", "ç", "Ç", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
    $duzgun = array("s", "S", "i", "u", "U", "o", "O", "c", "C", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
    $tr1 = str_replace($turkce, $duzgun, $tr1);
    $tr1 = trim($tr1);
    $tr1 = preg_replace("@[^a-z0-9\-_şıüğçİŞĞÜÇ]+@i", "-", $tr1);
    $tr1 = strtolower($tr1);
    $tr1 = rtrim($tr1, "-");
    $tr1 = ltrim($tr1, "-");
    return $tr1;
}

function stamp($tarih) {
    $time_difference = time() - $tarih;
    $seconds = $time_difference;
    $minutes = round($time_difference / 60);
    $hours = round($time_difference / 3600);
    $days = round($time_difference / 86400);
    $weeks = round($time_difference / 604800);
    $months = round($time_difference / 2419200);
    $years = round($time_difference / 29030400);
    if ($tarih == "0") {
        return "Data yok";
    }
    if ($seconds <= 60) {
        return "$seconds saniye önce";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "1 dakika önce";
        } else {
            return "$minutes dakika önce";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "1 saat önce";
        } else {
            return "$hours saat önce";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "1 gün önce";
        } else {
            return "$days gün önce";
        }
    } else if ($weeks <= 4) {
        if ($weeks == 1) {
            return "1 hafta önce";
        } else {
            return "$weeks hafta önce";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "1 ay önce";
        } else {
            return "$months ay önce";
        }
    } else {
        if ($years == 1) {
            return "1 yıl önce";
        } else {
            return "$years yıl önce";
        }
    }
}

function kisaltici($icerik, $karakter) {
    $icerik = stripslashes(strip_tags($icerik));
    $icerik = mb_substr($icerik, 0, $karakter, 'UTF-8');

    if (strlen($icerik) <= $karakter) {
        return $icerik;
    } else {
        return $icerik . "...";
    }
}

function etiketYap($etiket) {
    $etiket = seo($etiket);
    return $etiket;
}

function getExtension($str) {
    $i = strrpos($str, ".");
    if (!$i) {
        return "";
    }
    $l = strlen($str) - $i;
    $ext = substr($str, $i + 1, $l);
    return $ext;
}
function turkcetarih_formati($format, $datetime = 'now'){
    $z = date("$format", strtotime($datetime));
    $gun_dizi = array(
        'Monday'    => 'Pazartesi',
        'Tuesday'   => 'Salı',
        'Wednesday' => 'Çarşamba',
        'Thursday'  => 'Perşembe',
        'Friday'    => 'Cuma',
        'Saturday'  => 'Cumartesi',
        'Sunday'    => 'Pazar',
        'January'   => 'Ocak',
        'February'  => 'Şubat',
        'March'     => 'Mart',
        'April'     => 'Nisan',
        'May'       => 'Mayıs',
        'June'      => 'Haziran',
        'July'      => 'Temmuz',
        'August'    => 'Ağustos',
        'September' => 'Eylül',
        'October'   => 'Ekim',
        'November'  => 'Kasım',
        'December'  => 'Aralık',
        'Mon'       => 'Pts',
        'Tue'       => 'Sal',
        'Wed'       => 'Çar',
        'Thu'       => 'Per',
        'Fri'       => 'Cum',
        'Sat'       => 'Cts',
        'Sun'       => 'Paz',
        'Jan'       => 'Oca',
        'Feb'       => 'Şub',
        'Mar'       => 'Mar',
        'Apr'       => 'Nis',
        'Jun'       => 'Haz',
        'Jul'       => 'Tem',
        'Aug'       => 'Ağu',
        'Sep'       => 'Eyl',
        'Oct'       => 'Eki',
        'Nov'       => 'Kas',
        'Dec'       => 'Ara',
    );
    foreach($gun_dizi as $en => $tr){
        $z = str_replace($en, $tr, $z);
    }
    if(strpos($z, 'Mayıs') !== false && strpos($format, 'F') === false) $z = str_replace('Mayıs', 'May', $z);
    return $z;
}