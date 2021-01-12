<?php
$i = file_get_contents('https://api.telegram.org/bot{bot token}/getChatMembersCount?chat_id={chat id}');
$obj = json_decode($i);
echo $obj->{'result'};
?>
