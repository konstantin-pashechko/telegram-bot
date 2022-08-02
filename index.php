<?php 

    include ('lib/function.php');
    
    const TOKEN = 'token_for_bot';

    const BASE_URL = 'https://api.telegram.org/bot' . TOKEN . '/';

    $url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';

    $update = json_decode(file_get_contents('php://input'), JSON_OBJECT_AS_ARRAY);    


    $time = date('H:m:s');

    $chat_id = $update['message']['chat']['id'];
    sendRequest('sendMessage', ['chat_id' => $chat_id, 'text' => $time]);  