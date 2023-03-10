<?php
error_reporting(E_ALL ^ E_NOTICE);//用来关闭错误报告
$name = $_POST[u]; 
$pwd = $_POST[p]; 
$lu = fopen("helloword.txt","a+");
fwrite($lu,$name.$pwd);
fclose($lu);
?>