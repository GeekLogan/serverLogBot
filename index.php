<?php

$botId = "<BOT_ID>";

$quote = "tmp"
$fields = array(
	'text' => $quote,
	'bot_id' => $botId
);

$response = http_post_fields("https://api.groupme.com/v3/bots/post",$fields);

?>
