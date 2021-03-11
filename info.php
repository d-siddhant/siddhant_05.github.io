<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

$con= MySQLi_connect('localhost','root');
if($con){
    echo "Connection successful";
}
else 
{echo "No Connection";

}
MySQLi_select_db($con,'userdata');

$User=$_POST['User'];
$Email=$_POST['Email'];
$Subject=$_POST['Subject'];
$Message=$_POST['Message'];

$query="insert into userinfodata (User,Email,Subject,Message)
values ('$User','$Email','$Subject','$Message')";
echo "$query";
MySQLi_query($con,$query);

header('location:index.html');



  
?>
