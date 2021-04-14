<?
session_start();
$t = isset($_SESSION['t'])?$_SESSION['t']:0;
$t++;
echo  "http://$_SERVER[HTTP_HOST]:$_SERVER[SERVER_PORT]$_SERVER[REQUEST_URI]";
echo "<br>";
echo $t;
$_SESSION["t"] = $t;
?>