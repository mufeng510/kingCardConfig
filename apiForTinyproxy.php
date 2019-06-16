<?php

// get config from file

$config = json_decode(utf8_decode(file_get_contents("config.txt")));

$Guid=$config->{'Guid'};

$Token=$config->{'Token'};

echo $Guid.",".$Token;

?>