<?php 
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message= $_POST['message'];
if(empty($name) || empty($email) || empty($subject) || empty($message))      
{
   echo'<script type="text/javascript"> alert("Please fill all the fields..!");
     window.location = "http://localhost/RuksharAhmad/";
        </script>';

} 
else{
    mail("ahmadrukshar321@gmail.com", "Personal Portfolio Site" , $message,"From:$name<$email>");
    echo'<script type="text/javascript"> alert("Yor message has been sent..!");
     window.location = "http://localhost/RuksharAhmad/";
        </script>';
}

       

        
?>





