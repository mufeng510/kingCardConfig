<?php
header("Content-type:text/html;charset=utf-8");
?>
<?php
//支持两种上传方式，均以标准json存储
error_reporting(E_ALL & ~E_NOTICE);
$id = $_GET['id'];
if(empty($id)){
  $config = file_get_contents('php://input');
} elseif ($id == "1"){
  //标准json格式，为post方式（配置助手脚本助手为该方式）
  $config = file_get_contents('php://input');
} elseif ($id == "2") {
  //get参数方式，url中需包含Guid和Token
  $temp = array();
  ini_set('date.timezone','Asia/Shanghai');
  $temp["Time"] = date("Y-m-d H:i:s");
  $temp["Guid"] = $_GET['Guid'];
  $temp["Token"] = $_GET['Token'];
  $config = json_encode($temp);
} elseif ($id =="3") {
  //从其他接口获取，需为标准json，否则请自行适配格式。
  $api = file_get_contents("api.txt");
  $config = file_get_contents($api);
} elseif ($id =="4") {
  //获取api接口信息
  echo file_get_contents("api.txt");
  return;
} elseif ($id =="5") {
  //写入api接口信息
  $api = $_GET['api'];
  $result = file_put_contents("api.txt",$api);
  if ($result>10){
    echo "success";
    return;
  }else{
    echo "failed";
    return;
  }
}

// check for required fields
if (strlen($config) > 50) {
  $result = file_put_contents("config.txt",$config);
    // check result
  if ($result>50) {
        // successfully put into file
    $response["success"] = 1;
    $response["message"] = "Config successfully created.";

        // echoing JSON response
    echo json_encode($response);
  } else {
        // failed to insert row
    $response["success"] = 0;
    $response["message"] = "put failed";

        // echoing JSON response
    echo json_encode($response);
  }
} else {
    // required field is missing
  $response["success"] = 0;
  $response["message"] = "Required field(s) is missing";

    // echoing JSON response
  echo json_encode($response);
}
?>