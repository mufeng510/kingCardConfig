<?php
header("Content-type:text/html;charset=utf-8");
?>
<?php
$config = file_get_contents('php://input');
//助手上传接口，标准json格式
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