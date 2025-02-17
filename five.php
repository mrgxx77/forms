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
            $userName = $_POST['userName'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $country = $_POST['country'];
            $adress = $_POST['adress'];
            $city = $_POST['city'];
            $house = $_POST['house'];
            $mail_index = $_POST['mail_index'];
            $agree = $_POST['agree'];
            if($agree == "1"){
                $agree = "yes";
            } else{
                $agree = "no";
            }

        } catch (\Throwable $th){
            $userName ="ERROR IN MESSAGE";
            $email = "ERROR IN MESSAGE";
            $tel = "ERROR IN MESSAGE";
            $country = "ERROR IN MESSAGE";
            $adress = "ERROR IN MESSAGE";
            $city = "ERROR IN MESSAGE";
            $house = "ERROR IN MESSAGE";
            $mail_index = "ERROR IN MESSAGE";
            $agree = "ERROR IN MESSAGE";
        }

        $token = "7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k"; //token from bot father
        $chat_id = 5502242989; // number of active chat from https://api.telegram.org/bot7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k/getUpdates


        $userName = urlencode("$userName");
        $email = urlencode("$email");
        $tel = urlencode("$tel");
        $country = urlencode("$country");
        $adress = urlencode("$adress");
        $city = urlencode("$city");
        $house = urlencode("$house");
        $mail_index = urlencode("$mail_index");
        $agree = urlencode("$agree");

        $urlQuerly = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . "userName=  " . $userName . "   email=  " . $email . "   tel=  " . $tel . "  country=   " . $country. "  adress=   " . $adress. "  city=   " . $city. "  house=   " . $house. "  mail_index=   " . $mail_index. "  agree=   " . $agree;
        $result = file_get_contents($urlQuerly);
        ?>
</body>
</html>