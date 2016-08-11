<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$time = date("r");
echo "data: Server time {$time}\n\n";

echo "event: myEvent_1\n";
echo "data: my Custom event msg {$time}\n";
echo 'data:' . json_encode(array("username"=> "John123", "status"=> "online")) . "\n\n";

echo "event: myEvent_2\n";
echo "data: my Custom event msg {$time}\n";
echo 'data:' . json_encode(array("title"=> "notification", "msg"=> "You've got mail")) . "\n\n";

?>