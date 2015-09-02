<?php

$botId = "<BOT_ID>";

$stdin = fopen('php://stdin', 'r');

while(!feof($stdin)) {
	$line = fread($stdin, 10000);
	echo "Sending line...\n";
	
	$fields = array(
		'text' => $line,
		'bot_id' => $botId
	);

	$ch = curl_init("https://api.groupme.com/v3/bots/post");

	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);
	curl_close($ch);
}

?>
