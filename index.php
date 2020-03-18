<?php
require "vendor/autoload.php";
$access_token = 'HHMcryQV8uUu5kBo50wl3+6102GL3xBnvotFpmftpvad+DDavikXQpNQrVIbwB7QiM/2HZW1K5rH47wDcrWwYTe1eplsG42Lgeaxxp5VzKs7YkjZy0vL5pMzL3L2sVgpoMha1nV8SFlcN/ikzmTmfAdB04t89/1O/w1cDnyilFU=';
$channelSecret = '254ea7261bc9918bcdefff18c241a5d8';
$idPush = 'xxxxxx'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
