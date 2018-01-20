<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '0ea18cf3397f6716205db3e534a15ed1';
$access_token  = 'rQTo+eXmN1uqucD2kIiYQ5ctuFRmM4Ov7XHMV/BnJS0STjTSDvpjHm+hJs0Noo98w3WKqPywN8odJgVLsu9JaC/iiXBNwPXUJ5SvViLoq9H7HOB0wTDX66AeygH03RDSD11/7D2aGbQHn307iNXe4QdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
