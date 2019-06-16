<?php
// get config from file
$id = $_GET['id'];
//支持两种上传方式
if ($id == "1"){
	//标准json输出
	echo file_get_contents("config.txt");

} elseif ($id == "2") {
	//分隔符输出
	$config = json_decode(utf8_decode(file_get_contents("config.txt")));

	$Guid=$config->{'Guid'};

	$Token=$config->{'Token'};

	echo $Guid.",".$Token;
}
?>