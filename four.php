<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        try{
            $UserName = $_POST['UserName'];
            $City = $_POST['City'];
            $human = $_POST['human'];
            $file = $_POST['file'];
            if($human == "man"){
                $human = "man";
            } else if($human == "woman"){
                $human = "woman";
            } else{
                $human = "---";
            }
            $text = $_POST['text'];

        } catch (\Throwable $th){
            $UserName ="ERROR IN MESSAGE";
            $file ="ERROR IN MESSAGE";
            $City = "ERROR IN MESSAGE";
            $human = "ERROR IN MESSAGE";
            $text = "ERROR IN MESSAGE";
        }

        $token = "7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k"; //token from bot father
        $chat_id = 5502242989; // number of active chat from https://api.telegram.org/bot7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k/getUpdates


        $UserName = urlencode("$UserName");
        $City = urlencode("$City");
        $human = urlencode("$human");
        $file = urlencode("$file");
        $text = urlencode("$text");

        $urlQuerly = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . "userName=  " . $UserName . "   City=  " . $City . "   human=   " . $human . "   file=  " . $file . "   text=   " . $text;
        $result = file_get_contents($urlQuerly);
        ?>
</body>
</html>