<?php
ignore_user_abort();

set_time_limit(0);

$interval=60*10;// 每隔10分钟运行

do{

  file_get_contents("create.php?id=4")

  sleep($interval);// 等待

}while(true);
?>