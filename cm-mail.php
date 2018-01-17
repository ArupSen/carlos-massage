<?php
if (!session_is_registered("SESSION")){
   $errors[] = "Invalid form submission";
		}
@extract($_POST);
$name = stripslashes($name);
$email = stripslashes($email);
$subject = stripslashes($subject);
$text = stripslashes($text);
mail('jcoronoz@aol.com',$subject,$text,"From: $name <$email>");
header("location:thanks.php");
?>