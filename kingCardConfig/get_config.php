<?php
header("Content-type:text/html;charset=utf-8");
?>
<?php
// get config from file
error_reporting(E_ALL & ~E_NOTICE);
$id = $_GET['id'];
//支持两种获取方式
if(empty($id)){
	echo file_get_contents("config.txt");
} elseif ($id == "1"){
	//标准json输出
	echo file_get_contents("config.txt");

} elseif ($id == "2") {
	//分隔符输出
	$config = json_decode(utf8_decode(file_get_contents("config.txt")));

	$Guid=$config->{'Guid'};

	$Token=$config->{'Token'};

	echo $Guid.",".$Token;
} else{
	echo "无效请求";
}
?>