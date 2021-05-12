<?php
//variable 
$name=$_Request['name'];
$email=$_Request['email'];
$sub=$_Request['subject'];
$msg=$_Request['message'];
if(empty($name) || empty($email) || empty($msg) || empty($sub))

{
	echo "Please fill all the fields";
}
else
{
	mail("ahmadrukshar321@gmail.com", "portfolio msg", $msg,"From: $name <$email>");
	echo "<script type='text/javascript'>alert("Your Message has been sent Successfully");
	window.history.log(-1);
	</script>";
}



?>
