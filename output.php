<?php
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
    $username = $_POST ["username"];
    $emaiL = $_POST ["email"];
    $password = $_POST ["password"];
    $confirmpass = $_POST ["confirmpass"];
   
   /* if(trim($username) == "" || empty($username))
    {
        echo "Username is empty";
    } else {
        echo "Username is: ". $_POST ["username"]."<br>";
    }
        */

    if(trim($password) == trim($confirmpass))
    {
        header("location: demo.php?success=Registration Successful");
    }else {
        header("location: demo.php?error=Mali Password mo beh!");
    }
    /*
    echo "Username: ". $_POST["username"]."<br>";
    echo "Email: ".$_POST["email"]."<br>";
    echo "Password: ".$_POST["password"]."<br>";
    echo "ConfirmPassword: ".$_POST["confirmpass"]."<br>";
   }
   else{
    echo "invalid method type";
*/
   }

?>
