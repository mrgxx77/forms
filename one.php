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
            $name = $_POST['userName'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $about_email = $_POST['about_email'];

        } catch (\Throwable $th){
            $name ="ERROR IN MESSAGE";
            $email = "ERROR IN MESSAGE";
            $city = "ERROR IN MESSAGE";
        }

        $token = "7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k"; //token from bot father
        $chat_id = 5502242989; // number of active chat from https://api.telegram.org/bot7690560635:AAHXdf5hLhfVFcqblk_tIexU1-IXDIQSN7k/getUpdates


        $name = urlencode("$name");
        $email = urlencode("$email");
        $city = urlencode("$city");

        $urlQuerly = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id ."&text=" . "userName=  " . $name . "   email=  " . $email . "   city=  " . $city . "   about-email=   " . $about_email;
        $result = file_get_contents($urlQuerly);
        ?>
</body>
</html>