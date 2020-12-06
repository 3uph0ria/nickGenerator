<?php
require_once('simplevk-master/autoload.php');

use DigitalStar\vk_api\VK_api as vk_api;
use DigitalStar\vk_api\VkApiException;

$config = require_once 'config_vk.php';
$VK_KEY = $config['VK_KEY'];  // Токен сообщества
$CONFIRM_STR = $config['CONFIRM_STR'];  // Тот самый ключ из сообщества
$VERSION = $config['VERSION']; // Версия API VK

$vk = vk_api::create($VK_KEY, $VERSION)->setConfirm($CONFIRM_STR);
$data = json_decode(file_get_contents('php://input'));
$vk->sendOK();

$message = $data->object->message->text;
$peer_id = $data->object->message->peer_id;
$payload = json_decode($data->object->message->payload);

if($message)
{
    if($payload->command == 'btn_1')
    {
        $nicknames = json_decode(file_get_contents(''));
        $vk->sendMessage($peer_id, $nicknames[rand(0, 9999)]->name);
    }

    $buttonText = $vk->buttonText('Рандомный ник', 'white', ['command' => 'btn_1']);

    $buttonMessage = '';
    $vk->sendButton($peer_id, $buttonMessage, [[$buttonText]]);
}

