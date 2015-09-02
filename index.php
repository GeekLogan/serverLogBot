<?php

$botId = "<BOT_ID>";

$quote = "a wild test appears";
$fields = array(
	'text' => $quote,
	'bot_id' => $botId
);

$ch = curl_init("https://api.groupme.com/v3/bots/post");

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

?>
