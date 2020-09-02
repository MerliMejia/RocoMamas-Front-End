<?php

$h = getallheaders();
$body = file_get_contents('php://input');

header('Content-type: application/json');
header('Location: https://api.infobip.com/bots/webhook/'.$h['headers']["sessionId"]);