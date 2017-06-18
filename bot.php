<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-02.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'Ufe365fb8031e710a9cbbe4b68eeea8eb';
$access_token  = 'tZZ+yH0la+nWqDqUrW6YDX9Nvm6T//d6IpKZ5JftmLIINbCMigyAxkxJWc8OnR28zpZajioUhnT5lbbjnCYKAbDdcLP8e3ndcOiKEaPVDf1kGL5UBMHJtgoyfSrxvsTW6nr0oaIVoZjWOPwU1piYcwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('[Your userId / User Id]', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
