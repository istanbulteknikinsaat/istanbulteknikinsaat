<?php
function OturumAktif()
{
	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$Token = md5($_SERVER['HTTP_USER_AGENT']."-Guvenlik");
	$Oturum=false;
	if (empty($_SESSION['UserID']) && $_SESSION['Token'] != $Token && $_SESSION['Oturum'] != true) {
		header('location: ../index.php');
	} else {
		$Oturum=true;
	}
	return $Oturum;
}
?>