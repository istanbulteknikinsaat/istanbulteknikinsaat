<?php
date_default_timezone_set('Europe/Istanbul');
$tarihx = date("Y/m/d");
$tarihy = date("d-m-Y");
$tarihh = date("Y-m-d");
$tarih = date("d.m.Y");
$saat = date("H:i:s");
$tamzaman = date("Y-m-d H:i:s");


function KelimeKontrol($Cumle,$Kelime)
{
    return $Sonuc = strpos($Cumle, $Kelime) ? true : false;
}
function seo($s)
{
    $tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ':', ',', '?');
    $eng = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '', '');
    $s = str_replace($tr, $eng, $s);
    $s = strtolower($s);
    $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
    $s = preg_replace('/\s+/', '-', $s);
    $s = preg_replace('|-+|', '-', $s);
    $s = preg_replace('/#/', '', $s);
    $s = str_replace('.', '', $s);
    $s = trim($s, '-');
    return $s;
}
function seo2($tr1) {
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

function p($par, $st = false)
{
    if ($st) {
        return htmlspecialchars(addslashes(trim($_POST[$par])));
    } else {
        return addslashes(trim($_POST[$par]));
    }
}


function kisalt($kelime, $str = 10)
{
    if (strlen($kelime) > $str) {
        if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8") . '..';
        else $kelime = substr($kelime, 0, $str) . '..';

    }

    return $kelime;

}
function GetInfo()
{
    $proxy = "";
    $IP = "";
    if (isSet($_SERVER)) {
        if (isSet($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
            $proxy = $_SERVER["REMOTE_ADDR"];
        } elseif (isSet($_SERVER["HTTP_CLIENT_IP"])) {
            $IP = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $IP = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv('HTTP_X_FORWARDED_FOR')) {
            $IP = getenv('HTTP_X_FORWARDED_FOR');
            $proxy = getenv('REMOTE_ADDR');
        } elseif (getenv('HTTP_CLIENT_IP')) {
            $IP = getenv('HTTP_CLIENT_IP');
        } else {
            $IP = getenv('REMOTE_ADDR');
        }
    }
    if (strstr($IP, ',')) {
        $ips = explode(',', $IP);
        $IP = $ips[0];
    }
    $RemoteInfo['ip'] = $IP;
    $RemoteInfo['hostadi'] = @GetHostByAddr($IP);
    $RemoteInfo['proxy'] = $proxy;
    return $RemoteInfo;
}

function Tarayici($useragent = '') 
{ 
        if ($useragent == '')  
        {  
                $useragent = $_SERVER['HTTP_USER_AGENT'];  
        } 
        $browser_name = ''; 
        $browsers = array(); 
        $browsers[] = array('name' => 'AmigaVoyager', 'useragent' => 'AmigaVoyager'); 
        $browsers[] = array('name' => 'Apple Generic', 'useragent' => 'CFNetwork');
        $browsers[] = array('name' => 'Camino', 'useragent' => 'Camino'); 
        $browsers[] = array('name' => 'Ensemble2', 'useragent' => 'Ensemble2'); 
        $browsers[] = array('name' => 'Epiphany', 'useragent' => 'Epiphany'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'Firefox');   
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'Firefox/1.0'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'Firefox/1.5'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'BonEcho'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'Firefox/2'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'Firefox/3'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'GranParadiso'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'Phoenix'); 
        $browsers[] = array('name' => 'Firefox', 'useragent' => 'Firebird'); 
        $browsers[] = array('name' => 'Galeon', 'useragent' => 'Galeon'); 
		$browsers[] = array('name' => 'Microsoft Edge', 'useragent' => 'Edge');	
        $browsers[] = array('name' => 'Google Chrome', 'useragent' => 'chrome'); 
		$browsers[] = array('name' => 'Google Chrome', 'useragent' => 'Chrome'); 
        $browsers[] = array('name' => 'iCab', 'useragent' => 'iCab'); 
        $browsers[] = array('name' => 'Iceweasel', 'useragent' => 'Iceweasel'); 
        $browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE');   
        $browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE5.'); 
        $browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE6.'); 
        $browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE7.'); 
        $browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE8.'); 
		$browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE9.'); 
		$browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE10.');
		$browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE11.'); 	
		$browsers[] = array('name' => 'Internet Explorer', 'useragent' => 'MSIE.');	
		$browsers[] = array('name' => 'Internet Explorer Mobile', 'useragent' => 'IEMobile.');		
        $browsers[] = array('name' => 'K-Meleon', 'useragent' => 'K-Meleon'); 
        $browsers[] = array('name' => 'Konqueror', 'useragent' => 'Konqueror'); 
        $browsers[] = array('name' => 'Lynx', 'useragent' => 'Lynx'); 
        $browsers[] = array('name' => 'Mozilla Minefield', 'useragent' => 'Minefield'); 
        $browsers[] = array('name' => 'Netscape', 'useragent' => 'Netscape'); 
        $browsers[] = array('name' => 'NewsCopier', 'useragent' => 'NewsCopier'); 
        $browsers[] = array('name' => 'Opera', 'useragent' => 'Opera'); 
        $browsers[] = array('name' => 'Pocket Internet Explorer', 'useragent' => 'MicrosoftPocketInternetExplorer'); 
        $browsers[] = array('name' => 'Pocket Internet Explorer', 'useragent' => 'MSPIE'); 
        $browsers[] = array('name' => 'Radianrss', 'useragent' => 'radianrss'); 
        $browsers[] = array('name' => 'RssReader', 'useragent' => 'rssreader.com'); 
        $browsers[] = array('name' => 'Apple Safari', 'useragent' => 'AppleSyndication'); 
		$browsers[] = array('name' => 'Mobile Safari', 'useragent' => 'Mobile Safari'); 
        $browsers[] = array('name' => 'SeaMonkey', 'useragent' => 'SeaMonkey'); 
        $browsers[] = array('name' => 'Swiftweasel', 'useragent' => 'Swiftweasel'); 
        $browsers[] = array('name' => 'Thunderbird', 'useragent' => 'Thunderbird'); 
        $browsers[] = array('name' => 'Vienna', 'useragent' => 'Vienna'); 
        foreach ($browsers as $browser) 
        { 
                if (stripos(strtolower($useragent), strtolower($browser['useragent'])) !== FALSE) 
                { 
                        $browser_name = $browser['name']; 
                } 
        } 
        unset($browsers, $browser, $useragent);
        if ($browser_name) 
        { 
                return $browser_name; 
        } 
        else 
        { 
                return false; 
        }   
}
function IsletimSistemi($useragent1 = '') 
{ 
        if ($useragent1 == '')  
        {  
                $useragent1 = $_SERVER['HTTP_USER_AGENT'];  
        } 
        $os_name = ''; 
        $oses = array(); 
        $oses[] = array('name' => 'Windows 95', 'useragent1' => 'Windows 95'); 
        $oses[] = array('name' => 'Windows 98', 'useragent1' => 'Windows 98');
        $oses[] = array('name' => 'Windows NT', 'useragent1' => 'Windows NT');		
        $oses[] = array('name' => 'Windows 2000', 'useragent1' => 'Windows NT 5.0'); 
        $oses[] = array('name' => 'Windows XP', 'useragent1' => 'Windows NT 5.1'); 
        $oses[] = array('name' => 'Windows Vista', 'useragent1' => 'Windows NT 6.0'); 
        $oses[] = array('name' => 'Windows 7', 'useragent1' => 'Windows NT 6.1');   
        $oses[] = array('name' => 'Windows 8', 'useragent1' => 'Windows NT 6.2'); 
        $oses[] = array('name' => 'Windows 8.1', 'useragent1' => 'Windows NT 6.3'); 
        $oses[] = array('name' => 'Windows Phone ', 'useragent1' => 'Windows Phone 8.0'); 
        $oses[] = array('name' => 'Windows Phone ', 'useragent1' => 'WM 10.0'); 
        $oses[] = array('name' => 'Windows 10 ', 'useragent1' => 'Windows NT 10.0'); 
        $oses[] = array('name' => 'Symbian ', 'useragent1' => 'SymbOS'); 		
        $oses[] = array('name' => '”Mac”', 'useragent1' => '”Mac”'); 
        $oses[] = array('name' => '”Linux”', 'useragent1' => '”Linux”'); 
		$oses[] = array('name' => 'Android', 'useragent1' => 'Android'); 
		$oses[] = array('name' => 'Mac OS X', 'useragent1' => 'iPhone');    
		$oses[] = array('name' => 'Mac OS X', 'useragent1' => 'Mac OS X');	

		
        foreach ($oses as $os) 
        { 
                if (stripos(strtolower($useragent1), strtolower($os['useragent1'])) !== FALSE) 
                { 
                        $os_name = $os['name']; 
                } 
        } 
        unset($oses, $os, $useragent1); 
        if ($os_name) 
        { 
                return $os_name; 
        } 
        else 
        { 
                return false; 
        }   
}
function curlKullan($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
    $curlData = curl_exec($curl);
    curl_close($curl);
    return $curlData;
}
function xss_clean($data)
{
        // Fix &entity\n;
        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do
        {
                // Remove really unwanted tags
                $old_data = $data;
                $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        }
        while ($old_data !== $data);

        // we are done...
        return $data;
} 

?>