<?php

$botToken = "252587896:AAF1KvL1pHBC8beL49v3lptM7IS4i1uTbXQ";
$website = "https://api.telegram.org/bot".$botToken;

//This function is deactivated
//$quantity = $_POST['pesan'];

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Hello World");

?>
